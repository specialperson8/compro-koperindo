<section class="news-teaser-section bg-light section-padding">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h3 fw-bold">Apa Kabar Koperindo?</h2>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-danger rounded-pill">Selengkapnya</a>
        </div>

        <div class="row">
            @forelse ($latestPosts as $post)
                <div class="col-md-4 mb-4">
                    {{-- Kita gunakan class custom 'news-card-sig' --}}
                    <a href="{{ route('posts.show', $post) }}" class="news-card-sig d-block text-decoration-none">
                        <div class="p-4">
                            <p class="text-muted small mb-2">{{ $post->created_at->format('d F Y') }}</p>
                            <h5 class="fw-bold text-dark mb-0">
                                {{ $post->title }}
                            </h5>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <p class="text-muted">Belum ada berita yang dipublikasikan.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</section>
