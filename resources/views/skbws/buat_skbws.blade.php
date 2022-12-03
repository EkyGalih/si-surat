@extends('layout')
@section('judul')
Surat Keluar BWS
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Form Surat Keluar BWS
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form surat keluar<small> BWS NT I</small></h2>
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
				<form method="post" action="{{ url('skbws') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal Surat Pemohon<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name="perihal" class="select2_single form-control" tabindex="-1" id="sksbws">
								<option>Perihal</option>
								@foreach ($file as $f)
								<option value="{{ $f->id }}">{{ $f->perihal }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="staff_bagian">Pemohon<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" name="staff_bagian" required="required" class="form-control col-md-6 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat<span class="required">*</span>
						</label>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<input type="date" id="tgl_surat" name="tgl_surat" required="required" class="form-control col-md-7 col-xs-12" readonly>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Kode Klarifikasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
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
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No Surat<span class="required">*</span>
						</label>
						<div class="col-md-1 col-sm-1 col-xs-12">
							<input type="text" id="no_surat" name="no_surat" required="required" class="form-control col-md-7 col-xs-12" readonly>
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12">
							<input type="text" id="no_surat" name="tambahan" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="hidden" id="filesk_id" name="filesk_id" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="button" class="btn btn-default">Batal</button>
							<button id="send" type="submit" class="btn btn-info"><i class="fa fa-plus"></i> Simpan</button>
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
		$( "#sksbws" ).change(function() {
			var b = $("#sksbws").find(":selected").val();
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