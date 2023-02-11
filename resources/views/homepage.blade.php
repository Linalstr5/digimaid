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
    <title>DIGIMAID - Homepage</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="../../../../../css2.css?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/pages/page-knowledge-base.min.css') }}">
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
          <ul class="nav navbar-nav bookmark-icons">
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/auth/show_register" data-toggle="tooltip" data-placement="top" title="Sign Up"><i class="ficon" data-feather="edit"></i> Sign Up </a></li>
            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="/landing" data-toggle="tooltip" data-placement="top" title="Login"><i class="ficon" data-feather="log-in"></i> Login </a></li>
          </ul>
          <ul class="nav navbar-nav">
              <div class="bookmark-input search-input">
                <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                <ul class="search-list search-list-bookmark"></ul>
              </div>
            </li>
          </ul>
        </div>
        
      </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
      <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
          <div class="d-flex justify-content-start"><span class="mr-75" data-feather="alert-circle"></span><span>No results found.</span></div></a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mr-auto"><a class="navbar-brand" href="index.html"><span class="brand-logo">
                <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                  <defs>
                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                      <stop stop-color="#000000" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                      <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                      <stop stop-color="#FFFFFF" offset="100%"></stop>
                    </lineargradient>
                  </defs>
                </svg></span>
              <h2 class="brand-text">DIGIMAID</h2></a></li>
          <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
      </div>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        {{-- <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">2</span></a>
            <ul class="menu-content">
              <li><a class="d-flex align-items-center" href="dashboard-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="dashboard-ecommerce.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">eCommerce</span></a>
              </li>
            </ul>
          </li>
          
          <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
            <ul class="menu-content">
        </ul> --}}
      </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              {{-- <div class="col-12">
                <h2 class="content-header-title float-left mb-0">DIGIMAID</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active">Knowledge Base
                    </li>
                  </ol>
                </div>
              </div>
            </div> --}}
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            
          </div>
        </div>
        <div class="content-body"><!-- Knowledge base Jumbotron -->
<section id="knowledge-base-search">
  <div class="row">
    <div class="col-12">
      <div class="card knowledge-base-bg text-center" style="background-image: url('{{ url('vuexy/app-assets/images/banner/banner.png') }}">
        <div class="card-body">
          <h2 class="text-primary">Selamat Datang Di DIGIMAID</h2>
          <p class="card-text mb-2">
            <span>Lakukan eksplorasi: </span><span class="font-weight-bolder">Cari Tahu Tentang Digimaid <i data-feather="arrow-down"> </i></span>
          </p>
          {{-- <form class="kb-search-input">
            <div class="input-group input-group-merge">
              <div class="input-group-prepend">
                <span class="input-group-text"><i data-feather="search"></i></span>
              </div>
              <input type="text" class="form-control" id="searchbar" placeholder="Ask a question...">
            </div>
          </form> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ Knowledge base Jumbotron -->

<!-- Knowledge base -->
<section id="knowledge-base-content">
  <div class="row kb-search-content-info match-height">
    <!-- Mudah -->
    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
        <div class="card">
          <a href="page-kb-category.html">
            <img src="{{ url('vuexy/app-assets/images/illustration/demand.svg') }}" class="card-img-top" alt="knowledge-base-image">
            <div class="card-body text-center">
              <h4>Mudah</h4>
              <p class="text-body mt-1 mb-0">Digimaid dapat membantu anda mencari dan mendapatkan maid sesuai kebutuhan anda</p>
            </div>
          </a>
        </div>
    </div>
    
    <!-- Fleksibel -->
    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
      <div class="card">
        <a href="page-kb-category.html">
          <img src="{{ url('vuexy/app-assets/images/illustration/api.svg') }}" class="card-img-top" alt="knowledge-base-image">
          <div class="card-body text-center">
            <h4>Fleksibel</h4>
            <p class="text-body mt-1 mb-0">Digimaid dapat anda gunakan dimanapun dan kapanpun sesuai keinginan anda</p>
          </div>
        </a>
      </div>
    </div>

    <!-- Jaminan -->
    <div class="col-md-4 col-sm-6 col-12 kb-search-content">
        <div class="card">
          <a href="page-kb-category.html">
            <img src="{{ url('vuexy/app-assets/images/illustration/email.svg') }}" class="card-img-top" alt="knowledge-base-image">
            <div class="card-body text-center">
              <h4>Jaminan Kualitas</h4>
              <p class="text-body mt-1 mb-0">Digimaid menjamin bahwa semua maid yang tersedia telah terverifikasi dan kompeten</p>
            </div>
          </a>
        </div>
    </div>

    <!-- sales card -->
    {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
        <div class="card">
          <a href="page-kb-category.html">
            <img src="{{ url('vuexy//app-assets/images/illustration/sales.svg') }}" class="card-img-top" alt="knowledge-base-image">
  
            <div class="card-body text-center">
              <h4>Sales Automation</h4>
              <p class="text-body mt-1 mb-0">
                There is perhaps no better demonstration of the folly of image of our tiny world.
              </p>
            </div>
          </a>
        </div>
      </div> --}}
  
      <!-- marketing -->
      {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
        <div class="card">
          <a href="page-kb-category.html">
            <img src="{{ url('vuexy//app-assets/images/illustration/marketing.svg') }}" class="card-img-top" alt="knowledge-base-image">
            <div class="card-body text-center">
              <h4>Marketing Automation</h4>
              <p class="text-body mt-1 mb-0">
                Look again at that dot. That’s here. That’s home. That’s us. On it everyone you love.
              </p>
            </div>
          </a>
        </div>
      </div> --}}

    <!-- personalization -->
    {{-- <div class="col-md-4 col-sm-6 col-12 kb-search-content">
      <div class="card">
        <a href="page-kb-category.html">
          <img src="{{ url('vuexy/app-assets/images/illustration/personalization.svg') }}" class="card-img-top" alt="knowledge-base-image">
          <div class="card-body text-center">
            <h4>Personalization</h4>
            <p class="text-body mt-1 mb-0">It has been said that astronomy is a humbling and character experience.</p>
          </div>
        </a>
      </div>
    </div> --}}

    <!-- no result -->
    <div class="col-12 text-center no-result no-items">
      <h4 class="mt-4">Search result not found!!</h4>
    </div>
  </div>
</section>
<!-- Knowledge base ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

    </div>
    <!-- End: Customizer-->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ml-25" href="../../../../../user/pixinvent/portfolio.html" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{ url('vuexy/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ url('vuexy/app-assets/js/core/app-menu.min.js') }}"></script>
    <script src="{{ url('vuexy/app-assets/js/core/app.min.js') }}"></script>
    <script src="{{ url('vuexy/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ url('vuexy/app-assets/js/scripts/pages/page-knowledge-base.min.js') }}"></script>
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
</html>