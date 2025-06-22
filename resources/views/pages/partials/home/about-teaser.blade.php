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
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-3">{{ $aboutTitle }}</h2>
                <p class="lead text-muted">
                    {!! nl2br(e($aboutDesc)) !!} {{-- nl2br untuk menjaga baris baru dari textarea --}}
                </p>
                <a href="{{ $aboutBtnLink }}" class="btn btn-outline-dark btn-lg mt-3">{{ $aboutBtnText }}</a>
            </div>

            {{-- Kolom Kanan: Gambar dengan Tombol Play --}}
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="{{ $aboutImage }}" class="img-fluid rounded shadow-lg" alt="{{ $aboutTitle }}">

                    {{-- Tombol Play hanya muncul jika link video ada --}}
                    @if($aboutVideoLink !== '#')
                        <a href="{{ $aboutVideoLink }}" data-fancybox class="play-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-play-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
