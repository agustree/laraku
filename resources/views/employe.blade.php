<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">
</head>
<body>

<a href="/employe/add"> + Tambah Pegawai Baru</a>
<br/>
<br/>
<table border="1">
	<tr>
	    <th>No Id</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Jabatan</th>
	
	</tr>
	@foreach($employe as $p)
	<tr>
	    <td>{{ $p->IdPegawai }}</td>
		<td>{{ $p->Nama }}</td>
		<td>{{ $p->Alamat }}</td>
		<td>{{ $p->Jabatan }}</td>
		
		<td>
		<a href="/employe/edit/{{ $p->IdPegawai }}">Edit</a>
		|
		<a href="/employe/hapus/{{ $p->IdPegawai }}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>
</body>
</html>