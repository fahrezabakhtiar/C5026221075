<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function indexkategori(){
        $kategori = DB::table('kategori')->pluck('Nama', 'ID');

        return view('indexkategori')->with('kategori', $kategori);
    }

    public function submitKategori(Request $request)
    {
        $request->validate([
            'indexkategori' => 'required|exists:kategori,ID',
        ]);

        $selectedOptionId = $request->input('indexkategori');

        return view('kategoriDipilih')->with('selectedOptionId', $selectedOptionId);
    }
}
