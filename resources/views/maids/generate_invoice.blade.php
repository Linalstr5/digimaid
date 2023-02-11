@extends('app.maid-layout')

@section('title', 'Buat Tagihan')

@section('content')

<section id="multiple-column-form">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Buat Tagihan Untuk Riwayat Berikut Ini ? Klik <b>Kirim Tagihan</b> Di Bawah Jika Anda Yakin</h4>
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
            <form class="form" action="/maids/invoice/send" method="post">
                @csrf
              <div class="row">

                <div class="col-md-6 col-12">
                  <div class="form-group">
                    <label for="first-name-column">Nama Maid</label>
                    <input type="text" id="first-name-column" class="form-control" name="nama_maid" value="{{ old('nama_maid') ? old('nama_maid') : $Histories['nama_maid'] }}" readonly>
                  </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Maid ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="maid_id" value="{{ old('maid_id') ? old('maid_id') : $Histories['maid_id'] }}" readonly>
                    </div>
                  </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_maid" value="{{ old('alamat_maid') ? old('alamat_maid') : $Histories['alamat_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Maid</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_maid" value="{{ old('email_maid') ? old('email_maid') : $Histories['email_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Maid</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_maid" value="{{ old('no_tlp_maid') ? old('no_tlp_maid') : $Histories['no_tlp_maid'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nama Customer</label>
                      <input type="text" id="first-name-column" class="form-control" name="nama_customer" value="{{ old('nama_customer') ? old('nama_customer') : $Histories['nama_customer'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Customer ID</label>
                      <input type="text" id="first-name-column" class="form-control" name="customer_id" value="{{ old('customer_id') ? old('customer_id') : $Histories['customer_id'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Email Customer</label>
                      <input type="email" id="first-name-column" class="form-control" name="email_customer" value="{{ old('email_customer') ? old('email_customer') : $Histories['email_customer'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Nomor Telepon Customer</label>
                      <input type="text" id="first-name-column" class="form-control" name="no_tlp_customer" value="{{ old('no_tlp_customer') ? old('no_tlp_customer') : $Histories['no_tlp_customer'] }}" readonly>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="first-name-column">Alamat Customer</label>
                      <input type="text" id="first-name-column" class="form-control" name="alamat_customer" value="{{ old('alamat_customer') ? old('alamat_customer') : $Histories['alamat_customer'] }}" readonly>
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
                      <label for="first-name-column">Upah</label>
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
                      <label for="first-name-column">Review</label>
                      <input type="text" id="first-name-column" class="form-control" name="review" value="{{ old('review') ? old('review') : $Histories['review'] }}" readonly>
                    </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-primary mr-1">Kirim Tagihan</button>
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