@extends('admin/template')
{{-- <link rel="icon" href="{{ asset('public/favicon.ico')}}" type="image/x-icon"> --}}

@section('main')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Event
        <small>management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Tambah</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Judul Event</th>
                  <th>Kategori Event</th>
                  <th>Gambar Event</th>
                  <th>Deskripsi</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Workshop Flutter</td>
                  <td>Teknologi
                  </td>
                  <td>Win 95+</td>
                  <td>Workshop Flutter di Tegal</td>
                  <td>Waiting</td>
                  <td>
                    <button type="button" class="btn btn-primary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@stop

@section('footer')
  @include('admin/footer')
@stop

  {{-- MODAL --}}
  <div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- konten modal-->
        <div class="modal-content">
            <!-- heading modal -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah Data Event</h4>
            </div>
            <!-- body modal -->
            <form role="form">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Judul Event</label>
                    <input type="text" class="form-control" id="judulEvent" placeholder="Judul Event">
                  </div>               
                  <div class="form-group">
                        <label>Kategori Event</label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                      </div>             
                  <div class="form-group">
                    <label for="exampleInputFile">Upload Gambar</label>
                    <input type="file" id="uploadGambar">
    
                    <p class="help-block">Upload gambar event</p>
                  </div>                             
                  <!-- textarea -->
                <div class="form-group">
                    <label>Deskripsi Event</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsikan Event"></textarea>                    
                </div>
                </div>
                    <!-- /.box-body -->
              </form>
            <!-- footer modal -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success" data-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>