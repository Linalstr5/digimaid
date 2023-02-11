@extends('app.customer-layout')

@section('title', 'Tawaran Terkirim')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Tawaran Kerja Yang Terkirim</h1>
          
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
                      <th>Penitipan Untuk</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Nama Maid</th>
                      <th>Alamat Maid</th>
                      <th>Email Maid</th>
                      <th>Nomor Telepon Maid</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Penitipan Untuk</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
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
                      <td> {{ $offer['status'] }} </td>
                      {{-- <td>
                      <form action="/customers/offering/{{ $user['id'] }}">
                          <button class="btn btn-icon btn-outline-primary"> Kirim Tawaran Kerja </i> </a> </button> </form>
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