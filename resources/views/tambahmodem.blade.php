@extends('master2')
@section('judulhalaman', 'Data Modem')

@section('konten')
    <br/>
    <div>
        <h2>Toko Elektronik Laptop dan HP</h2>
        <h3>Data Modem</h3>
        <a href="/modem"> Kembali</a>
    </div>

    <br/>
    <br/>

    <form action="/modem/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="merkmodem" class="col-md-1 col-2 col-form-label mr-2">Merk</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="merkmodem" name="merkmodem">
            </div>
        </div>

        <div class="form-group row">
            <label for="stockmodem" class="col-md-1 col-2 col-form-label mr-2">Stock</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="stockmodem" name="stockmodem">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-md-1 col-2 col-form-label mr-2">Ketersediaan</label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="tersedia" name="tersedia">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 offset-md-1 col-2">
                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </div>
        </div>
    </form>
@endsection
