@extends('app.maid-layout')

@section('title', 'Tawaran Yang Diterima')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Tawaran Kerja Yang Diterima</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Customer</th>
                      <th>Alamat Customer</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Penitipan Untuk</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Offer as $offer)
                    <tr>
                      <td> {{ $offer['nama_customer'] }} </td>
                      <td> {{ $offer['alamat_customer'] }} </td>
                      <td> {{ $offer['tgl_mulai'] }} </td>
                      <td> {{ $offer['tgl_selesai'] }} </td>
                      <td> {{ $offer['penitipan'] }} </td>
                      <td style="text-align: center">
                      <form action="/maids/offering/detail/{{ $offer['id'] }}">
                        @csrf
                          <button class="btn btn-icon btn-outline-success"> Lihat Detail & Tanggapi </i> </a> </button></form>
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