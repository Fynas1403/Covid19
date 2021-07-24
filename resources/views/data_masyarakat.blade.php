@extends('layout.template_1')
@section('title','Masyarakat')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Data Masyarakat</h1>
			@if(Session::get('level')=='petugas')
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-user-plus" aria-hidden="true"></i><b> Tambah Masyarakat</b></a>
			@endif
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
                    <th scope="col"><b>NO</th>
                    <th scope="col"><b>NIK</th>
                    <th scope="col"><b>NAMA</th>
                    <th scope="col"><b>NO TELP</th>
                    <th scope="col"><b>USERNAME</th>
					@if(Session::get('level')=='petugas')
					<th scope="col"><b>OPSI</th>
					@endif
                </tr>
                </thead>
				@php $no=0; @endphp
                @foreach($datas as $data)
                @php $no++; @endphp
                <tr class="table-info">
                    <td><b>{{$no}}</td>
                    <td>{{$data->nik}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->username}}</td>
					@if(Session::get('level')=='petugas')
                    <td>
                    <a href="{{url('/data_masyarakat/hapus/'.$data->nik)}}" class="btn btn-danger" 
                    onclick="return confirm('Apakah anda yakin?')"><i class="far  fa-trash-alt"></i></a></td>
                </tr>
				        @endif
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
 @stop
 <!-------POP UP TAMBAH MASYARAKAT------>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel" align="center">Tambahkan Masyarakat</h4>
						      </div>
						      <div class="modal-body">

							<section class="main-section">
								<div class="content">
									<hr>

									@if($errors->any())
										<div class="alert alert-danger">
											@foreach($errors->all() as $error)
												<li><strong>{{ $error }}</strong></li>
											@endforeach
										</div>
									@endif
									
									<form action="{{ url('/tambah_masyarakat/store') }}" method="post">
									{{ csrf_field()}}
										<div align="left">
                                        <div class="form-group" >
											<label for="nik">NIK :</label>
											<input type="text" placeholder="NIK" class="form-control" id="nik" name="nik" 
											onkeypress="return event.charCode >= 48 && event.charCode <=57"required
											oninvalid="this.setCustomValidity('NIK Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group" >
											<label for="nama">Nama :</label>
											<input type="text" placeholder="Nama" class="form-control" id="nama" name="nama" required
											oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="nohp">No Telp :</label>
											<input type="text" placeholder="No Telp" class="form-control" id="telp" name="telp" 
											onkeypress="return event.charCode >= 48 && event.charCode <=57"required
											oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="username">Username :</label>
											<input type="text" placeholder="Username" class="form-control" id="username" name="username" required
											oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="password">Password :</label>
											<input type="password" placeholder="Password" class="form-control" id="password" name="password" required
											oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
											<label><input type="checkbox" onclick="myFunction()" > Show Password</label>
										</div>
										
								<div class="form-group" align="center">
									<button type="reset" class="btn btn-default" ><b>Reset</b></button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Close</b></button>
									<button class="btn btn-theme" type="submit"><b>Sign Up</b></button>
								</div>
								
								</form>
						    </div>
							</section>
							</div>
						</div>
		            </div>
		        </div> 

	<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
		<script>
		function myFunction() {
		var x = document.getElementById("password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		}
		</script>