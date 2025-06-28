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
                <div class="col-lg-8 mx-auto text-justify-start">
                    <h2 class="fw-bold">Tentang Koperindo</h2>
                    <p class="lead text-muted">
                        {!! $page->content !!}
                    </p>
                </div>
            </div>
            @if($partners->isNotEmpty())
    <section class="partner-section py-5">
        <div class="container">
            @include('pages.partials.home.partner-slider', ['partners' => $partners])
        </div>
    </section>
    @endif
        </div>
    </section>

     {{-- Section Milestone Slider --}}



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
