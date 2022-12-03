@extends('layout')
@section('judul')
Disposisi Surat
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar Disposisi Surat<small></i> BWS NT I</small></h2>
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
			<!-- <a href="{{ url('/disposisi/create') }}" class="btn btn-default submit"><i class="fa fa-plus fa-fw"></i> Tambah Data</a> -->
			<table id="datatable" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable" style="width: 1031px;">
				<thead>
					<tr role="row">
						<th class="bSorted" tabindex="0" aria-controls="datatable" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Position: activate to sort column ascending">Surat Dari</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Office: activate to sort column ascending">Tanggal Surat</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">No Surat</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">Perihal</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">tanggal Terima</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">Diteruskan</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">Tanggal Disposisi</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">Isi Disposisi</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Age: activate to sort column ascending">File</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Start date: activate to sort column ascending">Disposisi</th>
						<th class="sorting" tabindex="0" aria-controls="datatable" aria-label="Start date: activate to sort column ascending">Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach ($data as $d)
					<tr role="row" class="odd">
						<td>{{ $no }}</td>
						<td>{{$d->surat_dari}}</td>
						<td>{{$d->tgl_surat}}</td>
						<td>{{$d->no_surat}}</td>
						<td>{{$d->perihal}}</td>
						<td>{{$d->tgl_terima}}</td>
						<td>{{$d->diteruskan}}</td>
						<td>{{$d->tgl_disposisi}}</td>
						<td>{{$d->isi_disposisi}}</td>
						<td>{{$d->file}}</td>
						<td>
							<a href="{{ url('suratmasuk/'.$d->id.'/edit') }}" class="btn btn-default btn-xs">
								<i class="fa fa-legal fa-fw"></i> Disposisi
							</a>
							</td>
							<td>
							<form action="{{ url('suratmasuk/'.$d->id) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button type="submit" class="btn btn-danger btn-xs">
									<i class="fa fa-trash-o"></i> Delete
								</button>
							</form>
						</td>
					</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>
			</table>
			<div class="dataTables_info" id="datatable-buttons" role="status" aria-live="polite"></div>
		</div>
	</div>
</div>
@endsection