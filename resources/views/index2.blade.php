@extends('template')

@section('tulisan1', 'Counter')

@section('konten')

    @foreach ($pagecounter as $c)
    Anda Pengunjung ke - {{$c->Jumlah}}
    @endforeach

@endsection
