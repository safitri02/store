<?php

namespace App\Http\Controllers;

use App\Produk;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('home', compact('produk'));
    }

    
}
