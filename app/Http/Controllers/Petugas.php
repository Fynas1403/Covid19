<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\ModelPetugas;
use App\ModelVaksin;
use Validator;
use Alert;
class Petugas extends Controller
{

    public function daftar_pasien()
    {
        $data['datas']=ModelVaksin::join('masyarakat','masyarakat.nik','daftar_vaksin.nik')->get();
        return view('daftar_pasien',$data);
    }

    public function index()
    {
      $data['datas']=ModelPetugas::all();
      return view('petugas',$data);
    }

    public function store(Request $request)
    {
        ModelPetugas::create([
            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
        ]);

        return redirect()->action('Petugas@index')->with('alert_message', 'Berhasil Menambahkan Petugas!');
    }

    public function edit($id)
    {
        $data = ModelPetugas::where('id_petugas', $id)->get();
        return view('petugas_edit', compact('data'));
    }

    public function update(Request $request)
    {
        ModelPetugas::where('id_petugas', $request->id)->update([

            'nama_petugas' => $request->nama_petugas,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password),
            'level' => $request->level
            
        ]);
        Alert::toast('Berhasil Merubah Petugas!','success');
        return redirect()->action('Petugas@index');
    }

    public function hapus($id)
    {
        ModelPetugas::where('id_petugas', $id)->delete();

        return redirect()->action('Petugas@index')->with('alert_message', 'Berhasil Menghapus Petugas!');
    }

}
