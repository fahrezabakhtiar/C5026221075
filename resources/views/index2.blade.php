@extends('master2')
@section('judulhalaman','Nilai Kuliah')

@section('konten')
    <br/>
    <h2><a href="https://www.its.ac.id/">Institut Teknologi Sepuluh Nopember</a></h2>
    <h3>Nilai Kuliah Mahasiswa</h3>
    <br/>
    <a href="/nilaikuliah/add" class="btn btn-primary"> + Tambah Data</a>
    <br/>
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach($nilaikuliah as $p)
            <tr>
                <td>{{ $p->ID }}</td>
                <td>{{ $p->NRP }}</td>
                <td>{{ $p->NilaiAngka }}</td>
                <td>{{ $p->SKS }}</td>
                <td>
                    @php
                        $nilaihuruf = '';
                        $bobot = $p->NilaiAngka * $p->SKS;

                        if($p->NilaiAngka <= 40){
                            $nilaihuruf = 'D';
                        }
                        else if($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60){
                            $nilaihuruf = 'C';
                        }
                        else if($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80){
                            $nilaihuruf = 'B';
                        }
                        else{
                            $nilaihuruf = 'A';
                        }
                    @endphp
                    {{$nilaihuruf}}
                </td>
                <td>{{$bobot}}</td>
            </tr>
        @endforeach
    </table>
@endsection
