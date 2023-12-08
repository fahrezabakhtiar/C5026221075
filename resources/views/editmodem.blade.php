@extends('master2')
@section('judulhalaman', 'Data Modem')

@section('konten')
    <br/>
    <div>
        <h2>Toko Elektronik Laptop dan HP</h2>
        <h3>Edit Data Modem</h3>
        <a href="/modem"> Kembali</a>
    </div>

    <br/>

    @foreach($modem as $m)
        <form action="/modem/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->kodemodem }}"> <br/>
            <div class="form-group row">
                <label for="merkmodem" class="col-md-1 col-2 col-form-label mr-2">Merk</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" required="required" name="merkmodem" value="{{ $m->merkmodem }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="stockmodem" class="col-md-1 col-2 col-form-label mr-2">Stock</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" required="required" name="stockmodem" value="{{ $m->stockmodem }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tersedia" class="col-md-1 col-2 col-form-label mr-2">Ketersediaan</label>
                <div class="col-sm-4">
                    <input class="form-control" type="text" required="required" name="tersedia" value="{{ $m->tersedia }}">
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
