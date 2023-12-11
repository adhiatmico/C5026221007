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
            @php
                $pesanArray = explode(' ', $p->pesan);
                $displayImage = false;
            @endphp

            @foreach ($pesanArray as $word)
                @if($word == ':))' || $word == ':3' || $word == ':P' || $word == ':C' || $word == ';)')
                    @php
                        $displayImage = true;
                        break;
                    @endphp
                @endif
            @endforeach

            @if($displayImage)
                @foreach ($pesanArray as $word)
                    @if($word == ':))')
                        <img src="{{ asset('fotoeas/1.png') }}" width="50px" height="50px">
                    @elseif($word == ':3')
                        <img src="{{ asset('fotoeas/2.png') }}" width="50px" height="50px">
                    @elseif($word == ':P')
                        <img src="{{ asset('fotoeas/3.png') }}" width="50px" height="50px">
                    @elseif($word == ':C')
                        <img src="{{ asset('fotoeas/4.png') }}" width="50px" height="50px">
                    @elseif($word == ';)')
                        <img src="{{ asset('fotoeas/5.png') }}" width="50px" height="50px">
                    @else
                        {{ $word }}
                    @endif
                    @endforeach
                    @else
                        {{ $p->pesan }}
                    @endif
                </td>
                <td>
                    <a href="/chat/viewchat/{{ $p->id }}" class="btn btn-success">View</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
