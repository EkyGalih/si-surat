<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			font-family: sans-serif;
			color: #232323;
			border-collapse: collapse;
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
		<h1>Laporan Surat Keluar SPPK Tata Laksana</h1>
		<table border="1">
			<thead>
				<tr>
					<th>#No</th>
					<th align="center">Divisi</th>
					<th align="center">Tanggal Surat</th>
					<th align="center">Kode Klasifikasi</th>
					<th align="center">No.Surat</th>
					<th align="center">Perihal</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; ?>
				@foreach($skppkttl as $s)
				<tr>
					<td align="center">{{ $no }}</td>
					<td>{{ $s->staff_bagian }}</td>
					<td align="center">{{ $s->tgl_surat }}</td>
					<td align="center">{{ $s->kd_klasifikasi }}</td>
					<td align="center">{{ $s->no_surat }}</td>
					<td>{{$s->belongsToFilesk->perihal}}</td>
				</tr>
				<?php $no++; ?>
				@endforeach
			</tbody>
		</table><br/><br/><br/>
	</center>
	<p>Mataram, ______________<br/><strong>Kepala Balai Wilayah Sungai<br/>Nusa Tenggara I,</strong><br/><br/><br/><br/>(<strong>Ir.Suryo Edi Purnomo, M.E</strong>)<br/>NIP : 19660206 199502 1001</p>
</body>
</html>