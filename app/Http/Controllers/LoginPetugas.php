<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ModelPetugas;
use Session;
use Validator;
class LoginPetugas extends Controller
{
    public function cek(Request $req)
    {
      $this->validate($req,[
        'username'=>'required',
        'password'=>'required'
      ]);
      $proses=ModelPetugas::where('username',$req->username)
                              ->where('password',md5($req->password));
      if($proses->count()>0){
        $data=$proses->first();
        Session::put('id_petugas',$data->id_petugas);
        Session::put('nama_petugas',$data->nama_petugas);
        Session::put('username',$data->username);
        Session::put('password',$data->password);
        Session::put('telp',$data->telp);
        Session::put('level',$data->level);
        Session::put('login_status_petugas',true);
        return redirect('/petugas');
      } else {
        return redirect('login_petugas')->with('alert_message', 'Username dan Password Tidak Cocok!');
      }
    }
    
    public function logout()
    {
      Session::flush();
      return redirect('login_petugas');
    }
}
