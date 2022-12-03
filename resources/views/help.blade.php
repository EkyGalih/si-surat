@extends('layout')
@section('judul')
Bantuan
@endsection
@section('konten')
<div class="page-title">
	<div class="title_left">
		<h3>Area Banutan</h3>
	</div>
	<div class="title_right">
		<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-bars"></i> Menu <small>bantuan</small></h2>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
						@if(Auth::user()->divisi == 'Agendaris' or Auth::user()->divisi == 'KETUA BWS NT I')
						<li role="presentation" class="active"><a href="#disposisi" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-envelope"></i> Disposisi</a>
						</li>
						@endif
						@if(Auth::user()->divisi == 'Agendaris')
						<li role="presentation" class=""><a href="#SuratMasuk" role="tab" id="SuratMasuk-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-book"></i> Surat Masuk</a>
						</li>
						@endif
						@if(Auth::user()->divisi != 'KETUA BWS NT I')
						<li role="presentation" class="active"><a href="#SuratKeluar" role="tab" id="SuratKeluar-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-book"></i> Surat Keluar</a>
						</li>
						<li role="presentation" class=""><a href="#distribusi" role="tab" id="Distribusi-tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-share-square-o"></i> Distribusi</a>
						</li>
						@endif
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="disposisi" aria-labelledby="home-tab">
							@include('help/helpDisposisi')
						</div>
						<div role="tabpanel" class="tab-pane fade" id="SuratMasuk" aria-labelledby="SuratMasuk-tab">
							<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel">
									<a class="panel-heading collapsed" role="SuratMasuk-tab" id="SmUndangan" data-toggle="collapse" data-parent="#accordion" href="#smundangan" aria-expanded="false" aria-controls="collapseTwo">
										<h4 class="panel-title">Surat Masuk Undangan</h4>
									</a>
									<div id="smundangan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="SmUndangan">
										<div class="panel-body">
											<p><strong>Collapsible Item 2 data</strong>
											</p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
										</div>
									</div>
								</div>
								<div class="panel">
									<a class="panel-heading collapsed" role="SuratMasuk-tab" id="SmUmum" data-toggle="collapse" data-parent="#accordion" href="#smumum" aria-expanded="false" aria-controls="collapseThree">
										<h4 class="panel-title">Surat Masuk Umum</h4>
									</a>
									<div id="smumum" class="panel-collapse collapse" role="tabpanel" aria-labelledby="SmUmum">
										<div class="panel-body">
											<p><strong>Collapsible Item 3 data</strong>
											</p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="SuratKeluar" aria-labelledby="SuratKeluar-tab">
							<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel">
									<a class="panel-heading collapsed" role="SuratKeluar-tab" id="Skbws" data-toggle="collapse" data-parent="#accordion" href="#skbws" aria-expanded="false" aria-controls="collapseThree">
										<h4 class="panel-title">Surat Keluar BWS</h4>
									</a>
									<div id="skbws" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Skbws">
										<div class="panel-body">
											<p><strong>Collapsible Item 3 data</strong>
											</p>
											Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="distribusi" aria-labelledby="Distribusi-tab">
							@include('help/helpDistribusi')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection