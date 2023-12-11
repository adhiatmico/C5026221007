@extends('master2')
@section('Data Chat')
@section('konten')
<body>
    <br/>
    <br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 border">

            </div>
    <div class="col-6">
    @foreach($chat as $p)


    <div class="container" style="margin-left: 30px">
        <div class="form-group row">
            <label for="id" class="control-label col-sm-2">ID Chat:</label>
            <div class="col-xs-9">
                <input disabled type="text" required="required" name="idchat" value="{{ $p->id }}"/>
            </div>
        </div>


        <div class="form-group row">
            <label for="pesanchat" class="control-label col-sm-2">Pesan:</label>
            <div class="col-xs-9">
                <input disabled type="text" required="required" name="pesanchat" value="{{ $p->pesan }}"/>
            </div>
        </div>

        <a href="/chat" class="btn btn-primary">OK</a>
    </div>
       </div>
    </div>
</div>

    @endforeach
@endsection

