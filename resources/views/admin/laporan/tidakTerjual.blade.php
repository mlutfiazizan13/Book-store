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
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">NO ISBM</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Total Jumlah Beli</th>
                <th scope="col">Total Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cecep Adventure part 1</td>
                <td>736388439</td>
                <td>Cecep</td>
                <td>Gramet</td>
                <td>75000</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Cecep Adventure part 2</td>
                <td>736388439</td>
                <td>Cecep</td>
                <td>Gramet</td>
                <td>75000</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Cecep Adventure part 3</td>
                <td>834826483</td>
                <td>Cecep</td>
                <td>Gramet</td>
                <td>75000</td>
                <td>0</td>
                <td>0</td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection

