


<head>
  <title>Tolongin.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

 

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link href="/css/jasa.css" rel="stylesheet" >

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
   
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.timepicker.css">
  <script src="vendor/jquery/jquery.min.js"></script>


<script src="js/global.js"></script>

    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<style>
.fontlara {
  font-family: 'Roboto Mono', monospace;
  font-size: 15px;
  margin-right:10px;
  margin-top:30px;
  color:#ADD8E6;
}

.search{

height:70px;
width:500px;
margin-top:30px;
border-radius:7px;
border:1px solid #ADD8E6;
height:50px;
font-size: 15px;
}
.vl {
  border-left: 5px solid #ADD8E6;
  height: 50px;
  margin-top:30px;
  margin-left:20px;
}
.space{
padding : 10px;

}
.kiri{
padding-left:100px;

}
.glyphicon {
    font-size: 25px;
    color: gray;
    margin-left:50px;
    margin-top:40px;
}

</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar navbar-light">
<div class="logo">
            <a href="{{route('home')}}">
                <img src="/images/icon/3.png" alt="Cool Admin" width="280px" height="80px"/>
            </a>
        </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item "><input class="search"type="text" placeholder="        Search"></li>
 

                <div class="space"></div>
      <li class="nav-item">
      <a href="{{ route('jasa') }}" class="dropdown-item h1 fontlara">Daftarkan Jasa</a>
      </li>
  
  
      <div class="space"></div>
      <li class="nav-item dropdown">
        <a class="nav-link h1 fontlara" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kategori
        </a>
        <div class="dropdown-menu h2 fontlara" aria-labelledby="navbarDropdown">
          <a class="dropdown-item h2 fontlara" href="#">Business</a>
          <a class="dropdown-item h2 fontlara" href="#">Design</a>
          <a class="dropdown-item h2 fontlara" href="#">Programming And Tech</a>
          <a class="dropdown-item h2 fontlara" href="#">Digital Marketing</a>
          <a class="dropdown-item h2 fontlara" href="#">Video Animation</a>
          <a class="dropdown-item h2 fontlara" href="#">Writing and Translation</a>
          <div class="dropdown-divider fontlara"></div>
          <a class="dropdown-item h1 fontlara" href="#">Something else here</a>
        </div>
      </li>
      <div class="space"></div>
      <li class="nav-item">
      <a href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>
        </li>
      <div class="kiri"></div>
      <li class="nav-item">
      <div class="vl"></div>
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
</nav>

    
      <!-- AWAL NAV KU -->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
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
                    Authentication Links
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
</nav> -->
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


