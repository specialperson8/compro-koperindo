{{-- Footer dengan layout seperti tampilan kedua --}}
<footer class="footer-sig position-relative">
    {{-- Lapisan Background Pattern --}}
    <div class="footer-sig__bg-pattern"></div>

    {{-- Ornamen Pojok Kiri Atas --}}
    <div class="footer-sig__ornament footer-sig__ornament--top-left"></div>

    {{-- Ornamen Pojok Kanan Bawah --}}
    <div class="footer-sig__ornament footer-sig__ornament--bottom-right"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row pt-4 pb-3">
            {{-- Kolom 1: Maps --}}
            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                <h5 class="footer-sig__title maps-title">Head Office KOPERINDO</h5>
                <div class="footer-sig__map-container">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6568573356267!2d112.70178327484122!3d-7.503081492509387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1001c6ec97b%3A0x1715c83d235c677!2sKOPERINDO.ID!5e0!3m2!1sen!2sid!4v1750219699993!5m2!1sen!2sid" width="100%" height="180" style="border:0; border-radius: 8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <p class="footer-sig__address-label mt-2 mb-0">
                    <strong>Alamat:</strong> Permata blok R3 No.32 - 39, Kludan, Kec. Tanggulangin, Kabupaten Sidoarjo, Jawa Timur 61272
                </p>
            </div>

            {{-- Kolom 2-4: Menu Links dalam satu baris --}}
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                        <h5 class="footer-sig__title">Jelajahi</h5>
                        <ul class="list-unstyled footer-sig__links">
                            <li><a href="{{ route('page.show', 'tentang-kami') }}">Tentang Kami</a></li>
                            <li><a href="{{ route('page.show', 'visi-misi') }}">Visi & Misi</a></li>
                            <li><a href="{{ route('page.show', 'bisnis') }}">Bisnis</a></li>
                            <li><a href="{{ route('posts.by_category', 'inovasi') }}">Inovasi</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                        <h5 class="footer-sig__title">Bantuan</h5>
                        <ul class="list-unstyled footer-sig__links">
                            <li><a href="{{ route('page.show', 'faq') }}">FAQ</a></li>
                            <li><a href="{{ route('page.show', 'kontak') }}">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 mb-3">
                        <h5 class="footer-sig__title">Hubungi</h5>
                        <ul class="list-unstyled footer-sig__links">
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="tel:0870087888">0870087888</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="footer-sig__copyright-section pt-2 border-top border-secondary">
            <p class="footer-sig__copyright text-center mb-0">Hak Cipta ©2025 KOPERINDO. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>
