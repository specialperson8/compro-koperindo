<x-app-layout>
    <div class="container my-5 py-5">
        <div class="row">
            {{-- Kita batasi lebar konten agar nyaman dibaca --}}
            <div class="col-lg-8 mx-auto">

                {{-- Breadcrumb atau Kategori --}}
                <div class="mb-3">
                    <a href="#" class="text-warning text-decoration-none fw-bold">{{ $post->postCategory->name }}</a>
                </div>

                {{-- Judul dan Info --}}
                <h1 class="display-5 fw-bold mb-3">{{ $post->title }}</h1>
                <p class="text-muted">
                    Dipublikasikan pada {{ $post->created_at->format('d F Y') }} oleh {{ $post->user->name }}
                </p>
                <hr class="my-4">

                {{-- Gambar Thumbnail --}}
                @if($post->thumbnail_path)
                    <img src="{{ asset('storage/' . $post->thumbnail_path) }}" class="img-fluid rounded shadow-sm mb-4" alt="{{ $post->title }}">
                @endif

                {{-- Konten Artikel Lengkap --}}
                <div class="post-content fs-5">
                    {!! $post->content !!} {{-- <-- INI BAGIAN KUNCINYA --}}
                </div>

                {{-- Tombol Kembali --}}
                <hr class="my-5">
                <a href="{{ route('posts.index') }}" class="btn btn-outline-dark">← Kembali ke Semua Berita</a>

            </div>
        </div>
    </div>
</x-app-layout>
