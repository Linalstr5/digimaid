@extends('app.admins-layout')

@section('title', 'Admin')

@section('content')

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

@endsection