@extends('layout.master')

@section('title')
    Halaman List Movie
@endsection

@section('judul1')
    List Movie
@endsection

@section('judul2')
    Silahkan gunakan tambah jika ingin menambahkan film
@endsection

@section('content')
    <a href="/film/create" class='btn btn-primary btn-sm my-3'>Tambah</a>

    <div class="row">
        @forelse ($film as $item)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="" src="{{asset('image/' . $item->poster)}}" alt="">
                    <div class="card-body">
                    <h5 class="card-title">{{$item->judul}}</h5>
                    <p class="card-text">{{$item->ringkasan}}</p>
                    <a href="#" class="btn btn-primary">Detail Movie</a>
                    </div>
                </div>
            </div>
        @empty
                <h3>Tidak ada film</h3>
        @endforelse

    </div>
        
@endsection