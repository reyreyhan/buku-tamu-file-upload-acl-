@include('include.head');
<body class="">
    <div class="wrapper">
@include('include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Visitor List</a>
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
                                    <h4 class="card-title">Insert Visitor</h4>
                                    <p class="card-category">Insert Data Visitor</p>
                                </div>
                                <div class="card-body">
                                  <form action="{{ url('/visitor/store') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('post')}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Visitor Name</label>
                                                    <input name="name" type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">NRP</label>
                                                    <input name="nrp" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone</label>
                                                    <input name="phone" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="bmd-label-floating">Status</label>
                                                    <select class="form-control" name="status">
                                                      <option value="Process">Process</option>
                                                      <option value="Done">Done</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Report</label>
                                                    <div class="form-group label-floating">
                                                        <textarea name="content" class="form-control" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="">
                                                    <label>Upload KTM / Smartcard</label>
                                                    <input type="file" id="file_gambar" name="file">
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
                                    <h4 class="card-title">Data Visitor</h4>
                                    <p class="card-category">Tabel All Data Visitor</p>
                                </div>
                                <div class="card-body table-responsive">
                                  <table id="tabel-data" class="table table-striped table-bordered">
                                          <thead class="text-primary">
                                            <tr>
                                              <th>Name</th>
                                              <th>NRP</th>
                                              <th>Phone</th>
                                              <th>Employee</th>
                                              <th>Status</th>
                                              <th>Date</th>
                                              <th>Action</th>
                                            </tr></thead>
                                          <tbody>
                                              @foreach($data as $u)
                                              <tr>
                                                  <td>{{ $u->name }}</td>
                                                  <td>{{ $u->nrp }}</td>
                                                  <td>{{ $u->phone }}</td>
                                                  <td>{{ $u->user->fullname }}</td>
                                                  <td>{{ $u->status }}</td>
                                                  <td>{{ $u->date }}</td>
                                                  <td>
                                                    <form action="{{ url('visitor/delete', $u->id )}}" method="post">
                                                    <a href="{{ url('visitor/edit', $u->id )}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                                      {{ method_field('DELETE') }}
                                                      {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                    <a href="{{ url('visitor/detail', $u->id )}}"><button type="button" class="btn btn-primary">Detail</button></a>
                                                    </form>
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
