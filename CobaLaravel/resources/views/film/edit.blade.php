@extends('layout.master')

@section('title')
    Halaman Edit Film
@endsection

@section('judul1')
    Edit Film
@endsection

@section('judul2')
    Silahkan isi data film di kolom tersedia!
@endsection

@section('content')
<div>
    <form action="/film/{{$film->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Judul Film</label>
            <input type="text" value="{{$film->judul}}" class="form-control" name="judul" placeholder="Masukkan Nama Film">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Ringkasan</label>
            <textarea name="ringkasan"  class="form-control" cols="30" rows="10">{{$film->ringkasan}}</textarea>
            @error('ringkasan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="integer" value="{{$film->tahun}}" class="form-control" name="tahun" placeholder="Masukkan Tahun Rilis">
            @error('tahun')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Poster</label>
            <input type="file" class="form-control" name="poster" placeholder="">
            @error('poster')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Genre</label>
            <select name="genre_id" class="form-control" id="">
                <option value="">--Pilih Genre--</option>
                    @forelse ($genre as $item)
                    @if ($item->id === $film->genre_id)
                    
                    <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                    @else
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endif
                @empty
                    <option value="">Tidak ada data di table genre</option>
                @endforelse
            </select>
            @error('genre_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection