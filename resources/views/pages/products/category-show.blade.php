<x-app-layout>
    {{-- Hero Banner Kategori --}}
    <section class="page-hero" style="background-image: url('{{ asset('storage/' . $category->banner_image) }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white"></h1>
        </div>
    </section>

    {{-- Deskripsi Kategori --}}
    <!-- <section class="py-5">
        <div class="container">
            <div class="col-lg-8 mx-auto text-start">
                {!! $category->description !!}
            </div>
        </div>
    </section> -->

    {{-- Modern Spotlight Layout --}}
    <section class="modern-showcase py-5">
        <div class="container-fluid">
            {{-- Hero Product Section --}}
            @if($products->isNotEmpty())
            <div class="hero-product-section">
                <div class="spotlight-stage">
                    <div class="products-display">
                        @foreach($products->take(4) as $index => $product)
                        <div class="product-spotlight" data-index="{{ $index }}">
                            @if($product->main_image)
                                <img src="{{ asset('storage/' . $product->main_image) }}" alt="{{ $product->name }}">
                            @endif
                        </div>
                        @endforeach
                    </div>
                    <div class="brand-text">
                        <div class="brand-logo">
                            <span class="brand-accent">KOPER</span>INDO
                        </div>
                        <h2 class="innovation-text">Inovasi</h2>
                        <p class="tagline">Pengalaman perjalanan yang baru</p>
                    </div>
                </div>
            </div>
            @endif

            {{-- Individual Product Details --}}
            @foreach($products as $product)
            <div class="product-detail-section">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="product-showcase">
                            @if($product->main_image)
                                <img src="{{ asset('storage/' . $product->main_image) }}" class="showcase-image" alt="{{ $product->name }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-info">
                            <h3 class="product-title">{{ $product->name }}</h3>
                            <div class="product-subtitle">{{ $product->subtitle ?? 'Premium Quality Luggage' }}</div>

                            <div class="product-description">
                                {!! $product->description !!}
                            </div>

                            {{-- Feature List --}}
                            @if($product->features)
                            <div class="features-list">
                                <h5 class="features-title">Spesifikasi Utama:</h5>
                                <ul class="feature-items">
                                    @foreach(json_decode($product->features, true) ?? [] as $feature)
                                    <li>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            {{-- Call to Action --}}
                            <div class="product-actions mt-4">
                                <button class="btn btn-primary btn-lg">Lihat Detail</button>
                                <button class="btn btn-outline-primary btn-lg ms-3">Hubungi Kami</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            {{-- Bottom Section dengan Black Background --}}
            <div class="bottom-highlight-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="highlight-content">
                                <h3 class="highlight-title">Dirancang untuk<br>perjalanan tanpa batas</h3>
                                <p class="highlight-description">
                                    Elegan. Tangguh. Siap menemani ke mana pun tujuan Anda.
                                    Didesain untuk profesional urban, dan siapa pun yang hidup
                                    dalam pergerakan, koper ini lebih dari sekedar wadah—ini
                                    adalah penyataan gaya dan efisiensi.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="highlight-image">
                                @if($products->isNotEmpty() && $products->first()->main_image)
                                    <img src="{{ asset('storage/' . $products->first()->main_image) }}" alt="Featured Product">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
