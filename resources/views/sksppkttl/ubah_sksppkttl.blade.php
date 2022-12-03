@extends('layout')
@section('judul')
Ubah Surat keluar SPPKTTL
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar Surat PPKTTL<small></i> BWS NT I</small></h2>
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
				<form method="post" action="{{ url('sksppkttl/'.$surat->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal Surat Pemohon<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="perihal" class="select2_single form-control" tabindex="-1" id="skppd">
								@foreach ($file as $f)
								<option value="{{ $f->id }}" @if($f->id == $surat->filesk_id) selected @endif>{{ $f->perihal }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="staff_bagian">Pemohon<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" value="{{ $surat->staff_bagian }}" name="staff_bagian" required="required" class="form-control col-md-6 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat<span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="text" id="tgl_surat" value="{{$surat->tgl_surat}}" name="tgl_surat" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Kode Klarifikasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="kd_klasifikasi" required="required" class="select2_single form-control">
								<option>Pilih..</option>
								<option value="HK" @if($surat->kd_klasifikasi == 'HK') selected @endif>HK (Hukum)</option>
								<option value="HL" @if($surat->kd_klasifikasi == 'HL') selected @endif>HL (Hubungan Luar Negeri)</option>
								<option value="HM" @if($surat->kd_klasifikasi == 'HM') selected @endif>HM (Hubungan Masyarakat)</option>
								<option value="IK" @if($surat->kd_klasifikasi == 'IK') selected @endif>IK (Industri Konstruksi)</option>
								<option value="IP" @if($surat->kd_klasifikasi == 'IP') selected @endif>IP (Ilmu Pengetahuan dan Teknologi</option>
								<option value="KJ" @if($surat->kd_klasifikasi == 'KJ') selected @endif>KJ (Kajian Kebijakan dan Strategi)</option>
								<option value="KP" @if($surat->kd_klasifikasi == 'KP') selected @endif>KP (Kepegawaian)</option>
								<option value="KU" @if($surat->kd_klasifikasi == 'KU') selected @endif>KU (Keuangan)</option>
								<option value="OR" @if($surat->kd_klasifikasi == 'OR') selected @endif>OR (Organisasi dan Tata Kerja)</option>
								<option value="PA" @if($surat->kd_klasifikasi == 'PA') selected @endif>PA (Pengolahan Data)</option>
								<option value="PD" @if($surat->kd_klasifikasi == 'PD') selected @endif>PD (Pendidikan dan Latihan)</option>
								<option value="PL" @if($surat->kd_klasifikasi == 'PL') selected @endif>PL (Perlengkapan)</option>
								<option value="PM" @if($surat->kd_klasifikasi == 'PM') selected @endif>PM (Penanaman Modal)</option>
								<option value="PR" @if($surat->kd_klasifikasi == 'PR') selected @endif>PR (Perencanaan)</option>
								<option value="PW" @if($surat->kd_klasifikasi == 'PW') selected @endif>PW (Pengawasan)</option>
								<option value="TN" @if($surat->kd_klasifikasi == 'TN') selected @endif>TN (Tanah)</option>
								<option value="UM" @if($surat->kd_klasifikasi == 'UM') selected @endif>UM (Umum)</option>
								<option value="AM" @if($surat->kd_klasifikasi == 'AM') selected @endif>AM (Air Minum)</option>
								<option value="AS" @if($surat->kd_klasifikasi == 'AS') selected @endif>AS (Assainering)</option>
								<option value="AT" @if($surat->kd_klasifikasi == 'AT') selected @endif>AT (Air Tanah)</option>
								<option value="BU" @if($surat->kd_klasifikasi == 'BU') selected @endif>BU (Bangunan Umum)</option>
								<option value="IR" @if($surat->kd_klasifikasi == 'IR') selected @endif>IR (Irigasi)</option>
								<option value="JB" @if($surat->kd_klasifikasi == 'JB') selected @endif>JB (Jembatan)</option>
								<option value="JL" @if($surat->kd_klasifikasi == 'JL') selected @endif>JL (Jalan)</option>
								<option value="KB" @if($surat->kd_klasifikasi == 'KB') selected @endif>KB (Konstruksi Bangunan)</option>
								<option value="KL" @if($surat->kd_klasifikasi == 'KL') selected @endif>KL (Kesehatan Lingukngan)</option>
								<option value="LP" @if($surat->kd_klasifikasi == 'LP') selected @endif>LP (Lingkungan Permukinan)</option>
								<option value="PO" @if($surat->kd_klasifikasi == 'PO') selected @endif>PO (Polder)</option>
								<option value="PP" @if($surat->kd_klasifikasi == 'PP') selected @endif>PP (Pengamanan Pantai)</option>
								<option value="RW" @if($surat->kd_klasifikasi == 'RW') selected @endif>RW (Rawa)</option>
								<option value="SI" @if($surat->kd_klasifikasi == 'SI') selected @endif>SI (Sungai)</option>
								<option value="TR" @if($surat->kd_klasifikasi == 'TR') selected @endif>TR (Tata Ruang)</option>
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No Surat<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="no_surat" value="{{ $surat->no_surat }}" name="no_surat" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" class="btn btn-default" onclick="history.back(-1)">Batal</button>
							<button id="send" type="submit" class="btn btn-warning"><i class="fa fa-refresh"></i> Update</button>
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
		$('#tgl_surat').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
		}, function(start, end, label) {
			console.log(start.toISOString(), end.toISOString(), label);
		});
	});
	$(document).ready(function () {
		$( "#skppd" ).change(function() {
			var b = $("#skppd").find(":selected").val();
			$.ajax({url: "/filesk/"+b, success: function(result){
				var result = JSON.parse(result);
										// console.log(result);
										$("input[name='no_surat']").val(result.id);
										$("input[name='filesk_id']").val(result.id);
										$("input[name='staff_bagian']").val(result.staff_bagian);
										$("input[name='perihal']").val(result.perihal);
										$("input[name='tgl_surat']").val(result.created_at);
										$("input[name='file']").val(result.file);
									}});
		});
	});
</script>
@endsection