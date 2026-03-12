<h1>Detail Produk</h1>

<p><b>ID:</b> {{ $produk['id'] }}</p>
<p><b>Nama:</b> {{ $produk['nama'] }}</p>
<p><b>Harga:</b> Rp{{ number_format($produk['harga'], 0, ',', '.') }}</p>

<p><a href="{{ route('katalog.index') }}">Kembali ke Katalog</a></p>