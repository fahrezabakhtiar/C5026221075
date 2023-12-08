<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModemController extends Controller
{
    public function indexmodem()
    {
        // mengambil data dari table modem
        $modem = DB::table('modem')->paginate(15);
        // mengirim data modem ke view indexmodem
        return view('indexmodem', ['modem' => $modem]);
    }

    // method untuk menampilkan view form tambahmodem
    public function tambahmodem()
    {
        // memanggil view tambahmodem
        return view('tambahmodem');
    }

    // method untuk insert data ke table modem
    public function store(Request $request)
    {
        // insert data ke table modem
        DB::table('modem')->insert([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk edit data modem
    public function editmodem($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data modem yang didapat ke view editmodem.blade.php
        return view('editmodem', ['modem' => $modem]);
    }

    // update data modem
    public function update(Request $request)
    {
        // update data modem
        DB::table('modem')->where('kodemodem', $request->id)->update([
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia,
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk hapus data modem
    public function hapus($id)
    {
        // menghapus data modem berdasarkan id yang dipilih
        DB::table('modem')->where('kodemodem', $id)->delete();
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
        // mengambil data dari table modem sesuai pencarian data
        $modem = DB::table('modem')
            ->where('merkmodem', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data modem ke view index
        return view('indexmodem', ['modem' => $modem, 'cari' => $cari]);
    }

    public function viewmodem($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data modem yang didapat ke view view.blade.php
        return view('viewmodem', ['modem' => $modem]);
    }
}
