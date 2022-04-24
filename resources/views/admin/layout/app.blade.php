<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="{{ asset('adminpanel/vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminpanel/vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <link href="{{ asset('adminpanel/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpanel/css/style.css') }}" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            Assalawm A`leykum {{ Auth::user()->name }}
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{ route('admin.logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();
                                    ">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                        <form action="{{ route('admin.logout') }}" id="logout-form" class="d-none" method="post">@csrf</form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        @include('admin.includes.sidebar')



        @yield('content')




        <div class="footer">
            <div class="copyright text-center">
                <p>
                    <h4>TABLETKA.UZ</h4>
                </p>
            </div>
        </div>



    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('adminpanel/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('adminpanel/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('adminpanel/js/custom.min.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('adminpanel/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('adminpanel/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('adminpanel/vendor/gaugeJS/dist/gauge.min.js') }}"></script>


    <!-- Owl Carousel -->
    <script src="{{ asset('adminpanel/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('adminpanel/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('adminpanel/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('adminpanel/js/dashboard/dashboard-1.js') }}"></script>

</body>

</html>