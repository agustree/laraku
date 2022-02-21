<!DOCTYPE html>
<html>
<head>
</head>

<a href="/equip/tambah"> + Tambah Pegawai Baru</a>
<br/>
<br/>
<table border="1">
	<tr>
		<th>Nama</th>
		<th>Stock</th>
		<th>Deskripsi</th>
	
	</tr>
	@foreach($equip as $p)
	<tr>
		<td>{{ $p->name }}</td>
		<td>{{ $p->Stock }}</td>
		<td>{{ $p->Deskripsi }}</td>
		
	<	<td>
		<a href="/pegawai/edit/{{ $p->name
		}}">Edit</a>
		|
		<a href="/pegawai/hapus/{{ $p->name
		}}">Hapus</a>
		</td>
	</tr>
	@endforeach
</table>
</html>