@extends('layouts.admin', ['title' => 'Kelola Partner'])

@section('content')

<div class="flex justify-between items-start mb-8">
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Kelola Partner</h1>
        <p class="text-slate-500 text-sm mt-1">Atur partner dan sponsor platform event Anda.</p>
    </div>
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

    <div class="px-6 py-5 border-b border-slate-100 flex flex-col lg:flex-row gap-3 justify-between">

        <form method="GET" class="flex gap-2">
            <div class="relative">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" name="search" placeholder="Cari partner..."
                    value="{{ request('search') }}"
                    class="pl-9 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64">
            </div>
            <button type="submit"
                class="px-4 py-2.5 bg-slate-800 text-white text-sm font-semibold rounded-xl hover:bg-slate-700 transition">
                Cari
            </button>
        </form>

        <form action="{{ route('admin.partners.store') }}" method="POST"
            enctype="multipart/form-data" class="flex flex-wrap gap-2 items-center">
            @csrf
            <input type="text" name="name" placeholder="Nama partner"
                class="px-4 py-2.5 text-sm rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-44">
            <input type="file" name="logo_url"
                class="text-sm text-slate-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
            <button type="submit"
                class="flex items-center gap-1.5 px-4 py-2.5 text-white text-sm font-semibold rounded-xl shadow-sm hover:opacity-90 transition"
                style="background: linear-gradient(135deg, #6366f1, #8b5cf6);">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Tambah
            </button>
        </form>

    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-widest border-b border-slate-100">
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Logo</th>
                    <th class="px-6 py-3">Nama Partner</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($partners as $partner)
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-6 py-4 text-sm font-bold text-slate-300">#{{ $partner->id }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ asset('storage/' . $partner->logo_url) }}"
                            class="w-12 h-12 rounded-xl object-contain border border-slate-100 bg-slate-50 p-1">
                    </td>
                    <td class="px-6 py-4 font-semibold text-sm text-slate-800">{{ $partner->name }}</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <form action="{{ route('admin.partners.update', $partner->id) }}"
                                method="POST" enctype="multipart/form-data" class="flex items-center gap-2">
                                @csrf @method('PUT')
                                <input type="text" name="name" value="{{ $partner->name }}"
                                    class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-32">
                                <input type="file" name="logo_url"
                                    class="text-xs text-slate-500 file:mr-2 file:py-1 file:px-2 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-slate-50 file:text-slate-600">
                                <button type="submit"
                                    class="px-3 py-1.5 bg-indigo-50 text-indigo-600 text-xs font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition">
                                    Simpan
                                </button>
                            </form>
                            <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                method="POST" onsubmit="return confirm('Hapus partner ini?')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="px-3 py-1.5 bg-rose-50 text-rose-600 text-xs font-semibold rounded-lg hover:bg-rose-600 hover:text-white transition">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-6 py-16 text-center">
                        <div class="flex flex-col items-center gap-2">
                            <svg class="w-10 h-10 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <p class="text-sm font-medium text-slate-400">Belum ada partner.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection