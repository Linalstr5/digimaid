@extends('app.customer-layout')

@section('title', 'Kirim Tawaran Kerja')

@section('content')

<section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Konfirmasi Tawaran Kerja Anda</h4>
          </div>

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

          <div class="card-body">
            <form class="form" action="/customers/offering/send" method="post">
                @csrf
              <div class="row">

                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="first-name-column">Nama Maid</label>
                    <input type="text" id="first-name-column" class="form-control" name="nama_maid" value="{{ old('name') ? old('name') : $User['name'] }}">
                  </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Maid ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="maid_id" value="{{ old('id') ? old('id') : $User['id'] }}">
                    </div>
                  </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_maid" value="{{ old('alamat') ? old('alamat') : $User['alamat'] }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Maid</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_maid" value="{{ old('email') ? old('email') : $User['email'] }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_maid" value="{{ old('no_tlp') ? old('no_tlp') : $User['no_tlp'] }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nama Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="nama_customer" value="{{ Auth::user()->name }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Customer ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="customer_id" value="{{ Auth::user()->id }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Anda</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_customer" value="{{ Auth::user()->email }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_customer" value="{{ Auth::user()->no_tlp }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_customer" value="{{ Auth::user()->alamat }}">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tanggal Mulai</label>
                      <input type="date" id="first-name-column" class="form-control" name="tgl_mulai">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tanggal Selesai</label>
                      <input type="date" id="first-name-column" class="form-control" name="tgl_selesai">
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                        <label class="form-label" for="login-role">Penitipan Untuk :</label>
                        <select class="form-select form-control" name="penitipan" id="login-role" autofocus="" tabindex="1">
                            <option selected>  </option>
                            <option value="Anak"> Anak </option>
                            <option value="Lansia"> Lansia </option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tawaran Upah</label>
                      <input type="text" id="first-name-column" class="form-control" name="upah" placeholder="Rp. xxx">
                    </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary mr-1">Kirim</button>
                  {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection