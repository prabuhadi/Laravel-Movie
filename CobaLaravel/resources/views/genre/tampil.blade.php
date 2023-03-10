@extends('layout.master')

@section('title')
    Halaman List Genre
@endsection

@section('judul1')
    List Genre
@endsection

@section('judul2')
    Silahkan gunakan tambah jika ingin menambahkan genre
@endsection

@section('content')
    @auth
    <a href="/genre/create" class='btn btn-primary btn-sm'>Tambah</a>
        
    @endauth
        <br>
        <br>
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Genre</th>
                    @auth
                        
                    <th scope="col" width="280px">Actions</th>
                    @endauth
                </tr>
                </thead>
                <tbody>
                    @forelse ($genre as $key=>$value)
                        <tr>
                            <td>{{$key + 1}}</th>
                            <td>{{$value->nama}}</td>
                            @auth
                            <td>
                                <form action="/genre/{{$value->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <a href="/genre/{{$value->id}}/edit" class='btn btn-primary btn-sm'>Edit Genre</a>
                                    <input type="submit" value="Remove Genre" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                                
                            @endauth
                        </tr>
                    @empty
                        <tr colspan="3">
                            <td>No data</td>
                        </tr>  
                    @endforelse              
                </tbody>
            </table>
@endsection