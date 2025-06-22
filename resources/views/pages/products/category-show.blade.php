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
        <div class="row g-4 justify-content-center">
            @foreach ($products as $product)
                <div class="col-md-4 col-lg-3 text-center mb-4">
                    {{-- Bungkus seluruh kartu dengan tag <a> yang mengarah ke rute detail --}}
                    <a href="{{ route('products.show', $product) }}" class="text-decoration-none">
                        <div class="product-card-sig h-100">
                            <div class="product-card-sig__image-container mb-3">
                                @if($product->main_image)
                                    <img src="{{ asset('storage/' . $product->main_image) }}" class="img-fluid" alt="{{ $product->name }}">
                                @else
                                    <div class="d-flex justify-content-center align-items-center bg-light" style="height: 200px; width: 100%;">
                                        <span class="text-muted">No Image</span>
                                    </div>
                                @endif
                            </div>
                            <div class="product-card-sig__content">
                                <h5 class="fw-bold text-dark mb-1">{{ $product->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div></section>

        {{-- Navigasi Kategori Lain --}}
    <section class="py-5 bg-light">
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
    </section>
</x-app-layout>
