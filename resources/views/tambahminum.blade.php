@extends('templateminuman')

@section('tulisan1', 'Tambah Data Minuman')

@section('link1')
<a href="/minuman">Kembali</a>
@endsection

@section('konten')
<form action="/minuman/store" method="post">
    {{ csrf_field() }}

    <div class="row mb-3">
        <label for="kodeminuman" class="col-sm-2 col-form-label">Kode Minuman</label>
        <div class="col-sm-10">
            <input type="text" name="kodeminuman" class="form-control" id="kodeminuman" required="required">
        </div>
    </div>

    <div class="row mb-3">
        <label for="merkminuman" class="col-sm-2 col-form-label">Merk Minuman</label>
        <div class="col-sm-10">
            <input type="text" name="merkminuman" class="form-control" id="merkminuman" required="required">
        </div>
    </div>

    <div class="row mb-3">
        <label for="stockminuman" class="col-sm-2 col-form-label">Stok Minuman</label>
        <div class="col-sm-10">
            <input type="number" name="stockminuman" class="form-control" id="stockminuman" required="required">
        </div>
    </div>

    <div class="row mb-3">
        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-10">
            <select name="tersedia" id="tersedia" class="form-select" required="required">
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <center><input type="submit" value="Tambah Data" class="btn btn-primary"></center>
        </div>
    </div>
</form>

@endsection
