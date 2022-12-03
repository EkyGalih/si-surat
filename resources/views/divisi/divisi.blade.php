@extends('layout')
@section('judul', 'BIDANG')
@section('konten')
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-building"></i> Bidang<small></i> BPKAD Prov.NTB</small></h2>
                    @if (Auth::user()->jenis_user == 'admin')
                        <a href="{{ url('/divisi/create') }}" class="btn btn-default submit" style="float: right;"><i
                                class="fa fa-plus"></i> Tambah Bidang</a>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <table id="datatable-responsive" class="table table-striped table-hover dataTable no-footer dtr-inline"
                    role="grid" aria-describedby="datatable-buttons_info">
                    <thead>
                        <tr role="row">
                            <th class="bSorted" tabindex="0" aria-controls="datatable-responsive" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">No</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable-responsive"
                                aria-label="Position: activate to sort column ascending">Nama Bidang</th>
                            @if (Auth::user()->divisi == 'admin')
                                <th class="sorting" tabindex="0" aria-controls="datatable-responsive"
                                    aria-label="Age: activate to sort column ascending"></th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisi as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama_departemen }}</td>
                                @if (Auth::user()->jenis_user == 'admin')
                                    <td>
                                        <div class="btn-group">
											<a href="{{ url('divisi/' . $d->id . '/edit') }}" class="btn btn-warning btn-sm">
												<i class="fa fa-edit"></i>
											</a>
											<button type="button" class="btn btn-danger btn-sm" onclick="deleteData('{{ route('divisi-admin.destroy', $d->id) }}')">
												<i class="fa fa-trash"></i>
											</button>
										</div>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
				{{ $divisi->links() }}
            </div>
        </div>
    </div>
@endsection
