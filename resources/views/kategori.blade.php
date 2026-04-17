@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-center text-slate-900 mb-12">Kategori Event</h1>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @php $cats = ['Seminar', 'Konser', 'Workshop', 'Lomba']; @endphp
        @foreach($cats as $cat)
        <div class="p-8 bg-white border border-slate-200 rounded-3xl text-center hover:border-indigo-600 transition group cursor-pointer">
            <div class="w-16 h-16 bg-indigo-50 text-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-indigo-600 group-hover:text-white transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
            </div>
            <h3 class="text-xl font-bold">{{ $cat }}</h3>
            <p class="text-slate-500 mt-2 text-sm">Lihat semua event {{ $cat }}</p>
        </div>
        @endforeach
    </div>
</main>
@endsection