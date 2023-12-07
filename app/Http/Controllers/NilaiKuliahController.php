<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index2()
    {
        // mengambil data dari table nilai kuliah
        $nilaikuliah = DB::table('nilaikuliah')->get();
        // mengirim data nilai kuliah ke view index
        return view('index2', ['nilaikuliah' => $nilaikuliah]);
    }

    // method untuk menampilkan view form tambah nilai kuliah
    public function add()
    {
        // memanggil view tambah
        return view('add');
    }

    // method untuk insert data ke table nilai kuliah
    public function save(Request $request)
    {
        // insert data ke table nilai kuliah
        DB::table('nilaikuliah')->insert([
            'ID' => $request->ID,
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);
        // alihkan halaman ke halaman nilai kuliah
        return redirect('/nilaikuliah');
    }
}
