@extends('app.customer-layout')

@section('title', 'Review Hasil Kerja')

@section('content')

<section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Review Kualitas Kerja Maid</h4>
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
            <form class="form" action="/customers/review/send/{{ $Histories['id'] }}" method="post">
                @csrf
                @method('PUT')
              <div class="row">

                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="first-name-column">Nama Maid</label>
                    <input type="text" id="first-name-column" class="form-control" name="nama_maid" value="{{ old('name') ? old('name') : $Histories['nama_maid'] }}" readonly>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Maid ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="maid_id" value="{{ old('id') ? old('id') : $Histories['maid_id'] }}" readonly>
                    </div>
                  </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_maid" value="{{ old('alamat') ? old('alamat') : $Histories['alamat_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Maid</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_maid" value="{{ old('email') ? old('email') : $Histories['email_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_maid" value="{{ old('no_tlp') ? old('no_tlp') : $Histories['no_tlp_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nama Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="nama_customer" value="{{ Auth::user()->name }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Customer ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="customer_id" value="{{ Auth::user()->id }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Anda</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_customer" value="{{ Auth::user()->email }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_customer" value="{{ Auth::user()->no_tlp }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Anda</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_customer" value="{{ Auth::user()->alamat }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tanggal Mulai</label>
                      <input type="date" id="first-name-column" class="form-control" name="tgl_mulai" value="{{ old('tgl_mulai') ? old('tgl_mulai') : $Histories['tgl_mulai'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tanggal Selesai</label>
                      <input type="date" id="first-name-column" class="form-control" name="tgl_selesai" value="{{ old('tgl_selesai') ? old('tgl_selesai') : $Histories['tgl_selesai'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Jenis Penitipan</label>
                      <input type="text" id="first-name-column" class="form-control" name="penitipan" value="{{ old('penitipan') ? old('penitipan') : $Histories['penitipan'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Tawaran Upah</label>
                      <input type="text" id="first-name-column" class="form-control" name="upah" value="{{ old('upah') ? old('upah') : $Histories['upah'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Status</label>
                      <input type="text" id="first-name-column" class="form-control" name="status" value="{{ old('status') ? old('status') : $Histories['status'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column"><b>Masukkan Review Anda</b></label>
                      <textarea type="text" id="first-name-column" class="form-control" name="review"> </textarea>
                    </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary mr-1">Kirim Review</button>
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