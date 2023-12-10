@extends('master2')
@section('judulhalaman', 'Data Kursi')
@section('konten')

	<h3>Data Kursi</h3>

	<a href="/kursi"> Kembali</a>

	<br/>
	<br/>

	<form action="/kursi/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="container" style="margin-left: 30px">

        <div class="form-group row">
            <label for="merk_kursi" class="control-label col-sm-2">Merk Kursi</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="merk_kursi" name="merk_kursi">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock_kursi" class="control-label col-sm-2">Stock Kursi</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="stock_kursi" name="stock_kursi">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="control-label col-sm-2">Tersedia</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    </div>
@endsection
