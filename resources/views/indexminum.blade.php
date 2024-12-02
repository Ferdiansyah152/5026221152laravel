@extends('templateminuman')

@section('title', 'Daftar Minuman')
@section('header', 'Data Minuman')

@section('link1')
<a href="/minuman/tambah" class="btn btn-primary">+ Tambah Minuman</a>
@endsection

@section('konten')

<br/>
<!-- Form Pencarian -->
<form action="/minuman/cari" method="GET">
    <div class="row mb-3">
        <label for="cari" class="col-sm-2 col-form-label">Cari Merk Minuman</label>
        <div class="col-sm-6">
            <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Minuman..." value="{{ request('cari') }}">
        </div>
        <div class="col-sm-4">
            <input type="submit" value="CARI" class="btn btn-success">
        </div>
    </div>
</form>
<br/>

<!-- Tabel Data Minuman -->
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($minuman as $m)
        <tr>
            <td>{{ $m->kodeminuman }}</td>
            <td>{{ $m->merkminuman }}</td>
            <td>{{ $m->stockminuman }}</td>
            <td>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input toggle-tersedia" data-id="{{ $m->kodeminuman }}" data-type="Y" {{ $m->tersedia == 'Y' ? 'checked' : '' }}>
                    Y
                </div>
                <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input toggle-tersedia" data-id="{{ $m->kodeminuman }}" data-type="N" {{ $m->tersedia == 'N' ? 'checked' : '' }}>
                    N
                </div>
            </td>
            <td>
                <a href="/minuman/edit/{{ $m->kodeminuman }}" class="btn btn-info btn-sm">Edit</a>
                <a href="/minuman/hapus/{{ $m->kodeminuman }}" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<br/>
<!-- Informasi Pagination -->
Halaman : {{ $minuman->currentPage() }} <br/>
Jumlah Data : {{ $minuman->total() }} <br/>
Data Per Halaman : {{ $minuman->perPage() }} <br/>

<!-- Pagination Links -->
{{ $minuman->links() }}

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.toggle-tersedia').forEach(toggle => {
            toggle.addEventListener('change', function () {
                const id = this.dataset.id;
                const status = this.dataset.type;

                // Uncheck the sibling checkbox
                const row = this.closest('td');
                row.querySelectorAll('.toggle-tersedia').forEach(sibling => {
                    if (sibling !== this) sibling.checked = false;
                });

                // Kirim perubahan ke server
                fetch(`/minuman/ubahtersedia/${id}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ tersedia: status })
                }).then(response => response.json())
                  .then(data => {
                      console.log(data.message);
                  })
                  .catch(err => console.error(err));
            });
        });
    });
</script>
@endsection
