<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 8 ;
        $b = 5 ;

        $c = $a * $b ;
        return "<h1>Hasil Perkalian = " . $c . "</h1>";
    }

    public function biodata(){
    	$nama = "Rizky Fahreza Bakhtia";
        $alamat = "Surabaya";
        $umur = 19;

    	return view('biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showtime($jam){
        return $jam;
    }
    public function formulir(){
    	return view('formulir');
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
        $ipk = $request->input('ipk');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat. ", IPK : " .$ipk. ", Isi Asli : " .$request;
    }
}
