@extends('layout.template_2')
@section('title','Daftar Vaksin')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Jadwal Vaksinasi Anda</h1>
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i><b> Buat Pengaduan</b></a>
    </div>    
	
<!---->
        <div class="body">
        <br><br><br><br><br><br><br><br><br>
        @if(Session::get('alert_message'))
    	<div class="alert alert-warning  ">
     		{{Session::get('alert_message')}}
    		</div>
    @endif
            <table class="table table-hover table-striped">
            <thead class="thead-dark">
                <tr align="center">
                    <th scope="col"><b>ID</th>
                    <th scope="col"><b>NIK</th>
                    <th scope="col"><b>TGL VAKSINASI</th>
                    <th scope="col"><b>JENIS VAKSIN</th>
                    <th scope="col"><b>VAKSINASI KE-</th>
                    <th scope="col"><b>OPSI</th>
                </tr>
                </thead>
				@php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info">
                    <td><b>{{$data->id_vaksin}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->tgl_vaksin}}</td>
					<td>{{$data->jenis_vaksin}}</td>
                    <td>{{$data->vaksin_ke}}</td>
                    <td>
                    <a href="{{url('/daftar_vaksin/hapus/'.$data->id_vaksin)}}" class="btn btn-success" 
                    onclick="return confirm('Apakah anda yakin?')">Selesai Vaksin</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
 @stop

