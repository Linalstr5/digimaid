@extends('app.admin-layout')

@section('title', 'Riwayat Transaksi/Pembayaran')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Data Riwayat Transaksi/Pembayaran</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      {{-- <th>Nomor</th> --}}
                      <th>ID Pembayaran</th>
                      <th>Kode Pembayaran</th>
                      <th>Nama Maid</th>
                      <th>Nama Customer</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Jenis Penitipan</th>
                      <th>Upah</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Payment as $payment)
                    <tr>
                      {{-- <td> {{ $loop->iteration }} </td> --}}
                      <td> {{ $payment['id'] }} </td>
                      <td> {{ $payment['dm_va'] }} </td>
                      <td> {{ $payment['nama_maid'] }} </td>
                      <td> {{ $payment['nama_customer'] }} </td>
                      <td> {{ $payment['tgl_mulai'] }} </td>
                      <td> {{ $payment['tgl_selesai'] }} </td>
                      <td> {{ $payment['penitipan'] }} </td>
                      <td> {{ $payment['upah'] }} </td>
                      <td style="text-align: center">
                      <form action="/admin/payment/{{ $payment['id'] }}" method="POST">
                        @csrf
                          <button class="btn btn-icon btn-outline-danger"> <i data-feather="trash"> </i> Hapus Data </a> </button></form>
                      </td>
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