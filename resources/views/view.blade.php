    @extends('master2')
    @section('Data Pegawai')
    @section('konten')
    <body>
        <br/>
        <br/>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 border">

                </div>
        <div class="col-6">
        @foreach($pegawai as $p)


        <div class="container" style="margin-left: 30px">

            <div class="form-group row">
                <label for="nama" class="control-label col-sm-2">Nama:</label>
                <div class="col-xs-9">
                    <input disabled type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"/>
                </div>
            </div>


            <div class="form-group row">
                <label for="nama" class="control-label col-sm-2">Jabatan:</label>
                <div class="col-xs-9">
                    <input disabled type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="control-label col-sm-2">Umur:</label>
                <div class="col-xs-9">
                    <input disabled type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"/>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="control-label col-sm-2">Alamat:</label>
                <div class="col-xs-9">
                    <textarea disabled required="required" name="alamat" rows="5">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <a href="/pegawai" class="btn btn-primary">OK</a>
        </div>
           </div>
        </div>
    </div>

        @endforeach
    @endsection

