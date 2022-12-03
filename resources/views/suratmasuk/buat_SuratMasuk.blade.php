@extends('layout')
@section('judul')
Tambah Surat Masuk
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>
			Form Surat Masuk
		</h3>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2>Form Surat Masuk<small> BWS NT I</small></h2>
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
				<span class="section">Input Data</span>
				<form method="post" action="{{ url('suratmasuk') }}" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>
					{{ csrf_field() }}
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_terima">Tanggal Terima <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="tgl_terima" class="form-control col-md-7 col-xs-12" data-validate-length-range="8" data-validate-words="8" name="tgl_terima" required="required" type="date">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="asal_surat">Asal Surat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="asal_surat" name="asal_surat" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tgl_surat">Tanggal Surat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="date" id="tgl_surat" name="tgl_surat" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="kd_klasifikasi">Kode Klasifikasi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<!-- <input type="text" id="kd_klasifikasi" name="kd_klasifikasi" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12"> -->
							<select id="statessm" name="kd_klasifikasi" required="required" class="form-control col-md-7" col-xs-12>
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
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_surat">No.Surat <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="no_surat" name="no_surat" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="perihal">Perihal <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="text" id="perihal" name="perihal" required="required" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="item form-group">
						<label for="password" class="control-label col-md-3">Diteruskan <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="diteruskan" type="text" name="diteruskan" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
						</div>
					</div>
					<div class="item form-group">
						<label for="tgl_disposisi" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Disposisi</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input id="tgl_disposisi" type="date" name="tgl_disposisi" class="form-control col-md-7 col-xs-12" required="required">
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="isi_disposisi">Isi Disposisi <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<textarea id="isi_disposisi" required="required" name="isi_disposisi" class="form-control col-md-7 col-xs-12"></textarea>
						</div>
					</div>
					<div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="file" id="gambar" name="gambar" required="required" data-validate-length-range="100" class="form-control col-md-7 col-xs-12">
						</div>
					</div>
					<div class="ln_solid"></div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-3">
							<button type="submit" class="btn btn-primary">Cancel</button>
							<button id="send" type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection