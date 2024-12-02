@extends('templateminuman')

@section('tulisan1', 'Edit Data Minuman')

@section('link1')
<a href="/minuman">Kembali</a>
@endsection

@section('konten')
@foreach($minuman as $m)
<form action="/minuman/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="kodeminuman" value="{{ $m->kodeminuman }}"> <br/>

    <div class="row mb-3">
        <label for="merkminuman" class="col-sm-2 col-form-label">Merk Minuman</label>
        <div class="col-sm-10">
            <input type="text" name="merkminuman" class="form-control" id="merkminuman" required="required" value="{{ $m->merkminuman }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="stockminuman" class="col-sm-2 col-form-label">Stok Minuman</label>
        <div class="col-sm-10">
            <input type="number" name="stockminuman" class="form-control" id="stockminuman" required="required" value="{{ $m->stockminuman }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-10">
            <select name="tersedia" id="tersedia" class="form-select" required="required">
                <option value="Y" {{ $m->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                <option value="N" {{ $m->tersedia == 'N' ? 'selected' : '' }}>Tidak</option>
            </select>

        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
</form>
@endforeach
@endsection
