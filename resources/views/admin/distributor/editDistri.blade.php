@extends('layouts.index')
@section('sidebar')
    @include('layouts.adminsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Ubah Distributor</h4>
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

    <form action="{{ route('updateDistri', 'id_distributor') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nama Distributor</label>
            <input type="text" class="form-control" name="nama_distributor" placeholder="Nama" value="{{ $distributors->nama_distributor }}">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="">No Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="No Telepon">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
