<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kat = Kategori::all();
        return view('kategori.index', compact('kat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'name_category' => 'required'
        ]);

       $kat = New Kategori;
       $kat->name_category = $request->name_category;
       $kat->save();

       return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori, $id)
    {
        $kat = Kategori::where('id', $id)->first();
        return view('kategori.update', compact('kat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori, $id)
    {
        // return $request;
        $kat = Kategori::find($id);
        $kat->name_category = $request->name_category;
        $kat->save();

        return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori, $id)
    {
        // return $id;
        // $kat = Kategori::where('id', $id)->first();
        $kat = Kategori::findOrFail($id);
        $kat->delete();

        return redirect('/kategori');
    }
}
