<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\StoreGenreRequest;
use App\Http\Requests\UpdateGenreRequest;


class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // fetching data dari tabel genres
        $genres = Genre::select('id', 'name')->get();
         // return ke view dan kirirmkan data $genres
        return view('genre.index', compact('genres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGenreRequest $request, Genre $genres)
    {
    // query untuk save data dari form
        $genres = Genre::create($request->all());
        return redirect()->route('genre.index')->with(['success' => 'Data Berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genres = Genre::findOrFail($id)->where('id',$id)->first();
        return view('genre.update',compact('genres'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGenreRequest $request, Genre $genres, string $id)
    {
        $genres = Genre::findOrFail($id);
        $genres->update($request->all());
        return redirect()->route('genre.index')->with(['success' => 'Data berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genres, string $id)
    {
        $genres = Genre::select('id')->where('id',$id)->delete();
        return redirect()->route('genre.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
