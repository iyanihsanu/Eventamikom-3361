@extends('layouts.admin', ['title' => 'Kelola Kategori'])

@section('content')

<div class="flex justify-between items-start mb-8">
    <div>
        <h1 class="text-2xl font-bold text-slate-900">Kelola Kategori</h1>
        <p class="text-slate-500 text-sm mt-1">Atur kategori event untuk platform Anda.</p>
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

    <div class="px-6 py-5 border-b border-slate-100 flex flex-col sm:flex-row gap-3 justify-between">

        <form method="GET" class="flex gap-2">
            <div class="relative">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <input type="text" name="search" placeholder="Cari kategori..."
                    value="{{ request('search') }}"
                    class="pl-9 pr-4 py-2.5 text-sm rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-64">
            </div>
            <button type="submit"
                class="px-4 py-2.5 bg-slate-800 text-white text-sm font-semibold rounded-xl hover:bg-slate-700 transition">
                Cari
            </button>
        </form>

        <form action="{{ route('admin.categories.store') }}" method="POST" class="flex gap-2">
            @csrf
            <input type="text" name="name" placeholder="Nama kategori baru..."
                class="px-4 py-2.5 text-sm rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-52">
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
                    <th class="px-6 py-3">Nama Kategori</th>
                    <th class="px-6 py-3">Slug</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($categories as $category)
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-6 py-4 text-sm font-bold text-slate-300">#{{ $category->id }}</td>
                    <td class="px-6 py-4 font-semibold text-sm text-slate-800">{{ $category->name }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2.5 py-1 rounded-lg bg-violet-50 text-violet-600 text-[11px] font-semibold">
                            {{ $category->slug }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-2">
                            <form action="{{ route('admin.categories.update', $category->id) }}"
                                method="POST" class="flex items-center gap-2">
                                @csrf @method('PUT')
                                <input type="text" name="name" value="{{ $category->name }}"
                                    class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-400 w-36">
                                <button type="submit"
                                    class="px-3 py-1.5 bg-indigo-50 text-indigo-600 text-xs font-semibold rounded-lg hover:bg-indigo-600 hover:text-white transition">
                                    Simpan
                                </button>
                            </form>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                method="POST" onsubmit="return confirm('Hapus kategori ini?')">
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
                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                            </svg>
                            <p class="text-sm font-medium text-slate-400">Belum ada kategori.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection