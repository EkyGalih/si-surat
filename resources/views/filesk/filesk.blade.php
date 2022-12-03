@extends('layout')
@section('judul')
File Surat
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar Permintaan Surat<small></i> BWS NT I</small></h2>
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
				@if(Auth::user()->divisi != 'Agendaris')
				<a href="{{ url('/filesk/create') }}" class="btn btn-default submit"><i class="fa fa-plus"></i> Tambah Data</a>
				@endif
				<table id="datatable-responsive" class="table table-hover table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable" style="width: 1031px;">
					<thead>
						<tr role="row">
							<th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Pemohon</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Tanggal Pengajuan</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Perihal</th>
							@if(Auth::user()->divisi != 'Agendaris')
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">No Surat</th>
							@endif
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Status Permohonan</th>
							@if(Auth::user()->divisi == 'Agendaris')
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">File Surat</th>
							@endif
							@if(Auth::user()->divisi != 'Agendaris')
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Ubah</th>
							<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">#Hapus</th>
							@endif
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						@foreach ($file as $f)
						<tr>
							<td align="center">{{ $no }}</td>
							<td>{{ $f->staff_bagian }}</td>
							<td align="center">{{ $f->created_at }}</td>
							<td>{{ $f->perihal }}</td>
							@if(Auth::user()->divisi != 'Agendaris' && $f->status == 'unread')
							<td align="center">
								<a target="_blank" href="{{ $f->file }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Download No.Surat">
									<i class="fa fa-download"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi != 'Agendaris' && $f->status == 'read')
							<td align="center">
								<a target="_blank" href="{{ $f->file }}" type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Download No.Surat">
									<i class="fa fa-download"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi != 'Agendaris' && $f->status == 'proggress')
							<td align="center">
								<a type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Download No.Surat" disabled>
									<i class="fa fa-download"></i>
								</a>
							</td>
							@endif
							<td align="center">
								@if($f->status == 'proggress' && Auth::user()->divisi != 'Agendaris')
								<a class="label label-warning" data-toggle="tooltip" data-placement="left" title="sedang dalam proses">
									<i class="fa fa-clock-o"></i> Processing
								</a>
								@elseif($f->status == 'read' && Auth::user()->divisi != 'Agendaris')
								<a class="label label-success" data-toggle="tooltip" data-placement="left" title="Done">
									<i class="fa fa-check"></i> Done
								</a>
								@endif
								@if($f->status == 'unread' && Auth::user()->divisi != 'Agendaris')
								<a href="{{ url('switch_filesk/'.$f->id) }}" data-toggle="tooltip" data-placement="left" title="Proses" type="button" class="btn btn-default btn-xs">
									<i class="fa fa-eye"></i> Read
								</a>
								@elseif($f->status == 'proggress' && Auth::user()->divisi == 'Agendaris')
								<a class="label label-warning" data-toggle="tooltip" data-placement="left" title="proses">
									<i class="fa fa-clock-o"></i> Proses
								</a>
								@elseif($f->status == 'unread' && Auth::user()->divisi == 'Agendaris')
								<a class="label label-default" data-toggle="tooltip" data-placement="left" title="Terkirim ke {{$f->staff_bagian}}">
									<i class="fa fa-send"></i> Delivered
								</a>
								@elseif($f->status == 'read' && Auth::user()->divisi == 'Agendaris')
								<a class="label label-success" data-toggle="tooltip" data-placement="left" title="Done">
									<i class="fa fa-check"></i> Done
								</a>
								@endif
							</td>
							@if(Auth::user()->divisi == 'Agendaris' && $f->status == 'proggress')
							<td align="center">
								<a href="#" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalSurat{{$no}}" title="Lihat Surat">
									<i class="fa fa-eye"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi == 'Agendaris' && $f->status == 'unread')
							<td align="center">
								<a href="#" type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalProg{{$no}}" title="Download File Surat">
									<i class="fa fa-download"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi == 'Agendaris' && $f->status == 'read')
							<td align="center">
								<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#ModalSurat{{$no}}" title="Lihat Surat" disabled>
									<i class="fa fa-eye"></i>
								</button>
							</td>
							@endif
							@if(Auth::user()->divisi != 'Agendaris' && $f->status == 'proggress')
							<td align="center">
								<a href="{{ url('filesk/'.$f->id.'/edit') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Ubah data surat">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi != 'Agendaris' && $f->status == 'unread')
							<td align="center">
								<a href="{{ url('filesk/'.$f->id.'/edit') }}" type="button" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Ubah data surat">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							@elseif(Auth::user()->divisi != 'Agendaris' && $f->status == 'read')
							<td align="center">
								<a class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Data sudah tidak bisa diubah" disabled>
									<i class="fa fa-edit"></i>
								</a>
							</td>
							@endif
							@if(Auth::user()->divisi != 'Agendaris')
							<td align="center">
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#KonfHapus">
									<i class="fa fa-trash-o"></i>
								</button>
							</td>
							@endif
						</tr>
						<div class="modal fade" id="ModalSurat{{$no}}" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">From : {{$f->staff_bagian}}</h4>
									</div>
									<div class="modal-body">
										<img height="100%" width="100%" src="{{ $f->file }}">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>

								</div>
							</div>
						</div>
						<div class="modal fade" id="KonfHapus" role="dialog" style="display: none;">
							<div class="modal-dialog" style="margin-top: 260.5px;">
								<div class="modal-content">
									<div class="modal-header">
										<h4 align="center"><font color="D43F3A"><label class="fa fa-trash"></label></font> Anda Yakin?</h4>
									</div>
									<div class="modal-body">
										<center>
											<form action="{{ url('filesk/'.$f->id) }}" method="post">
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