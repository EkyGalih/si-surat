@extends('layout')
@section('judul')
Cetak Surat Keluar Satuan Kerja
@endsection
@section('konten')
<div class="row">
	<div class="col-md-6 col-sm-6 col-xs-6">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-print"></i> Cetak Laporan Surat Keluar SATKER<small></i> BWS NT I</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a href="#"><i class="fa fa-chevron-up"></i></a>
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
					<li><a href="#"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			@if(Session::has('fail'))
			<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<label class="fa fa-warning"></label> {{ Session::pull('fail') }}, Silahkan lihat data lengkap sksatker <a href="{{ url('sksatker') }}"><strong>disini</strong></a>
			</div>
			@endif
			<form action="{{ url('reportSksatker') }}" method="post">
				{{ csrf_field() }}
				<div class="item form-group">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<label class="control-label" for="tgl_surat">Cetak Berdasarkan <span class="required">*</span>
						</label>
						<select class="select2_single form-control" name="kd_klasifikasi" required="required" >
							<option>Pilih Kode..</option>
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
						</select><br/><br/>
						<button type="submit" class="btn btn-info btn-sm">
							<i class="fa fa-print"></i> Cetak
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