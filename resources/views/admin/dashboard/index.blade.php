<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('adminAsset')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('adminAsset')}}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{asset('adminAsset')}}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/header-colors.css" rel="stylesheet" />

    <title>Dashboard</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    <header class="top-header">
        <nav class="navbar navbar-expand-lg ">
            <div class="mobile-toggle-icon d-xl-none">
                <i class="bi bi-list"></i>
            </div>
            <div class="top-navbar d-none d-xl-block">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('new.blog')}}">Add Blog</a>
                    </li>

                </ul>
            </div>

            <div class="top-navbar-right  navbar-expand-sm ms-auto">
                <ul class="navbar-nav align-items-center ">
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                            <div class="user-setting d-flex align-items-center gap-1">
                                <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-1.png" class="user-img" alt="">
                                <div class="user-name d-none d-sm-block">Admin</div>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end ">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('adminAsset')}}/assets/images/avatars/avatar-1.png" alt="" class="rounded-circle" width="60" height="60">
                                        <div class="ms-9">
                                            <h6 class="mb-0 dropdown-user-name">Anonymous</h6>
                                            <small class="mb-0 dropdown-user-designation text-secondary">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>


                            <li>
                                <a class="dropdown-item" href="index2.html">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-speedometer"></i></div>
                                        <div class="setting-text ms-3"><span>Dashboard</span></div>
                                    </div>
                                </a>
                            </li>

                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="" onclick="event.preventDefault();document.getElementById('logoutForm').submit();">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Logout</span></div>
                                    </div>
                                </a>

                                <form action="{{route('logout')}}" method="post" id="logoutForm">
                                    @csrf

                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <!--end top header-->

    <!--start sidebar -->
{{--    <aside class="sidebar-wrapper">--}}
{{--        <div class="iconmenu">--}}
{{--            <div class="nav-toggle-box">--}}
{{--                <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>--}}
{{--            </div>--}}
{{--            <ul class="nav nav-pills flex-column">--}}
{{--                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">--}}
{{--                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>--}}
{{--                </li>--}}

{{--            </ul>--}}
{{--        </div>--}}
{{--        <div class="textmenu">--}}
{{--            <div class="brand-logo">--}}
{{--                <img src="{{asset('adminAsset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>--}}
{{--            </div>--}}
{{--            <div class="tab-content">--}}
{{--                <div class="tab-pane fade show" id="pills-dashboards">--}}
{{--                    <div class="list-group list-group-flush">--}}
{{--                        <div class="list-group-item">--}}
{{--                            <div class="d-flex w-100 justify-content-between">--}}
{{--                                <h5 class="mb-0">Dashboards</h5>--}}
{{--                            </div>--}}
{{--                            <small class="mb-0">Some placeholder content</small>--}}
{{--                        </div>--}}
{{--                        <a href="index.html" class="list-group-item"><i class="bi bi-cart-plus"></i>e-Commerce</a>--}}
{{--                        <a href="index2.html" class="list-group-item"><i class="bi bi-wallet"></i>Sales</a>--}}
{{--                        <a href="index3.html" class="list-group-item"><i class="bi bi-bar-chart-line"></i>Analytics</a>--}}
{{--                        <a href="index4.html" class="list-group-item"><i class="bi bi-archive"></i>Project Management</a>--}}
{{--                        <a href="index5.html" class="list-group-item"><i class="bi bi-cast"></i>CMS Dashboard</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </aside>--}}

    <!--start sidebar -->



    <main class="page-content">


        @yield('content')

   @include('admin.dashboard.home')


    </main>



    <!--end wrapper-->


    <!-- Bootstrap bundle JS -->
    <script src="{{asset('adminAsset')}}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{asset('adminAsset')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/pace.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('adminAsset')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!--app-->
    <script src="{{asset('adminAsset')}}/assets/js/app.js"></script>
    <script src="{{asset('adminAsset')}}/assets/js/index.js"></script>

    <script>
        new PerfectScrollbar(".best-product")
        new PerfectScrollbar(".top-sellers-list")
    </script>


</body>
</html>

