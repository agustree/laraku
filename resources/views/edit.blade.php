<!DOCTYPE html>
<html>
<head>
<title>Tutorial Membuat CRUD Pada Laravel -
www.malasngoding.com</title>
</head>
	<body>
		<h2><a 
		href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
		<h3>Edit Pegawai</h3>
		<a href="/pegawai"> Kembali</a>
		<br/>
		<br/>
		@foreach($employe as $p)
		<form action="/employe/update" method="post">
		{{ csrf_field() }}
	    <input type="text" required="required" name="idpegawai" value="{{ $p->IdPegawai }}"><br/>
		Nama <input type="text" required="required" name="nama" 
		value="{{ $p->Nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" 
		value="{{ $p->Jabatan }}"> <br/>
		
	
		Alamat <textarea required="required" name="alamat">{{ $p->Alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
		</form>
		@endforeach
	</body>
</html>