@include('include.head');
<body class="">
    <div class="wrapper">
@include('include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">User List</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Insert User</h4>
                                    <p class="card-category">Insert Data User</p>
                                </div>
                                <div class="card-body">
                                  <form action="{{ url('/admin/store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('post')}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Full Name</label>
                                                    <input type="text" class="form-control" name="fullname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Access</label>
                                                    <select class="form-control" name="id_role">
                                                      <option value="1">Admin</option>
                                                      <option value="2">Employee</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Username</label>
                                                    <input type="text" class="form-control" name="username" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Password</label>
                                                    <input type="password" class="form-control" name="password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Insert</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Data User</h4>
                                    <p class="card-category">Tabel All Data User</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <table id="tabel-data" class="table table-striped table-bordered">
                                          <thead class="text-primary">
                                            <tr>
                                              <th>Nama</th>
                                              <th>Username</th>
                                              <th>Hak Akses</th>
                                              <th>Action</th>
                                            </tr></thead>
                                          <tbody>
                                              @foreach($data as $u)
                                              <tr>
                                                  <td>{{ $u->fullname }}</td>
                                                  <td>{{ $u->username }}</td>
                                                  <td>{{ $u->role->role }}</td>
                                                  <td>
                                                    @if($u->role->role != "Admin")
                                                    <form action="{{ url('admin/delete', $u->id)}}" method="post">
                                                    <a href="{{ url('admin/edit', $u->id )}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                                      {{ method_field('DELETE') }}
                                                      {{ csrf_field() }}
                                                      <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                    @else
                                                      Can't Do Action
                                                    @endif
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
            </div>
        </div>
    </div>
</body>
@include('include.footer');
</html>
