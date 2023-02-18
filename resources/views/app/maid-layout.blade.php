<!DOCTYPE html>
<!--
Template Name: Vuexy - Vuejs, HTML & Laravel Admin Dashboard Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://1.envato.market/vuexy_admin
Renew Support: https://1.envato.market/vuexy_admin
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>  
    <link rel="apple-touch-icon" href="{{ url('vuexy/app-assets/images/ico/apple-icon-120.png') }}">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{ url('vuexy/app-assets/images/ico/favicon.ico') }}"> --}}
    <link href="{{ url('vuexy/css2.css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600') }}" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/components.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/themes/dark-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/themes/bordered-layout.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/themes/semi-dark-layout.min.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/pages/page-faq.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          <ul class="nav navbar-nav d-xl-none">
            <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
          </ul>
          <ul class="nav navbar-nav">
            <li class="nav-item d-none d-lg-block">
                {{-- <a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a> --}}
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                <ul class="search-list search-list-bookmark"></ul>
              </div>
            </li>
          </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
          <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>
          
          
          <!-- PROFIL -->
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">{{ Auth::user()->name }}</span><span class="user-status"></span></div><span class="avatar"><img class="round" src="{{ url('vuexy/app-assets/images/avatars/maid-2.png') }}" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
              <a class="dropdown-item" href="/maids/change_psw"><i class="mr-50" data-feather="lock"></i>Ganti Password</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="mr-50" data-feather="power"></i> Logout</a>
              
            </div>
          </li>
        </ul>
      </div>
    </nav>
    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><span class="brand-logo"></span>

                <!-- LOGO DI ATAS -->
              <h2 class="brand-text">DIGIMAID</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="/maid/index"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span></a>
          </li> --}}

          {{-- <li class=" nav-item"><a class="d-flex align-items-center" href="/maid"><i data-feather="users"></i>
            <span class="menu-title text-truncate" data-i18n="Dashboards">Data Akun Pengguna</span></a>
          </li> --}}
          <li><a class="d-flex align-items-center" href="/maids/offer/received"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Lihat Tawaran Masuk</span></a>
          </li>
          <li><a class="d-flex align-items-center" href="/maids/history"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Riwayat Kerja</span></a>
          </li>
          <li><a class="d-flex align-items-center" href="/maids/invoice_sent"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Riwayat Tagihan</span></a>
          </li>

        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">

          
        </div>
        @yield('content')
        
        </div>
      </div>
    </div>
    <!-- END: Content-->


    

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2023<a class="ml-25" href="../../../../../user/pixinvent/portfolio.html" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made by </span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('vuexy/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ url('vuexy/app-assets/js/scripts/pages/page-pricing.min.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('vuexy/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ url('vuexy/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ url('vuexy/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->

  <!-- Logout Modal -->
  <div class="modal fade text-left modal-warning" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel140" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel140">Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Anda yakin ingin logout ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"> Batal </button>
          <a href="/logout" class="btn btn-warning"> Logout </a> 
        </div>
      </div>
    </div>
  </div>
</html>