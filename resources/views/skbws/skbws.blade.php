@extends('layout')
@section('judul')
SKSBWS
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		@if(Session::has('success'))
		<div class="alert alert-success" id="Pesan">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
			<label class="fa fa-check"></label> {{ Session::pull('success') }}
		</div>
		@elseif(Session::has('plus'))
		<div class="alert alert-success" id="Pesan">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
			<label class="fa fa-check"></label> {{ Session::pull('plus') }}
		</div>
		@elseif(Session::has('ubah'))
		<div class="alert alert-success" id="Pesan">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
			<label class="fa fa-check"></label> {{ Session::pull('ubah') }}
		</div>
		@endif
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar Surat Keluar<small></i> BWS NT I</small></h2>
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
			<div class="table-responsive">
				<a href="{{ url('/skbws/create') }}" class="btn btn-default submit"><i class="fa fa-plus"></i> Tambah Data</a>
				<table id="datatable-responsive" class="table table-striped table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
					<thead>
						<tr role="row">
							<th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">No Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Staff bagian</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Tanggal Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Kode Klarifikasi</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Perihal</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">#File Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#No.Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Edit</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						@foreach ($skbws as $s)
						<tr>
							<td align="center">{{$no}}</td>
							<td>{{$s->no_surat}}</td>
							<td>{{$s->staff_bagian}}</td>
							<td align="center">{{$s->tgl_surat}}</td>
							<td align="center">{{$s->kd_klasifikasi}}</td>
							<td>{{$s->belongsToFilesk->perihal}}</td>
							<td>
								<a href="#" data-toggle="modal" data-target="#ModalSkbws{{$no}}">Baca Surat</a>
							</td>
							<td align="center">
								<a href="{{ url('uploadNoSurat/'.$s->filesk_id) }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Upload No.Surat">
									<i class="fa fa-send"></i> Kirim
								</a>
							</td>
							<td align="center">
								<a href="{{ url('skbws/'.$s->id.'/edit') }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Ubah data surat">
									<i class="fa fa-edit fa-fw"></i> Edit
								</a>
							</td>
							<td align="center">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#KonfHapus{{$no}}">
									<i class="fa fa-trash-o fa-fw" data-toggle="tooltip" data-placement="left" title="Hapus data surat"></i> Hapus
								</button>
							</td>
						</tr>
						<div class="modal fade" id="ModalSkbws{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">From : {{$s->staff_bagian}}</h4>
									</div>
									<div class="modal-body">
										<img src="{{ $s->belongsToFilesk->file }}">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>

								</div>
							</div>
						</div>
						<div class="modal fade" id="KonfHapus{{$no}}" role="dialog" style="display: none;">
							<div class="modal-dialog" style="margin-top: 260.5px;">
								<div class="modal-content">
									<div class="modal-header">
										<h4 align="center"><font color="D43F3A"><label class="fa fa-trash"></label></font> Anda Yakin?</h4>
									</div>
									<div class="modal-body">
										<center>
											<form action="{{ url('skbws/'.$s->id) }}" method="post">
												{{ csrf_field() }}
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-success">
													Ya
												</button>
												<button type="button" class="btn btn-danger" data-dismiss="modal">
													Tidak
												</button>
											</form>
										</center>
									</div>
								</div>
							</div>
						</div>
						<?php $no++; ?>
						@endforeach
					</tbody>
				</table>
			</div>
			<div class="dataTables_info" id="datatable-responsive" role="status" aria-live="polite"></div>
		</div>
	</div>
</div>
@endsection
@section('script_skbws')
<script>
	$(document).ready(function(){
		setTimeout(function(){
			$("#Pesan").fadeIn('slow');
		}, 1000);
	});
	setTimeout(function(){
		$("#Pesan").fadeOut('slow');
	}, 5500);
</script>
@endsection