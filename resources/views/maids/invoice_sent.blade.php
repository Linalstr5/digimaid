@extends('app.maid-layout')

@section('title', 'Riwayat Tagihan')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Riwayat Tagihan Yang Terkirim</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Kode Pembayaran</th>
                      <th>Nama Customer</th>
                      <th>Alamat Customer</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Jenis Penitipan</th>
                      <th>Upah</th>
                      <th>Review</th>
                      {{-- <th></th> --}}
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Payment as $payment)
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $payment['dm_va'] }} </td>
                      <td> {{ $payment['nama_customer'] }} </td>
                      <td> {{ $payment['alamat_customer'] }} </td>
                      <td> {{ $payment['tgl_mulai'] }} </td>
                      <td> {{ $payment['tgl_selesai'] }} </td>
                      <td> {{ $payment['penitipan'] }} </td>
                      <td> {{ $payment['upah'] }} </td>
                      <td> {{ $payment['review'] }} </td>
                      {{-- <td style="text-align: center">
                      <form action="/maids/invoice/{{ $history['id'] }}">
                        @csrf
                          <button class="btn btn-icon btn-outline-success"> Buat Tagihan </i> </a> </button></form>
                      </td> --}}
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection