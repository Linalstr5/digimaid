@extends('app.customer-layout')

@section('title', 'Ganti Password')

@section('content')

<section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
        <div class="card">
            @if(session('errors'))
            <div class="alert alert-danger alert-dismissable fade show" role="alert">
                Proses Gagal, Silakan Ulang Kembali :
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
          <div class="card-header">
            <h4 class="card-title">Ganti Password</h4>
          </div>
          <div class="card-body">
            <form class="form" action="/customers/change_psw/process" method="post">
                @csrf
                @method('PUT')
              <div class="row">
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="first-name-column">Password Lama</label>
                    <input type="password" id="first-name-column" class="form-control" name="current_password">
                    {{-- <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div> --}}
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="last-name-column">Password Baru</label>
                    <input type="password" id="last-name-column" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="city-column">Konfirmasi Password Baru</label>
                    <input type="password" id="city-column" class="form-control" name="password_confirmation">
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary mr-1">Ganti Password</button>
                  <button type="reset" class="btn btn-outline-secondary">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection