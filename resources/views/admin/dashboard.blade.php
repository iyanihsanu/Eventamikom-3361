@extends('layouts.admin', ['title' => 'Dashboard'])

@section('content')

<div class="mb-8">
    <h1 class="text-2xl font-bold text-slate-900">Ringkasan Dashboard</h1>
    <p class="text-slate-500 text-sm mt-1">Selamat datang kembali, Admin! Berikut ringkasan terkini.</p>
</div>

{{-- Stats Cards --}}
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 mb-8">

    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                style="background: linear-gradient(135deg, #ddd6fe, #c4b5fd);">
                <svg class="w-5 h-5 text-violet-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <span class="text-[10px] font-bold text-green-500 bg-green-50 px-2 py-0.5 rounded-full">+12%</span>
        </div>
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Total Pendapatan</p>
        <h3 class="text-xl font-bold mt-1 text-slate-800">Rp 12.450.000</h3>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                style="background: linear-gradient(135deg, #d1fae5, #a7f3d0);">
                <svg class="w-5 h-5 text-emerald-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                </svg>
            </div>
            <span class="text-[10px] font-bold text-green-500 bg-green-50 px-2 py-0.5 rounded-full">+8%</span>
        </div>
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Tiket Terjual</p>
        <h3 class="text-xl font-bold mt-1 text-slate-800">1.284</h3>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                style="background: linear-gradient(135deg, #fef3c7, #fde68a);">
                <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <span class="text-[10px] font-bold text-slate-400 bg-slate-50 px-2 py-0.5 rounded-full">Aktif</span>
        </div>
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Event Aktif</p>
        <h3 class="text-xl font-bold mt-1 text-slate-800">8 Event</h3>
    </div>

    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
        <div class="flex justify-between items-start mb-4">
            <div class="w-10 h-10 rounded-xl flex items-center justify-center"
                style="background: linear-gradient(135deg, #fee2e2, #fecaca);">
                <svg class="w-5 h-5 text-rose-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <span class="text-[10px] font-bold text-orange-500 bg-orange-50 px-2 py-0.5 rounded-full">Perlu aksi</span>
        </div>
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wide">Pesanan Pending</p>
        <h3 class="text-xl font-bold mt-1 text-slate-800">12 Pesanan</h3>
    </div>

</div>

{{-- Recent Transactions --}}
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="px-6 py-5 border-b border-slate-100 flex justify-between items-center">
        <div>
            <h3 class="font-bold text-slate-800">Transaksi Terakhir</h3>
            <p class="text-xs text-slate-400 mt-0.5">Aktivitas pembelian terbaru</p>
        </div>
        <a href="#" class="text-xs text-indigo-600 font-semibold hover:underline">Lihat Semua →</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-slate-50 text-slate-400 text-[10px] uppercase font-bold tracking-widest">
                    <th class="px-6 py-3">Pembeli</th>
                    <th class="px-6 py-3">Event</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Total</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Donni+P&background=6366f1&color=fff&size=32" class="w-8 h-8 rounded-lg">
                            <div>
                                <p class="font-semibold text-sm text-slate-800">Donni Prabowo</p>
                                <p class="text-[11px] text-slate-400">donni@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">Jazz Night 2024</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-emerald-50 text-emerald-600 rounded-lg text-[11px] font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Berhasil
                        </span>
                    </td>
                    <td class="px-6 py-4 font-bold text-sm text-violet-700">Rp 155.000</td>
                </tr>
                <tr class="hover:bg-slate-50/60 transition">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=Maya+S&background=ec4899&color=fff&size=32" class="w-8 h-8 rounded-lg">
                            <div>
                                <p class="font-semibold text-sm text-slate-800">Maya Sari</p>
                                <p class="text-[11px] text-slate-400">maya@example.com</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-slate-600">AI & Future Workshop</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center gap-1 px-2.5 py-1 bg-amber-50 text-amber-600 rounded-lg text-[11px] font-bold">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Pending
                        </span>
                    </td>
                    <td class="px-6 py-4 font-bold text-sm text-violet-700">Rp 55.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection