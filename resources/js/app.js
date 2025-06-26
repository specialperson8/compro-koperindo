import './bootstrap';
import * as bootstrap from 'bootstrap'; // Pastikan ini ada

// Import jQuery jika belum
// Jika menggunakan CDN, baris ini tidak perlu. Jika diinstall via NPM:
// import $ from 'jquery';
// window.$ = window.jQuery = $;

$(document).ready(function() {
    // Logika untuk navbar scroll
    var navbar = $('#main-navbar');

    // Fungsi untuk mengecek dan mengubah style navbar
    function checkNavbar() {
        // Cek apakah URL BUKAN homepage ATAU posisi scroll lebih dari 50px
        if (window.location.pathname !== '/' || $(window).scrollTop() > 50) {
            navbar.addClass('scrolled');
        } else {
            navbar.removeClass('scrolled');
        }
    }

    // Jalankan fungsi saat halaman pertama kali dimuat
    checkNavbar();

    // Jalankan fungsi setiap kali ada event scroll
    $(window).on('scroll', checkNavbar);

     $('.on-progress-link').on('click', function(e) {
        e.preventDefault(); // Mencegah link melakukan aksi default

        Swal.fire({
            icon: 'info',
            title: 'Fitur Segera Hadir!',
            text: 'Fitur ini sedang dalam tahap pengembangan. Nantikan update dari kami!',
            confirmButtonText: 'Mengerti',
            confirmButtonColor: '#FF6600' // Warna oranye brand kita
        });
    });
});

