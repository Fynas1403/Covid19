@extends('layout.template_1')
@section('title','Daftar Vaksin')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Jadwal Vaksinasi Masyarakat</h1>
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
                </tr>
                @endforeach
            </table>
        </div>
   </div>  
   </div>
 </div>
 @stop



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

		