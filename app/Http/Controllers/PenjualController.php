<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function index()
    {
        // echo "Masuk Penjual";
        return view('penjual.index');
    }
}
