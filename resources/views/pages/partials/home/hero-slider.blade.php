<div class="hero-slider">
    @forelse ($sliders as $slide)
        <div class="hero-slide" style="background-image: url('{{ asset('storage/' . $slide->image_path) }}');">
            <div class="hero-overlay"></div>
            <div class="container hero-content">
                <h1 class="display-4 fw-bold">{{ $slide->title }}</h1>
                <p class="lead">{{ $slide->subtitle }}</p>
                @if ($slide->button_text && $slide->button_link)
                    <a href="{{ $slide->button_link }}" class="btn btn-warning btn-lg">{{ $slide->button_text }}</a>
                @endif
            </div>
        </div>
    @empty
        {{-- Tampilan fallback jika tidak ada slider di database --}}
        <div class="hero-slide" style="background-color: #333;">
            <div class="container hero-content">
                <h1 class="display-4 fw-bold">Selamat Datang</h1>
                <p class="lead">Silakan tambahkan slide melalui admin panel.</p>
            </div>
        </div>
    @endforelse
</div>

@push('scripts')
{{-- Pastikan jQuery dan Slick JS sudah di-load di layout utama --}}
<script type="text/javascript">
    // Pastikan kode ini ada di dalam document ready
    $(document).ready(function(){
        $('.hero-slider').slick({
            dots: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
        });
    });
</script>
@endpush
