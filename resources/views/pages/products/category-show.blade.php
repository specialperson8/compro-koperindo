<x-app-layout>
    {{-- Hero Banner Kategori --}}
    <section class="page-hero" style="background-image: url('{{ asset('storage/' . $category->banner_image) }}');">
        <div class="hero-overlay"></div>
        <div class="container"><h1 class="display-4 fw-bold text-white">{{ $category->name }}</h1></div>
    </section>

    {{-- Deskripsi Kategori --}}
    <section class="py-5"><div class="container"><div class="col-lg-8 mx-auto text-start">{!! $category->description !!}</div></div></section>

    {{-- Grid Logo/Nama Produk --}}
    <section class="py-5 bg-light" style="background-image: url('{{ asset('storage/coba1.jpg') }}');"><div class="container">
        <div class="product-zigzag-list">
            @foreach ($products as $product)
                {{-- Setiap produk adalah satu 'row' --}}
                <div class="row align-items-center product-zigzag-item">

                    {{-- KOLOM GAMBAR (Selalu didefinisikan pertama di HTML) --}}
                    {{-- Untuk item genap, kita beri class order-md-2 agar pindah ke kanan di desktop --}}
                    <div class="col-md-6 product-image-wrapper @if($loop->even) order-md-2 @endif">
                        @if($product->main_image)
                            <img src="{{ asset('storage/' . $product->main_image) }}" class="img-fluid rounded-4 shadow" alt="{{ $product->name }}">
                        @endif
                    </div>

                    {{-- KOLOM TEKS (Selalu didefinisikan kedua di HTML) --}}
                    {{-- Untuk item genap, kita beri class order-md-1 agar pindah ke kiri di desktop --}}
                    <div class="col-md-6 @if($loop->even) order-md-1 @endif">
                        <h3 class="fw-bold h2">{{ $product->name }}</h3>
                        <div class="text-muted product-description">
                            {!! $product->description !!}
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div></section>

        {{-- Navigasi Kategori Lain --}}
    <!-- <section class="py-5 bg-light">
        <div class="container">
            <h3 class="text-center fw-bold mb-4">Jelajahi Solusi Lainnya</h3>
            <div class="row g-4 justify-content-center">
                @foreach($allCategories as $otherCategory)
                    <div class="col-md-6 col-lg-3">
                        {{-- Kita pakai ulang style kartu dari homepage --}}
                        <a href="{{ route('product.category.show', $otherCategory->slug) }}" class="card product-category-card text-white text-decoration-none">
                            <img src="{{ asset('storage/' . $otherCategory->icon_path) }}" class="card-img" alt="{{ $otherCategory->name }}">
                            <div class="card-img-overlay d-flex align-items-end p-4">
                                <h5 class="card-title fw-bold">{{ $otherCategory->name }}</h5>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->
</x-app-layout>
