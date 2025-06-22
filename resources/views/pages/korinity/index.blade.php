<x-app-layout>
    {{-- Hero Section --}}
    <section class="page-hero" style="background-image: url('storage/coba1.jpg');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white">#Korinity</h1>
            <p class="lead text-white">Ikuti keseruan dan cerita di balik layar Koperindo.</p>
        </div>
    </section>

    {{-- Konten Grid Video --}}
    <section class="py-5">
        <div class="container">
            @if($tiktokPosts->isNotEmpty())
                <div class="row g-4">
                    @foreach ($tiktokPosts as $post)
                        <div class="col-md-6 col-lg-4">
                            <div class="card tiktok-card h-100 shadow-sm">
                                <a href="{{ $post->share_url }}" target="_blank" class="tiktok-card__image-link">
                                    <img src="{{ $post->cover_image_url }}" class="card-img-top" alt="{{ Str::limit($post->caption, 50) }}">
                                    <div class="tiktok-card__play-icon">
                                        {{-- Ikon Play SVG --}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/><path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/></svg>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <p class="card-text">{{ Str::limit($post->caption, 100) }}</p>
                                </div>
                                <div class="card-footer bg-white d-flex justify-content-around text-muted small">
                                    <span>❤️ {{ $post->like_count }}</span>
                                    <span>💬 {{ $post->comment_count }}</span>
                                    <span>🔗 {{ $post->share_count }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="d-flex justify-content-center mt-5">
                    {{ $tiktokPosts->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <p class="text-muted fs-5">Gagal memuat feed TikTok atau belum ada video yang diposting.</p>
                </div>
            @endif
        </div>
    </section>
</x-app-layout>
