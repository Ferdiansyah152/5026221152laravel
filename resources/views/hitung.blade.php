@extends('template')

@section('tulisan1', 'Counter')

@section('konten')
    <div class="container">
        <div class="alert alert-success">
            @if($pagecounter->isEmpty())
                Tidak ada data pengunjung.
            @else
                @foreach ($pagecounter as $p)
                    Anda pengunjung ke - {{ $p->Jumlah }}
                @endforeach
            @endif
        </div>
    </div>
@endsection

<userStyle>Normal</userStyle>
