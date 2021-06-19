@extends('layouts.index')
@section('sidebar')
    @include('layouts.adminsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Laporan Semua Buku</h4>
      </div>
    </div>
    <form action="{{ route('adminCariPenulis') }}" class="row" method="GET">
		<input type="text" class="col form-control" name="cari" placeholder="Cari penulis" value="{{ old('cari') }}">
		<input type="submit" class="col-1 btn btn-primary" value="CARI">
	</form>

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">NO ISBN</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Harga Pokok</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Diskon</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $bk )
            <tr>
                <td>{{ $bk->id_buku }}</td>
                <td>{{ $bk->judul }}</td>
                <td>{{ $bk->noisbn }}</td>
                <td>{{ $bk->penulis }}</td>
                <td>{{ $bk->penerbit }}</td>
                <td>{{ $bk->tahun }}</td>
                <td>{{ $bk->harga_pokok }}</td>
                <td>{{ $bk->harga_jual }}</td>
                <td>{{ $bk->diskon }}</td>
                <td>
                    <form action="{{ route('adminCariPenulis') }}" method="GET">
                        <a class="btn btn-primary" href="">edit</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
    </div>
@endsection

