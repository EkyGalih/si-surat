@extends('layout')
@section('judul')
Tambah Divisi BWS
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Form Divisi BWS
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Divisi<small> BWS NT I</small></h2>
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
				<form method="post" action="{{ url('divisi') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama_departemen">Nama Divisi<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="nama_departemen" name="nama_departemen" required="required" class="form-control col-md-7 col-xs-12" autofocus>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" class="btn btn-danger">Batal</button>
							<button id="send" type="submit" class="btn btn-success">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection