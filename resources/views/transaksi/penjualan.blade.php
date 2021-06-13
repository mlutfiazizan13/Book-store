@extends('layouts.index')
@section('content')

<div class="container-fluid panel panel-default">
    <div class="panel-heading">
      <div class="panel-title">
        <h4>Form Penjualan</h4>
      </div>
    </div>
    <div class="panel-body">
      <form class="form form-vertical" method="post" name="myform">
        <div class="control-group">
          <label>No Faktur</label>
          <div class="controls">
            <input type="text" name="nama" setFocus class="form-control" value="" required placeholder="Masukan nama distributor">
          </div>
        </div>
        <div class="control-group">
          <label>Alamat</label>
          <div class="controls">
            <textarea class="form-control" name="alamat"></textarea>
          </div>
        </div>
        <div class="control-group">
          <label>Telpon</label>
          <div class="controls">
            <input type="number" name="telpon" class="form-control" value="" placeholder="Masukan Telpon">
          </div>
        </div>
         <div class="control-group">
          <label></label>
          <div class="controls">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </div>
        </div>
      </form>
    </div>
</div>

@endsection
