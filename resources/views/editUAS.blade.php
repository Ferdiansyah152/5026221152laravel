@extends('templateminuman')

@section('tulisan1', 'Data Pegawai')

@section('link1')
<a href="/UAS"> Kembali</a>
@endsection

@section('konten')
<form action="/UAS/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="NIP" value="{{ $karyawan1->NIP }}"> <br/>

<div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input type="text" name="Nama" class="form-control" id="nama" required="required" value="{{ $karyawan1->Nama }}">
    </div>
</div>

<div class="row mb-3">
    <label for="pangkat" class="col-sm-2 col-form-label">Jabatan</label>
    <div class="col-sm-10">
        <input type="text" name="Pangkat" class="form-control" id="Jabatan" required="required" value="{{ $karyawan1->Jabatan }}">
    </div>
</div>

<div class="row mb-3">
    <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
    <div class="col-sm-10">
        <input type="text" name="Gaji" class="form-control" id="gaji" required="required" value="{{ $karyawan1->Gaji }}">
    </div>
</div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
        </div>
    </div>
</form>
@endsection
