@extends('app.maid-layout')

@section('title', 'Detail Tawaran Kerja')

@section('content')

    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Detail Tawaran Kerja Yang Anda Terima</h4>
                    </div>

                    @if (session('errors'))
                        <div class="alert alert-danger alert-dismissable fade show" role="alert">
                            Proses Gagal, Silakan Ulang Kembali :
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"> X </span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form class="form" action="/maids/offering/respond/{{ $Offer['id'] }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Customer</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            name="nama_customer"
                                            value="{{ old('nama_customer') ? old('nama_customer') : $Offer['nama_customer'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Customer ID</label>
                                        <input type="text" id="first-name-column" class="form-control" name="customer_id"
                                            value="{{ old('customer_id') ? old('customer_id') : $Offer['customer_id'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Alamat Customer</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            name="alamat_customer"
                                            value="{{ old('alamat_customer') ? old('alamat_customer') : $Offer['alamat_customer'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Email Customer</label>
                                        <input type="email" id="first-name-column" class="form-control"
                                            name="email_customer"
                                            value="{{ old('email_customer') ? old('email_customer') : $Offer['email_customer'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nomor Telepon Customer</label>
                                        <input type="text" id="first-name-column" class="form-control"
                                            name="no_tlp_customer"
                                            value="{{ old('no_tlp_customer') ? old('no_tlp_customer') : $Offer['no_tlp_customer'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Tanggal Mulai</label>
                                        <input type="date" id="first-name-column" class="form-control" name="tgl_mulai"
                                            value="{{ old('tgl_mulai') ? old('tgl_mulai') : $Offer['tgl_mulai'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Tanggal Selesai</label>
                                        <input type="date" id="first-name-column" class="form-control"
                                            name="tgl_selesai"value="{{ old('tgl_selesai') ? old('tgl_selesai') : $Offer['tgl_selesai'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Penitipan Untuk</label>
                                        <input type="text" id="first-name-column" class="form-control" name="penitipan"
                                            value="{{ old('penitipan') ? old('penitipan') : $Offer['penitipan'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Tawaran Upah</label>
                                        <input type="text" id="first-name-column" class="form-control" name="upah"
                                            placeholder="Rp. xxx" value="{{ old('upah') ? old('upah') : $Offer['upah'] }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Maid ID</label>
                                        <input type="text" id="first-name-column" class="form-control" name="maid_id" value="{{Auth::user()->id}}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nama Anda</label>
                                        <input type="text" id="first-name-column" class="form-control" name="nama_maid" value="{{Auth::user()->name}}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Alamat Anda</label>
                                        <input type="text" id="first-name-column" class="form-control" name="alamat_maid" value="{{Auth::user()->alamat}}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Nomor Telepon Anda</label>
                                        <input type="text" id="first-name-column" class="form-control" name="no_tlp_maid" value="{{Auth::user()->no_tlp}}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Email Anda</label>
                                        <input type="email" id="first-name-column" class="form-control" name="email_maid" value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="login-role"><b>Tanggapi Tawaran :</b></label>
                                        <select class="form-select form-control" name="status" id="login-role" autofocus="" tabindex="1">
                                            <option selected>  </option>
                                            <option value="Diterima"> Terima Tawaran Kerja </option>
                                            <option value="Ditolak"> Tolak Tawaran Kerja </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">Kirim Tanggapan</button>
                                    {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                                    {{-- <form action="/maids/offering/accept/{{ $Offer['id'] }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-icon btn-outline-primary"> Terima Tawaran </button>
                                    </form>
                                    <form action="/maids/offering/decline/{{ $Offer['id'] }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-icon btn-outline-danger"> Tolak Tawaran </button> --}}
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
