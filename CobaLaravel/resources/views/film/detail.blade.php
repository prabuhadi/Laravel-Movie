@extends('layout.master')

@section('title')
    Detail Movie
@endsection

@section('judul1')
    Halaman Movie
@endsection

@section('judul2')
    Detail selengkapnya dari Movie
@endsection

@section('content')
    <img src="{{asset('image/'.$film->poster)}}" alt="" width="100%" height="100%">
    <h1 class='text-primary'>{{$film->judul}}</h1>
    <h5>Tahun Rilis : {{$film->tahun}}</h5>
    <p>Sinopsis : <br>{{$film->ringkasan}}</p>
@endsection