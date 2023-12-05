@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">Perusahaan XYZ</a></h2>
        <h3>Data Pegawai</h3>
        <a href="/pegawai"> Kembali</a>
    </div>

    <br/>
    <br/>

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="nama" class="col-md-1 col-2 col-form-label mr-2">Nama</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-md-1 col-2 col-form-label mr-2">Jabatan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-md-1 col-2 col-form-label mr-2">Umur</label>
            <div class="col-sm-4">
                <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label for="alamat" class="col-md-1 col-2 col-form-label mr-2">Alamat</label>
            <div class="col-sm-4">
                <textarea class="form-control" id="alamat" name="alamat" rows="4"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-4 offset-md-1 col-2">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
