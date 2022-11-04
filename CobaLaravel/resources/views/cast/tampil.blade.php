@extends('layout.master')

@section('title')
    Halaman List Cast
@endsection

@section('judul1')
    List Cast
@endsection

@section('judul2')
    Silahkan gunakan tambah jika ingin menambahkan cast
@endsection

@section('content')
    <a href="/cast/create" class='btn btn-primary btn-sm'>Tambah</a>
        <br>
        <br>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($cast as $key=>$value)
                        <tr>
                            <td>{{$key + 1}}</th>
                            <td>{{$value->nama}}</td>
                            <td>{{$value->umur}}</td>
                            <td>
                                <form action="/cast/{{$value->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <a href="/cast/{{$value->id}}" class='btn btn-primary btn-sm'>Detail Cast</a>
                                    <a href="/cast/{{$value->id}}/edit" class='btn btn-warning btn-sm'>Edit Cast</a>
                                    <input type="submit" value="Remove Cast" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr colspan="3">
                            <td>No data</td>
                        </tr>  
                    @endforelse              
                </tbody>
            </table>
@endsection