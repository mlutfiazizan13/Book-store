<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index(){
        return view('kasir.index');
    }

    public function penjualan(){
        return view('kasir.penjualan.index');
    }

    public function cetakFaktur(){
        return view('kasir.laporan.cetakFaktur');
    }

    public function semuaPenjualan(){
        return view('kasir.laporan.semuaPenjualan');
    }

    public function jualPertanggal(){
        return view('kasir.laporan.jualPertanggal');
    }
}
