<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMasyarakat;
use Session;
use Validator;

class LoginMasyarakat extends Controller
{
  public function cek(Request $req)
  {
    $this->validate($req,[
      'username'=>'required',
      'password'=>'required'
    ]);
    $proses=ModelMasyarakat::where('username',$req->username)
                            ->where('password',md5($req->password));
    if($proses->count()>0){
      $data=$proses->first();
      Session::put('nik',$data->nik);
      Session::put('nama',$data->nama);
      Session::put('username',$data->username);
      Session::put('password',$data->password);
      Session::put('telp',$data->telp);
      Session::put('login_status_masyarakat',true);
      return redirect('/masyarakat');
    } else {
      return redirect('login_masyarakat')->with('alert_message', 'Username dan Password Tidak Cocok!');
    }
  }
  
  public function logout()
  {
    Session::flush();
    return redirect('login_masyarakat');
  }
  
}