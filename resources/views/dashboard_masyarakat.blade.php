@extends('layout.template_2')
@section('title','Dashboard')
@section('container')
<div>
<center>
<h1><b>Segera Vaksinkan Diri Anda</b></h1>
</center>
</div>

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 700px;
  position: relative;
  margin: auto;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="assets/img/vaksin1.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="assets/img/vaksin2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="assets/img/vaksin3.jpg" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<br><br>
<p>
Pelaksanaan vaksinasi COVID-19 bertujuan untuk memutus rantai penularan penyakit dan menghentikan wabah COVID-19. Vaksin COVID-19 bermanfaat untuk memberi perlindungan tubuh agar tidak jatuh sakit akibat COVID-19 dengan cara menimbulkan atau menstimulasi kekebalan spesifik dalam tubuh dengan pemberian vaksin.
</p>
<p>
  Pelayanan vaksinasi COVID-19 dilakukan oleh dokter, perawat atau bidan yang memiliki kompetensi dan dilaksanakan di Fasilitas Pelayanan Kesehatan milik Pemerintah Pusat, Pemerintah Daerah Provinsi, Pemerintah Daerah Kabupaten/Kota atau milik masyarakat/swasta yang memenuhi persyaratan yang sudah ditentukan oleh Kementerian Kesehatan Indonesia.
</p>
<p>
Ayo berpartisipasi dalam program vaksinasi COVID-19 ini untuk melindungi Anda dan keluarga Anda dari COVID-19. Jalankan 3M, menggunakan masker, menjaga jarak, dan mencuci tangan untuk kebaikan kita semuanya.
</p>


@endsection