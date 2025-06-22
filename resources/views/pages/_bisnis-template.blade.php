<x-app-layout>
    {{-- Hero Section --}}
    <section class="page-hero" style="background-image: url('{{ $page->banner_image ? asset('storage/' . $page->banner_image) : asset('storage/default-banner.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white">{{ $page->title }}</h1>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
             {{-- Tampilkan deskripsi pembuka --}}
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-start">
                    {!! $page->content !!}
                </div>
            </div>

            {{-- Contoh Tampilan Grid dengan Ikon (Kontennya masih statis, bisa dikembangkan) --}}
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="p-4 shadow-sm rounded bg-light h-100">
                        {{-- Ikon --}}
                        <i class="bi bi-box-seam fs-1 text-warning"></i>
                        <h3 class="h4 fw-bold mt-3">Manufaktur</h3>
                        <p class="text-muted">Produksi koper berkualitas tinggi dengan standar internasional.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm rounded bg-light h-100">
                        {{-- Ikon --}}
                        <i class="bi bi-truck fs-1 text-warning"></i>
                        <h3 class="h4 fw-bold mt-3">Distribusi</h3>
                        <p class="text-muted">Jaringan distribusi luas yang menjangkau seluruh nusantara.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 shadow-sm rounded bg-light h-100">
                        {{-- Ikon --}}
                        <i class="bi bi-headset fs-1 text-warning"></i>
                        <h3 class="h4 fw-bold mt-3">Layanan Purna Jual</h3>
                        <p class="text-muted">Garansi dan layanan perbaikan untuk kepuasan pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
