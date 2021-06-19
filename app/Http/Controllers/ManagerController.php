<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penjualan;

class ManagerController extends Controller
{
    public function index(){
        return view('manager.index');
    }

    public function semuaBuku(){
        $buku = Buku::all();

        return view('manager.laporan.semuaBuku', compact('buku'));
    }

    public function filterPenulis(){
        $buku = Buku::all();

        return view('manager.laporan.filterPenulis', compact('buku'));
    }

    public function cariPenulis(Request $request){
        $cari = $request->cari;

        $buku = Buku::where('penulis', 'like', "%".$cari."%")->paginate(5);

        return view('manager.laporan.filterPenulis', compact('buku'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function seringTerjual(){

        return view('manager.laporan.seringTerjual');
    }

    public function tidakTerjual(){

        return view('manager.laporan.tidakTerjual');
    }

    public function profil(){
        return view('manager.profil.index');
    }

    public function cetakFaktur(){
        return view('manager.laporan.cetakFaktur');
    }

    public function semuaPenjualan(){
        return view('manager.laporan.semuaPenjualan');
    }

    public function jualPertanggal(){
        return view('manager.laporan.jualPertanggal');
    }
}
