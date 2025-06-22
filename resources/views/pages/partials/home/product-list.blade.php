@forelse ($products as $product)
    <div class="col-md-6 col-lg-3 mb-4">
        {{-- Kita gunakan class custom 'product-card-sig' --}}
        <div class="product-card-sig">
            <a href="{{ route('products.show', $product) }}" class="text-decoration-none">
                {{-- Bagian Gambar --}}
                <div class="product-card-sig__image-container mb-3">
                    <img src="{{ asset('storage/' . $product->main_image) }}" class="img-fluid" alt="{{ $product->name }}">
                </div>

                {{-- Bagian Teks --}}
                <div class="product-card-sig__content">
                    <h5 class="fw-bold text-dark mb-1">{{ $product->name }}</h5>
                    {{-- Kita hilangkan deskripsi singkat untuk tampilan yang lebih clean seperti SIG.id --}}
                </div>
            </a>
        </div>
    </div>
@empty
    <div class="col-12 text-center py-5">
        <p class="text-muted">Tidak ada produk di kategori ini.</p>
    </div>
@endforelse
