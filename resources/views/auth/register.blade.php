@extends('layout')
@section('judul')
Tambah User
@endsection
@section('konten')
<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Form Buat User<small> BWS NT I</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <form action="{{ url('user') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
        {{ csrf_field() }}
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lengkap">Nama Lengkap<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="nama_lengkap" name="nama_lengkap" required="required" class="form-control col-md-7 col-xs-12" autofocus>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="divisi">Divisi<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select name="divisi_id" required="required" class="select2_single form-control" id="users">
              <option>Pilih..</option>
              @foreach ($divisi as $d)
              <option value="{{ $d->id}}">{{ $d->nama_departemen }}</option>
              @endforeach
            </select>
          </div>
        <input type="text" name="divisi">
        </div>
        <input type="hidden" name="foto" value="asset('assets/images/profile.png')">
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-default">
              Cancel
            </button>
            <button id="send" type="submit" class="btn btn-info">
              <i class="fa fa-plus fa-fw"></i> Tambah
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
@section('script_skbws')
<script>
  $(document).ready(function() {
    $(".select2_single").select2({
      placeholder: "Select a state",
      allowClear: true
    });
  });
  $(document).ready(function () {
    $( "#users" ).change(function() {
      var b = $("#users").find(":selected").val();
      $.ajax({url: "/divisi/"+b, success: function(result){
        var result = JSON.parse(result);
                    console.log(result);
                    $("input[name='divisi']").val(result.nama_departemen);
                  }});
    });
  });
</script>
@endsection