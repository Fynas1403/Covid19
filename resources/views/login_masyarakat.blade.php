<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{url('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/style-responsive.css')}}" rel="stylesheet">
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
		  @if(Session::get('alert_message'))
    	<div class="alert alert-warning  ">
     		{{Session::get('alert_message')}}
    		</div>
    @endif
		      <form class="form-login" action="{{url('login_masyarakat/cek')}}" method="POST">
            {{ csrf_field()}}
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
					<BR>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
			</form>

		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" data-toggle="modal" href="#" data-target="#myModal">
		                    Create an account
		                </a>
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel" align="center">Create Your Account</h4>
						      </div>
						      <div class="modal-body">
							  @section('title','Masyarakat Create')
								@section('container')
							<section class="main-section">
								<div class="content">
									<hr>

									@if($errors->any())
										<div class="alert alert-warning  ">
											@foreach($errors->all() as $error)
												<li><strong>{{ $error }}</strong></li>
											@endforeach
										</div>
									@endif
									
									<form action="{{ url('/masyarakat/store') }}" method="post">
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
								</div>
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
				
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
		
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

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
