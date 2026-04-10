<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 font-sans text-slate-300 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="fixed inset-0 z-[-1]">
        <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-indigo-600/20 rounded-full mix-blend-screen filter blur-[100px]"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-96 h-96 bg-purple-600/20 rounded-full mix-blend-screen filter blur-[100px]"></div>
    </div>

    <div class="w-full flex justify-center pt-8 mb-16 px-4">
        <nav class="flex flex-wrap justify-center gap-2 p-2 bg-slate-900/60 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl">
            <a href="/" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Home</a>
            <a href="/profil" class="px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl shadow-lg shadow-indigo-500/30 transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Kontak</a>
        </nav>
    </div>

    <div class="max-w-3xl mx-auto px-4 pb-20">
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-[2rem] blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
            
            <div class="relative bg-slate-900/80 backdrop-blur-sm border border-slate-700/50 p-10 rounded-[2rem] text-center transform transition duration-500 hover:-translate-y-2">
                <div class="mx-auto w-32 h-32 rounded-full p-1 bg-gradient-to-br from-indigo-400 to-purple-500 mb-6">
                    <div class="w-full h-full bg-slate-900 rounded-full flex items-center justify-center text-4xl font-light text-white">
                        I
                    </div>
                </div>
                
                <h1 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-400 mb-2">Iyan Ihsanu Yafi</h1>
                <p class="text-indigo-400 text-sm tracking-widest uppercase font-semibold mb-8">24.12.3361 / Sistem Informasi</p>
                
                <p class="text-slate-400 leading-relaxed text-lg max-w-2xl mx-auto">
                    Menghadirkan estetika dalam setiap baris kode. Saya adalah seorang yang berdedikasi mengeksplorasi batas-batas pengembangan web modern menggunakan Laravel dan antarmuka dinamis dengan Tailwind CSS.
                </p>
            </div>
        </div>
    </div>

</body>
</html>