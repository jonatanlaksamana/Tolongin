


<head>
  <title>Tolongin.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

              
                @auth
                <li class="nav-item active"><a href="{{URL::to('userprofile/' . $idUserLogin)}}" class="nav-link">Profile</a></li>
                    @if($user->member == "admin")
                        <li class="nav-item active"><a href="{{URL::to('userprofile/' . $idUserLogin)}}" class="nav-link">Profile</a></li>
                        <li class="nav-item active"><a href="{{route('admin.panel')}}" class="nav-link">Admin</a></li>
                    @endif
                @endauth






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
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Tentang Kami</a></li>
                    <li><a href="{{ route('login') }}" class="py-2 d-block">Login</a></li>
                    <li><a href="{{ route('register')}}" class="py-2 d-block">Register</a></li>
                    <li><a href="#" class="py-2 d-block">Kegiatan Kami</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Beli</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Cara Belanja</a></li>
                    <li><a href="#" class="py-2 d-block">Pembayaran</a></li>
                    <li><a href="#" class="py-2 d-block">Pengembalian Dana</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Jual</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Cara Berjualan Online</a></li>
                    <li><a href="#" class="py-2 d-block">Penarikan Dana</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Bantuan</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block">Syarat dan Ketentuan</a></li>
                    <li><a href="#" class="py-2 d-block">Kebijakan Privasi</a></li>
                    <li><a href="#" class="py-2 d-block">Komplain Pesanan</a></li>
                    <li><a href="#" class="py-2 d-block">Hubungi Kami</a></li>
                    <li><a href="#" class="py-2 d-block">Panduan Keamanan</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                  <h2 class="ftco-heading-2">Ikuti Kami</h2>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li><a href="#"><i class="fab fa-twitter" style="font-size:36px; color:lightblue;"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook" style="font-size:36px; color:darkblue;"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram" style="font-size:36px; color:blue;"></i></a></li>
                  </ul>
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


