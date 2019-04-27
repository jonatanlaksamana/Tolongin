@extends('layouts/app')

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/aboutus.png');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/aboutbanner.png);">
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
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
                
  <div class="column">
  <!-- <img class="img-fluid" src="images/product-1.jpg" alt="Colorlib Template">
    						 -->
  </div>
  <div class="column">
  <h2 class="text-lg-center font-weight-light ">We Believe In</h2>
  <h1 class="text-xl-center font-weight-bold">Action. Community. Quality.</h1>
  <h2 class="text-lg-center font-weight-light">
At Fiverr, it’s our mission to grow and cultivate the world’s largest digital marketplace, a place where people can find and purchase any service they need, and build any business they dream. As an employee, your work is inspired by the success of our users and the celebration of your own personal growth. Join us.</h2>
  </div>
 

        </div>
      </div>
    </section>

    @endsection