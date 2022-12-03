@extends('layout')
@section('judul')
Surat Masuk Undangan
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar Surat<small></i> undangan</small></h2>
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
			@if(Session::has('success'))
				<div class="alert alert-success" id="Pesan">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
					<label class="fa fa-check"></label> {{ Session::pull('success') }}
				</div>
				@endif
				<table id="datatable-responsive" class="table table-striped table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable" style="width: 1031px;">
					<thead>
						<tr role="row">
							<th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">No Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Tanggal Terima</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Asal Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Tanggal Surat</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Kode Klarifikasi</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Perihal</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Diteruskan</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Tgl Disposisi</th>
							@if(Auth::user()->divisi != 'KETUA BWS NT I')
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Isi Disposisi</th>
							@endif
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">#Status Disposisi</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">#File Surat</th>
							@if(Auth::user()->divisi == 'KETUA BWS NT I')
							<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Start date: activate to sort column ascending">#Disposisi</th>
							@endif
							@if(Auth::user()->divisi == 'Agendaris')
							<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Start date: activate to sort column ascending">#Ubah</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Start date: activate to sort column ascending">#Hapus</th>
							@endif
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						@foreach ($data as $d)
						<tr role="row" class="odd">
							<td align="center">{{ $no }}</td>
							<td align="center">{{$d->no_surat}}</td>
							<td align="center">{{$d->tgl_terima}}</td>
							<td>{{$d->asal_surat}}</td>
							<td align="center">{{$d->tgl_surat}}</td>
							<td align="center">{{$d->kd_klasifikasi}}</td>
							<td>{{$d->perihal}}</td>
							<td>
								@for($i = 0; $i < sizeof($d->diteruskan); $i++)
								{{ $d->diteruskan[$i] }},
								@endfor
							</td>
							<td align="center">{{$d->updated_at}}</td>
							@if(Auth::user()->divisi != 'KETUA BWS NT I')
							<td align="center">{{$d->isi_disposisi}}</td>
							@endif
							@if($d->status_smund == 'proggress' && Auth::user()->divisi == 'KETUA BWS NT I')
							<td><label class="label label-warning" data-toggle="tooltip" data-placement="left" title="Dalam proses"><i class="fa fa-clock-o"></i> Progress</label></td>
							@elseif($d->status_smund == 'unread' && Auth::user()->divisi == 'KETUA BWS NT I')
							<td><label class="label label-default" data-toggle="tooltip" data-placement="left" title="Terkirim ke Agendaris"><i class="fa fa-send"></i> Delivered</label></td>
							@elseif($d->status_smund == 'read' && Auth::user()->divisi == 'KETUA BWS NT I')
							<td><label class="label label-success" data-toggle="tooltip" data-placement="left" title="Done"><i class="fa fa-check"></i> Done</label></td>
							@elseif($d->status_smund == 'proggress' && Auth::user()->divisi == 'Agendaris')
							<td><label class="label label-default" data-toggle="tooltip" data-placement="left" title="Terkirim ke Ketua"><i class="fa fa-send"></i> Delivered</label></td>
							@elseif($d->status_smund == 'unread' && Auth::user()->divisi == 'Agendaris')
							<td>
								<a href="{{ url('swicth_status_undangan/'.$d->id) }}" data-toggle="tooltip" data-placement="left" title="Ubah status surat" class="btn btn-warning btn-xs">
									<i class="fa fa-eye"></i> Read
								</a>
							</td>
							@elseif($d->status_smund == 'read' && Auth::user()->divisi == 'Agendaris')
							<td><label class="label label-success" data-toggle="tooltip" data-placement="left" title="Done"><i class="fa fa-check"></i> Done</label></td>
							@endif
							<td>
								<a href="#" data-toggle="modal" data-target="#ModalUndangan{{$no}}">Baca Surat</a>
							</td>
							@if(Auth::user()->divisi == 'KETUA BWS NT I' && $d->status_smund == 'proggress')
							<td align="center">
								<a href="{{ url('suratUndangan/'.$d->id.'/edit') }}" class="btn btn-default btn-xs">
									<i class="fa fa-legal"></i> Disposisi
								</a>
							</td>
							@elseif(Auth::user()->divisi == 'KETUA BWS NT I' && $d->status_smund == 'unread')
							<td align="center">
								<a href="#" class="btn btn-default btn-xs" disabled>
									<i class="fa fa-ban"></i> Disposisi
								</a>
							</td>
							@elseif(Auth::user()->divisi == 'KETUA BWS NT I' && $d->status_smund == 'read')
							<td align="center">
								<a href="#" class="btn btn-default btn-xs" disabled>
									<i class="fa fa-ban"></i> Disposisi
								</a>
							</td>
							@endif
							@if(Auth::user()->divisi == 'Agendaris')
							<td align="center">
								<a href="{{ url('ubahUndangan/'.$d->id) }}" class="btn btn-warning btn-xs">
									<i class="fa fa-edit fa-fw"></i> Edit
								</a>
							</td>
							<td align="center">
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#KonfHapus{{$no}}">
									<i class="fa fa-trash-o"></i> Hapus
								</button>
							</td>
							@endif
						</tr>
						<div class="modal fade" id="ModalUndangan{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">From : {{$d->asal_surat}}</h4>
									</div>
									<div class="modal-body">
										<img height="100%" width="100%" src="{{ $d->gambar }}">
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
											<form action="{{ url('suratUndangan/'.$d->id) }}" method="post">
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
		}, 500);
	});
	setTimeout(function(){
		$("#Pesan").fadeOut('slow');
	}, 2500);
</script>
@endsection