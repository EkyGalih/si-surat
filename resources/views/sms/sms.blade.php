@extends('layout')
@section('judul')
SMS
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2><i class="fa fa-envelope"></i> Daftar SMS Gateway<small></i> BWS NT I</small></h2>
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
			<a href="{{ url('/sms/create') }}" class="btn btn-default submit">Tambah Data</a>
			<table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable-buttons_info" style="width: 1031px;">
				<thead>
					<tr role="row">
						<th class="bSorted" tabindex="0" aria-controls="datatable-buttons" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Position: activate to sort column ascending">No Pengirm</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Office: activate to sort column ascending">No Tujuan</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Age: activate to sort column ascending">Isi Pesan</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Age: activate to sort column ascending">Waktu Kirim</th>
						<th class="sorting" tabindex="0" aria-controls="datatable-buttons" aria-label="Age: activate to sort column ascending">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php $no=1; ?>
					@foreach ($data as $d)
					<tr>
						<td>{{ $no }}</td>
						<td>{{ $d->no_pengirim }}</td>
						<td>{{ $d->no_tujuan }}</td>
						<td>{{ $d->isi_pesan }}</td>
						<td>{{ $d->created_at }}</td>
						<td align="center">
							<form action="{{ url('sms/'.$d->id) }}" method="post">
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