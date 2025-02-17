<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCastRequest;
use App\Models\Cast;
use App\Http\Requests\StoreCastRequest;


class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $casts = Cast::select('id', 'name', 'age', 'bio')->get();
        return view('cast.index', compact('casts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCastRequest $request, Cast $casts)
    {
        $casts = Cast::create($request->all()); 
        return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Ditambahkan!']);
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
        $casts = Cast::findOrFail($id);
        return view('cast.update', compact('casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCastRequest $request, Cast $casts, string $id)
    {
        $casts = Cast::findOrFail($id);
        $casts->update($request->all()); 
        return redirect()->route('cast.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $casts,string $id)
    {
        $casts = Cast::select('id')->where('id',$id)->delete();
        return redirect()->route('cast.index')->with(['success'=> 'Data Berhasil Dihapus!']);
    }
}
