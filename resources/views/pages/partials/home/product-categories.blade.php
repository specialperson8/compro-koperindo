<section class="product-categories-section section-padding" style="">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Produk & Solusi</h2>
        </div>
        <div class="row g-4">
            @foreach ($productCategories as $category)
                <div class="col-12 col-md-6 col-lg-3 mb-4">
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
