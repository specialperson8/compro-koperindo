<x-app-layout>
    {{-- Hero Section Khusus Halaman Tentang Kami --}}
    <section class="page-hero" style="background-image: url('{{ $page->banner_image ? asset('storage/' . $page->banner_image) : asset('storage/about-us.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white">Tentang Kami</h1>
        </div>
    </section>

    {{-- Section Deskripsi Singkat --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="fw-bold">Tentang Koperindo</h2>
                    {{-- Ganti dengan teks dinamis dari Site Settings jika sudah siap --}}
                    <p class="lead text-muted">SIG merupakan perusahaan penyedia solusi bahan bangunan terdepan di Indonesia. Dengan lebih dari 50 variasi produk, jasa, dan solusi pendukung, SIG menghadirkan fleksibilitas pembangunan sesuai dengan kebutuhan pelanggan, di mana pun berada.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Milestone Slider --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Perjalanan Kami</h2>
            <div class="milestone-slider">
                @foreach ($milestones as $milestone)
                    {{-- Setiap slide dibungkus dengan div ini --}}
                    <div class="px-3">
                        <div class="milestone-card text-center">
                            <h3 class="milestone-card__year">{{ $milestone->year }}</h3>
                            <h4 class="milestone-card__title">{{ $milestone->title }}</h4>
                            <p class="milestone-card__description">{{ $milestone->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    @push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            if ($('.milestone-slider').length > 0) {
                $('.milestone-slider').slick({
                    dots: true,
                    arrows: false,
                    infinite: false,
                    speed: 500,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1
                            }
                        }
                    ]
                });
            }
        });
    </script>
    @endpush

</x-app-layout> {{-- <-- INI PERBAIKANNYA. Gunakan tag penutup. --}}
