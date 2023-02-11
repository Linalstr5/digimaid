@extends('app.customer-layout')

@section('title', 'Kerja Sama Aktif')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Kerja Sama Yang Sedang Aktif</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Maid</th>
                      <th>Alamat Maid</th>
                      <th>Email Maid</th>
                      <th>Nomor Telepon Maid</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Jenis Penitipan</th>
                      <th>Upah</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Offer as $offer)
                    <tr>
                      <td> {{ $offer['nama_maid'] }} </td>
                      <td> {{ $offer['alamat_maid'] }} </td>
                      <td> {{ $offer['email_maid'] }} </td>
                      <td> {{ $offer['no_tlp_maid'] }} </td>
                      <td> {{ $offer['tgl_mulai'] }} </td>
                      <td> {{ $offer['tgl_selesai'] }} </td>
                      <td> {{ $offer['penitipan'] }} </td>
                      <td> {{ $offer['upah'] }} </td>
                      <td>
                      <form action="/customers/payment/{{ $offer['id'] }}">
                          <button class="btn btn-icon btn-outline-success"><a data-feather="dollar-sign"> </i> </a> Lakukan Pembayaran </button> </form>
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