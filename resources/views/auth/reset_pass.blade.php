@extends('layout')
@section('judul')
Tambah User
@endsection
@section('konten')
<div class="row">
  <div class="x_panel">
    <div class="x_title">
      <h2>Reset Password<small> {{ $pass->divisi }}</small></h2>
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
    <form action="{{ url('changePass/'.$pass->id) }}" method="post" class="form-horizontal form-label-left" novalidate>
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">New Password<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12" autofocus>
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Confirm Password<span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-default">
              Cancel
            </button>
            <button id="send" type="submit" class="btn btn-warning">
              <i class="fa fa-warning fa-fw"></i> Change
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection