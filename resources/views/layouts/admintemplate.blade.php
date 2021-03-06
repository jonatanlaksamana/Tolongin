

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard Adminn</title>

    <!-- Fontfaces CSS-->
    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">

<div class="page-wrapper">


    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="/images/icon/3.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="{{route('admin.panel')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard Admin</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin.table')}}">
                            <i class="fas fa-table"></i>Order Table</a>
                    </li>
                    <li class="has-sub"><a class="js-arrow" href="{{route('admin.users')}}"><i class="fa fa-handshake-o"></i>User Table</a> </li>
                    <li class="has-sub"><a class="js-arrow" href="{{route('admin.testimoni')}}"><i class="fa fa-quote-right"></i>Testimoni</a> </li>
                    <li class="has-sub"><a class="js-arrow" href="{{route('home')}}"><i class="fa fa-home"></i>Back To Home</a> </li>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-comment-more"></i>

                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <!-- INI BUAT TARO ADA MESSAGE ATAU GA BOI -->
                                            <p>no message</p>
                                        </div>
                                        <div class="mess__item">
                                            <!-- Kalau ada item -->
                                        </div>

                                        <div class="mess__footer">
                                            <a href="#">View all messages</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-email"></i>

                                    <div class="email-dropdown js-dropdown">





                                        <div class="email__footer">
                                            <a href="#">See all emails</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-notifications"></i>

                                    <div class="notifi-dropdown js-dropdown">



                                        <div class="notifi__footer">
                                            <a href="#">All notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    {{--<div class="image">--}}
                                        {{--<img src="/storage/{{$user->image}}"  />--}}
                                    {{--</div>--}}
                                    {{--<div class="content">--}}
                                        {{--<a class="js-acc-btn" href="#">{{$user->name}}</a>--}}
                                    {{--</div>--}}
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="images/icon/1.jpg" alt="JAKI" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <!-- INI BUAT NAMA ADMIN YA BOI -->
                                                    <a href="#">JAKI BABIK</a>
                                                </h5>
                                                <span class="email">jakiqontol@example.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>

                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="#">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        @yield('content')
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/vendor/slick/slick.min.js">
</script>
<script src="/vendor/wow/wow.min.js"></script>
<script src="/vendor/animsition/animsition.min.js"></script>
<script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="/js/mainn.js"></script>


</body>

</html>
<!-- end document-->
