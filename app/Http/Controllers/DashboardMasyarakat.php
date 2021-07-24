<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelMasyarakat;
class DashboardMasyarakat extends Controller
{
    public function __construct()
    {
      $this->middleware('cek_login_masyarakat');
    }
    public function index_masyarakat()
    {
      $data['datas']=ModelMasyarakat::all();
      return view('Dashboard_Masyarakat');
    }
}
