<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-950 font-sans text-slate-300 min-h-screen relative overflow-x-hidden selection:bg-indigo-500 selection:text-white">

    <div class="fixed inset-0 z-[-1] bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-slate-900 via-slate-950 to-slate-950"></div>

    <div class="w-full flex justify-center pt-8 mb-16 px-4">
        <nav class="flex flex-wrap justify-center gap-2 p-2 bg-slate-900/60 backdrop-blur-xl border border-slate-700/50 rounded-3xl shadow-2xl">
            <a href="/" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Home</a>
            <a href="/profil" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Profil</a>
            <a href="/katalog" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Katalog</a>
            <a href="/bantuan" class="px-6 py-2 text-sm font-medium text-slate-400 rounded-2xl hover:text-white hover:bg-slate-800 transition-all duration-300">Bantuan</a>
            <a href="/kontak" class="px-6 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl shadow-lg shadow-indigo-500/30 transition-all duration-300">Kontak</a>
        </nav>
    </div>

    <div class="max-w-4xl mx-auto px-4 pb-20">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Hubungi Kami</h1>
            <p class="text-slate-400 text-lg">Punya pertanyaan atau masukan? Kami siap membantu Anda.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-slate-900/50 backdrop-blur-md p-8 rounded-2xl border border-slate-800 shadow-xl">
                <h2 class="text-2xl font-bold text-white mb-6">Informasi Detail</h2>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-indigo-500/10 flex items-center justify-center border border-indigo-500/20 shrink-0">
                            <span class="text-indigo-400">📍</span>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Alamat</h3>
                            <p class="text-slate-400 text-sm leading-relaxed">Jl. Ring Road Utara, Condongcatur,<br>Sleman, Yogyakarta 55283</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-purple-500/10 flex items-center justify-center border border-purple-500/20 shrink-0">
                            <span class="text-purple-400">✉️</span>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Email</h3>
                            <p class="text-slate-400 text-sm">amikomevent@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-teal-500/10 flex items-center justify-center border border-teal-500/20 shrink-0">
                            <span class="text-teal-400">📞</span>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold mb-1">Telepon</h3>
                            <p class="text-slate-400 text-sm">+62 821-3605-8353</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900/50 backdrop-blur-md p-8 rounded-2xl border border-slate-800 shadow-xl">
                <h2 class="text-2xl font-bold text-white mb-6">Kirim Pesan</h2>
                <form action="#" class="space-y-4">
                    <div>
                        <input type="text" placeholder="Nama Anda" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-300 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                    </div>
                    <div>
                        <input type="email" placeholder="Email Anda" class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-300 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
                    </div>
                    <div>
                        <textarea rows="4" placeholder="Tulis pesan Anda di sini..." class="w-full bg-slate-950 border border-slate-800 rounded-xl px-4 py-3 text-slate-300 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all"></textarea>
                    </div>
                    <button type="button" class="w-full py-3 bg-gradient-to-r from-indigo-500 to-purple-500 text-white font-bold rounded-xl hover:shadow-lg hover:shadow-indigo-500/30 transition-all duration-300">
                        Kirim Sekarang
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>