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
                    <ul class="social">
                        <li><a href="{{ route('productzoom') }}"data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                        <li><a href="{{ route('productzoom') }}"data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="{{ route('productzoom') }}"data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">New</span>
                    <span class="product-discount-label">-10%</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">{{$jas->jasaName}}</a></h3>
                    <div class="price">
                        Rp {{$jas->harga}}
                      
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>
            @endforeach

        {{ $jasa->links() }}
</div>
</div>
@endsection
