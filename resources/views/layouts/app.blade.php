

<head>
  <title>Tolongin.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
      <!-- AWAL NAV KU -->
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}">TOLONGIN.com</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                @foreach( $category as $item)
                  <a class="dropdown-item" href="shop.html">{{$item->cat}}</a>
                @endforeach
               
                </div>
              </li>
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
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

            </ul>
          </div>
        </div>
      </nav>
      <!-- AKHIRNAV KU -->


        <main class="py-4">
            @yield('content')
        </main>





        <footer class="ftco-footer bg-light ftco-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Tolongin</h2>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                  <h2 class="ftco-heading-2">Menu</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Kategori</a></li>
                    <li><a href="{{ route('login') }}" class="py-2 d-block">Log in</a></li>
                    <li><a href="{{ route('register')}}" class="py-2 d-block">Sign Up</a></li>
                    <li><a href="#" class="py-2 d-block">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">HELP INI ISI BRP</h2>
                  <div class="d-flex">
    	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
    	                <li><a href="#" class="py-2 d-block">Cara daftar</a></li>
    	                <li><a href="#" class="py-2 d-block">Cara Pakai Jasa</a></li>
    	                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
    	                <li><a href="#" class="py-2 d-block">Pembayaran</a></li>
    	              </ul>
    	              <ul class="list-unstyled">
    	                <li><a href="#" class="py-2 d-block">FAQs</a></li>
    	                <li><a href="#" class="py-2 d-block">Contact</a></li>
    	              </ul>
    	            </div>
                </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-12 text-center">


              </div>
            </div>
          </div>
        </footer>
      </body>

