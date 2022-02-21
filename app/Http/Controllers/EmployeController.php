<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
        public function index()
 {
 // mengambil data dari table pegawai
 $employe = DB::table('employe')->get();
 // mengirim data pegawai ke view index
 return view('employe',['employe' => $employe]);
 }
 
     public function add()
 {
 return view('add');
 }
 
 public function store(Request $request)
{


$row_count = DB::table('employe')->where('Nama', $request->nama)->count();

//check if any subscription plan exists
if($row_count == 0)
{ 
  DB::table('employe')->insert([
'Nama' => $request->nama,
'Alamat' => $request->alamat,
'Jabatan' => $request->jabatan ]);
}else{
	// dump('tes t');
}		  
// insert data ke table pegawai



// alihkan halaman ke halaman pegawai
return redirect('/employe');
}

public function edit($idpeg){

 $employe = DB::table('employe')->where('IdPegawai',11)->get(); 
// passing data pegawai yang didapat ke view edit.blade.php

return view('edit',['employe' => $employe]);


}

public function update(Request $request)
{
// update data pegawai

DB::table('employe')
->where('IdPegawai',$request->idpegawai)
->update([
'Nama' => $request->nama,
'Jabatan' => $request->jabatan,
'Alamat' => $request->alamat
]);


// alihkan halaman ke halaman pegawai
return redirect('/employe');
}

public function hapus($id)
{
// menghapus data pegawai berdasarkan id yang dipilih
DB::table('employe')->where('IdPegawai',$id)->delete();
// alihkan halaman ke halaman pegawai
return redirect('/employe');

}

}
