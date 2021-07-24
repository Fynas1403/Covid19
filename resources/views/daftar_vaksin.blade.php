@extends('layout.template_2')
@section('title','Daftar Vaksin')
@section('container')
  <div class="col-md-16">
    <div class="card">
    <div class="p-3  bg-info text-white">
        <div class="header" align="center" >
            <br>
            <h1>Jadwal Vaksinasi Anda</h1>
            <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-syringe" aria-hidden="true"></i><b> Daftar Vaksinasi</b></a>
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

 <!-------POP UP DAFTAR VAKSIN------>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						        <h4 class="modal-title" id="myModalLabel" align="center">Daftar Vaksinasi</h4>
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
									
									<form action="{{ url('/daftar_vaksin/store') }}" method="post" enctype="multipart/formdata">
									{{ csrf_field()}}
										<div align="left">
                                        <div class="form-group" >
											<label for="tgl_vaksin">Tgl Vaksinasi :</label>
											<input type="date" placeholder="Tgl Pengaduan" class="form-control" id="tgl_vaksin" name="tgl_vaksin" required
											oninvalid="this.setCustomValidity('Tgl Vaksinasi Tidak Boleh Kosong')" oninput="setCustomValidity('')">
										</div>

                                        <div class="form-group" >
                                        <label for="jenis_vaksin">Pilih Jenis Vaksin:</label>
                                        <select name="jenis_vaksin" id="jenis_vaksin">
                                        <option value="Sinovac">Sinovac</option>
                                        <option value="AstraZeneca">AstraZeneca</option>
                                        <option value="Sinopharm">Sinopharm</option>
                                        <option value="Moderna">Moderna</option>
                                        <option value="Pfizer">Pfizer</option>
                                        <option value="Novavax">Novavax</option>
                                        </select>
                                        </div>

                                        <div class="form-group">
											Vaksinasi Ke- :
											<br>
												<div for="vaksin_ke" class="btn-group  btn-group-toggle " data-toggle="buttons">
													<label class="btn btn-default">
														<input type="radio"  id="vaksin_ke" name="vaksin_ke" value="1"> 1
													</label>
													<label class="btn btn-default">
														<input type="radio" id="vaksin_ke" name="vaksin_ke" value="2"> 2
													</label>
												</div>
										</div>
								<div class="form-group" align="center">
									<button type="reset" class="btn btn-default" ><b>Reset</b></button>
									<button type="button" class="btn btn-danger" data-dismiss="modal"><b>Close</b></button>
									<button class="btn btn-theme" type="submit"><b>Daftar</b></button>
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

		