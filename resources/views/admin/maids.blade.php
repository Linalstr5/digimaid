@extends('app.admin-layout')

@section('title', 'Data Pengguna - Maids')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Data Maids Terdaftar</h1>
          
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
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($User as $user)
                    <tr>
                      <td> {{ $user['name'] }} </td>
                      <td> {{ $user['alamat'] }} </td>
                      <td> {{ $user['email'] }} </td>
                      <td> {{ $user['no_tlp'] }} </td>
                      <td style="text-align: center">
                      <form action="/admin/maids/hapus/{{ $user['id'] }}" method="POST">
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-outline-danger"> <i data-feather="trash"> </i> </a> Hapus </button> </form>
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