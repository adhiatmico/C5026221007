@extends('master2')
@section('judulhalaman','Data Kursi')
@section('konten')

<h3>Data Kursi</h3>

<a href="/kursi/tambahkursi" class="btn-primary"> + Tambah kursi Baru</a>
<br>

    <br/>

        <form action="/kursi/cari" method="GET">
            <input class="form-control" type="text" name="cari" placeholder="Cari Merk Kursi .."
            value="{{ old("cari", isset($cari) ? $cari : '') }}">
            <input type="submit" value="CARI" class="btn btn-info">
        </form>
    <br/>

    <table class="table table-striped tabel-hover">
            <tr>
                <th>Kode Kursi</th>
                <th>Merk Kursi</th>
                <th>Stock Kursi</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>

        @foreach($kursi as $p)
        <tr>
            <td>{{ $p->kodekursi }}</td>
            <td>{{ $p->merkkursi }}</td>
            <td>{{ $p->stockkursi }}</td>
            <td style="text-align: center">
                @if($p->tersedia == 'N')
                <input type="checkbox" disabled>
                @elseif($p->tersedia == 'Y')
                <input type="checkbox" checked disabled>
                @endif
            </td>
            <td>
                <a href="/kursi/viewkursi/{{ $p->kodekursi }}" class="btn btn-success">View</a>
                |
                <a href="/kursi/edit/{{ $p->kodekursi }}" class="btn btn-warning">Edit</a>
                |
                <a href="/kursi/hapus/{{ $p->kodekursi }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
        {{ $kursi-> links()}}
    @endsection
