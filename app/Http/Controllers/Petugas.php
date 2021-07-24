<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use PDF;
use App\ModelPetugas;
use App\ModelVaksin;
use App\ModelMasyarakat;
use Validator;
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

    public function data_masyarakat()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('/data_masyarakat',$data);
    }
    public function masyarakat_store(Request $request)
    {
        ModelMasyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'username' => $request->username,
            'password' => md5($request->password)
        ]);
        return redirect()->action('Petugas@data_masyarakat')->with('alert_message', 'Berhasil Menambahkan Masyarakat!');
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
        return redirect()->action('Petugas@index')->with('alert_message', 'Berhasil Mengubah Petugas!');
    }

    public function hapus($id)
    {
        ModelPetugas::where('id_petugas', $id)->delete();

        return redirect()->action('Petugas@index')->with('alert_message', 'Berhasil Menghapus Petugas!');
    }

    public function hapus_masyarakat($id)
    {
        ModelMasyarakat::where('nik', $id)->delete();

        return redirect()->action('Petugas@data_masyarakat')->with('alert_message', 'Berhasil Menghapus Masyarakat!');
    }

}
