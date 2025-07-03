@php
    // Ambil data inovasi. Logika ini tetap sama.
    $innovationCategory = \App\Models\PostCategory::where('slug', 'inovasi')->first();
    $innovations = [];
    if ($innovationCategory) {
        $innovations = \App\Models\Post::where('post_category_id', $innovationCategory->id)->latest()->take(5)->get();
    }
@endphp

@if($innovations->isNotEmpty())

    {{-- Section Slider dengan responsive background dan ornamen --}}
    <section class="innovations-section position-relative">
        <div class="innovations-stage position-relative">

            {{-- Pattern images dengan responsive positioning --}}
            <img src="{{ asset('storage/grup.png') }}" class="innovations-stage__collage-img-1">
            <img src="{{ asset('storage/pattern2.png') }}" class="innovations-stage__collage-img-2">

            <div class="container">
                <div class="text-center mb-4 mb-md-5">
                    <h2 class="display-6 display-md-5 fw-bold text-dark">On Innovations & Solutions</h2>
                    <p class="lead text-dark px-3 px-md-0">Pendekatan kami terhadap inovasi yang berpusat pada pelanggan.</p>
                </div>

                <div class="innovations-slider">
                    @foreach ($innovations as $innovation)
                        <div>
                            {{-- Kartu slider dengan background putih --}}
                            <div class="innovation-card-sig p-3 p-md-4 mx-2 mx-md-3 mx-lg-5">
                                <div class="row g-0 align-items-center">
                                    <div class="col-12 col-lg-7 mb-3 mb-lg-0">
                                        @if($innovation->thumbnail_path)
                                            <img src="{{ asset('storage/' . $innovation->thumbnail_path) }}"
                                                 class="img-fluid rounded w-100"
                                                 alt="{{ $innovation->title }}"
                                                 style="height: 80%; width: 80%; object-fit: cover;">
                                        @endif
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="p-2 p-md-3 p-lg-4">
                                            <h3 class="fw-bold h3 h2-md h2-lg mb-2 mb-md-3">{{ $innovation->title }}</h3>
                                            <p class="my-2 my-md-3 text-muted small-text">{{ $innovation->excerpt }}</p>
                                            <a href="{{ route('posts.show', $innovation) }}"
                                               class="btn btn-dark rounded-pill px-3 px-md-4 btn-sm btn-md-normal">
                                               Baca Inovasi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endif

@push('scripts')
<script>
    $(document).ready(function(){
        // Konfigurasi Slick Carousel dengan responsive settings
        if ($('.innovations-slider').length) {
            $('.innovations-slider').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 4000,
                slidesToShow: 1,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            autoplaySpeed: 5000, // Lebih lambat di mobile
                            speed: 300
                        }
                    }
                ]
            });
        }
    });
</script>
@endpush
