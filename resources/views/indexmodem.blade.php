@extends('master2')
@section('judulhalaman','Data Modem')

@section('konten')
    <br/>
    <h2>Toko Elektronik Laptop dan HP</h2>
    <h3>Data Modem</h3>
    <br/>
    <a href="/modem/tambahmodem" class="btn btn-primary"> + Tambah Data</a>

    <br/>
    <p>Cari Data Modem :</p>
    <form action="/modem/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Merk Modem .."
               value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <input class="btn btn-info" type="submit" value="CARI">
    </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Opsi</th>
        </tr>
        @foreach($modem as $m)
            <tr>
                <td>{{ $m->kodemodem }}</td>
                <td>{{ $m->merkmodem }}</td>
                <td>{{ $m->stockmodem }}</td>
                <td>{{ $m->tersedia }}</td>
                <td>
                    <a href="/modem/viewmodem/{{ $m->kodemodem }}" class="btn btn-success">View</a>
                    |
                    <a href="/modem/editmodem/{{ $m->kodemodem }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/modem/hapus/{{ $m->kodemodem }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $modem->links() }}
@endsection
