@extends('layout')
@section('judul')
Form Tambah Disposisi
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>Form Disposisi</h3>
	</div>
	<div class="title_right">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Cari!</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form<small> Tambah Disposisi</small></h2>
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
				<form method="post" action="{{ url('suratUndangan') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<div class="col-sm-6 col-md-6 col-xs-6 pull-left">
						<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-3" for="tgl_terima">Tanggal Terima <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input id="tgl_terima" class="form-control" name="tgl_terima" required="required" type="text">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asal_surat">Asal Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="asal_surat" name="asal_surat" required="required" class="form-control">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="tgl_surat" name="tgl_surat" required="required" class="form-control">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_klasifikasi">Kode Klasifikasi <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<select name="kd_klasifikasi" required="required" class="select2_single form-control">
									<option>Pilih..</option>
									<option value="HK">HK (Hukum)</option>
									<option value="HL">HL (Hubungan Luar Negeri)</option>
									<option value="HM">HM (Hubungan Masyarakat)</option>
									<option value="IK">IK (Industri Konstruksi)</option>
									<option value="IP">IP (Ilmu Pengetahuan dan Teknologi</option>
									<option value="KJ">KJ (Kajian Kebijakan dan Strategi)</option>
									<option value="KP">KP (Kepegawaian)</option>
									<option value="KU">KU (Keuangan)</option>
									<option value="OR">OR (Organisasi dan Tata Kerja)</option>
									<option value="PA">PA (Pengolahan Data)</option>
									<option value="PD">PD (Pendidikan dan Latihan)</option>
									<option value="PL">PL (Perlengkapan)</option>
									<option value="PM">PM (Penanaman Modal)</option>
									<option value="PR">PR (Perencanaan)</option>
									<option value="PW">PW (Pengawasan)</option>
									<option value="TN">TN (Tanah)</option>
									<option value="UM">UM (Umum)</option>
									<option value="AM">AM (Air Minum)</option>
									<option value="AS">AS (Assainering)</option>
									<option value="AT">AT (Air Tanah)</option>
									<option value="BU">BU (Bangunan Umum)</option>
									<option value="IR">IR (Irigasi)</option>
									<option value="JB">JB (Jembatan)</option>
									<option value="JL">JL (Jalan)</option>
									<option value="KB">KB (Konstruksi Bangunan)</option>
									<option value="KL">KL (Kesehatan Lingukngan)</option>
									<option value="LP">LP (Lingkungan Permukinan)</option>
									<option value="PO">PO (Polder)</option>
									<option value="PP">PP (Pengamanan Pantai)</option>
									<option value="RW">RW (Rawa)</option>
									<option value="SI">SI (Sungai)</option>
									<option value="TR">TR (Tata Ruang)</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-xs-6 pull-right">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No.Surat <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="text" id="no_surat" name="no_surat" required="required" class="form-control">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="perihal">Perihal <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
							<textarea id="perihal" name="perihal" required="required" class="form-control"></textarea>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar <span class="required">*</span>
							</label>
							<div class="col-md-8 col-sm-8 col-xs-8">
								<input type="file" id="gambar" name="gambar" required="required" data-validate-length-range="100" class="form-control">
							</div>
							<input type="hidden" name="status_smund" value="proggress">
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="submit" class="btn btn-danger">Batal</button>
								<button id="send" type="submit" class="btn btn-success">Simpan</button>
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