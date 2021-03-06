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
		      <form class="form-login" action="{{url('login_petugas/cek')}}" method="POST">
            {{ csrf_field()}}
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
					<br>
		            <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
				</form>
		        </div>
				
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
		

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
