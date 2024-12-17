@extends('templateminuman')

@section('tulisan1', 'data Karyawan')

@section('link1')
    <a href="/UAS/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
@endsection

@section('konten')

    <br/>
    <form action="/UAS/cari" method="GET">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Cari Nama Karyawan</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Pegawai ..." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success ">
              </div>
          </div>

    </form>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Opsi</th>
        </tr>
        @foreach($karyawan1 as $p)
        <tr>
            <td>{{ $p->NIP}}</td>
            <td>{{ $p->Nama }}</td>
            <td>{{ $p->Pangkat }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>
                <a href="/UAS/edit/{{ $p->NIP }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                |
                <a href="/UAS/hapus/{{ $p->NIP }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $karyawan1->currentPage() }} <br/>
    Jumlah Data : {{ $karyawan1->total() }} <br/>
    Data Per Halaman : {{ $karyawan1->perPage() }} <br/>


    {{ $karyawan1->links() }}


@endsection
