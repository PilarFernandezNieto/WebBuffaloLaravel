<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscosController extends Controller
{
    public function index()
    {
        return view('admin.discos.index');
    }
}
