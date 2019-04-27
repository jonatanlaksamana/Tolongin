@extends('layouts/app')

@section('content')
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

<div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form">

          <span class="contact100-form-title">
           Daftarkan jasa mu!
          </span>

          <div
            class="wrap-input100 validate-input"
            data-validate="Please enter your name"
          >
            <input
              class="input100"
              type="text"
              name="vinson"
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
              name="email"
              placeholder="E-mail"
            />
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Upload image"
          >
          <form action="{{route('updateFoto')}}" method="post" enctype='multipart/form-data'>
     
            <input placeholder="Ganti Profile" type="file" name="gantifoto" accept="image/*">
          
      </form>
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
