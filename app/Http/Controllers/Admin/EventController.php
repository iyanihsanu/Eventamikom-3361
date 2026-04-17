<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index()
    {
        return view('dashboard');
        return view('events');
}
public function caraBayar() {
    return view('cara-bayar'); 
}
public function show($id) {
    // Logika untuk menampilkan detail event berdasarkan ID
    return view('event.show', compact('id')); 
}

public function checkout($id) {
    // Logika untuk menampilkan halaman checkout
    return view('event.checkout', compact('id'));
}

public function ticket() {
    // Logika menampilkan tiket yang sudah dibeli
    return view('my-ticket');
}
}