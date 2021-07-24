<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Validator;
use App\ModelVaksin;
class DaftarVaksin extends Controller
{
    public function index()
    {   
        $data['datas']=ModelVaksin::join('masyarakat','masyarakat.nik','daftar_vaksin.nik')->get();
        return view('daftar_vaksin',$data);
    }

    public function store(Request $request)
    {
        if(Session()->has('nik')){

            ModelVaksin::create([
                'nik' => Session()->get('nik'),
                'tgl_vaksin' => $request->tgl_vaksin,
                'jenis_vaksin' => $request->jenis_vaksin,
                'vaksin_ke' => $request->vaksin_ke
            ]);
        }
        return redirect()->action('DaftarVaksin@index')->with('alert_message', 'Selamat, Anda Sudah Berhasil Mendaftar Vaksinasi Covid-19 Ke-'.$request->vaksin_ke);
    }
    public function hapus($id)
    {
        ModelVaksin::where('id_vaksin', $id)->delete();
        return redirect()->action('DaftarVaksin@index')->with('alert_message', 'Terimakasih, Anda Telah Melakukan Vaksinasi');
    }
}
