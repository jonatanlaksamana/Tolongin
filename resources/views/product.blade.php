@extends('layouts/app')

@section('content')

<div class="nabrak2"></div>

<div class="hero-wrap hero-bread" style="background-image: url('images/product.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

		<div class="container">
    <div class="nabrak"></div>
    <div class="row">
        @foreach($jasa as $jas)
        <div class="col-md-3 col-sm-6">
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
                    <form action="{{url('/addcart/' . $jas->id)}}" method="post">
                        @csrf
                        <button class="btn btn-success"> Add To Cart</button>
                    </form>
                </div>
            </div>
        </div>
            @endforeach


</div>
            {{ $jasa->links() }}
</div>
@endsection
