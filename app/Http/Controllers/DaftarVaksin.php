<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\ModelVaksin;
class DaftarVaksin extends Controller
{
    public function index()
    {   
        $data['datas']=ModelVaksin::join('daftar_vaksin','daftar_vaksin.nik','masyarakat.nik')->get();
        return view('daftar_vaksin',$data);
    }
}
