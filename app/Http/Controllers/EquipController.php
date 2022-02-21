<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EquipController extends Controller
{
     public function index()
 {
 // mengambil data dari table pegawai
 $equip = DB::table('equipment')->get();
 // mengirim data pegawai ke view index
 return view('index',['equip' => $equip]);
 }
}
