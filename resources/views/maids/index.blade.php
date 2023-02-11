@extends('app.maid-layout')

@section('title', 'Homepage - Maids')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>
<div class="content-body">
    <section id="pricing-plan">
        <!-- title text and switch button -->
        <div class="text-center">
            <h1 class="mt-5">Selamat Datang Di DIGIMAID, {{ Auth::user()->name }}</h1>
            <p class="mb-2 pb-75">
                Anda telah terdaftar sebagai maid di dalam DIGIMAID, anda dapat mengevaluasi semua kegiatan anda melalui menu-menu yang tersedia
            </p>
            
        </div>
        <!--/ title text and switch button -->

        <!-- pricing plan cards -->
        <div class="row pricing-card">
            <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
                <div class="row">
                    <!-- basic plan -->
                    <div class="col-12 col-md-4">
                        <div class="card basic-pricing text-center">
                            <div class="card-body">
                                <img src="{{ url('vuexy/app-assets/images/illustration/Pot1.svg') }}"
                                    class="mb-2 mt-5" alt="svg img">
                                <h3>Tawaran Kerja</h3>
                                <p class="card-text">Cek semua tawaran kerja yang anda terima</p>
                                {{-- <div class="annual-plan">
                                    <div class="plan-price mt-2">
                                        <sup class="font-medium-1 font-weight-bold text-primary">$</sup>
                                        <span
                                            class="pricing-basic-value font-weight-bolder text-primary">0</span>
                                        <sub
                                            class="pricing-duration text-body font-medium-1 font-weight-bold">/month</sub>
                                    </div>
                                    <small class="annual-pricing d-none text-muted"></small>
                                </div>
                                <ul class="list-group list-group-circle text-left">
                                    <li class="list-group-item">100 responses a month</li>
                                    <li class="list-group-item">Unlimited forms and surveys</li>
                                    <li class="list-group-item">Unlimited fields</li>
                                    <li class="list-group-item">Basic form creation tools</li>
                                    <li class="list-group-item">Up to 2 subdomains</li>
                                </ul> --}}
                                <a href="/maids/offer/received" class="btn btn-block btn-outline-success mt-2">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <!--/ basic plan -->

                    <!-- standard plan -->
                    <div class="col-12 col-md-4">
                        <div class="card basic-pricing text-center">
                            <div class="card-body">
                                <img src="{{ url('vuexy/app-assets/images/illustration/Pot2.svg') }}"
                                    class="mb-2 mt-5" alt="svg img">
                                <h3>Riwayat Kerja</h3>
                                <p class="card-text">Cek semua riwayat kerja yang anda pernah anda lakukan</p>
                                {{-- <div class="annual-plan">
                                    <div class="plan-price mt-2">
                                        <sup class="font-medium-1 font-weight-bold text-primary">$</sup>
                                        <span
                                            class="pricing-basic-value font-weight-bolder text-primary">0</span>
                                        <sub
                                            class="pricing-duration text-body font-medium-1 font-weight-bold">/month</sub>
                                    </div>
                                    <small class="annual-pricing d-none text-muted"></small>
                                </div>
                                <ul class="list-group list-group-circle text-left">
                                    <li class="list-group-item">100 responses a month</li>
                                    <li class="list-group-item">Unlimited forms and surveys</li>
                                    <li class="list-group-item">Unlimited fields</li>
                                    <li class="list-group-item">Basic form creation tools</li>
                                    <li class="list-group-item">Up to 2 subdomains</li>
                                </ul> --}}
                                <a href="/maids/history" class="btn btn-block btn-primary mt-2">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <!--/ standard plan -->

                    <!-- enterprise plan -->
                    <div class="col-12 col-md-4">
                        <div class="card enterprise-pricing text-center">
                            <div class="card-body">
                                <img src="{{ url('vuexy/app-assets/images/illustration/Pot3.svg') }}"
                                    class="mb-2" alt="svg img">
                                <h3>Riwayat Tagihan</h3>
                                <p class="card-text">Cek semua tagihan yang pernah anda kirim</p>
                                {{-- <div class="annual-plan">
                                    <div class="plan-price mt-2">
                                        <sup class="font-medium-1 font-weight-bold text-primary">$</sup>
                                        <span
                                            class="pricing-enterprise-value font-weight-bolder text-primary">99</span>
                                        <sub
                                            class="pricing-duration text-body font-medium-1 font-weight-bold">/month</sub>
                                    </div>
                                    <small class="annual-pricing d-none text-muted"></small>
                                </div>
                                <ul class="list-group list-group-circle text-left">
                                    <li class="list-group-item">PayPal payments</li>
                                    <li class="list-group-item">Logic Jumps</li>
                                    <li class="list-group-item">File upload with 5GB storage</li>
                                    <li class="list-group-item">Custom domain support</li>
                                    <li class="list-group-item">Stripe integration</li>
                                </ul> --}}
                                <a href="/maids/invoice_sent" class="btn btn-block btn-outline-primary mt-2">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <!--/ enterprise plan -->
                </div>
            </div>
        </div>
        <!--/ pricing plan cards -->
    </section>

@endsection