@extends('layout')
@section('judul')
Ubah User
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
     @if(Session::has('success'))
     <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
      <label class="fa fa-info-circle"></label> {{ Session::pull('success') }}
    </div>
    @endif
    <form action="{{ url('user/'.$user->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_lengkap">Nama Lengkap<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="nama_lengkap" value="{{ $user->nama_lengkap }}" name="nama_lengkap" required="required" class="form-control col-md-7 col-xs-12" autofocus>
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" id="username" value="{{ $user->username }}" name="username" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="hidden" id="password" value="{{ $user->password }}" name="password" required="required" class="form-control col-md-7 col-xs-12">
        </div>
      </div>
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="divisi">Divisi<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <select name="divisi" required="required" class="select2_single form-control">
            <option>Pilih..</option>
            @foreach ($divisi as $d)
            @if($user->divisi == $d->nama_departemen)
            <option value="{{ $d->nama_departemen}}" selected>{{ $d->nama_departemen }}</option>
            @else
            <option value="{{ $d->nama_departemen }}">{{ $d->nama_departemen }}</option>
            @endif
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <button type="submit" class="btn btn-default">
            Cancel
          </button>
          <button id="send" type="submit" class="btn btn-info">
            <i class="fa fa-refresh fa-fw"></i> Update
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
</script>
@endsection