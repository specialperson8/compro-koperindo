@php
    // Ambil data inovasi dari controller
    $innovationCategory = \App\Models\PostCategory::where('slug', 'inovasi')->first();
    $innovations = [];
    if ($innovationCategory) {
        $innovations = \App\Models\Post::where('post_category_id', $innovationCategory->id)->latest()->take(5)->get();
    }
@endphp

@if(count($innovations) > 0)
<section class="innovations-section bg-white py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">On Innovations & Solutions</h2>
            <p class="lead text-muted">Pendekatan kami terhadap inovasi yang berpusat pada pelanggan.</p>
        </div>

        <div class="innovations-slider">
            @foreach ($innovations as $innovation)
            <div class="p-3">
                {{-- Kita gunakan class custom 'innovation-card-sig' --}}
                <div class="innovation-card-sig row g-0 align-items-center">
                    <div class="col-md-7">
                        <img src="{{ asset('storage/' . $innovation->thumbnail_path) }}" class="img-fluid innovation-card-sig__image" alt="{{ $innovation->title }}">
                    </div>
                    <div class="col-md-5">
                        <div class="p-4 p-md-5">
                            <h3 class="fw-bold h2">{{ $innovation->title }}</h3>
                            <p class="my-3 text-muted">{{ $innovation->excerpt }}</p>
                            <a href="#" class="btn btn-dark rounded-pill px-4">Baca Inovasi</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@push('scripts')
<script>
    $(document).ready(function(){
        $('.innovations-slider').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 1,
            dots: true,
            arrows: false, // Kita sembunyikan panah agar lebih clean
            autoplay: true,
        });
    });
</script>
@endpush
