@extends('layout')
@section('judul')
Surat Keluar BWS
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Form Pengajuan
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Pengajuan Nomor Surat<small> BWS NT I</small></h2>
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
				<form method="post" action="{{ url('filesk/'.$file->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="hidden" id="staff_bagian" value="{{ $file->staff_bagian }}" name="staff_bagian" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="perihal">Perihal<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="perihal" name="perihal" value="{{ $file->perihal }}" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="file">File Surat<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="file" name="file" value="{{ $file->file }}" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="submit" class="btn btn-default">Cancel</button>
							<button id="send" type="submit" class="btn btn-info"><i class="fa fa-send"></i> Kirim</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection