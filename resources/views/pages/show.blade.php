<x-app-layout>
    {{-- Hero Section --}}
    @php
        $bannerUrl = $page->banner_image
            ? asset('storage/' . $page->banner_image)
            : asset('storage/about-us.jpg');
    @endphp
    <section class="page-hero" style="background-image: url('{{ $bannerUrl }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white">{{ $page->title }}</h1>
        </div>
    </section>

    {{-- KONTEN DINAMIS BERDASARKAN TEMPLATE --}}

    {{-- Tampilkan konten default dari Rich Editor --}}
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto page-content fs-5">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>

    @if($page->slug === 'korinity')
                <div class="social-wall-container mt-5">
                    {{-- Paste kode dari Elfsight di sini --}}
                    {{-- Contoh kodenya akan seperti ini: --}}
                    <script src="https://static.elfsight.com/platform/platform.js" async></script>
                    <div class="elfsight-app-faacf672-eaa1-47c3-9e83-a1562cd111be" data-elfsight-app-lazy></div>
                </div>
    @endif

    {{-- JIKA TEMPLATENYA 'about', tampilkan section tambahan --}}
    @if($page->template === 'about')
        {{-- Section Milestone Slider --}}
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="fw-bold text-center mb-5">Perjalanan Kami</h2>
                <div class="milestone-slider">
                    @foreach ($milestones as $milestone)
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
    @endif

    {{-- JIKA TEMPLATENYA 'history', tampilkan timeline --}}
    @if($page->template === 'history')
        {{-- Kode untuk timeline vertikal bisa ditaruh di sini --}}
    @endif


    @push('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            if ($('.milestone-slider').length > 0) {
                $('.milestone-slider').slick({ /* ... opsi slick ... */ });
            }
        });
    </script>
    @endpush
</x-app-layout>
