@extends('master2')
@section('Data Kursi')
@section('konten')
<body>
    <br/>
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 border">

            </div>
    <div class="col-6">
    @foreach($kursi as $p)


    <div class="container" style="margin-left: 30px">
        <div class="form-group row">
            <label for="kodekursi" class="control-label col-sm-2">Kode Kursi:</label>
            <div class="col-xs-9">
                <input disabled type="text" required="required" name="kodekursi" value="{{ $p->kodekursi }}"/>
            </div>
        </div>


        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Merk Kursi:</label>
            <div class="col-xs-9">
                <input disabled type="text" required="required" name="jabatan" value="{{ $p->merkkursi }}"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Stock Kursi:</label>
            <div class="col-xs-9">
                <input disabled type="number" required="required" name="umur" value="{{ $p->stockkursi }}"/>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="control-label col-sm-2">Tersedia:</label>
            <div class="col-xs-9">
                <input disabled required="required" name="alamat" rows="5" value="{{ $p->tersedia }}"/>
            </div>
        </div>
        <a href="/kursi" class="btn btn-primary">OK</a>
    </div>
       </div>
    </div>
</div>

    @endforeach
@endsection

