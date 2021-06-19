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
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">Kode Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">NO ISBN</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Stok</th>
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
                <td>{{ $bk->stok }}</td>

            </tr>

            @endforeach
        </tbody>
    </table>
    </div>
@endsection

