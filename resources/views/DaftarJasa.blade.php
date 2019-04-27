@extends('layouts/app')

@section('content')
<div class="nabrak2"></div>
<div class="hero-wrap hero-bread" style="background-image: url('images/daftarjasa.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/daftar.png);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		        
						<button id="aboutbutton"type="button" visibility="hidden">Join Us</button>
		       
		        
		        </div>
	        </div>
        </div>
    	</div>
    </section>
<div class="container-contact100 " background-color="#f8f7ed">
      <div class="wrap-contact100">


        <form class="contact100-form validate-form" action="{{route('addJasa')}}" method="post"enctype='multipart/form-data'>
        @csrf
          <span class="contact100-form-title">

          <h5>  Daftarkan jasa mu!
</h5>

          <div
            class="wrap-input100 validate-input"
            data-validate="Please enter your name"
          >
            <input
              class="input100"
              type="text"
              name="jasaName"
              placeholder="Masukan nama jasamu!"
            />
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Harga"
          >
            <input
              class="input100"
              type="text"
              name="harga"
              placeholder="Harga"
            />
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Upload image"
          >
          <input placeholder="Ganti Profile" type="file" name="gantifoto" accept="image/*">
         
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Please enter your message"
          >
            <textarea
              class="input100"
              name="message"
              placeholder="Deskripsi"
            ></textarea>
            <span class="focus-input100"></span>
          </div>


          <div class="container-contact100-form-btn">
            <button class="contact100-form-btn">
              <span>
                <i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
                Send
              </span>
            </button>
          </div>
        </form>
      </div>
    </div>

    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main2.js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
@endsection
