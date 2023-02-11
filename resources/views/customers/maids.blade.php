@extends('app.customer-layout')

@section('title', 'Halaman Customer')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Data Maids</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Nomor Telepon</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($User as $user)
                    <tr>
                      <td> {{ $user['name'] }} </td>
                      <td> {{ $user['alamat'] }} </td>
                      <td> {{ $user['email'] }} </td>
                      <td> {{ $user['no_tlp'] }} </td>
                      <td>
                      <form action="/customers/offering/{{ $user['id'] }}">
                          <button class="btn btn-icon btn-outline-primary"> Kirim Tawaran Kerja </i> </a> </button> </form>
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