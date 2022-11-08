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
            <div class="col-3">
                <div class="card" style="width: 18rem">
                    <img class="" src="{{asset('image/' . $item->poster)}}" alt="">
                    <div class="card-body">
                    <h3 class="text-primary">{{$item->judul}}</h3>
                    <p class="card-text">{{ Str::limit($item->ringkasan, 60)}}</p>
                    <a href="/film/{{$item->id}}" class="btn btn-info btn-sm btn-block">Detail Movie</a>
                    <div class="row mt-3">
                        <div class="col">
                            <a href="/film/{{$item->id}}/edit" class="btn btn-warning btn-sm btn-block">Edit</a>
                        </div>
                        <div class="col">
                            <form action="/film/{{$item->id}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm btn-block">
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        @empty
                <h3>Tidak ada film</h3>
        @endforelse

    </div>
        
@endsection