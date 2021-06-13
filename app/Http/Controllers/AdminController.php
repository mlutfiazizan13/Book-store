<?php

namespace App\Http\Controllers;

use App\Models\Distributor;
use App\Models\Buku;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    //Distributor
    public function inputDistri(){
        $distributors = Distributor::all();

        return view('admin.distributor.createDistri', ['distributors' => $distributors]);
    }

    public function storeDistri(Request $request){
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Distributor::create($request->all());
        return redirect()->route('inputDistri')->with('alert', 'selamat');

    }

    public function editDistri(Distributor $distributors){
        return view('admin.distributor.editDistri', compact('distributors'));

    }

    public function updateDistri(Request $request, Distributor $distributors){
        $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
       ]);

        $distributors->update($request->all());

        return redirect()->route('inputDistri')->with('alert', 'Data Berhasil Dimasukan');
    }

    public function destroyDistri(Distributor $distributors)
    {
        $distributors->delete();

        return redirect()->back()->with('alert','Data berhasil terhapus');
    }


    //BUKU
    public function inputBuku(){
        $buku = Buku::all();

        return view('admin.buku.createBuku', ['buku' => $buku]);
    }

    public function storeBuku(Request $request){
        $request->validate([
            'id_buku' => 'required',
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon'=> 'required',
        ]);

        Buku::create($request->all());

        return redirect()->route('inputBuku')->with('success','Selamat');

    }

    public function semuaBuku(){
        $buku = Buku::all();

        return view('laporan.semuaBuku', compact('buku'));
    }

    public function filterPenulis(){
        $buku = Buku::all();

        return view('laporan.filterPenulis', compact('buku'));
    }

    public function cariPenulis(Request $request){
        $cari = $request->cari;

        $buku = Buku::where('penulis', 'like', "%".$cari."%")->paginate(5);

        return view('laporan.filterPenulis', compact('buku'))->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function seringTerjual(){
        $penjualan = Penjualan::all()->orderBy('jumlah_beli', 'asc');

        return view('laporan.seringTerjual', compact('penjualan'));
    }

}
