@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">Perusahaan XYZ</a></h2>
        <h3>Edit Pegawai</h3>
        <a href="/pegawai"> Kembali</a>
    </div>

    <br/>

    @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
            <div class="form-group row">
                <label for="nama" class="col-md-1 col-2 col-form-label mr-2">Nama</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jabatan" class="col-md-1 col-2 col-form-label mr-2">Jabatan</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="umur" class="col-md-1 col-2 col-form-label mr-2">Umur</label>
                <div class="col-sm-4">
                    <input class="form-control" type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-md-1 col-2 col-form-label mr-2">Alamat</label>
                <div class="col-sm-4">
                    <textarea class="form-control" rows="4" required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 offset-md-1 col-2">
                    <input class="btn btn-primary" type="submit" value="Simpan Data">
                </div>
            </div>
        </form>
    @endforeach

@endsection
