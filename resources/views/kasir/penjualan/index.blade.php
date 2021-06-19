@extends('layouts.index')
@section('sidebar')
    @include('layouts.kasirsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Penjualan</h4>
      </div>
    </div>


    <form action="" method="post">
        <div class="form-group">
            <label  class="form_label">No Faktur</label>
            <input type="text" class="form-control w-25" name="nama_distributor" placeholder="00001" readonly>
        </div>
        <div class="form-group">
            <label class="form_label">Judul Buku</label>
            <div class="form-inline">
                <input type="text" class="form-control w-25" name="judul" placeholder="" id="alamat" readonly>
                <button class="btn btn-primary mx-2">Lihat</button>
            </div>
        </div>
        <div class="form-group">
            <label  class="form_label">Harga Buku</label>
            <input type="text" class="form-control w-25" name="harga_buku" placeholder="" readonly>
        </div>
        <div class="form-group">
            <label  class="form_label">Jumlah Beli</label>
            <input type="text" class="form-control w-25" name="jumlah_beli" placeholder="">
        </div>
        <div class="form-group">
            <label  class="form_label">Total Harga</label>
            <input type="text" class="form-control w-25" name="total_harga" placeholder="" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
