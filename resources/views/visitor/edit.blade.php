@include('include.head');
<body class="">
    <div class="wrapper">
@include('include.slide');
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Visitor Edit</a>
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
                                    <h4 class="card-title">Edit Visitor</h4>
                                    <p class="card-category">Edit Data Visitor</p>
                                </div>
                                <div class="card-body">
                                  <form action="{{ url('/visitor/update', $data->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('put')}}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Visitor Name</label>
                                                    <input name="name" type="text" class="form-control" value="{{ $data->name }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">NRP</label>
                                                    <input name="nrp" type="text" class="form-control" value="{{ $data->nrp }}" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Phone</label>
                                                    <input name="phone" type="text" class="form-control" value="{{ $data->phone }}" required>
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
                                                        <textarea name="content" class="form-control" rows="5">{{ $data->content }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update</button>
                                        <div class="clearfix"></div>
                                    </form>
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
