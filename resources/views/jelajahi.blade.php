@extends('layouts.app')

@section('content')
<main class="max-w-7xl mx-auto px-6 py-12">
    <div class="mb-10">
        <h1 class="text-4xl font-bold text-slate-900">Jelajahi Event</h1>
        <p class="text-slate-600 mt-2">Temukan berbagai kegiatan seru di sekitar Amikom.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        @for ($i = 1; $i <= 6; $i++)
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden hover:shadow-lg transition">
            <div class="h-48 bg-slate-200"></div>
            <div class="p-6">
                <span class="text-indigo-600 font-semibold text-sm">SEMINAR</span>
                <h3 class="text-xl font-bold mt-2">Workshop UI/UX Design Series #{{ $i }}</h3>
                <p class="text-slate-500 text-sm mt-2 line-clamp-2">Belajar desain produk digital dari ahlinya langsung di Ruang Cinema Amikom.</p>
                <div class="mt-6 flex justify-between items-center">
                    <span class="font-bold text-indigo-600">Free</span>
                    <button class="px-4 py-2 bg-slate-900 text-white rounded-lg text-sm font-medium">Detail</button>
                </div>
            </div>
        </div>
        @endfor
    </div>
</main>
@endsection