@extends('app.customer-layout')

@section('title', 'Tagihan Masuk')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Daftar Tagihan Yang Anda Terima</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Maid</th>
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
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $payment['nama_maid'] }} </td>
                      <td> {{ $payment['tgl_mulai'] }} </td>
                      <td> {{ $payment['tgl_selesai'] }} </td>
                      <td> {{ $payment['penitipan'] }} </td>
                      <td> {{ $payment['upah'] }} </td>
                      <td style="text-align: center">
                      <form action="/customers/payment/{{ $payment['id'] }}">
                          <button class="btn btn-icon btn-outline-success"> <i data-feather="dollar-sign"> </i> Dapatkan Kode Pembayaran </a> </button></form>
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