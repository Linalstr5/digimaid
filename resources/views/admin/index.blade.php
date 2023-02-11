@extends('app.admin-layout')

@section('title', 'Homepage - Dashboard Admin')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
    </div>
  </div>
  
  </div>
  <div class="content-body">
    <div class="pricing-free-trial">
      <div class="row">
        <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
          <div class="pricing-trial-content d-flex justify-content-between">
            <div class="text-center text-md-left mt-3">
              <h3 class="text-primary">Dashboard Admin DIGIMAID</h3>
              <h5>Awasi dan Evaluasi Seluruh Kegiatan Yang Dilakukan Di Dalam Sistem</h5>
              {{-- <button class="btn btn-primary mt-2 mt-lg-3">Start 14-day FREE trial</button> --}}
            </div>
  
            <!-- image -->
            <img src="{{ url('vuexy/app-assets/images/illustration/pricing-Illustration.svg') }}" class="pricing-trial-img img-fluid" alt="svg img">
          </div>
        </div>
      </div>
    </div>

@endsection