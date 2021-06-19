@extends('layouts.index')
@section('sidebar')
    @include('layouts.kasirsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Data Semua Penjualan Buku</h4>
      </div>
    </div>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">No Faktur</th>
                <th scope="col">ISBN</th>
                <th scope="col">Jumlah Beli</th>
                <th scope="col">Harga Satuan</th>
                <th scope="col">PPN</th>
                <th scope="col">Diskon</th>
                <th scope="col">Total Harga</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </div>
@endsection

