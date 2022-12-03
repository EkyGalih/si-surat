@extends('layout')
@section('judul')
Ubah Surat Masuk Umum
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Ubah Surat Masuk
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Ubah Data<small> Surat Masuk Umum</small></h2>
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
				<form method="post" action="{{ url('updateSuratMasuk/'.$data->id) }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
					<div class="col-sm-6 col-md-6 col-xs-6 pull-left">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_terima">Tanggal Terima <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input id="tgl_terima" class="form-control col-md-7 col-xs-12" name="tgl_terima" value="{{ $data->tgl_terima }}" required="required" type="text">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asal_surat">Asal Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="asal_surat" name="asal_surat" value="{{ $data->asal_surat }}" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="tgl_surat" name="tgl_surat" value="{{ $data->tgl_surat }}" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_klasifikasi">Kode Klasifikasi <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<select name="kd_klasifikasi" class="select2_single form-control">
									<option>Pilih..</option>
									<option value="HK" @if($data->kd_klasifikasi == 'HK') selected @endif>HK (Hukum)</option>
									<option value="HL" @if($data->kd_klasifikasi == 'HL') selected @endif>HL (Hubungan Luar Negeri)</option>
									<option value="HM" @if($data->kd_klasifikasi == 'HM') selected @endif>HM (Hubungan Masyarakat)</option>
									<option value="IK" @if($data->kd_klasifikasi == 'IK') selected @endif>IK (Industri Konstruksi)</option>
									<option value="IP" @if($data->kd_klasifikasi == 'IP') selected @endif>IP (Ilmu Pengetahuan dan Teknologi</option>
									<option value="KJ" @if($data->kd_klasifikasi == 'KJ') selected @endif>KJ (Kajian Kebijakan dan Strategi)</option>
									<option value="KP" @if($data->kd_klasifikasi == 'KP') selected @endif>KP (Kepegawaian)</option>
									<option value="KU" @if($data->kd_klasifikasi == 'KU') selected @endif>KU (Keuangan)</option>
									<option value="OR" @if($data->kd_klasifikasi == 'OR') selected @endif>OR (Organisasi dan Tata Kerja)</option>
									<option value="PA" @if($data->kd_klasifikasi == 'PA') selected @endif>PA (Pengolahan Data)</option>
									<option value="PD" @if($data->kd_klasifikasi == 'PD') selected @endif>PD (Pendidikan dan Latihan)</option>
									<option value="PL" @if($data->kd_klasifikasi == 'PL') selected @endif>PL (Perlengkapan)</option>
									<option value="PM" @if($data->kd_klasifikasi == 'PM') selected @endif>PM (Penanaman Modal)</option>
									<option value="PR" @if($data->kd_klasifikasi == 'PR') selected @endif>PR (Perencanaan)</option>
									<option value="PW" @if($data->kd_klasifikasi == 'PW') selected @endif>PW (Pengawasan)</option>
									<option value="TN" @if($data->kd_klasifikasi == 'TN') selected @endif>TN (Tanah)</option>
									<option value="UM" @if($data->kd_klasifikasi == 'UM') selected @endif>UM (Umum)</option>
									<option value="AM" @if($data->kd_klasifikasi == 'AM') selected @endif>AM (Air Minum)</option>
									<option value="AS" @if($data->kd_klasifikasi == 'AS') selected @endif>AS (Assainering)</option>
									<option value="AT" @if($data->kd_klasifikasi == 'AT') selected @endif>AT (Air Tanah)</option>
									<option value="BU" @if($data->kd_klasifikasi == 'BU') selected @endif>BU (Bangunan Umum)</option>
									<option value="IR" @if($data->kd_klasifikasi == 'IR') selected @endif>IR (Irigasi)</option>
									<option value="JB" @if($data->kd_klasifikasi == 'JB') selected @endif>JB (Jembatan)</option>
									<option value="JL" @if($data->kd_klasifikasi == 'JL') selected @endif>JL (Jalan)</option>
									<option value="KB" @if($data->kd_klasifikasi == 'KB') selected @endif>KB (Konstruksi Bangunan)</option>
									<option value="KL" @if($data->kd_klasifikasi == 'KL') selected @endif>KL (Kesehatan Lingukngan)</option>
									<option value="LP" @if($data->kd_klasifikasi == 'LP') selected @endif>LP (Lingkungan Permukinan)</option>
									<option value="PO" @if($data->kd_klasifikasi == 'PO') selected @endif>PO (Polder)</option>
									<option value="PP" @if($data->kd_klasifikasi == 'PP') selected @endif>PP (Pengamanan Pantai)</option>
									<option value="RW" @if($data->kd_klasifikasi == 'RW') selected @endif>RW (Rawa)</option>
									<option value="SI" @if($data->kd_klasifikasi == 'SI') selected @endif>SI (Sungai)</option>
									<option value="TR" @if($data->kd_klasifikasi == 'TR') selected @endif>TR (Tata Ruang)</option>
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No.Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="no_surat" name="no_surat" value="{{ $data->no_surat }}" required="required" class="form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="perihal">Perihal <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input id="perihal" type="text" name="perihal" value="{{ $data->perihal }}" class="optional form-control col-md-7 col-xs-12">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i> Batal</button>
								<button id="send" type="submit" class="btn btn-success"><i class="fa fa-save fa-fw"></i> Simpan</button>
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
<script type="text/javascript">
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
		$('#tgl_terima').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
		}, function(start, end, label) {
			console.log(start.toISOString(), end.toISOString(), label);
		});
		$('#tgl_disposisi').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
		}, function(start, end, label) {
			console.log(start.toISOString(), end.toISOString(), label);
		});
	});
</script>
@endsection