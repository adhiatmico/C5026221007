@extends('master2')
@section('judulhalaman', 'Data Kursi')
@section('konten')
<body>

	<h3>Edit Kursi</h3>

	<a href="/kursi"> Kembali</a>

	<br/>
	<br/>

	@foreach($kursi as $p)

     <form action="/kursi/update" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="container" style="margin-left: 30px">
        <input type="hidden" name="kodekursi" value="{{ $p->kodekursi }}"> <br/>

        <div class="form-group row">
            <label for="merk_kursi1" class="control-label col-sm-2">Merk Kursi</label>
            <div class="col-xs-9">
                <input type="text" required="required" name="merk_kursi1" value="{{ $p->merkkursi }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stock_kursi1" class="control-label col-sm-2">Stock Kursi</label>
            <div class="col-xs-9">
                <input type="number" required="required" name="stock_kursi1" value="{{ $p->stockkursi }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="ter" class="control-label col-sm-2">Tersedia</label>
            <div class="col-xs-9">
                <input type="text" required="required" name="ter" value="{{ $p->tersedia }}">
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </div>
	</form>
	@endforeach
@endsection
