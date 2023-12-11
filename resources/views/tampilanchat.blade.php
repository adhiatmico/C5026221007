@extends('master2')
@section('judulhalaman', 'Data Chat')

@section('konten')
    <h3>Chat</h3>


    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Pesan</th>
            <th>Lihat</th>
        </tr>

        @foreach ($chat as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td style="text-align: center">
                    @if($p->pesan == ':))')
                    <img src = {{asset('fotoeas/1.png')}} width="50px" height="50px" style="float:left">

                    @elseif($p->pesan == ':3')
                    <img src = {{asset('fotoeas/2.png')}} width="50px" height="50px" style="float:left">

                    @elseif($p->pesan == ':P')
                    <img src = {{asset('fotoeas/3.png')}} width="50px" height="50px" style="float:left">

                    @elseif($p->pesan == ':C')
                    <img src = {{asset('fotoeas/4.png')}} width="50px" height="50px" style="float:left">

                    @elseif($p->pesan == ';)')
                    <img src = {{asset('fotoeas/5.png')}} width="50px" height="50px" style="float:left">

                    @else
                    {{$p->pesan}}
                    @endif
                </td>
                <td>
                    <a href="/chat/viewchat/{{ $p->id }}" class="btn btn-success">View</a>
                </td>
            </tr>
                {{-- <td>{{ $p->Jumlah }}</td>
                <td>{{ number_format($p->Harga, 2, ',', '.') }}</td>
                <td>{{ number_format($p->Harga * $p->Jumlah, 2, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td> --}}

        @endforeach
    </table>

@endsection
