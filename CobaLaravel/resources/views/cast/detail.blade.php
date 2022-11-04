@extends('layout.master')

@section('title')
    Detail Cast
@endsection

@section('judul1')
    Halaman Cast
@endsection

@section('judul2')
    Detail selengkapnya dari cast
@endsection

@section('content')
    <h1 class='text-primary'>{{$cast->nama}}</h1>
    <h5>Umur Cast : {{$cast->umur}} tahun</h5>
    <p>{{$cast->bio}}</p>
@endsection