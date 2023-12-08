@extends('master2')
@section('judulhalaman', 'Data Mahsiswa')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Mahasiswa</h3>

	<a href="/nilaikuliah"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="container" style="margin-left: 30px">

        <div class="form-group row">
            <label for="NRP" class="control-label col-sm-2">NRP</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="control-label col-sm-2">NilaiAngka</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="control-label col-sm-2">SKS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    </div>
@endsection
