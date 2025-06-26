@php
    // Menyiapkan data dengan nilai default
    $aboutTitle = $settings['about_teaser_title'] ?? 'Go Beyond Next';
    $aboutDesc = $settings['about_teaser_description'] ?? 'Deskripsi default akan muncul di sini. Silakan isi dari admin panel.';
    $aboutBtnText = $settings['about_teaser_button_text'] ?? 'Pelajari Lebih Lanjut';
    $aboutBtnLink = $settings['about_teaser_button_link'] ?? '#';
    $aboutImage = isset($settings['about_teaser_image']) ? asset('storage/' . $settings['about_teaser_image']) : 'https://images.unsplash.com/photo-1579758629938-03607ccDB445?q=80&w=1770';
    $aboutVideoLink = $settings['about_teaser_video_link'] ?? '#';
@endphp



<section class="about-teaser-section py-5">
    <div class="container">
        <div class="row align-items-center">
            {{-- Kolom Kiri: Teks --}}
            {{-- Di mobile akan berada di posisi kedua, di desktop (lg) kembali ke posisi pertama --}}
            <div class="col-lg-6 mb-4 mb-lg-0 order-2 order-lg-1">
                <h2 class="display-5 fw-bold mb-3">{{ $aboutTitle }}</h2>
                <p class="lead text-muted">
                    {!! nl2br(e($aboutDesc)) !!}
                </p>
                <a href="{{ $aboutBtnLink }}" class="btn btn-outline-dark btn-lg mt-3">{{ $aboutBtnText }}</a>
            </div>

            {{-- Kolom Kanan: Gambar --}}
            {{-- Di mobile akan berada di posisi pertama, di desktop (lg) kembali ke posisi kedua --}}
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="position-relative">
                    <img src="{{ $aboutImage }}" class="img-fluid rounded shadow-lg" alt="{{ $aboutTitle }}">

                    @if($aboutVideoLink !== '#')
                        <a href="{{ $aboutVideoLink }}" data-fancybox class="play-button">
                            {{-- SVG Ikon Play --}}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
