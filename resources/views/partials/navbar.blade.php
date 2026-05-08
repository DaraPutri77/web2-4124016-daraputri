<nav class="bg-slate-800 text-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
        <a href="{{ route('home.index') }}" class="text-2xl font-bold text-teal-400 hover:text-teal-300 transition">
            Web2 App
        </a>

        <div class="flex flex-wrap items-center gap-3 md:gap-6 text-sm md:text-base">
            <a href="{{ route('home.index') }}" class="hover:text-teal-300 transition">Home</a>
            <a href="{{ route('profil.index') }}" class="hover:text-teal-300 transition">Profil</a>
            <a href="{{ route('produk.index') }}" class="hover:text-teal-300 transition">Produk</a>
            <a href="{{ route('tentang.index') }}" class="hover:text-teal-300 transition">Tentang</a>
            <a href="{{ route('produk.create') }}" class="bg-teal-500 hover:bg-teal-600 px-4 py-2 rounded-lg transition">
                + Tambah
            </a>
        </div>
    </div>
</nav>