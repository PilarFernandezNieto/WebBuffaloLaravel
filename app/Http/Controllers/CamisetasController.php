<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamisetasController extends Controller
{
    public function index()
    {
        return view('admin.camisetas.index');
    }
}
