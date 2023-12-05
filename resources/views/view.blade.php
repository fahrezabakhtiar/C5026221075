@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
    <div>
        <h2><a href="https://www.malasngoding.com">Perusahaan XYZ</a></h2>
        <h3>View Pegawai</h3>
        <a href="/pegawai"> Kembali</a>
    </div>

    <br/>

    <div class="container">
        <div class="row m-3">
            <div class="col-6 border border-primary">
                <!-- Blank -->
            </div>

            <div class="col-6">
                @foreach($pegawai as $p)
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Nama</b>
                        </div>
                        <div class="col-md-10">
                            :  {{ $p->pegawai_nama}}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Jabatan</b>
                        </div>
                        <div class="col-md-10">
                            :  {{ $p->pegawai_jabatan}}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Umur</b>
                        </div>
                        <div class="col-md-10">
                            :  {{ $p->pegawai_umur}}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-2">
                            <b>Alamat</b>
                        </div>
                        <div class="col-md-10">
                            :  {{ $p->pegawai_alamat}}
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-4">
                    <a href="/pegawai" class="btn btn-primary" style="max-width: 25%;">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
