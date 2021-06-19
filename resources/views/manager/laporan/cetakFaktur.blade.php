@extends('layouts.index')
@section('sidebar')
    @include('layouts.managersidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Cetak Faktur Penjualan</h4>
      </div>
    </div>

    <form action="" method="post">
        <div class="form-group">
            <label for="nama_distributor" class="form_label">No Faktur</label>
            <input type="text" class="form-control" name="no_faktur" id="nama_distributor">
        </div>
        <button type="Lihat" class="btn btn-primary w-100">Lihat</button>
    </form>
</div>
@endsection
