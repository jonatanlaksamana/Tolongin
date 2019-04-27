@extends('layouts/app')

@section('content')
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}



a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}


</style>
<div class="nabrak2"></div>
<div class="hero-wrap hero-bread" style="background-image: url('images/profile.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
   <div class="nabrak"></div>
   <div class="card">
  <img src="images/person_1.jpg" alt="John" style="width:100%">
  <h1>John Doe</h1>
  <p class="title">CEO & Founder, Example</p>
  <p>Harvard University</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
<div class="nabrak"></div>
   <div class="lebar">
       <h1>Tabel Order</h1>
   <table class="table table-striped">
  <thead>
    <tr>




      <th scope="col">Penyedia Jasa</th>
      <th scope="col">Nama Jasa</th>
      <th scope="col">Harga</th>
        <th>Status</th>

    </tr>
  </thead>
  <tbody>
  @foreach($order as $ord)
    <tr>

      <th scope="row">{{$ord->name}}</th>
      <td>{{$ord->jasaName}}</td>
      <td>{{$ord->harga}}</td>
        <td>On Progress</td>

    </tr>
      @endforeach

  </tbody>
</table>

</div>


<div class="lebar">
       <h1>Daftar Jasa</h1>
    <div class="row">
        @foreach($jasa as $jas)
        <div class="col-lg-4">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="{{asset('storage/' . $jas->image)}}">
                        <img class="pic-2" src="{{asset('storage/' . $jas->image)}}">
                    </a>
{{--                    <span class="product-new-label">New</span>--}}
{{--                    <span class="product-discount-label">-10%</span>--}}
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$jas->jasaName}}</a></h3>
                    <div class="price">
                        Rp {{$jas->harga}}

                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>



        </div>


</div>


