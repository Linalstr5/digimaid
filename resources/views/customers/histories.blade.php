@extends('app.customer-layout')

@section('title', 'Riwayat Kerja Sama')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Riwayat Kerja Sama Yang Pernah Anda Lakukan</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nomor</th>
                      <th>Nama maid</th>
                      <th>No Telepon maid</th>
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
                      <td> {{ $history['nama_maid'] }} </td>
                      <td> {{ $history['no_tlp_maid'] }} </td>
                      <td> {{ $history['tgl_mulai'] }} </td>
                      <td> {{ $history['tgl_selesai'] }} </td>
                      <td> {{ $history['penitipan'] }} </td>
                      <td> {{ $history['upah'] }} </td>
                      <td> {{ $history['review'] }} </td>
                      <td style="text-align: center">
                      <form action="/customers/review/{{ $history['id'] }}">
                        @csrf
                          <button class="btn btn-icon btn-outline-success"> <i data-feather="star"> </i> Beri Review </a> </button></form>
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