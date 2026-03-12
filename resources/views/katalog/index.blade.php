<h1>Katalog Produk</h1>

<ul>
@foreach ($produk as $id => $p)
    <li>
        {{ $p['nama'] }} - Rp{{ number_format($p['harga'], 0, ',', '.') }}
        | <a href="{{ route('katalog.show', $id) }}">Detail</a>
    </li>
@endforeach
</ul>