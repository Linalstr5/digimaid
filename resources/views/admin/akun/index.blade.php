@extends('app.admin-layout')

@section('title', 'Data Pengguna')

@section('content')

<div class="content-header-left col-md-9 col-12 mb-2">
  
</div>

</div>
<div class="content-body"><div class="row">
</div>

<h1 class="h1 mb-2 text-gray-800" align="center">Data Pengguna Terdaftar</h1>
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#modals-slide-in">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
            </a> <hr/>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID Pengguna</th>
                      <th>Nama Pengguna</th>
                      <th>Role Pengguna</th>
                      <th>Email Pengguna</th>
                      <th>Tanggal Dibuat</th>
                      <th> </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($User as $user)
                    <tr>
                      <td> {{ $user['id'] }} </td>
                      <td> {{ $user['name'] }} </td>
                      <td> {{ $user['role'] }} </td>
                      <td> {{ $user['email'] }} </td>
                      <td> {{ $user['created_at'] }} </td>
                      <td style="text-align: center">
                      <form action="/admin/akun/hapus/{{ $user['id'] }}" method="POST">
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

<!-- Modal to add new record -->
<div class="modal modal-slide-in fade" id="modals-slide-in">
  <div class="modal-dialog sidebar-sm">
  <form class="add-new-record modal-content pt-0" action="/admin/akun/tambah" method="post">
      @csrf
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
  <div class="modal-header mb-1">
    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Baru</h5>
  </div>
  <div class="modal-body flex-grow-1">
    <div class="form-group">
      <label class="form-label" for="login-level">Level Pengguna :</label>
      <select class="form-select form-control" name="role" id="login-level" autofocus="" tabindex="1">
      <option selected>  </option>
      <option value="1"> Admin </option>
      <option value="2"> Maid </option>
      <option value="3"> Customer </option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label" for="basic-icon-default-fullname">Nama Pengguna</label>
      <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" name="name" tabindex="1">
    </div>
    <div class="form-group">
      <label class="form-label" for="basic-icon-default-email">Email</label>
      <input type="email" id="basic-icon-default-email" class="form-control dt-email" name="email" tabindex="1">
    </div>
    <div class="form-group">
      <label class="form-label" for="basic-icon-default-email">Nomor Telepon</label>
      <input type="text" id="basic-icon-default-email" class="form-control dt-email" name="no_tlp" tabindex="1">
    </div>
    <div class="form-group">
      <label class="form-label" for="basic-icon-default-email">Alamat</label>
      <input type="text" id="basic-icon-default-email" class="form-control dt-email" name="alamat" tabindex="1">
    </div>
    {{-- <div class="form-group">
      <label class="form-label" for="basic-icon-default-post">Level</label>
      <input type="text" id="basic-icon-default-post" class="form-control dt-post" name="level">
    </div> --}}
    <div class="form-group">
      <div class="d-flex justify-content-between">
        <label for="login-password">Password</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
          <input class="form-control form-control-merge" id="login-password" type="password" name="password" placeholder="············" aria-describedby="login-password" tabindex="1">
          <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
        </div>
    </div>
    <div class="form-group">
      <div class="d-flex justify-content-between">
        <label for="login-password">Konfirmasi Password</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
          <input class="form-control form-control-merge" id="login-password" type="password" name="password_confirmation" placeholder="············" aria-describedby="login-password" tabindex="1">
          <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary data-submit mr-1">Submit</button>
    <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
  </div>
  </form>
  </div>
  </div>
  </section>

@endsection