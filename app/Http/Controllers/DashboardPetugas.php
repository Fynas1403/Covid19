<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelPetugas;
class DashboardPetugas extends Controller
{
    public function __construct()
    {
      $this->middleware('cek_login_petugas');
    }

    public function index_petugas()
    {
      $data['datas']=ModelPetugas::all();
      return view('dashboard_petugas');
    }
    
}
