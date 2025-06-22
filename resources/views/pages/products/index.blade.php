<x-app-layout>
    <div class="container my-5 py-5">
        <h1 class="display-4 fw-bold mb-5 text-center">Koleksi Produk Kami</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6 col-lg-3 mb-4">
                    {{-- Kita pakai ulang style kartu produk dari homepage --}}
                    <div class="product-card-sig text-center h-100">
                        <a href="#" class="d-block text-decoration-none">
                            <div class="product-card-sig__image-container mb-3">
                                <img src="{{ asset('storage/' . $product->main_image) }}" class="img-fluid" alt="{{ $product->name }}">
                            </div>
                            <div class="product-card-sig__content">
                                <h5 class="fw-bold text-dark mb-1">{{ $product->name }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Navigasi Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links() }}
        </div>
    </div>
</x-app-layout>
