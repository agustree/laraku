<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<h3>Data Karyawan</h3>
	
	<a href="/employe"> Kembali</a>
	<br/>
	<br/>
	<form action="/employe/store" method="post">
	{{ csrf_field() }}
	Nama <input type="text" name="nama" required="required"> <br/>
	Jabatan <input type="text" name="jabatan" required="required"> 
	<br/>
	Alamat <textarea name="alamat" required="required"></textarea> 
	<br/>
	<input type="submit" value="Simpan Data">
	</form>
</body>
</html>