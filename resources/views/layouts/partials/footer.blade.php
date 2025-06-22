<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-start">
        <div class="row text-center text-md-start">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold text-warning">MAPS</h5>
                <p>MAPS KOPERINDO</p>
                <div class="mt-3">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.6568573356267!2d112.70178327484122!3d-7.503081492509387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1001c6ec97b%3A0x1715c83d235c677!2sKOPERINDO.ID!5e0!3m2!1sen!2sid!4v1750219699993!5m2!1sen!2sid" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>
                </div>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold">Jelajahi</h5>

                <p><a href="{{ route('page.show', 'tentang-kami') }}" class="text-white" style="text-decoration: none;">Tentang Kami</a></p>

                <p><a href="{{ route('page.show', 'visi-misi') }}" class="text-white" style="text-decoration: none;">Visi & Misi</a></p>



                <p><a href="{{ route('page.show', 'bisnis') }}" class="text-white" style="text-decoration: none;">Bisnis</a></p>

                <p><a href="{{ route('posts.by_category', 'inovasi') }}" class="text-white" style="text-decoration: none;">Inovasi</a></p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold">Bantuan</h5>
                {{-- Link ke halaman statis 'faq' --}}
                <p><a href="{{ route('page.show', 'faq') }}" class="text-white" style="text-decoration: none;">FAQ</a></p>
                {{-- Link ke halaman statis 'kontak' --}}
                <p><a href="{{ route('page.show', 'kontak') }}" class="text-white" style="text-decoration: none;">Kontak</a></p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 fw-bold">Hubungi</h5>
                <p><a href="#" class="text-white" style="text-decoration: none;">Kontak Kami</a></p>
                <p><a href="#" class="text-white" style="text-decoration: none;">0870087888</a></p>
            </div>
        </div>
        <hr class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-8">
                <p>Hak Cipta ©{{ date('Y') }} Koperindo. Semua Hak Dilindungi.</p>
            </div>
        </div>
    </div>
</footer>
