<x-app-layout>
    <div class="container my-5 py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold mb-5 text-center">{{ $categoryName ?? 'Baca & Artikel' }}</h1>
            <p class="lead text-muted">Ikuti perkembangan terbaru dan dapatkan inspirasi dari kami.</p>
        </div>

        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mb-4">
                    {{-- Kita pakai ulang style kartu berita yang sudah ada --}}
                    <a href="{{ route('posts.show', $post) }}" class="news-card-sig d-block text-decoration-none">
                        {{-- Gambar Thumbnail --}}
                        @if($post->thumbnail_path)
                            <img src="{{ asset('storage/' . $post->thumbnail_path) }}" alt="{{ $post->title }}" class="img-fluid" style="aspect-ratio: 16/9; object-fit: cover;">
                        @endif
                        <div class="p-4">
                            <p class="text-muted small mb-2">{{ $post->created_at->format('d F Y') }}</p>
                            <h5 class="fw-bold text-dark mb-2">{{ $post->title }}</h5>
                            <p class="text-muted small">{{ $post->excerpt }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>Saat ini belum ada berita yang dipublikasikan.</p>
                </div>
            @endforelse
        </div>

        {{-- Navigasi Pagination --}}
        <div class="d-flex justify-content-center mt-5 pt-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>
