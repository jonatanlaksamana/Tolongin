
<head>
  <title>Tolongin.com</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet"  href="css/util2.css" />
    <link rel="stylesheet" href="css/main2.css" />
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    
<style>
 #probutton{
   margin-top: 350px;
   background-color: #8A2BE2;
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 32px;
  margin-left:-100px;
  border-radius: 50px;
 }
 #aboutbutton{
   margin-top: 350px;
   background-color: #8A2BE2;
  border: none;
  color: white;
  padding: 20px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 32px;
  margin-left:-100px;
  border-radius: 50px;
  visibility: hidden;
 }
  </style>

  </head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}">Tolongin</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active "><a href="{{route('home')}}" class="nav-link h1 fontlara">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('product') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item h1 fontlara" href="{{ route('product') }}">Shop</a>
                <a class="dropdown-item h1 fontlara" href="{{ route('productzoom') }}">Single Product</a>
                <a class="dropdown-item h1 fontlara" href="{{ route('cart') }}">Cart</a>
                <a class="dropdown-item h1 fontlara" href="{{ route('checkout') }}">Checkout</a>
              </div>
            </li>
            <li class="nav-item h1 fontlara" ><a href="{{ route('daftarjasa') }}"class="nav-link h1 fontlara">Daftarkan Jasa</a></li>
	          <li class="nav-item h1 fontlara"><a href="{{ route('about') }}" class="nav-link h1 fontlara">About</a></li>
	          <li class="nav-item h1 fontlara"><a href="{{ route('contact') }}"class="nav-link h1 fontlara">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart.html" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

     <!-- Authentication Links -->
     @auth

               @if($user->member == "admin")
                   <li class="nav-item  h1 fontlara"><a href="{{URL::to('userprofile/' . $idUserLogin)}}" >Profile</a></li>
                   <li class="nav-item h1 fontlara"><a href="{{route('admin.panel')}}" class="nav-link h1">Admin</a></li>
               @endif

                @endauth

     @guest
     <div class="space"></div>
                        <li class="nav-item">
                            <a class="nav-link h1 fontlara" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <div class="space"></div>
                            <li class="nav-item">
                                <a class="nav-link h1 fontlara" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle h1 fontlara" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} 
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{URL::to('userprofile/' . $idUserLogin)}}" class="dropdown-item h1 fontlara">Profile</a>
                            
                                <a class="dropdown-item h1 fontlara" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                             
                          </div>
                          
                      </li>
                  @endguest

	        </ul>
	      </div>
	    </div>
	  </nav>
   
 
            @yield('content')
  
            <footer class="ftco-footer bg-light ftco-section">
      <div class="container">
        <div class="row">
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel">
                <span class="ion-ios-arrow-up"></span>
              </div>
            </a>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Winkel</h2>
              <p>
                Far far away, behind the word mountains, far from the countries
                Vokalia and Consonantia.
              </p>
              <ul
                class="ftco-footer-social list-unstyled float-md-left float-lft mt-5"
              >
                <li class="ftco-animate">
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li class="ftco-animate">
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Shop</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Journal</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Help</h2>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li>
                    <a href="#" class="py-2 d-block">Shipping Information</a>
                  </li>
                  <li>
                    <a href="#" class="py-2 d-block">Returns &amp; Exchange</a>
                  </li>
                  <li>
                    <a href="#" class="py-2 d-block">Terms &amp; Conditions</a>
                  </li>
                  <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                </ul>
                <ul class="list-unstyled">
                  <li><a href="#" class="py-2 d-block">FAQs</a></li>
                  <li><a href="#" class="py-2 d-block">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >203 Fake St. Mountain View, San Francisco, California,
                      USA</span
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-phone"></span
                      ><span class="text">+2 392 3929 210</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><span class="icon icon-envelope"></span
                      ><span class="text">info@yourdomain.com</span></a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </footer>
      </body>