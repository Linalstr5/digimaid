@extends('app.customer-layout')

@section('title', 'Homepage')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
  </div>
  <div class="content-body">
    <div class="pricing-free-trial">
      <div class="row">
        <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
          <div class="pricing-trial-content d-flex justify-content-between">
            <div class="text-center text-md-left mt-3">
              <h3 class="text-primary">Dapatkan layanan dari DIGIMAID kapanpun dan di manapun</h3>
              <h5>Anda dapat memilih layanan sesuai dengan kebutuhan dan keinginan anda</h5>
              <a class="btn btn-primary mt-2 mt-lg-3" href="/customers/maids">Cari Maid & Dapatkan Layanan</a>
            </div>
  
            <!-- image -->
            <img src="{{ url('vuexy/app-assets/images/illustration/badge.svg') }}" class="pricing-trial-img img-fluid" alt="svg img">
          </div>
        </div>
      </div>
    </div>
<br><br><hr>
    <!-- pricing faq -->
  <div class="pricing-faq">
    <h3 class="text-center">FAQ's</h3>
    <p class="text-center">Berikut ini beberapa pertanyaan yang mungkin anda miliki</p>
    <div class="row my-2">
      <div class="col-12 col-lg-10 col-lg-offset-2 mx-auto">
        <!-- faq collapse -->
        <div class="collapse-margin collapse-icon" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne" data-toggle="collapse" role="button" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              <span class="lead collapse-title">Apa itu DIGIMAID?</span>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                DIGIMAID adalah aplikasi yang melayani jasa......
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo" data-toggle="collapse" role="button" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="lead collapse-title">Berapakah biaya yang dibutuhkan untuk mendapatkan jasa dari DIGIMAID?</span>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Kebutuhan biaya jasa yang harus anda keluarkan tergantung terhadap jenis pekerjaan dan berapa lama anda akan menggunakan jasa tersebut. Anda juga dapat membuat pengajuan harga untuk jasa yang ingin anda dapatkan.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree" data-toggle="collapse" role="button" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              <span class="lead collapse-title">Bagaimana cara saya melakukan pembayaran untuk pelayanan yang saya dapatkan?</span>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anda dapat melakukan pembayaran biaya pelayanan menggunakan transfer bank. Ketika anda telah melakukan kontrak kerja sama dengan pekerja/maid, anda akan mendapatkan tagihan  yang akan dikirimkan langsung melalui aplikasi ini, di dalamnya terdapat kode pembayaran berupa Virtual Account yang dapat anda gunakan ketika melakukan pembayaran.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ pricing faq -->

@endsection