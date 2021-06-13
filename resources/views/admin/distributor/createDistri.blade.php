@extends('layouts.index')
@section('sidebar')
    @include('layouts.adminsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Distributor</h4>
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

    <form action="{{ route('storeDistri') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Nama Distributor</label>
            <input type="text" class="form-control" name="nama_distributor" placeholder="Nama" id="nama_distributor">
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">Alamat</label>
            <textarea class="form-control" name="alamat" placeholder="alamat" id="alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="nama_distributor" class="form_label">No Telepon</label>
            <input type="text" class="form-control" name="telepon" placeholder="No Telepon" id="alamat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

  <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Distributor</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($distributors as $dts )
            <tr>
                <td>{{ $dts->id_distributor }}</td>
                <td>{{ $dts->nama_distributor }}</td>
                <td>{{ $dts->alamat }}</td>
                <td>{{ $dts->telepon }}</td>
                <td>
                    <a class="btn btn-primary" href="inputdistributor/{{ $dts->id_distributor }}/edit">edit</a>
                    <form action="{{ route('destroyDistri', $dts->id_distributor) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
