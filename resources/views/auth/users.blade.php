@extends('layout')
@section('judul')
Users
@endsection
@section('konten')
<div class="row">
	<div class="x_panel">
		<div class="x_title">
			<h2><i class="fa fa-group"></i> Daftar Users<small></i> BWS NT I</small></h2>
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
		<a href="{{ url('/user/create') }}" class="btn btn-default submit"><i class="fa fa-plus"></i> Tambah User</a>
		<div class="table-responsive">
			<table id="datatable-responsive" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
				<thead>
					<tr role="row">
						<th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Nama User</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Position: activate to sort column ascending">Username</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Office: activate to sort column ascending">Divisi (Level)</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Age: activate to sort column ascending">Bergabung pada</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">Edit</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">Reset password</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-responsive" aria-label="Start date: activate to sort column ascending">Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach ($user as $u)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $u->nama_lengkap }}</td>
						<td>{{ $u->username }}</td>
						<td>{{ $u->belongsToDivisi->nama_departemen }}</td>
						<td>{{ $u->created_at }}</td>
						<td align="center">
							<a href="{{ url('user/'.$u->id.'/edit') }}" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="left" title="Ubah data user">
								<i class="fa fa-pencil"></i> Ubah
							</a>
						</td>
						<td align="center">
							<a href="{{ url('reset_pass/'.$u->id) }}" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="left" title="Reset password">
								<i class="fa fa-wrench fa-fw"></i> Ubah Password
							</a>
						</td>
						<td align="center">
							<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#KonfHapus{{$no}}"><i data-toggle="tooltip" data-placement="left" title="Hapus user" class="fa fa-trash-o"></i> Hapus</button>
						</td>
					</tr>
					<div class="modal fade" id="KonfHapus{{$no}}" role="dialog" style="display: none;">
						<div class="modal-dialog" style="margin-top: 260.5px;">
							<div class="modal-content">
								<div class="modal-header">
									<h4 align="center"><font color="D43F3A"><label class="fa fa-trash"></label></font> Anda Yakin?</h4>
								</div>
								<div class="modal-body">
									<center>
										<form action="{{ url('user/'.$u->id) }}" method="post">
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
@endsection