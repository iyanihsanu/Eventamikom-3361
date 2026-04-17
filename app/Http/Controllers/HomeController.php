<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    
    public function jelajahi()
    {
        return view('jelajahi');
    }

    public function kategori()
    {
        return view('kategori');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
