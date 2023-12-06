@extends('master2')
@section('judulhalaman', 'Data Pegawai')
@section('konten')
<body>

	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)

     <form action="/pegawai/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="container" style="margin-left: 30px">
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Nama</label>
            <div class="col-xs-9">
                <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Jabatan</label>
            <div class="col-xs-9">
                <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Umur</label>
            <div class="col-xs-9">
                <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Alamat</label>
            <div class="col-xs-9">
                <textarea required="required" name="alamat" rows="5">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </div>
	</form>
	@endforeach
@endsection
