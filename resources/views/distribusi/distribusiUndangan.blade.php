<!-- View Distribusi -->
@extends('layout')
@section('judul')
Distribusi Undangan
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-share-alt"></i> Daftar Distribusi Surat<small></i> Undangan</small></h2>
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
				<table id="datatable-responsive" class="table table-striped table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
					@if(Auth::user()->divisi == 'Agendaris')
					<a href="{{ url('createUndangan') }}" class="btn btn-default submit"><i class="fa fa-plus"></i> Tambah Data</a>
					@endif
					<thead>
						<tr role="row">
							<th class="bSorted" tabindex="0" aria-controls="datatable-buttons" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Tujuan</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Asal Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Perihal</th>
							@if(Auth::user()->divisi == 'Agendaris')
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Ubah</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Hapus</th>
							@endif
							@if(Auth::user()->divisi != 'Agendaris' AND Auth::user()->divisi != 'Ketua BWS NT I' AND Auth::user()->divisi != 'Arsip BWS NT I' )
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">Baca</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">Status Baca</th>
							@endif
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						@foreach($undangan as $u)
						<tr>
							<td>{{$no}}</td>
							<td>{{$u->belongsToDivisi->nama_departemen}}</td>
							<td>{{$u->belongsToUndangan->asal_surat}}</td>
							<td>{{$u->belongsToUndangan->perihal}}</td>
							@if(Auth::user()->divisi == 'Agendaris')
							<td align="center">
								<a href="{{ url('editUndangan/'.$u->id) }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Ubah penerima surat">
									<i class="fa fa-edit"></i> Edit
								</a>
							</td>
							<td align="center">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#KonfHapus{{$no}}">
									<i class="fa fa-trash-o fa-fw" data-toggle="tooltip" data-placement="left" title="Hapus data surat"></i> Hapus
								</button>
							</td>
							@endif
							@if(Auth::user()->divisi != 'Agendaris' AND Auth::user()->divisi != 'Ketua BWS NT I' AND Auth::user()->divisi != 'Arsip BWS NT I' )
							<td>
								<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal{{$no}}"><i class="fa fa-eye"></i> Baca Surat</button>
							</td>
							<td align="center">
								@if($u->status_baca == 'read')
								<a class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="left" title="Done" disabled>
									<i class="fa fa-check"></i> Done
								</a>
								@elseif($u->status_baca == 'unread')
								<a href="{{ url('switch_distribusi/'.$u->id) }}" type="button" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="left" title="Ubah status surat">
									<i class="fa fa-clock-o"></i> Baca
								</a>
								@endif
								@endif
							</td>
						</tr>
						<div class="modal fade bacaSurat" id="modal{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">From : <u>{{$u->belongsToUndangan->asal_surat}}</u></h4>
									</div>
									<div class="modal-body">
										<center>
											<img src="{{ $u->belongsToUndangan->gambar }}" width="100%" height="100%">
										</center>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
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
											<form action="{{ url('distribusi/'.$u->id) }}" method="post">
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
				<div class="dataTables_info" id="datatable-responsive" role="status" aria-live="polite"></div>
			</div>
		</div>
	</div>
</div>
@endsection