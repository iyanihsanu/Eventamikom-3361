<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Event</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 font-sans text-slate-300 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="fixed inset-0 z-[-1]">
        <div class="absolute top-1/4 left-1/3 w-full h-96 bg-blue-900/10 rounded-full mix-blend-screen filter blur-[120px]"></div>
    </div>

    <div class="w-full flex justify-center pt-8 mb-16 px-4">
        <nav class="flex flex-wrap justify-center gap-2 p-2 bg-slate-900/60 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl">
            <a href="/" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Home</a>
            <a href="/profil" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl shadow-lg shadow-indigo-500/30 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Kontak</a>
        </nav>
    </div>

    <div class="max-w-6xl mx-auto px-4 pb-20">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Eksplorasi Event</h1>
            <div class="h-1 w-24 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group bg-slate-900/50 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 hover:shadow-[0_0_30px_-5px_rgba(99,102,241,0.3)] transition-all duration-500">
                <div class="h-48 bg-gradient-to-br from-indigo-900 to-slate-800 relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPgo8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDIiLz4KPC9zdmc+')] opacity-50"></div>
                </div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-indigo-500/10 text-indigo-400 text-xs font-bold uppercase tracking-wider rounded-full mb-4 border border-indigo-500/20">Seminar</span>
                    <h2 class="text-2xl font-bold text-white mb-3 group-hover:text-indigo-300 transition-colors">Tech Talk: AI Future</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">Membahas perkembangan kecerdasan buatan, tantangan etika, dan dampaknya pada industri kreatif di masa depan.</p>
                </div>
            </div>

            <div class="group bg-slate-900/50 border border-slate-800 rounded-2xl overflow-hidden hover:border-teal-500/50 hover:shadow-[0_0_30px_-5px_rgba(20,184,166,0.3)] transition-all duration-500">
                <div class="h-48 bg-gradient-to-br from-teal-900 to-slate-800 relative overflow-hidden">
                     <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPgo8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDIiLz4KPC9zdmc+')] opacity-50"></div>
                </div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-teal-500/10 text-teal-400 text-xs font-bold uppercase tracking-wider rounded-full mb-4 border border-teal-500/20">Workshop</span>
                    <h2 class="text-2xl font-bold text-white mb-3 group-hover:text-teal-300 transition-colors">Mastering Laravel 11</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">Sesi praktikal eksklusif membangun aplikasi web elegan dan responsif menggunakan arsitektur terbaru Laravel.</p>
                </div>
            </div>

            <div class="group bg-slate-900/50 border border-slate-800 rounded-2xl overflow-hidden hover:border-purple-500/50 hover:shadow-[0_0_30px_-5px_rgba(168,85,247,0.3)] transition-all duration-500">
                <div class="h-48 bg-gradient-to-br from-purple-900 to-slate-800 relative overflow-hidden">
                     <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI4IiBoZWlnaHQ9IjgiPgo8cmVjdCB3aWR0aD0iOCIgaGVpZ2h0PSI4IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDIiLz4KPC9zdmc+')] opacity-50"></div>
                </div>
                <div class="p-8">
                    <span class="inline-block px-3 py-1 bg-purple-500/10 text-purple-400 text-xs font-bold uppercase tracking-wider rounded-full mb-4 border border-purple-500/20">Kompetisi</span>
                    <h2 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-300 transition-colors">Hackathon 2024</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">Tantangan 48 jam untuk menciptakan solusi digital inovatif. Buktikan keahlian tim Anda di tingkat nasional.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>