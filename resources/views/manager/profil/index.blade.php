@extends('layouts.index')
@section('sidebar')
    @include('layouts.managersidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Setting Laporan</h4>
      </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There's a problem with your input.<br><br>
            <ul>
                @foreach ($errors as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Nama Perusahaan</label>
            <input type="text" class="form-control" name="nama_perusahaan" value="MALAZ BookStores">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Alamat</label>
            <textarea class="form-control" name="alamat">Cigombong</textarea>
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">No Telepon</label>
            <input type="number" class="form-control" name="no_tlpn" value="089529248087">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">No Handphone</label>
            <input type="number" class="form-control" name="np_hp" value="089529248087">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Web</label>
            <input type="text" class="form-control" name="web" value="malaz.wordpress.com">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Email</label>
            <input type="text" class="form-control" name="email" value="mlutfiazizan@gmail.com">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Logo</label>
            <input type="file" class="form-control" name="logo">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
</div>
@endsection
