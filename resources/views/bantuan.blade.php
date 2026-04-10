<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusat Bantuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 font-sans text-slate-300 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="fixed inset-0 z-[-1] bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-slate-950 to-slate-950"></div>

    <div class="w-full flex justify-center pt-8 mb-16 px-4">
        <nav class="flex flex-wrap justify-center gap-2 p-2 bg-slate-900/60 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl">
            <a href="/" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Home</a>
            <a href="/profil" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl shadow-lg shadow-indigo-500/30 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Kontak</a>
        </nav>
    </div>

    <div class="max-w-3xl mx-auto px-4 pb-20">
        <div class="mb-12">
            <h1 class="text-4xl font-bold text-white mb-3">Pusat Resolusi</h1>
            <p class="text-slate-500 text-lg">Temukan jawaban atas pertanyaan seputar AmikomEventHub.</p>
        </div>

        <div class="space-y-6">
            <div class="group relative bg-slate-900/40 p-8 rounded-2xl border border-slate-800 hover:bg-slate-800/40 transition duration-300 overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-slate-700 group-hover:bg-indigo-500 transition-colors duration-300"></div>
                <h3 class="text-xl font-semibold text-slate-200 mb-3 group-hover:text-white">Bagaimana proses pendaftaran event?</h3>
                <p class="text-slate-400 leading-relaxed">
                    Navigasi ke halaman <a href="/katalog" class="text-indigo-400 hover:text-indigo-300 underline decoration-indigo-500/30 hover:decoration-indigo-400 transition-all">Katalog</a>, pilih event yang merepresentasikan minat Anda, lalu klik aksi "Daftar" pada panel rincian event tersebut.
                </p>
            </div>

            <div class="group relative bg-slate-900/40 p-8 rounded-2xl border border-slate-800 hover:bg-slate-800/40 transition duration-300 overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-slate-700 group-hover:bg-purple-500 transition-colors duration-300"></div>
                <h3 class="text-xl font-semibold text-slate-200 mb-3 group-hover:text-white">Apakah terbuka untuk peserta eksternal?</h3>
                <p class="text-slate-400 leading-relaxed">
                    Kami mendesain ekosistem yang inklusif. Meskipun beberapa workshop eksklusif untuk kalangan internal, mayoritas seminar berskala besar kami buka untuk pendaftar publik.
                </p>
            </div>

            <div class="group relative bg-slate-900/40 p-8 rounded-2xl border border-slate-800 hover:bg-slate-800/40 transition duration-300 overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-slate-700 group-hover:bg-teal-500 transition-colors duration-300"></div>
                <h3 class="text-xl font-semibold text-slate-200 mb-3 group-hover:text-white">Apa kebijakan retur atau pembatalan tiket?</h3>
                <p class="text-slate-400 leading-relaxed">
                    Modifikasi pendaftaran dapat diajukan selambat-lambatnya 24 jam sebelum inisiasi acara. Kunjungi area profil Anda atau hubungi dukungan teknis kami di halaman <a href="/kontak" class="text-teal-400 hover:text-teal-300 underline decoration-teal-500/30 hover:decoration-teal-400 transition-all">Kontak</a>.
                </p>
            </div>
        </div>
    </div>

</body>
</html>