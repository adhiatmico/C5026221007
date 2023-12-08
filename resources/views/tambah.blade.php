@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="container" style="margin-left: 30px">
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Jabatan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Umur</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Alamat</label>
            <div class="col-xs-9">
                <textarea class="form-control" rows="5" type="text" id="alamat" name="alamat">
                </textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    </div>
@endsection
