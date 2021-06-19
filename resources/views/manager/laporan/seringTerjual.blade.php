@extends('layouts.index')
@section('sidebar')
    @include('layouts.managersidebar')
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
                <td>heriputer</td>
                <td>12345</td>
                <td>Ucup</td>
                <td>Asep</td>
                <td>70000</td>
                <td>20</td>
                <td>5</td>
            </tr>
            <tr>
                <td>2</td>
                <td>test</td>
                <td>1234543</td>
                <td>Ahmad</td>
                <td>Gremed</td>
                <td>120000</td>
                <td>15</td>
                <td>13</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Bagus</td>
                <td>1212112</td>
                <td>Ibnu</td>
                <td>gramit</td>
                <td>120000</td>
                <td>14</td>
                <td>14</td>
            </tr>
            <tr>
                <td>4</td>
                <td>test</td>
                <td>123456</td>
                <td>test</td>
                <td>test</td>
                <td>100000</td>
                <td>10</td>
                <td>5</td>
            </tr>
            <tr>
                <td>4</td>
                <td>tes</td>
                <td>123456</td>
                <td>Asep</td>
                <td>mnt</td>
                <td>150000</td>
                <td>7</td>
                <td>7</td>
            </tr>

        </tbody>
    </table>
    </div>
@endsection

