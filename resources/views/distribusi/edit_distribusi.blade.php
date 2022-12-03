@extends('layout')
@section('judul')
Edit Distribusi Umum
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Design <small>different form elements</small></h2>
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
				<br>
				<form id="demo-form2" data-parsley-validate="" method="POST" action="{{ url('distribusi/'.$data->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate="">
					<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tujuan">Tujuan <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="tujuan" class="select2_single form-control">
								@foreach($divisi as $d)
								@if($d->id == $data->tujuan)
								<option value="{{$d->id}}" selected>{{$d->nama_departemen}}</option>
								@else
								<option value="{{$d->id}}">{{$d->nama_departemen}}</option>
								@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="button" class="btn btn-default" onclick="history.back(-1)">Cancel</button>
							<button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
						</div>
					</div>

				</form>
			</div>
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