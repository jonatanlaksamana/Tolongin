
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


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
 .nabrak{

  padding-top: 50px;
 }
 .nabrak2{

padding-top: 0px;
}
 h5 {
 
  font-size:30px;
  font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
  color:#282828;
  font-weight:bold;
 }
 h4{
  font-size:20px;
  font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
  color:#282828;

 }
 .buttoncheckout {
  background-color: pink;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
  font-size: 24px;
  margin: 4px 2px;
  cursor: pointer;
}
.lebar{
  width:500px;
  margin-left:200px;
}
  </style>

  </head>

<body>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{route('home')}}"><h5>Tolongin<h1></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active "><a href="{{route('home')}}" class="nav-link h1"><h4>Home</h4></a></li>
            <li class="nav-item h1 fontlara" ><a href="{{ route('product') }}"class="nav-link h1 fontlara"><h4>Jasa<h4></a></li>

            <li class="nav-item h1 fontlara" ><a href="{{ route('daftarjasa') }}"class="nav-link h1 fontlara"><h4>Daftarkan Jasa<h4></a></li>
	          <li class="nav-item h1 fontlara"><a href="{{ route('about') }}" class="nav-link h1 fontlara"><h4>About<h4></a></li>
            <li class="nav-item h1 fontlara"><a href="{{ route('cart') }}"class="nav-link h1 fontlara"><h4>Cart<h4></a></li>

</li>

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
                            <a class="nav-link h1 fontlara" href="{{ route('login') }}"><h4>Log In</h4></a>
                        </li>
                        @if (Route::has('register'))
                        <div class="space"></div>
                            <li class="nav-item">
                                <a class="nav-link h1 fontlara" href="{{ route('register') }}"><h4>Register</h4></a>
                            </li>
                        @endif
                    @else

            <li class="nav-item h1 fontlara" ><a href="{{URL::to('userprofile/' . $idUserLogin)}}"class="nav-link h1 fontlara">   <h4> Hi {{ Auth::user()->name }} !</h4></a></li>
            <li class="nav-item h1 fontlara">    <a  href="{{ route('logout') }}" class="nav-link h1 fontlara"
                                   onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                 <h4> {{ __('Logout') }} </h4>
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form></li>
             
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
              <h5 class="ftco-heading-2">Tolongin</h5>
              <h4>
                Join us!
</h4>
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
              <h5 class="ftco-heading-2">Menu</h5>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block"><h4>Shop</h4></a></li>
                <li><a href="#" class="py-2 d-block"><h4>About<h4></a></li>
                <li><a href="#" class="py-2 d-block"><h4>Journal</h4></a></li>
                <li><a href="#" class="py-2 d-block"><h4>Contact Us</h4></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h5 class="ftco-heading-2">Help</h5>
              <div class="d-flex">
                <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                  <li>
                    <a href="#" class="py-2 d-block"><h4>Returns &amp; Exchange</h4></a>
                  </li>
                  <li>
                    <a href="#" class="py-2 d-block"><h4>Terms &amp; Conditions <h4></a>
                  </li>
                  <li><a href="#" class="py-2 d-block"><h4>Privacy Policy</h4></a></li>
                  <li><a href="{{ route('contact') }}" class="py-2 d-block"><h4>Contact</h4></a></li>
                </ul>
               
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h5 class="ftco-heading-2">Have a Questions?</h5>
              <div class="block-23 mb-3">
                <ul>
                  <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text"
                      >UNPAR Bandung</span
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