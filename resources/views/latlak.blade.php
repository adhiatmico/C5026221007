@extends('master2')
@section('judulhalaman','Data Mahasiswa')
@section('konten')

<h3>Data Mahasiswa</h3>

<a href="/nilaikuliah/tambah2" class="btn-primary"> + Tambah data mahasiswa</a>

    <br/>
    <p>Cari Data Mahasiswa :</p>
        <form action="/nilaikuliah/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari ID .."
            value="{{ old("cari", isset($cari) ? $cari : '') }}">
            <input type="submit" value="CARI" class="btn btn-info">
        </form>
    <br/>

    <table class="table table-striped tabel-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>NilaiAngka</th>
                <th>SKS</th>
                <th>NilaiHuruf</th>
                <th>Bobot</th>



            </tr>
        @foreach($nilaikuliah as $p)
        <tr>
            <td>{{ $p->ID }}</td>
            <td>{{ $p->NRP }}</td>
            <td>{{ $p->NilaiAngka }}</td>
            <td>{{ $p->SKS }}</td>
            <td>
                @if ($p->NilaiAngka>=81)
                A
                @elseif ($p->NilaiAngka>=61)
                B
                @elseif ($p->NilaiAngka>=41)
                C
                @else
                D
                @endif



            <td>{{$p->NilaiAngka * $p->SKS}}</td>

            {{-- <a href="/nilaikuliah/view/{{ $p->ID }}" class="btn btn-success">View</a>
            |
            <a href="/nilaikuliah/edit/{{ $p->ID }}" class="btn btn-warning">Edit</a>
            |
            <a href="/nilaikuliah/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a> --}}
            
        </tr>
        @endforeach
    </table>
        {{ $nilaikuliah-> links()}}
    @endsection
