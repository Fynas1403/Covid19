@extends('layout.template_1')
@section('title', "Petugas Edit")
@section('container')

<div class="container">
<div class="row">
<div class="col-md-16">
<div class="p-3  bg-info text-white">

<section class="main-section">
    <div class="content">
        <h1 align="center">Edit Petugas</h1>
        <hr>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li><strong>{{ $error }}</strong></li>
                @endforeach
            </div>
        @endif
									
									@foreach($data as $datas)
									<form action="{{ url('/petugas/update') }}" method="post">
									{{ csrf_field()}}
									
										<input type="hidden" name="id" value="{{ $datas->id_petugas }}">

										<div class="form-group" >
											<label for="nama_petugas">Nama :</label>
											<input type="text" placeholder="Nama" class="form-control" id="nama_petugas" name="nama_petugas" value="{{$datas->nama_petugas}}" required
											oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="nohp">No Telp :</label>
											<input type="text" placeholder="No Telp" class="form-control" id="telp" name="telp" 
											onkeypress="return event.charCode >= 48 && event.charCode <=57" value="{{$datas->telp}}" required
											oninvalid="this.setCustomValidity('Nomor Telepon Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="username">Username :</label>
											<input type="text" placeholder="Username" class="form-control" id="username" name="username" value="{{$datas->username}}" required
											oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

										<div class="form-group">
											<label for="password">Password :</label>
											<input type="password" placeholder="Password" class="form-control" id="password" name="password" value="{{$datas->password}}" required
											oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')" oninput="setCustomValidity('')">
											<label><input type="checkbox" onclick="myFunction()" > Show Password</label>
											
										</div>

                                        <div class="form-group">
											Level :
											<br>
												<div for="level" class="btn-group  btn-group-toggle " data-toggle="buttons">
													<label class="btn btn-default">
														<input type="radio"  id="level" name="level" value="admin" autocomplete="off" checked> ADMIN
													</label>
													<label class="btn btn-default">
														<input type="radio" id="level" name="level" value="petugas" autocomplete="off"> PETUGAS
													</label>
												</div>
										</div>
                                        
								<div class="form-group" align="center">
									<button type="reset" class="btn btn-default" ><b>Reset</b></button>
									<a href="{{url('/data_petugas')}}"><button type="button" class="btn btn-danger"><b>Cancel</b></button></a>
									<button class="btn btn-theme" type="submit"><b>Update</b></button>
								</div>
								
								</form>
								@endforeach
						    </div>
							</section>
	  </div>
    </div>
  </div>
</div>
@endsection

	<!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
		
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
