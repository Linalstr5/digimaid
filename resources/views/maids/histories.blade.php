@extends('app.maid-layout')

@section('title', 'Riwayat Kerja')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Riwayat Kerja Anda</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Customer</th>
                      <th>Alamat Customer</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Jenis Penitipan</th>
                      <th>Upah</th>
                      <th>Review</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Histories as $history)
                    <tr>
                      <td> {{ $loop->iteration }} </td>
                      <td> {{ $history['nama_customer'] }} </td>
                      <td> {{ $history['alamat_customer'] }} </td>
                      <td> {{ $history['tgl_mulai'] }} </td>
                      <td> {{ $history['tgl_selesai'] }} </td>
                      <td> {{ $history['penitipan'] }} </td>
                      <td> {{ $history['upah'] }} </td>
                      <td> {{ $history['review'] }} </td>
                      <td style="text-align: center">
                      <form action="/maids/invoice/{{ $history['id'] }}">
                          <button class="btn btn-icon btn-outline-success"> Buat Tagihan </i> </a> </button></form>
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