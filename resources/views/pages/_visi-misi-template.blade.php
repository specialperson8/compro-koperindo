<x-app-layout>
    {{-- Hero Section --}}
    <section class="page-hero" style="background-image: url('{{ $page->banner_image ? asset('storage/' . $page->banner_image) : asset('storage/about-us.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="container">
            <h1 class="display-4 fw-bold text-white">{{ $page->title }}</h1>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            {{-- Kita akan gunakan konten dari Rich Editor di sini --}}
            {{-- User bisa menggunakan Heading 2 untuk memisahkan Visi dan Misi --}}
            <div class="row">
                <div class="col-lg-10 mx-auto page-content fs-5">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
