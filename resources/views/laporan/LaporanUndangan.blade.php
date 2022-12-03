<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table{
			font-family: sans-serif;
			color: #232323;
			border-collapse: collapse;
			width: 100%;
			margin-right: 10px;
			margin-left: 10px;
			margin-top: 1px;
			margin-bottom: 1px;
		}
		table, th, td {
			border: 1px solid #999;
			padding: 8px 20px;
		}
	}
</style>
</head>
<body>
	<center>
		<img src="Gambar/cover.png" width="100%" height="40%">
		<h1>Laporan Surat Masuk Undangan</h1>
		<table>
			<thead>
				<tr>
					<th>#</th>
					<th align="center">Tanggal Terima</th>
					<th align="center">Asal Surat</th>
					<th align="center">Tanggal Surat</th>
					<th align="center">Kode Klasifikasi</th>
					<th align="center">No.Surat</th>
					<th align="center">Perihal</th>
					<th align="center">Tanggal Disposisi</th>
					<th align="center">Isi Disposisi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				@foreach($undangan as $u)
				<tr>
					<td>{{ $no }}</td>
					<td align="center">{{ $u->tgl_terima }}</td>
					<td>{{ $u->asal_surat }}</td>
					<td align="center">{{ $u->tgl_surat }}</td>
					<td align="center">{{ $u->kd_klasifikasi }}</td>
					<td align="center">{{ $u->no_surat }}</td>
					<td>{{ $u->perihal }}</td>
					<td align="center">{{ $u->updated_at }}</td>
					<td>{{ $u->isi_disposisi }}</td>
				</tr>
				<?php $no++; ?>
				@endforeach
			</tbody>
		</table><br/><br/><br/>
	</center>
	<p>Mataram, ______________<br/><strong>Kepala Balai Wilayah Sungai<br/>Nusa Tenggara I,</strong><br/><br/><br/><br/>(<strong>Ir.Suryo Edi Purnomo, M.E</strong>)<br/>NIP : 19660206 199502 1001</p>
</body>
</html>