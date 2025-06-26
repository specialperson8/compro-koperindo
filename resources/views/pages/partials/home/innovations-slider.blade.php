@php
    // Ambil data inovasi. Logika ini tetap sama.
    $innovationCategory = \App\Models\PostCategory::where('slug', 'inovasi')->first();
    $innovations = [];
    if ($innovationCategory) {
        $innovations = \App\Models\Post::where('post_category_id', $innovationCategory->id)->latest()->take(5)->get();
    }
@endphp

{{-- Hanya tampilkan section jika ada data inovasi --}}
@if($innovations->isNotEmpty())

{{-- Kita bungkus semuanya dengan sebuah "panggung" utama --}}
<div class="innovations-stage position-relative">

    {{-- Elemen-elemen Grafis yang diposisikan absolut --}}
    {{-- 1. Bentuk Geometris Oranye/Merah --}}
    <div class="innovations-stage__shape"></div>

    {{-- 2. Gambar-gambar kolase kecil (contoh) --}}
    {{-- Ganti src dengan gambar-gambar relevan dari project lo --}}
    <!-- <img src="{{ asset('storage/collage.jpg') }}" class="innovations-stage__collage-img-1 d-none d-lg-block" alt="Collage Image 1">
    <img src="{{ asset('storage/collage.jpg') }}" class="innovations-stage__collage-img-2 d-none d-lg-block" alt="Collage Image 2"> -->

    {{-- Section Slider Asli kita, sekarang diposisikan di atas background --}}
    <section class="innovations-section position-relative">
        <div class="container">
            <div class="text-center mb-5 text-white">
                <h2 class="display-5 fw-bold text-dark">On Innovations & Solutions</h2>
                <p class="lead text-dark">Pendekatan kami terhadap inovasi yang berpusat pada pelanggan.</p>
            </div>

            <div class="innovations-slider">
                @foreach ($innovations as $innovation)
                    <div>
                        {{-- Kartu slider dengan background putih --}}
                        <div class="innovation-card-sig p-3 p-md-4 mx-lg-5">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-7 mb-3 mb-lg-0">
                                    @if($innovation->thumbnail_path)
                                        <img src="{{ asset('storage/' . $innovation->thumbnail_path) }}" class="img-fluid rounded" alt="{{ $innovation->title }}">
                                    @endif
                                </div>
                                <div class="col-lg-5">
                                    <div class="p-lg-4">
                                        <h3 class="fw-bold h2">{{ $innovation->title }}</h3>
                                        <p class="my-3 text-muted">{{ $innovation->excerpt }}</p>
                                        <a href="{{ route('posts.show', $innovation) }}" class="btn btn-dark rounded-pill px-4">Baca Inovasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
@endif

@push('scripts')
<script>
    $(document).ready(function(){
        // Konfigurasi Slick Carousel tetap sama (fade effect)
        if ($('.innovations-slider').length) {
            $('.innovations-slider').slick({
                    dots: true,         // Tampilkan titik navigasi
    arrows: true,         // Tampilkan panah navigasi kiri-kanan
    infinite: true,
    speed: 500,         // Kecepatan transisi
    fade: true,         // <-- Kunci utama: gunakan efek FADE, bukan SLIDE
    cssEase: 'linear',
    autoplay: true,
    autoplaySpeed: 3000, // Ganti slide setiap 5 detik
    slidesToShow: 1,      // Hanya tampilkan 1 slide dalam satu waktu
    slidesToScroll: 1

            });
        }
    });
</script>
@endpush
