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
    <title>Halaman Register Akun Baru</title>
    <link rel="apple-touch-icon" href="{{ url('vuexy/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('vuexy/app-assets/images/ico/favicon.ico') }}">
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
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/app-assets/css/pages/page-auth.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('vuexy/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-v1 px-2">
  <div class="auth-inner py-2">
    <!-- Register v1 -->
    <div class="card mb-0">
      <div class="card-body">
        <a href="javascript:void(0);" class="brand-logo">
          <h2 class="brand-text text-primary ml-1">DIGIMAID</h2>
        </a>

        <h4 class="card-title mb-1">Buat Akun Baru</h4>
        {{-- <p class="card-text mb-2">Pembuatan Akun Baru Ini Hanya Diperuntukkan Bagi Alumni UCIC</p> --}}

        <form class="auth-register-form mt-2" action="/auth/register" method="POST">
            @csrf

            @if(session('errors'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                Prosese Gagal, Silakan Ulang Kembali :
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> X </span>
                </button>
      
                <ul>
                    @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label class="form-label" for="login-role">Daftar Sebagai :</label>
                <select class="form-select form-control" name="role" id="login-role" autofocus="" tabindex="1">
                    <option selected>  </option>
                    <option value="2"> Maid </option>
                    <option value="3"> Customer </option>
                </select>
            </div>
            <div class="form-group">
            <label for="register-username" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="register-username" name="name" placeholder="Nama Lengkap" aria-describedby="register-username" tabindex="1" autofocus="">
          </div>
          <div class="form-group">
            <label for="register-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="register-email" name="email" placeholder="example@example.com" aria-describedby="register-email" tabindex="1">
          </div>
          <div class="form-group">
            <label for="register-email" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="register-email" name="no_tlp" placeholder="+62 ...." aria-describedby="register-email" tabindex="1">
          </div>
          <div class="form-group">
            <label for="register-email" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="register-email" name="alamat" placeholder="Alamat" aria-describedby="register-email" tabindex="1">
          </div>

          <div class="form-group">
            <label for="register-password" class="form-label">Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input type="password" class="form-control form-control-merge" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="1">
              <div class="input-group-append">
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="register-password">Konfirmasi Password</label>
            <div class="input-group input-group-merge form-password-toggle">
              <input class="form-control form-control-merge" id="register-password" type="password" name="password_confirmation" placeholder="············" aria-describedby="register-password" tabindex="1">
              <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
            </div>
          </div>
          <button class="btn btn-primary btn-block" tabindex="1">Daftar</button>
        </form>

        <p class="text-center mt-2">
          <span>Sudah punya akun?</span>
          <a href="/landing">
            <span>Login</span>
          </a> <hr>
          <p class="text-center"><a href="/">Kembali Ke Halaman Depan</a></p>
        </p>
      </div>
    </div>
    <!-- /Register v1 -->
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.min.js"></script>
    <script src="../../../app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/page-auth-register.min.js"></script>
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