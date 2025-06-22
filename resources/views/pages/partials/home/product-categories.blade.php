<section class="product-categories-section py-5" style="background-image: url('{{ asset('storage/coba1.jpg') }}');">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Produk & Solusi</h2>
        </div>
        <div class="row g-4">
            @foreach ($productCategories as $category)
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('product.category.show', $category->slug) }}" class="card product-category-card text-white text-decoration-none">
                        <img src="{{ asset('storage/' . $category->icon_path) }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-end p-4">
                            <h5 class="card-title fw-bold">{{ $category->name }}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
