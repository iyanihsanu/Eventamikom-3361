@extends('layouts.admin', ['title' => 'Kelola Event'])

@section('content')

<div class="flex justify-between items-center mb-8">
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Kelola Event</h1>
        <p class="text-slate-500 text-sm mt-1">Buat dan atur acara seru Anda di sini.</p>
    </div>
    <a href="{{ route('admin.events.create') }}"
        class="flex items-center gap-2 px-5 py-2.5 text-white text-sm font-semibold rounded-xl shadow-sm hover:opacity-90 transition"
        style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
        </svg>
        Tambah Event Baru
    </a>
</div>

@if(session('success'))
    <div class="mb-6 px-5 py-4 rounded-xl bg-emerald-50 text-emerald-700 font-medium text-sm border border-emerald-100 flex items-center gap-2">
        <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-widest border-b border-slate-100">
                    <th class="px-6 py-3">No</th>
                    <th class="px-6 py-3">Poster</th>
                    <th class="px-6 py-3">Event</th>
                    <th class="px-6 py-3">Harga / Stok</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($events as $index => $event)
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-6 py-4 text-sm font-bold text-slate-300">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/'.$event->poster_path) }}"
                            class="w-12 h-16 rounded-lg object-cover shadow-sm border border-slate-100">
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-semibold text-sm text-slate-800">{{ $event->title }}</p>
                        <div class="flex items-center gap-2 mt-1">
                            <span class="text-[11px] text-slate-400">{{ $event->category->name }}</span>
                            <span class="text-slate-200">•</span>
                            <span class="text-[11px] text-slate-400">{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        <p class="font-bold text-sm text-violet-700">Rp {{ number_format($event->price, 0, ',', '.') }}</p>
                        <p class="text-[11px] text-slate-400 mt-0.5">Stok: {{ $event->stock }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <a href="{{ route('admin.events.edit', $event->id) }}"
                                class="flex items-center gap-1.5 px-3 py-1.5 bg-indigo-50 text-indigo-600 text-xs font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST"
                                onsubmit="return confirm('Hapus event ini?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="flex items-center gap-1.5 px-3 py-1.5 bg-rose-50 text-rose-600 text-xs font-semibold rounded-lg hover:bg-rose-600 hover:text-white transition">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-16 text-center">
                        <div class="flex flex-col items-center gap-2 text-slate-300">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-sm font-medium text-slate-400">Belum ada event.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection