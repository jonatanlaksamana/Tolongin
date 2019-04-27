@extends('layouts/app')

  @section('content')


		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/images/banner.png" alt="First slide">
    </div>
    <div class="carousel-item">

      <img class="d-block w-100" src="/images/banner2.png"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/images/banner3.png"  alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
						<a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section-bold mb-4 mt-md-5">
	          	<div class="ml-md-0">
		            <h2 class="mb-4">Why us?</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>At Tolongin, it’s our mission to grow and cultivate the world’s largest digital marketplace, a place where people can find and purchase any service they need, and build any business they dream. As an employee, your work is inspired by the success of our users and the celebration of your own personal growth. Join us.</p>
							<div class="row ftco-services">
			          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services">
			              <div class="icon d-flex justify-content-center align-items-center mb-4">
			            		<span class="flaticon-002-recommended"></span>
			              </div>
			              <div class="media-body">
			                <h3 class="heading">Refund Policy</h3>
			                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
			              </div>
			            </div>      
			          </div>
			          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services">
			              <div class="icon d-flex justify-content-center align-items-center mb-4">
			            		<span class="flaticon-001-box"></span>
			              </div>
			              <div class="media-body">
			                <h3 class="heading">We're always here for you</h3>
			                <p>Tolongin is here for you, anything from answering any questions to resolving any issues, at any time.</p>
			              </div>
			            </div>    
			          </div>
			          <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services">
			              <div class="icon d-flex justify-content-center align-items-center mb-4">
			            		<span class="flaticon-003-medal"></span>
			              </div>
			              <div class="media-body">
			                <h3 class="heading">Superior Quality</h3>
			                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
			              </div>
			            </div>      
			          </div>
			        </div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Get Inspired With Projects Made By Our Freelancers</h2>
            <p>Top Jasa by Our Customers</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">

				@foreach($jasas as $jasa)
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">
    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/' . $jasa->image)}}" alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">{{$jasa->jasaName}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price">{{$jasa->harga}}</p>
		    					</div>
		    				
	    					</div>
	    				
    					</div>
    				</div>
    			</div>
				@endforeach

    			</div>
    				
    			</div>
    		</div>
    	</div>
    </section>

 
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/probanner.png);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		        
						<button id="probutton"type="button" class="">Try Pro</button>
		       
		        
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Jasa</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($jasas  as $jas)
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="product">

    					<a href="#" class="img-prod"><img class="img-fluid" src="{{asset('storage/' . $jasa->image)}}" alt="Colorlib Template">
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 px-3">
    						<h3><a href="#">Floral {{$jas->jasaName}}</a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="price-sale">Rp {{$jas->harga}}</span></p>

		    					</div>
{{--		    					<div class="rating">--}}
{{--	    							<p class="text-right">--}}
{{--	    								<a href="#"><span class="ion-ios-star-outline"></span></a>--}}
{{--	    								<a href="#"><span class="ion-ios-star-outline"></span></a>--}}
{{--	    								<a href="#"><span class="ion-ios-star-outline"></span></a>--}}
{{--	    								<a href="#"><span class="ion-ios-star-outline"></span></a>--}}
{{--	    								<a href="#"><span class="ion-ios-star-outline"></span></a>--}}
{{--	    							</p>--}}
{{--	    						</div>--}}
	    					</div>
    						<p class="bottom-area d-flex px-3">
                            <form action="{{url('/addcart/' . $jas->id)}}" method="post">
                                @csrf
                                <button  class="add-to-cart text-center py-2 mr-1"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></button>
                            </form>
    						</p>
    					</div>
    				</div>
    			</div>
                @endforeach
    		</div>
    	</div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>

        </div>
{{--          <div class="row">--}}
{{--              <div class="col-lg-4 col-md-4">--}}
{{--                  a--}}
{{--              </div>--}}
{{--              <div class="col-lg-4 col-md-4">--}}
{{--                  a--}}
{{--              </div>--}}
{{--              <div class="col-lg-4 col-md-4">--}}
{{--                  a--}}
{{--              </div>--}}
{{--          </div>--}}

      </div>
    </section>
		<hr>

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>



    @endsection
