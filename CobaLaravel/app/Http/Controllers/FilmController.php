<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Film;
use File;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film =Film::all();

        return view('film.tampil', ['film' => $film]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();

        return view('film.tambah', ['genre' => $genre]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|mimes:jpg, jpeg, png|max:2048',
            'genre_id' => 'required'
        ]);

        $imageName = time().'.'.$request->poster->extension();  
   
        $request->poster->move(public_path('image'), $imageName);

        Film::create([
            'judul' => $request['judul'],
            'ringkasan' => $request['ringkasan'],
            'tahun' => $request['tahun'],
            'poster' => $imageName,
            'genre_id' => $request['genre_id']
        ]);

        return redirect('/film');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);

        return view('film.detail', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        $genre = Genre::all();

        return view('film.edit', ['film' => $film, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'mimes:jpg, jpeg, png|max:2048',
            'genre_id' => 'required'
        ]);

        $film = Film::find($id);

        if($request->has('poster')){
            $path = 'image/';
            File::delete($path.$film->poster);

            $namaGambar = time(). '.' . $request->poster->extension();

            $request->poster->move(public_path('image'), $namaGambar);

            $film->poster = $namaGambar;

            $film->save();
        }

        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->genre_id = $request->genre_id;

        $film->save();

        return redirect('/film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::find($id);

        $path = '/image';
        File::delete($path.$film->poster);

        $film->delete();

        return redirect('/film');
    }
}
