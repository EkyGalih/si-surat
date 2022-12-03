@extends('layout')
@section('judul')
Data Distribusi Umum
@endsection
@section('konten')
@section('css')
<style>
	.chk{
    display:inline-block; 
    position:relative; 
    width:50px; 
    height:25px;}
 
	.chk::before{
    content:""; 
    display:inline-block; 
    position:relative; 
    width:50px; 
    height:25px; 
    background:#fff; 
    border:1px solid #ddd; 
    border-radius:30px; -moz-border-radius:30px;}
    .chk::after{
    content:""; 
    display:inline-block; 
    position:absolute; 
    width:21px; 
    height:21px; 
    border-radius:25px; -moz-border-radius:25px; 
    background:#eee; 
    left:3px; 
    top:3px; 
    transition:0.3s; -moz-transition:0.3s; -webkit-transition:0.3s; -khtml-transition:0.3s;}
    .chk:checked::after{
    left:27px; 
    background:#33aa55;}
</style>
@endsection
<div class="page-title">
	<div class="title_left">
		<h3>Form Distribusi Umum</h3>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Distribusi<small> Umum</small></h2>
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
				<form id="demo-form2" data-parsley-validate="" method="POST" action="{{ url('distribusi') }}" class="form-horizontal form-label-left" novalidate="">
					{{ csrf_field() }}
					<div class="col-md-6 col-sm-6 col-xs-6 pull-left">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asal_surat">Surat Dari : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<select name="smumum_id" class="select2_single form-control" tabindex="-1" id="distribusi">
									<option>Pilih..</option>
									@foreach($surat as $s)
									<option value="{{ $s->id }}">{{ $s->asal_surat }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="tgl_surat">Tanggal Surat : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" name="tgl_surat" class="form-control" readonly>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="no_surat">Nomor Surat : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" name="no_surat" class="form-control" readonly>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="perihal">Perihal : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" name="perihal" class="form-control" readonly>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="asal_surat">Diterima Tanggal : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" name="tgl_terima" class="form-control" readonly>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="tgl_surat">Nomor Agenda : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" name="no_agenda" class="form-control" readonly>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-3" for="no_surat">Diteruskan kepada : <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
							<textarea name="diteruskan" class="form-control" rows="5" readonly></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 pull-right">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tujuan"><span class="required"></span>
							</label>
							<div class="col-md-10 col-sm-10 col-xs-10">
								<table style="border-collapse: collapse;">
									<tbody>
									<?php $no=1; ?>
										@foreach ($divisi as $d)
										<tr>
										<td style="border: 1px solid; padding: 2px 8px;">{{$no}}</td>
										<td style="border: 1px solid; padding: 2px 8px;">{{ $d->nama_departemen }}</td>
										<td style="border: 1px solid; padding: 2px 8px;"><input type="checkbox" name="tujuan[]" class="chk" value="{{ $d->id }}"></td>
										</tr>
										<?php $no++; ?>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
								<button type="button" class="btn btn-danger"><i class="fa fa-remove"></i> Batal</button>
								<button type="submit" class="btn btn-info"><i class="fa fa-share-alt"></i> Distribusi</button>
							</div>
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
		$(document).ready(function () {
			$( "#distribusi" ).change(function() {
				var b = $("#distribusi").find(":selected").val();
				$.ajax({url: "/suratmasuk/"+b, success: function(result){
					var result = JSON.parse(result);
										// console.log(result);
										$("input[name='asal_surat']").val(result.asal_surat);
										$("input[name='tgl_surat']").val(result.tgl_surat);
										$("input[name='no_surat']").val(result.no_surat);
										$("input[name='perihal']").val(result.perihal);
										$("input[name='tgl_terima']").val(result.tgl_terima);
										$("input[name='no_agenda']").val(result.id);
										$("textarea[name='diteruskan']").val(result.diteruskan);
										 // $("input[name='id']").val(result.file);
										}});
			});
		});
	</script>
@endsection