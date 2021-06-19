@extends('layouts.index')
@section('sidebar')
    @include('layouts.adminsidebar')
@endsection
@section('content')
<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Buku</h4>
      </div>
    </div>

    <form action="{{ route('storeBuku') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="" class="form_label">Kode Buku</label>
            <input type="text" class="form-control" name="id_buku" placeholder="" >
        </div>
        <div class="form-group">
            <label for="" class="form_label">Judul Buku</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul">
        </div>
        <div class="form-group">
            <label for="" class="form_label">NO ISBN</label>
            <input type="number" class="form-control" name="noisbn" placeholder="NO ISBN">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Penulis</label>
            <input type="text" class="form-control" name="penulis" placeholder="Penulis">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" placeholder="Penerbit">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Tahun Terbit</label>
            <input type="number" class="form-control" name="tahun" placeholder="Tahun Terbit">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Stok</label>
            <input type="number" class="form-control" name="stok" placeholder="Stok">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Harga Pokok</label>
            <input type="number" class="form-control" name="harga_pokok" placeholder="Harga Pokok">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Harga jual</label>
            <input type="number" class="form-control" name="harga_jual" placeholder="Harga Jual">
        </div>
        <div class="form-group">
            <label for="" class="form_label">PPN</label>
            <input type="number" class="form-control" name="ppn" placeholder="PPN">
        </div>
        <div class="form-group">
            <label for="" class="form_label">Diskon</label>
            <input type="number" class="form-control w-50" name="diskon" placeholder="Diskon">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

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
                    <form action="" method="POST">
                        <a class="btn btn-primary" href="">edit</a>
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                    </form>
                </td>

            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
