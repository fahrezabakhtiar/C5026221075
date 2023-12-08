@extends('master2')
@section('judulhalaman', 'Data Modem')

@section('konten')

    <br/>
    <div>
        <h2>Toko Elektronik Laptop dan HP</h2>
        <h3>View Modem</h3>
        <a href="/modem"> Kembali</a>
    </div>

    <br/>

    <div class="container">
        <div class="row m-3">
            <div class="col-6 border border-primary">
                <!-- Blank -->
            </div>

            <div class="col-6">
                @foreach($modem as $m)
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <b>Merk</b>
                        </div>
                        <div class="col-md-8">
                            :  {{ $m->merkmodem}}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <b>Stock</b>
                        </div>
                        <div class="col-md-8">
                            :  {{ $m->stockmodem}}
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4">
                            <b>Ketersediaan</b>
                        </div>
                        <div class="col-md-8">
                            :  {{ $m->tersedia}}
                        </div>
                    </div>
                @endforeach

                <div class="text-center mt-4">
                    <a href="/modem" class="btn btn-primary" style="max-width: 25%;">OK</a>
                </div>
            </div>
        </div>
    </div>
@endsection
