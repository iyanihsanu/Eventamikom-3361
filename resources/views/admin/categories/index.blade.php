@extends('layouts.admin')

@section('content')
<div class="p-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-slate-800">Manajemen Kategori</h1>
        <button class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl font-semibold">
            + Tambah Kategori
        </button>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b border-slate-200">
                <tr>
                    <th class="px-6 py-4">No</th>
                    <th class="px-6 py-4">Nama Kategori</th>
                    <th class="px-6 py-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200">
                <tr>
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4 font-medium">Seminar</td>
                    <td class="px-6 py-4 flex justify-center gap-2">
                        <button class="px-3 py-1 bg-amber-50 text-amber-600 border border-amber-200 rounded-lg text-xs font-bold">EDIT</button>
                        <button class="px-3 py-1 bg-red-50 text-red-600 border border-red-200 rounded-lg text-xs font-bold">HAPUS</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection