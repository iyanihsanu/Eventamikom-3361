<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'AmikomEventHub') }} | Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 font-sans text-slate-300 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="fixed inset-0 z-[-1]">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-indigo-600/20 rounded-full mix-blend-screen filter blur-[100px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600/20 rounded-full mix-blend-screen filter blur-[100px]"></div>
    </div>

    <div class="w-full flex justify-center pt-8 mb-16 px-4">
        <nav class="flex flex-wrap justify-center gap-2 p-2 bg-slate-900/60 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl">
            <a href="/" class="px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl shadow-lg shadow-indigo-500/30 transition-all duration-300">Home</a>
            <a href="/profil" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Kontak</a>
        </nav>
    </div>

    <div class="max-w-4xl mx-auto px-4 pb-20 flex flex-col items-center text-center mt-10 md:mt-20">
        <div class="inline-block px-4 py-2 bg-slate-800/50 border border-slate-700 rounded-full mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400 text-sm font-semibold tracking-wide">
                Selamat Datang di AmikomEventHub
            </span>
        </div>
        
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight">
            Temukan <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-purple-500">Event Terbaik</span><br> Untuk Masa Depanmu
        </h1>
        
        <p class="text-lg text-slate-400 max-w-2xl mb-10 leading-relaxed">
            Platform manajemen acara terpadu untuk mahasiswa dan profesional. Ikuti seminar, workshop, dan kompetisi untuk meningkatkan keahlian Anda.
        </p>
        
        <div class="flex gap-4">
            <a href="/katalog" class="px-8 py-3 bg-white text-slate-900 font-bold rounded-xl hover:bg-slate-200 hover:scale-105 transition-all duration-300 shadow-[0_0_20px_-5px_rgba(255,255,255,0.4)]">
                Jelajahi Event
            </a>
            <a href="/profil" class="px-8 py-3 bg-slate-800/80 text-white font-bold rounded-xl border border-slate-700 hover:bg-slate-700 transition-all duration-300">
                Lihat Profil
            </a>
        </div>
    </div>

</body>
</html>