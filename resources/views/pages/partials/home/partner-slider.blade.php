@if($partners->isNotEmpty())
<section class="partner-section py-5">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">Partner Kami</h2>
        <div class="partner-slider">
            @foreach ($partners as $partner)
                <div class="partner-slide">
                    <a href="{{ $partner->url ?? '#' }}" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('storage/' . $partner->logo_path) }}" alt="{{ $partner->name }}" class="partner-logo">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@push('scripts')
<script>
    $(document).ready(function(){
        // ... (script untuk produk interaktif) ...

        // Inisialisasi Slider Partner
        if ($('.partner-slider').length) {
            $('.partner-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500, // Lebih cepat untuk efek marquee
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 4 } },
                    { breakpoint: 768, settings: { slidesToShow: 3 } },
                    { breakpoint: 576, settings: { slidesToShow: 2 } }
                ]
            });
        }
    });
</script>
@endpush
