<div class="hero-slider">
    @forelse ($sliders as $slide)
        {{-- Kita simpan teks asli di dalam data-attributes untuk diambil oleh JavaScript --}}
        <div class="hero-slide"
             style="background-image: url('{{ asset('storage/' . $slide->image_path) }}');"
             data-title="{{ $slide->title }}"
             data-subtitle="{{ $slide->subtitle }}">

            <div class="hero-overlay"></div>
            <div class="container hero-content">
                {{-- Elemen ini akan menjadi "kanvas" untuk animasi mengetik --}}
                <h1 class="display-4 fw-bold">
                    <span class="typed-title"></span>
                </h1>
                <p class="lead">
                    <span class="typed-subtitle"></span>
                </p>

                {{-- Tombol disembunyikan dulu, akan muncul setelah animasi selesai --}}
                <div class="hero-button-container" style="opacity: 0; transition: opacity 0.5s ease 0.5s;">
                    @if ($slide->button_text && $slide->button_link)
                        <a href="{{ $slide->button_link }}" class="btn btn-warning btn-lg">{{ $slide->button_text }}</a>
                    @endif
                </div>
            </div>
        </div>
    @empty
        {{-- Tampilan fallback jika tidak ada slider di database --}}
        <div class="hero-slide" style="background-color: #333;">
            <div class="container hero-content">
                <h1 class="display-4 fw-bold">Selamat Datang di Koperindo</h1>
                <p class="lead">Konten slider dapat dikelola melalui admin panel.</p>
            </div>
        </div>
    @endforelse
</div>


{{-- 2. SCRIPT JAVASCRIPT --}}
@push('scripts')
<script type="text/javascript">
    $(document).ready(function(){

        var heroSlider = $('.hero-slider');

        // Hanya jalankan script jika elemen slider ada
        if (heroSlider.length > 0) {

            // Inisialisasi Slick Carousel
            heroSlider.slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 800,
                fade: true,
                cssEase: 'linear',
                autoplay: true,
                autoplaySpeed: 7000, // Durasi per slide diperpanjang untuk memberi waktu animasi
                pauseOnHover: false,
            });

            // Fungsi untuk menjalankan animasi pada slide yang aktif
            function runTypingAnimation(activeSlide) {
                // Hancurkan instance Typed.js yang mungkin sudah ada
                if (activeSlide.data('typedTitle')) {
                    activeSlide.data('typedTitle').destroy();
                }
                if (activeSlide.data('typedSubtitle')) {
                    activeSlide.data('typedSubtitle').destroy();
                }

                // Ambil target elemen span
                var titleElement = activeSlide.find('.typed-title');
                var subtitleElement = activeSlide.find('.typed-subtitle');
                var buttonContainer = activeSlide.find('.hero-button-container');

                // Ambil teks dari data-attributes
                var titleText = activeSlide.data('title') || '';
                var subtitleText = activeSlide.data('subtitle') || '';

                // Reset
                titleElement.text('');
                subtitleElement.text('');
                buttonContainer.css('opacity', 0);

                // Buat instance Typed.js untuk judul
                var typedTitle = new Typed(titleElement[0], {
                    strings: [titleText],
                    typeSpeed: 30,
                    showCursor: false,
                    onComplete: function() {
                        // Setelah judul selesai, mulai animasi sub-judul
                        var typedSubtitle = new Typed(subtitleElement[0], {
                            strings: [subtitleText],
                            typeSpeed: 22,
                            startDelay: 100,
                            showCursor: false,
                            onComplete: function() {
                                // Setelah semua teks selesai, tampilkan tombol
                                buttonContainer.css('opacity', 1);
                            }
                        });
                        activeSlide.data('typedSubtitle', typedSubtitle);
                    }
                });
                activeSlide.data('typedTitle', typedTitle);
            }

            // Jalankan animasi untuk slide pertama saat slider dimuat
            var firstSlide = heroSlider.find('.slick-slide').first();
            runTypingAnimation(firstSlide);

            // Jalankan animasi setiap kali slide berganti
            heroSlider.on('afterChange', function(event, slick, currentSlide){
                var activeSlide = $(slick.$slides.get(currentSlide));
                runTypingAnimation(activeSlide);
            });
        }
    });
</script>
@endpush
