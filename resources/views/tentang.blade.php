@extends('layouts.app')

@section('content')
<main class="max-w-4xl mx-auto px-6 py-20 text-center">
    <div class="inline-block px-4 py-1.5 bg-indigo-50 text-indigo-600 rounded-full text-sm font-bold mb-6">
        Tentang AmikomEventHub
    </div>
    <h1 class="text-5xl font-extrabold text-slate-900 mb-8 tracking-tight">Menghubungkan Mahasiswa dengan Event Impian.</h1>
    <p class="text-xl text-slate-600 leading-relaxed mb-10">
        AmikomEventHub adalah platform digital yang dirancang khusus untuk mempermudah civitas akademika dalam mencari, mengikuti, dan mengelola event kampus secara profesional dan terintegrasi.
    </p>
    <div class="grid grid-cols-3 gap-8 border-t border-slate-200 pt-12 text-left">
        <div>
            <h4 class="font-bold text-2xl text-indigo-600">10k+</h4>
            <p class="text-slate-500">Pengguna Aktif</p>
        </div>
        <div>
            <h4 class="font-bold text-2xl text-indigo-600">500+</h4>
            <p class="text-slate-500">Event Terlaksana</p>
        </div>
        <div>
            <h4 class="font-bold text-2xl text-indigo-600">50+</h4>
            <p class="text-slate-500">Organisasi Mitra</p>
        </div>
    </div>
</main>
@endsection