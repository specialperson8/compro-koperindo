<section id="produk" class="products-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold">Produk & Solusi</h2>
        </div>

        {{-- Navigasi Tab Kategori --}}
        <div class="d-flex justify-content-center mb-5" id="product-category-tabs">
            @foreach ($productCategories as $category)
                <button type="button"
                        class="category-tab-sig mx-3 @if($loop->first) is-active @endif"
                        data-category-id="{{ $category->id }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>

        {{-- Kontainer untuk menampilkan produk --}}
        {{-- Kita akan tetap menggunakan struktur ini dan menargetnya dengan benar --}}
        <div class="tab-content">
            <div class="tab-pane fade show active" id="product-display-area" role="tabpanel">
                <div class="row g-4">
                    @include('pages.partials.home.product-list', ['products' => $initialProducts])
                </div>
            </div>
            {{-- Indikator loading untuk AJAX --}}
            <div id="loading-indicator" class="text-center py-5" style="display: none;">
                <div class="spinner-border text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <!-- <div class="text-center mt-5">
                <a href="{{ route('products.index') }}" class="btn btn-dark btn-lg">Lihat Semua Koleksi</a>
            </div> -->
        </div>
    </div>
</section>

@push('scripts')
<script>
    $(document).ready(function() {
        // Menggunakan event delegation untuk efisiensi
        $('#product-category-tabs').on('click', '.category-tab-sig', function() {
            // 1. Mengatur Tampilan Tab yang Aktif
            $('.category-tab-sig').removeClass('is-active');
            $(this).addClass('is-active');

            // 2. Mengambil Data dan Menyiapkan Target
            var categoryId = $(this).data('category-id');
            // --- INI PERBAIKAN UTAMA ---
            // Targetkan div.row di dalam #product-display-area
            var productRow = $('#product-display-area .row');
            var loadingIndicator = $('#loading-indicator');
            var productDisplayContainer = $('#product-display-area'); // Target pembungkusnya

            // 3. Menampilkan Animasi Loading
            productDisplayContainer.hide(); // Sembunyikan seluruh area produk
            loadingIndicator.show();

            // 4. Melakukan Request AJAX ke Server
            $.ajax({
                url: '/get-products-by-category/' + categoryId,
                type: 'GET',
                success: function(response) {
                    // Jika request berhasil

                    // Sembunyikan spinner loading
                    loadingIndicator.hide();

                    // Masukkan response (HTML dari partial view) ke dalam div.row
                    productRow.html(response);

                    // Tampilkan kembali seluruh area produk dengan efek fade
                    productDisplayContainer.fadeIn(400);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Jika request gagal

                    // Sembunyikan spinner loading
                    loadingIndicator.hide();

                    // Tampilkan pesan error di dalam div.row
                    productRow.html('<div class="col-12"><p class="text-center text-danger">Terjadi kesalahan saat memuat produk.</p></div>');

                    // Tampilkan kembali area produk untuk menunjukkan pesan error
                    productDisplayContainer.show();

                    console.error("AJAX Error: " + textStatus, errorThrown);
                }
            });
        });
    });
</script>
@endpush
