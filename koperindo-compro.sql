-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2025 at 02:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koperindo-compro`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `location`, `description`, `apply_email`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Digital Marketing Specialist', 'Kantor Tas Koperindo, Tanggulangin, Sidoarjo', '<p>Koperindo sedang mencari Digital Marketing Specialist yang kreatif dan penuh inisiatif untuk mengembangkan strategi pemasaran digital.<br><br>Tanggung Jawab:</p><ul><li>Menyusun dan menjalankan strategi kampanye digital (Google Ads, Meta Ads, SEO).</li><li>Mengelola konten media sosial dan analitik performa.</li><li>Berkolaborasi dengan tim desain dan produk untuk meningkatkan awareness brand.</li></ul><p><br>Kualifikasi:</p><ul><li>Minimal 2 tahun pengalaman di bidang digital marketing.</li><li>Menguasai tools seperti Google Analytics, Meta Business Suite, dan SEMrush.</li><li>Komunikatif, kreatif, dan up-to-date dengan tren digital.</li></ul><p><br>Kirimkan CV dan portofolio Anda ke email yang tertera. Hanya kandidat terpilih yang akan dihubungi.<br><br></p>', 'hr@koperindo.co.id', 1, '2025-06-16 22:46:59', '2025-06-20 20:06:43'),
(2, 'Staf Administrasi & Operasional', 'Kantor Tas Koperindo, Tanggulangin, Sidoarjo', '<p>Kami membuka kesempatan bagi individu yang teliti, cekatan, dan memiliki semangat kerja tinggi untuk bergabung sebagai <strong>Staf Administrasi &amp; Operasional</strong> di Koperindo. Posisi ini berperan penting dalam menjaga kelancaran proses administrasi dan dukungan operasional harian perusahaan.</p><p><strong>Tanggung Jawab Utama:</strong></p><ul><li>Mengelola dokumen dan arsip administratif secara rapi dan terstruktur.</li><li>Menyusun laporan operasional harian/mingguan/bulanan.</li><li>Mendukung proses pengadaan barang dan kontrol stok perlengkapan.</li><li>Berkoordinasi dengan tim produksi dan distribusi terkait kebutuhan operasional.</li><li>Melakukan input dan validasi data ke dalam sistem.</li></ul><p><strong>Kualifikasi:</strong></p><ul><li>Pendidikan minimal D3/S1 Administrasi, Manajemen, atau bidang terkait.</li><li>Pengalaman kerja minimal 1 tahun di bidang administrasi (fresh graduate dipersilakan melamar).</li><li>Mampu mengoperasikan Microsoft Office (Word, Excel, PowerPoint).</li><li>Memiliki kemampuan komunikasi dan organisasi yang baik.</li><li>Teliti, bertanggung jawab, dan mampu bekerja di bawah tekanan.</li></ul><p><strong>Benefit:</strong></p><ul><li>Gaji kompetitif.</li><li>Lingkungan kerja yang suportif.</li><li>BPJS Kesehatan &amp; Ketenagakerjaan.</li><li>Peluang pengembangan karir.</li></ul>', 'hrd@koperindo.co.id', 1, '2025-06-20 19:46:22', '2025-06-20 20:06:30'),
(3, 'Frontend Developer', 'Kantor Tas Koperindo, Tanggulangin, Sidoarjo', '<p>Koperindo membuka kesempatan bagi kamu yang punya passion di bidang teknologi dan antarmuka pengguna untuk bergabung sebagai <strong>Frontend Developer</strong>. Kamu akan berperan penting dalam membangun tampilan dan pengalaman pengguna pada website dan sistem internal kami.</p><p>💻 <strong>Tanggung Jawab Utama:</strong></p><ul><li>Mengembangkan dan memelihara tampilan website (komersial dan internal).</li><li>Mengubah desain UI/UX menjadi elemen antarmuka interaktif.</li><li>Optimasi kecepatan dan performa website di berbagai perangkat.</li><li>Berkolaborasi dengan backend developer dan tim desain.</li><li>Menyelesaikan debugging, maintenance, dan peningkatan fitur secara berkala.</li></ul><p>🧠 <strong>Kualifikasi:</strong></p><ul><li>Pendidikan min. D3/S1 bidang Informatika, Sistem Informasi, atau setara.</li><li>Pengalaman min. 1 tahun (fresh graduate dipertimbangkan jika memiliki portofolio).</li><li>Menguasai HTML5, CSS3, JavaScript (Vanilla atau dengan framework).</li><li>Pengalaman dengan React.js / Vue.js / Alpine.js / Tailwind adalah nilai lebih.</li><li>Familiar dengan Git, REST API, dan pengembangan responsif (mobile-first design).</li><li>Teliti, kreatif, dan mampu bekerja mandiri maupun dalam tim.</li></ul><p>🎁 <strong>Benefit:</strong></p><ul><li>Gaji kompetitif + bonus project.</li><li>Sistem kerja fleksibel (WFO/WFH).</li><li>Akses ke tools &amp; perangkat premium developer.</li><li>Kesempatan belajar langsung dari tim senior dan CTO internal.</li><li>Proyek real dan portofolio profesional.</li></ul><p>🚀 <strong>Bangun interface koper lokal berkualitas global bersama tim IT Koperindo!</strong><br> Kirim CV + portofolio GitHub/website kamu ke: <strong>dev@koperindo.co.id</strong><br> Subjek email: <strong>Lamaran Frontend Developer – [Nama Anda]</strong></p>', 'dev@koperindo.co.id', 1, '2025-06-20 20:05:20', '2025-06-20 20:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_16_033307_create_post_categories_table', 1),
(6, '2025_06_16_033307_create_posts_table', 1),
(7, '2025_06_16_033307_create_product_categories_table', 1),
(8, '2025_06_16_033308_create_pages_table', 1),
(9, '2025_06_16_033308_create_products_table', 1),
(10, '2025_06_16_033308_create_sliders_table', 1),
(11, '2025_06_16_033309_create_careers_table', 1),
(12, '2025_06_16_080603_create_settings_table', 2),
(13, '2025_06_17_080625_create_milestones_table', 3),
(14, '2025_06_17_131801_create_teams_table', 4),
(15, '2025_06_17_151753_add_banner_image_to_pages_table', 5),
(16, '2025_06_17_152607_add_image_to_milestones_table', 6),
(17, '2025_06_17_154512_add_template_to_pages_table', 6),
(18, '2025_06_18_034826_drop_teams_table', 7),
(19, '2025_06_18_074648_create_partners_table', 8),
(20, '2025_06_19_040309_add_fields_to_product_categories_table', 9),
(21, '2025_06_20_030635_create_tiktok_posts_table', 10),
(22, '2025_06_20_073545_change_url_columns_to_text_in_tiktok_posts_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

CREATE TABLE `milestones` (
  `id` bigint UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestones`
--

INSERT INTO `milestones` (`id`, `year`, `title`, `description`, `image_path`, `order`, `created_at`, `updated_at`) VALUES
(1, '2020', 'testing 2020', 'testing 2020', NULL, 1, '2025-06-17 05:41:04', '2025-06-18 00:44:14'),
(2, '2021', 'testing 2021', 'testing 2021', NULL, 2, '2025-06-17 06:00:47', '2025-06-18 00:44:28'),
(3, '2022', 'testing 2022', 'testing 2022', NULL, 3, '2025-06-17 06:01:04', '2025-06-18 00:44:42'),
(4, '2023', 'testing 2023', 'testing 2023', NULL, 4, '2025-06-18 00:45:20', '2025-06-18 00:45:31'),
(5, '2024', 'testing 2024', 'testing 2024', NULL, 5, '2025-06-18 00:45:48', '2025-06-18 00:45:48'),
(6, '2025', 'testing 2025', 'testing 2025', NULL, 6, '2025-06-18 00:46:08', '2025-06-18 00:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `template`, `banner_image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Tentang Kami', 'tentang-kami', 'about', 'page-banners/iKYQFRT0ZrWNW6YWdGR0qGqPQQWxQU-metacmFudXJ0ZS1zLW00YWRSaDctTS11bnNwbGFzaC5qcGc=-.jpg', '<p>testing bro</p>', '2025-06-16 18:49:09', '2025-06-17 09:52:14'),
(5, 'Visi Misi', 'visi-misi', 'visi-misi', 'page-banners/STeg2kxJjzbtHUoBZjG7hwVmmocOZX-metacm9zcy1zbmVkZG9uLUtmN2hYNjRrTHcwLXVuc3BsYXNoLmpwZw==-.jpg', '<h3><strong>Visi &amp; Misi Koperindo</strong></h3><p><strong>Visi</strong><br> Menjadi perusahaan terdepan dalam industri koper dan aksesoris perjalanan di Asia Tenggara dengan produk yang inovatif, berkualitas tinggi, dan ramah lingkungan.</p><p><strong>Misi</strong></p><ol><li>Menghadirkan produk koper dan aksesoris perjalanan yang fungsional, stylish, dan tahan lama.</li><li>Meningkatkan kepuasan pelanggan melalui pelayanan yang profesional dan responsif.</li><li>Mengembangkan inovasi berkelanjutan untuk memenuhi kebutuhan mobilitas masyarakat modern.</li><li>Menjalin kemitraan strategis dengan berbagai pihak guna memperluas jangkauan pasar.</li><li>Berkontribusi pada pembangunan ekonomi nasional melalui penciptaan lapangan kerja dan pengembangan SDM lokal.</li></ol><p><strong>Nilai-Nilai Perusahaan</strong></p><ul><li><strong>Integritas</strong> — Kami menjunjung tinggi kejujuran dan etika dalam setiap aspek bisnis.</li><li><strong>Inovasi</strong> — Kami terus berinovasi demi menciptakan nilai tambah bagi pelanggan.</li><li><strong>Kualitas</strong> — Kami berkomitmen untuk selalu memberikan produk dan layanan terbaik.</li><li><strong>Kepedulian</strong> — Kami peduli terhadap pelanggan, karyawan, dan lingkungan sekitar.</li></ul><p><br></p>', '2025-06-17 00:43:00', '2025-06-17 10:59:11'),
(7, 'Bisnis', 'bisnis', 'bisnis', 'page-banners/4TqtR8Vcw28yohMRPlYpA5INnoo1En-metaYW5kcmV3LW5lZWwtMS0yOXd5dnZMSkEtdW5zcGxhc2guanBn-.jpg', '<p><strong>Tentang Unit Bisnis Koperindo</strong><br> Koperindo merupakan perusahaan nasional yang bergerak dalam bidang manufaktur dan distribusi koper serta perlengkapan perjalanan lainnya. Kami berkomitmen menghadirkan produk berkualitas tinggi dengan inovasi terkini guna mendukung mobilitas masyarakat Indonesia dan pasar internasional.</p><p><strong>Unit Bisnis Utama:</strong></p><ul><li><strong>Manufaktur Koper:</strong> Memproduksi berbagai jenis koper, mulai dari koper kabin hingga koper ukuran besar, dengan desain modern dan material tahan lama.</li><li><strong>Aksesoris Perjalanan:</strong> Menyediakan tas, label koper, gembok TSA, dan perlengkapan tambahan lainnya yang menunjang kenyamanan saat bepergian.</li><li><strong>OEM &amp; Private Label:</strong> Menawarkan layanan produksi koper dengan merek mitra bisnis (B2B) untuk pasar lokal dan ekspor.</li></ul><p><strong>Jaringan Distribusi</strong><br> Kami memiliki jaringan distribusi yang tersebar di lebih dari 30 kota besar di Indonesia melalui toko ritel, marketplace online, dan kerja sama dengan berbagai mitra bisnis.</p><p><strong>Komitmen terhadap Kualitas</strong><br> Koperindo menjunjung tinggi prinsip <em>quality-first</em> dalam setiap proses bisnis, mulai dari desain, bahan baku, hingga layanan purna jual. Kami percaya bahwa kepuasan pelanggan adalah kunci keberlanjutan bisnis kami.</p><p><strong>Hubungi Kami</strong></p><p>&nbsp;Untuk kerja sama bisnis atau informasi lebih lanjut, silakan hubungi tim kami melalui <a href=\"email: business@koperindo.co.id\">email: business@koperindo.co.id</a></p>', '2025-06-17 07:29:57', '2025-06-17 10:57:44'),
(8, 'Korinity', 'korinity', 'default', 'page-banners/iVtCfAgoK8qSR2Eyatgh9IxSHX8nJj-metaZW1pbmVudC1sdWdnYWdlLTg5TDFiWmdwWDBNLXVuc3BsYXNoLmpwZw==-.jpg', '<p>Social Media Koperindo.id</p>', '2025-06-19 01:46:07', '2025-06-19 01:55:56'),
(9, 'Syarat Ketentuan', 'syarat-ketentuan', 'default', 'page-banners/AvNYfpYvmLTVuPvtGcifPWhQWEo9N5-metacm9zcy1zbmVkZG9uLUtmN2hYNjRrTHcwLXVuc3BsYXNoLmpwZw==-.jpg', '<p>testing halaman syarat dan ketentuan korinity</p>', '2025-06-19 20:24:52', '2025-06-19 20:24:52'),
(10, 'Kebijakan Privasi', 'kebijakan-privasi', 'default', 'page-banners/mrlxzDkYgE3zRmqlLasovX9upT62PT-metadGltLW1vc3Nob2xkZXItclVjMFBRTU0yTm8tdW5zcGxhc2guanBn-.jpg', '<p>testing halaman kebijakan privasi</p>', '2025-06-19 20:25:53', '2025-06-19 20:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo_path`, `url`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Apple Product', 'partner-logos/ZtuDHQpZ551Ef89KImR6L4swFGfZUO-metaaW1hZ2VzLnBuZw==-.png', NULL, 1, '2025-06-18 01:14:07', '2025-06-18 01:14:07'),
(2, 'Halal Indonesia', 'partner-logos/PF9XYk5QtvOwQW86ZfBzqpoPa9dQqf-metaaW5kb25lc2lhbl9oYWxhbF9sb2dvXzIwMjIuanBn-.jpg', NULL, 2, '2025-06-18 01:16:13', '2025-06-18 01:16:13'),
(3, 'Arrow Prime', 'partner-logos/j18ItMCJOWH8Gz1zLBgMtJoi7Tob0k-metaYXJyb3ctcHJpbWUuanBn-.jpg', NULL, 3, '2025-06-18 01:17:56', '2025-06-18 01:17:56'),
(4, 'Mcdonalds ', 'partner-logos/7KPbCvVnltYOEgPhD4LC3xTU58uTzW-metabWNkLmpwZw==-.jpg', NULL, 4, '2025-06-18 01:20:43', '2025-06-18 01:20:43'),
(5, 'Tiktok', 'partner-logos/XPrXzDRtpsFGMFLUjHoiuCDfQpQvia-metadGlrdG9rLnBuZw==-.png', NULL, 5, '2025-06-18 01:22:35', '2025-06-18 01:22:35'),
(6, 'Facebook', 'partner-logos/6yBtYzNnULVrZPb2sRrw2sghfkSWVN-metaZmFjZWJvb2suanBn-.jpg', NULL, 6, '2025-06-18 01:24:22', '2025-06-18 01:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `post_category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_category_id`, `user_id`, `title`, `slug`, `thumbnail_path`, `excerpt`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Tips Memilih Koper yang Cocok untuk Perjalanan Bisnis', 'tips-memilih-koper-yang-cocok-untuk-perjalanan-bisnis', 'post-thumbnails/jNY7sUt5zXlXHmSCdHYI93SD9thEN7-metaYW1lcmljYW4tZ3JlZW4tdHJhdmVsLXhmeUE0VmlkMDQwLXVuc3BsYXNoLmpwZw==-.jpg', 'Bingung memilih koper untuk perjalanan kerja? Berikut tips memilih koper yang ideal agar tampilan tetap profesional dan perjalanan jadi lebih nyaman.\n\n', '<p>Dalam perjalanan bisnis, memilih koper yang tepat menjadi hal penting. Tidak hanya fungsional, tetapi juga menunjang penampilan profesional Anda. Berikut beberapa hal yang perlu diperhatikan:<br><br>1. Ukuran dan Kapasitas: Pilih koper kabin (20\") jika perjalanan singkat, atau koper medium (24\") untuk kebutuhan 3-5 hari.<br>2. Material yang Tahan Lama: Gunakan bahan polycarbonate atau ABS untuk daya tahan dan bobot ringan.<br>3. Fitur Keamanan: Pastikan ada TSA Lock untuk keamanan saat bepergian ke luar negeri.<br>4. Desain Elegan: Warna netral seperti hitam, abu-abu, atau navy memberikan kesan profesional.<br><br>Temukan koleksi koper bisnis kami yang dirancang untuk kepraktisan dan gaya Anda di setiap perjalanan.<br><br></p>', '2025-06-16 06:34:35', '2025-06-16 06:34:35'),
(2, 2, 1, 'Koperindo Resmi Hadir di 12 Kota Besar Indonesia', 'koperindo-resmi-hadir-di-12-kota-besar-indonesia', 'post-thumbnails/d8964PlY7tniC7I66B1c7n3RrTOXor-metaZW1pbmVudC1sdWdnYWdlLTFIZWl2RWpBNEhZLXVuc3BsYXNoLmpwZw==-.jpg', 'Koperindo kini tersedia di 12 kota besar untuk menjangkau pelanggan lebih luas di seluruh Indonesia.\n\n', '<p>Koperindo, produsen koper terpercaya dari Indonesia, kini resmi hadir di 12 kota besar seperti Jakarta, Surabaya, Medan, Makassar, hingga Balikpapan. Langkah ekspansi ini menjadi bagian dari visi Koperindo untuk lebih dekat dengan pelanggan dan memperluas jaringan distribusi koper berkualitas di seluruh nusantara.<br><br>Pelanggan kini dapat merasakan pengalaman berbelanja langsung di outlet resmi Koperindo, mendapatkan pelayanan purna jual, dan berkonsultasi langsung dengan tim kami.<br><br></p>', '2025-06-16 20:22:33', '2025-06-16 21:37:11'),
(3, 3, 1, 'Koperindo Bangun Gudang Logistik Modern di Tanggulangin', 'koperindo-bangun-gudang-logistik-modern-di-tanggulangin', 'post-thumbnails/EpJ31hdaSzfolE3vouw9zlom8grnvl-metabWFuaC1sZS1tRlVJZWw5aFdvcy11bnNwbGFzaC5qcGc=-.jpg', 'Koperindo memperluas fasilitas distribusi dengan membangun gudang logistik modern seluas 5.000 m² di kawasan industri Cikarang.', '<p>Dalam rangka meningkatkan kecepatan pengiriman dan efisiensi distribusi produk, Koperindo resmi membangun gudang logistik modern di Cikarang. Fasilitas ini akan menjadi pusat pengiriman untuk wilayah Jabodetabek dan sekitarnya.<br><br>Dilengkapi dengan sistem manajemen gudang berbasis digital, fasilitas ini memungkinkan pemrosesan pesanan lebih cepat dan akurat.<br><br></p>', '2025-06-16 20:26:36', '2025-06-16 21:11:23'),
(4, 1, 1, 'Koperindo Luncurkan Seri Koper Premium untuk Traveler Modern', 'koperindo-luncurkan-seri-koper-premium-untuk-traveler-modern', 'post-thumbnails/ueJ7kWqoQ7FjD4LiVzuAALDTxyk5i2-metabmV3cy5qcGc=-.jpg', 'Koperindo resmi meluncurkan lini koper premium terbaru dengan desain elegan, fitur keamanan tinggi, dan kenyamanan maksimal bagi traveler masa kini.', '<blockquote><strong>Koperindo Resmi Hadirkan Koper Premium: Solusi Perjalanan Modern</strong></blockquote><p>Sebagai pelopor produk koper lokal berkualitas tinggi, Koperindo memperkenalkan seri koper terbaru yang mengedepankan <strong>desain stylish</strong>, <strong>daya tahan tinggi</strong>, serta <strong>kemudahan mobilitas</strong> untuk menjawab kebutuhan traveler profesional dan keluarga urban.</p><p>Peluncuran ini dilakukan dalam rangkaian program inovasi 2025 yang mengusung tema <strong>“Travel Smart, Travel in Style”</strong>, dengan fokus pada efisiensi, keamanan, dan gaya.</p><p>💡 <strong>Fitur Unggulan:</strong></p><ul><li>Roda putar 360° ultra-smooth</li><li>Kunci TSA anti-bobol</li><li>Material ABS+PC tahan benturan</li><li>Interior bersekat dan dilapisi kain lembut</li><li>Varian ukuran kabin 20\", bagasi 24\", hingga jumbo 28\"</li></ul><p>Direktur Produk Koperindo, R. Anugrah Prasetya menyatakan, <em>\"Kami ingin produk kami bukan hanya sekadar koper, tapi partner perjalanan yang memberi rasa aman dan gaya.\"</em></p><p>Koper baru ini akan tersedia secara online dan di mitra retail resmi seluruh Indonesia mulai <strong>bulan depan</strong>, lengkap dengan garansi 3 tahun.</p><p><br></p>', '2025-06-19 00:08:24', '2025-06-19 00:08:24'),
(5, 1, 1, 'Koperindo Resmikan Pabrik Baru di Jawa Tengah', 'koperindo-resmikan-pabrik-baru-di-jawa-tengah', 'post-thumbnails/KPOPRan8zAEo1ZDKDkKqL30UBEW1aP-metabmV3czIuanBn-.jpg', 'Koperindo meresmikan pabrik produksi terbaru di Jawa Tengah guna memperluas kapasitas produksi koper berkualitas lokal berstandar ekspor.\n\n', '<blockquote><strong>Ekspansi Produksi: Pabrik Baru Koperindo Siap Perkuat Industri Koper Nasional</strong></blockquote><p>Dalam rangka memperkuat posisi sebagai produsen koper terbesar di Indonesia, Koperindo meresmikan pabrik barunya yang berlokasi di <strong>Kabupaten Kendal, Jawa Tengah</strong>. Pabrik ini merupakan bagian dari strategi ekspansi jangka panjang yang bertujuan untuk <strong>meningkatkan kapasitas produksi hingga 40%</strong> pada tahun pertama.</p><p>Presiden Direktur Koperindo, Bapak Hadi Permana, mengungkapkan bahwa pabrik ini akan menyerap lebih dari <strong>700 tenaga kerja lokal</strong>, dengan mesin produksi berteknologi otomatis dari Jerman dan Jepang.</p><p>💼 <strong>Fasilitas Unggulan:</strong></p><ul><li>Jalur produksi efisien dan ramah lingkungan</li><li>Sistem pengepakan pintar (smart packaging)</li><li>Laboratorium uji kekuatan &amp; kualitas bahan</li><li>Area logistik terintegrasi dengan pelabuhan</li></ul><p>Peresmian dilakukan bersama pejabat daerah serta disaksikan oleh rekanan distribusi nasional. Koperindo menargetkan ekspor koper ke Asia Tenggara dan Timur Tengah mulai kuartal ketiga tahun ini.</p><p><br></p>', '2025-06-19 00:14:11', '2025-06-19 00:14:11'),
(6, 2, 1, 'Budaya Perusahaan Koperindo: Kolaboratif, Inovatif, dan Berintegritas', 'budaya-perusahaan-koperindo-kolaboratif-inovatif-dan-berintegritas', 'post-thumbnails/9UR6tnCgsYi5ckG4zcwMWDXHGHLvtj-metaYXVzdGluLWRpc3RlbC13RDFMUmI5T2VFby11bnNwbGFzaC5qcGc=-.jpg', 'Koperindo membangun lingkungan kerja yang kolaboratif, inovatif, dan berintegritas tinggi, sebagai fondasi dalam menghadirkan produk koper berkualitas untuk Indonesia dan dunia.\n\n', '<p>Di balik setiap produk koper berkualitas yang kami hasilkan, terdapat budaya perusahaan yang kuat dan menyatu dalam setiap lini kerja Koperindo. Kami percaya bahwa budaya adalah identitas—dan dari identitas inilah, semangat berkarya tumbuh.</p><p>💡 <strong>Kolaboratif dalam Kerja</strong></p><p>Kami mendorong terciptanya kerja sama lintas divisi, saling menghargai ide dan kontribusi dari setiap individu. Lingkungan kerja yang terbuka dan suportif menjadi fondasi dalam setiap proses produksi hingga layanan pelanggan.</p><p>🚀 <strong>Inovatif dalam Berkembang</strong></p><p>Koperindo senantiasa mengutamakan inovasi, baik dalam desain produk, pemilihan bahan, hingga pendekatan teknologi dalam layanan. Kami terus memperbarui diri mengikuti tren kebutuhan pasar global.</p><p>✅ <strong>Integritas sebagai Nilai Utama</strong></p><p>Kami menjunjung tinggi transparansi, kejujuran, dan tanggung jawab dalam setiap aktivitas bisnis. Integritas menjadi kompas moral dalam berinteraksi dengan pelanggan, mitra, hingga sesama karyawan.</p><p>🌱 <strong>Membangun dengan Hati</strong></p><p>Koperindo berkomitmen menciptakan tempat kerja yang inklusif, berkelanjutan, dan memberikan ruang bagi setiap individu untuk bertumbuh. Kami percaya bahwa budaya kerja yang sehat akan melahirkan tim yang kuat dan produk yang hebat.</p><p><strong>Bersama Koperindo, mari tumbuh dan melangkah lebih jauh dengan semangat kebersamaan.</strong><br> 📌 <em>#BudayaPerusahaan #Koperindo #KoperIndonesia</em></p>', '2025-06-20 01:27:39', '2025-06-20 01:27:39'),
(7, 2, 1, 'Lingkungan Kerja Positif di Koperindo: Nyaman, Produktif, dan Inklusif', 'lingkungan-kerja-positif-di-koperindo-nyaman-produktif-dan-inklusif', 'post-thumbnails/9mbTWS4PhBtShsB9jAsrxpZXhi15Fu-metaYmVuamFtaW4tY2hpbGQtR1dlMGRsVkQ5ZTAtdW5zcGxhc2guanBn-.jpg', 'Koperindo menciptakan lingkungan kerja yang aman, mendukung, dan terbuka bagi semua, guna meningkatkan produktivitas dan kebahagiaan tim.\n\n', '<p>Budaya kerja di Koperindo tidak hanya berfokus pada target dan performa, namun juga mengedepankan keseimbangan antara produktivitas dan kenyamanan karyawan. Kami percaya, tempat kerja yang sehat akan menciptakan tim yang tangguh dan penuh semangat.</p><p>🧘‍♀️ <strong>Kenyamanan adalah Prioritas</strong></p><p>Kami merancang ruang kerja yang ergonomis dan modern agar setiap individu merasa nyaman untuk bekerja dan berkolaborasi. Dari ruang kerja terbuka hingga area istirahat yang santai, semuanya mendukung kesejahteraan mental dan fisik tim kami.</p><p>👥 <strong>Keterbukaan dan Inklusivitas</strong></p><p>Koperindo menjunjung tinggi prinsip kesetaraan. Setiap suara dihargai, setiap ide didengar. Baik dari level staf hingga manajemen, semua diberi ruang yang adil untuk berkembang.</p><p>💼 <strong>Fleksibel dan Adaptif</strong></p><p>Dalam menghadapi era digital dan mobilitas kerja tinggi, Koperindo memberikan fleksibilitas dalam cara bekerja, termasuk peluang kerja hybrid dan dukungan alat kerja modern yang menunjang efisiensi.</p><p>💬 <strong>Komunikasi Tanpa Batas</strong></p><p>Kami mengedepankan komunikasi yang terbuka dan dua arah. Feedback rutin, forum ide, dan diskusi lintas tim menjadi bagian dari budaya harian yang kami terapkan.</p><p><strong>Lingkungan kerja yang positif adalah investasi jangka panjang bagi kualitas produk dan layanan.</strong><br> 📌 <em>#BudayaPerusahaan #LingkunganKerja #KoperindoCare</em></p>', '2025-06-20 01:31:47', '2025-06-20 01:31:47'),
(8, 3, 1, 'Investasi Infrastruktur untuk Mendukung Pertumbuhan Bisnis Koperindo', 'investasi-infrastruktur-untuk-mendukung-pertumbuhan-bisnis-koperindo', 'post-thumbnails/Hd9erQsgRM1QCX2xifQMtKgLgDgssU-metaYWxleC1rb3RsaWFyc2t5aS1RQnBaR3FFTXNLZy11bnNwbGFzaC5qcGc=-.jpg', 'Koperindo terus mengembangkan infrastruktur bisnis, logistik, dan digital untuk memastikan kelancaran produksi, distribusi, serta pelayanan terbaik kepada pelanggan.', '<p>Sebagai perusahaan yang bergerak di industri koper dan aksesori perjalanan, Koperindo menyadari pentingnya infrastruktur yang kokoh dan berkelanjutan untuk mendukung pertumbuhan jangka panjang. Oleh karena itu, kami terus berinvestasi dalam pengembangan fasilitas dan sistem yang mendukung setiap lini operasional.</p><p>🏭 <strong>Pusat Produksi Modern</strong></p><p>Kami memiliki pusat produksi yang dilengkapi dengan mesin-mesin berteknologi tinggi guna menjamin kualitas dan konsistensi setiap produk. Proses produksi dilakukan secara efisien, ramah lingkungan, serta memenuhi standar kualitas internasional.</p><p>🚛 <strong>Logistik &amp; Gudang Terpadu</strong></p><p>Untuk memastikan pengiriman produk tepat waktu ke seluruh wilayah Indonesia, Koperindo membangun sistem logistik yang terintegrasi dengan pusat distribusi strategis. Pengelolaan inventaris berbasis sistem membantu kami mengurangi keterlambatan dan menjaga ketersediaan stok.</p><p>🌐 <strong>Digitalisasi Sistem Operasional</strong></p><p>Koperindo memanfaatkan sistem ERP, pelacakan produksi berbasis data real-time, dan portal layanan pelanggan digital. Hal ini mendukung efisiensi manajemen rantai pasok serta transparansi proses kepada pelanggan dan mitra bisnis.</p><p>⚡ <strong>Kesiapan Energi &amp; Keberlanjutan</strong></p><p>Infrastruktur kami juga mendukung prinsip green industry dengan penggunaan energi listrik efisien, pengelolaan limbah pabrik, serta optimalisasi bahan baku untuk mengurangi sisa produksi.</p><p><strong>Infrastruktur yang kuat adalah fondasi utama bagi daya saing dan kepercayaan pelanggan.</strong><br> 📌 <em>#InfrastrukturKoperindo #PengembanganBisnis #InovasiIndustri</em></p>', '2025-06-20 01:43:55', '2025-06-20 01:43:55'),
(9, 3, 1, 'Transformasi Infrastruktur Koperindo Menuju Industri 4.0', 'transformasi-infrastruktur-koperindo-menuju-industri-40', 'post-thumbnails/Piw038eRUQySnM3FWumLjEMijgbnjX-metaMjAyNTA2MjBfMTYwN19HZWR1bmcgQmVydHVsaXNhbiBLT1BFUklORE9fcmVtaXhfMDFqeTY5YzcyeWVtZ2I5MXBoemhwNTVlMngucG5n-.png', 'Koperindo terus berbenah dengan mengembangkan infrastruktur modern yang mendukung otomatisasi, efisiensi, dan integrasi digital menuju industri koper berbasis teknologi.\n\n', '<p>Dalam menghadapi era Industri 4.0, Koperindo mengambil langkah strategis untuk mentransformasi infrastruktur perusahaan secara menyeluruh. Fokus utama kami adalah menciptakan sistem produksi dan distribusi koper yang terintegrasi, efisien, dan berbasis teknologi.</p><p>🏗️ <strong>Pabrik Pintar (Smart Factory)</strong></p><p>Pabrik kami kini dilengkapi dengan sistem otomasi, robotik, dan monitoring digital untuk mendukung proses manufaktur yang lebih cepat dan presisi. Hal ini tidak hanya meningkatkan produktivitas, tetapi juga menurunkan potensi kesalahan produksi secara signifikan.</p><p>🧠 <strong>Sistem IoT &amp; Sensor Monitoring</strong></p><p>Melalui penerapan Internet of Things (IoT), berbagai mesin dan alat produksi kami terhubung dalam sistem pusat yang memantau kinerja, suhu, kelembapan, dan status operasional secara real-time. Teknologi ini membantu tim kami dalam pengambilan keputusan berbasis data.</p><p>🖥️ <strong>Digitalisasi Rantai Pasok</strong></p><p>Kami menerapkan sistem supply chain management berbasis cloud yang memungkinkan pemantauan pengadaan bahan baku hingga distribusi koper ke mitra dan pelanggan. Ini meminimalkan penundaan pengiriman dan meningkatkan responsibilitas layanan kami.</p><p>🧰 <strong>Fasilitas Uji Kualitas &amp; Inovasi</strong></p><p>Koperindo membangun laboratorium uji kekuatan dan ketahanan koper serta ruang riset dan pengembangan (R&amp;D) sebagai bagian dari komitmen terhadap inovasi berkelanjutan. Semua produk diuji secara ketat sebelum sampai ke tangan konsumen.</p><p>Koperindo percaya bahwa investasi pada infrastruktur bukan hanya mendukung proses bisnis hari ini, tetapi juga menjadi pondasi kokoh untuk menyongsong masa depan industri koper berbasis teknologi.</p><p>📌 <em>#InfrastrukturModern #Industri40 #KoperDigital #InovasiKoperindo</em></p>', '2025-06-20 02:09:47', '2025-06-20 02:09:47');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Berita Umum', 'berita-umum', '2025-06-15 20:42:58', '2025-06-15 20:42:58'),
(2, 'Budaya Perusahaan', 'budaya-perusahaan', '2025-06-15 20:42:58', '2025-06-15 20:42:58'),
(3, 'Infrastruktur', 'infrastruktur', '2025-06-15 20:42:58', '2025-06-15 20:42:58'),
(4, 'Inovasi', 'inovasi', '2025-06-15 20:42:58', '2025-06-15 20:42:58'),
(5, 'Penghargaan', 'penghargaan', '2025-06-15 20:42:58', '2025-06-15 20:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `product_category_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_category_id`, `name`, `slug`, `description`, `main_image`, `is_featured`, `created_at`, `updated_at`) VALUES
(1, 1, 'Koper Bisnis Premium 20 Seri Advanced 2', 'koper-bisnis-premium-20-seri-advance', '<p>Koper Bisnis Premium 20 - Seri Advance<br><br>Dirancang untuk profesional yang dinamis, koper ini menawarkan kombinasi elegan antara desain modern, fitur keamanan maksimal, dan efisiensi ruang.<br><br>🔹 Kapasitas: 35 Liter &nbsp;<br>🔹 Material: Polycarbonate + ABS anti gores &nbsp;<br><br><br></p>', 'product-images/vKYlIin5IC7zAwpyrHtCtRIoQVqT2H-metaa29wZXJrYWJpbjIuanBn-.jpg', 1, '2025-06-16 07:55:26', '2025-06-18 22:40:47'),
(2, 2, 'Koper Luggage Traveller', 'koper-luggage-traveller', '<p>Koper Luggage Traveller - Teman Ideal Perjalanan Jarak Jauh<br><br>Koper Luggage Traveller dirancang khusus untuk pelancong modern yang mengutamakan kekuatan, ruang luas, dan kenyamanan saat bepergian jauh.<br><br>🧳 Spesifikasi Utama:<br>- Ukuran: 28 inch (Koper Bagasi)<br>- Material: Polycarbonate Hardcase anti-retak<br>- Kapasitas: 85 Liter<br>- Berat: 4.2 kg<br><br>🛡️ Fitur Keamanan &amp; Kenyamanan:<br>- Sistem roda 360° ultra smooth<br>- Kunci TSA kombinasi<br>- Gagang aluminium 3 tingkat<br>- Resleting ganda anti air<br>- Pegangan samping ergonomis<br><br>💼 Tersedia Warna:<br>- Forest Green<br>- Nude Sand<br>- Carbon Black<br><br>Ideal untuk perjalanan antarnegara, koper ini tidak hanya kuat dan tahan lama, tetapi juga tampil stylish. Tampil percaya diri di bandara dengan koper traveller kelas premium ini.<br><br>🌎 *Cocok untuk backpacker, pebisnis, dan keluarga traveller.*<br><br></p>', 'product-images/r9X4WtQvzkOAtj56MBGwYEPDv2UyQG-metaa29wZXJiYWdhc2kuanBlZw==-.jpeg', 1, '2025-06-16 19:24:47', '2025-06-18 22:51:46'),
(3, 4, 'Old Suitcase Accessories', 'old-suitcase-accessories', '<p>Luggage Strap dengan Kunci Kombinasi - Keamanan Ekstra untuk Koper Anda<br><br>Lindungi koper Anda dari risiko terbuka atau tertukar di bagasi dengan Luggage Strap multifungsi yang dilengkapi dengan kunci kombinasi 3 digit.<br><br>🧷 Spesifikasi Produk:<br>- Panjang: 180 cm (adjustable)<br>- Lebar: 5 cm<br>- Material: Nylon tebal &amp; fleksibel<br>- Warna: Hitam, Biru, Merah<br><br>🔐 Fitur Unggulan:<br>- Kunci kombinasi 3 digit (bisa di-reset)<br>- Cocok untuk koper ukuran 20–32 inch<br>- Mudah dipasang dan dilepas<br>- Menambah keamanan dan keunikan koper<br><br>Cocok untuk pelancong yang sering menggunakan bagasi pesawat, strap ini membantu koper Anda lebih aman dan mudah dikenali di conveyor belt.<br><br>🎒 Rekomendasi dipakai bersama koper Traveller, Cabin, atau Bagasi besar.<br><br></p>', 'product-images/31wdwb55KGwVo6KBQZD7OhHX8VJApy-metaa29wZXItYWtzZXNvcmlzLmpwZw==-.jpg', 1, '2025-06-16 19:28:20', '2025-06-19 01:15:36'),
(4, 1, 'Koper Kabin Voyager X1', 'koper-kabin-voyager-x1', '<p>Voyager X1 adalah koper kabin andalan dari Koperindo yang menggabungkan desain modern, kenyamanan maksimal, dan fitur keamanan canggih.</p><p>📌 <strong>Fitur Utama:</strong></p><ul><li>🔒 Kunci TSA – Aman &amp; sesuai standar internasional</li><li>🔄 Roda 360° – Manuver mudah di segala permukaan</li><li>💪 Material Polycarbonate – Ringan tapi tahan benturan</li><li>🎨 Warna Ikonik – Oranye khas Koperindo yang mencolok</li><li>✈️ Ukuran kabin – Cocok untuk semua maskapai domestik &amp; internasional</li></ul><p>Koper ini sangat ideal untuk kamu yang sering melakukan perjalanan bisnis singkat, liburan akhir pekan, atau traveling ringan. Dengan kapasitas optimal dan kompartemen interior yang terorganisir, Voyager X1 memastikan semua barang pentingmu tersimpan aman dan rapi.</p>', 'product-images/kXHF3LgO7b5y8rKbWKprS8v5arBFTc-metaa29wZXJrYWJpbjEuanBn-.jpg', 1, '2025-06-18 22:38:53', '2025-06-18 22:38:53'),
(5, 1, 'Koper Gili Kabin 20 Inch', 'koper-gili-kabin-20-inch', '<blockquote><strong>Koper Gili Kabin 20 Inch – Nyaman, Stylish, dan Ideal untuk Petualangan Singkat</strong></blockquote><p>Koper Gili 20 Inch adalah pilihan sempurna bagi kamu yang menginginkan koper kabin dengan desain modern dan ergonomis. Dengan kapasitas cukup untuk perjalanan 2–3 hari, koper ini didesain khusus untuk masuk ke dalam kompartemen kabin pesawat berbagai maskapai.</p><p>🧩 <strong>Spesifikasi Utama:</strong></p><ul><li>📏 Ukuran 20 inch – Pas untuk bagasi kabin</li><li>💼 Kompartemen Lapang – Muat banyak, tetap ringkas</li><li>🔒 Kunci TSA – Keamanan maksimal saat terbang ke luar negeri</li><li>🔄 Roda 4 arah 360° – Geser halus tanpa hambatan</li><li>💪 Material ABS + PC – Ringan dan tahan gores</li><li>🖐️ Handle ergonomis – Nyaman di genggaman, kuat, dan elegan</li></ul><p>Desain koper Gili terinspirasi dari suasana tropis dan santai di Gili, Lombok. Warna-warna yang segar dan bentuk yang dinamis menjadikannya teman perjalanan yang tak hanya praktis, tapi juga menunjang penampilanmu.</p><p><br></p>', 'product-images/py7uyEu6SwcRUvU5wzwk8ch2Vkm9no-metaa29wZXIzLmpwZw==-.jpg', 1, '2025-06-18 22:45:20', '2025-06-18 22:47:30'),
(6, 2, 'Koper Everest Bagasi 24 Inch', 'koper-everest-bagasi-24-inch', '<blockquote><strong>Koper Everest 24 Inch – Tangguh, Ringan, dan Siap Hadapi Petualangan Besar</strong></blockquote><p>Koper Everest 24 inch dirancang untuk traveler yang butuh kapasitas besar tanpa kompromi kenyamanan. Ideal untuk liburan panjang atau perjalanan bisnis jarak jauh, koper ini menyatukan fungsi maksimal dan estetika elegan.</p><p>🔧 <strong>Spesifikasi Utama:</strong></p><ul><li>📏 Ukuran 24 inch – Cocok untuk check-in</li><li>🎯 Roda putar 360° ultra smooth dengan sistem anti-selip</li><li>🔒 Kunci TSA-approved untuk keamanan internasional</li><li>🧵 Material ABS + PC berkualitas tinggi, tahan benturan &amp; ringan</li><li>⚙️ Gagang teleskopik dengan 3 tingkat pengaturan</li><li>🎽 Interior berlapis kain lembut dengan sekat &amp; sabuk pengaman</li></ul><p>Koper ini terinspirasi dari ketangguhan gunung tertinggi — Everest. Cocok untuk kamu yang siap menaklukkan jarak dan waktu dengan penuh gaya. Tersedia dalam warna Forest Green, Night Gray, dan Champagne Gold.</p><h3><strong>Teaser Singkat:</strong></h3><p>Koper ukuran menengah untuk perjalanan jauh. Desain kuat, fitur lengkap, roda 360°, dan material tahan benturan.</p><p><br></p>', 'product-images/yXRWzUenm2zxQrRYxPvEcCK62i0wkA-metaa29wZXJrYWJpbjQucG5n-.png', 1, '2025-06-18 22:50:30', '2025-06-18 22:50:30'),
(7, 4, 'Koper Traveller', 'koper-traveller', '<blockquote>K<strong>oper Traveller – Elegan dan Tangguh untuk Petualangan Anda</strong></blockquote><p>Koper Traveller dirancang untuk para petualang modern yang mengutamakan <strong>gaya klasik, ketahanan, dan fungsionalitas</strong>. Dengan desain yang menawan dan sentuhan vintage, koper ini tidak hanya mempermudah mobilitas Anda tetapi juga tampil memukau dalam setiap perjalanan.</p><p>🔹 <strong>Spesifikasi Bahan:</strong></p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/jpeg&quot;,&quot;filename&quot;:&quot;polyster.jpeg&quot;,&quot;filesize&quot;:10602,&quot;height&quot;:225,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/OyBHU9HQEGoM3yaZ39Ub4TushOwPqEwB8rGjlh0B.jpg&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/OyBHU9HQEGoM3yaZ39Ub4TushOwPqEwB8rGjlh0B.jpg&quot;,&quot;width&quot;:225}\" data-trix-content-type=\"image/jpeg\" data-trix-attributes=\"{&quot;caption&quot;:&quot;bahan polyster&quot;,&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--jpeg\"><a href=\"http://127.0.0.1:8000/storage/OyBHU9HQEGoM3yaZ39Ub4TushOwPqEwB8rGjlh0B.jpg\"><img src=\"http://127.0.0.1:8000/storage/OyBHU9HQEGoM3yaZ39Ub4TushOwPqEwB8rGjlh0B.jpg\" width=\"225\" height=\"225\"><figcaption class=\"attachment__caption attachment__caption--edited\">bahan polyster</figcaption></a></figure></p><ul><li><strong>Bodi Koper:</strong> Terbuat dari <strong>ABS+Polycarbonate Premium</strong> — kombinasi bahan keras ringan yang kuat terhadap benturan namun tetap ringan untuk dibawa.</li><li><strong>Sisi Penguat &amp; Aksen:</strong> Dilengkapi dengan <strong>kulit sintetis PU</strong> di setiap sudut dan pengunci, memberikan tampilan klasik sekaligus proteksi ekstra.</li><li><strong>Roda 360°:</strong> Roda putar halus berbahan <strong>rubberized PU</strong> untuk pergerakan bebas hambatan dan tanpa suara.</li><li><strong>Gagang Penarik (Handle):</strong> Menggunakan <strong>aluminium alloy</strong> tahan karat dengan sistem teleskopik ergonomis.</li><li><strong>Interior:</strong> Lapisan dalam berbahan <strong>polyester satin</strong> dengan kompartemen ganda, tali pengikat, dan sekat jaring untuk penyimpanan optimal.</li></ul><p>📦 <strong>Ukuran Tersedia:</strong><br> Cabin Size – 20 Inch (Standar kabin pesawat)</p><p>🎯 <strong>Cocok untuk:</strong><br> Perjalanan bisnis, liburan singkat, ataupun hadiah eksklusif.</p><p><br></p>', 'product-images/zGlMQFpFM9CKQ3IHDFUddVpzk8F25S-metaYWtzZXNvcmlzLmpwZw==-.jpg', 1, '2025-06-19 00:45:19', '2025-06-19 01:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `slug`, `description`, `banner_image`, `icon_path`, `created_at`, `updated_at`) VALUES
(1, 'Koper Kabin', 'koper-kabin', '<p><strong>&nbsp;Solusi Cerdas untuk Perjalanan Ringan dan Praktis&nbsp;</strong></p><p>Koper kabin dari Koperindo hadir sebagai solusi efisien untuk kebutuhan perjalanan singkat, baik bisnis maupun liburan. Dengan dimensi yang disesuaikan agar lolos sebagai bagasi kabin pesawat, koper ini memudahkan mobilitas tanpa perlu menunggu di conveyor.</p><p>Koleksi koper kabin kami dirancang dengan fokus pada kenyamanan, keamanan, dan gaya. Dilengkapi dengan fitur mutakhir seperti <strong>roda 360° yang halus</strong>, <strong>sistem kunci TSA</strong>, dan <strong>bahan tahan benturan</strong>, koper ini cocok digunakan oleh profesional muda, pebisnis, hingga traveler aktif yang mengutamakan efisiensi.</p><p>Produk kami tersedia dalam berbagai warna modern, termasuk oranye khas Koperindo sebagai identitas energi dan optimisme. Material ringan namun kokoh menjadikan koper ini teman ideal untuk membawa barang berharga tanpa beban berlebih.</p><p>Sebagai bagian dari komitmen kami terhadap kualitas dan inovasi, setiap koper kabin telah melewati serangkaian uji ketahanan, termasuk pada tarikan, roda, dan pegangan. Hal ini memastikan performa terbaik di berbagai kondisi perjalanan.</p>', 'category-banners/RaPHURDA1vEPsknXBkVbLbEmultapl-metaZW1pbmVudC1sdWdnYWdlLTFIZWl2RWpBNEhZLXVuc3BsYXNoLmpwZw==-.jpg', 'category-icons/Y9VesiZrHWDE9I7xRKK0FfgGFcYSTj-metaYW1lcmljYW4tZ3JlZW4tdHJhdmVsLXhmeUE0VmlkMDQwLXVuc3BsYXNoLmpwZw==-.jpg', '2025-06-15 20:42:58', '2025-06-18 22:33:41'),
(2, 'Koper Bagasi', 'koper-bagasi', '<p>testing koper bagasi</p>', 'category-banners/Ffaz0t9Q1KqQIGRNoCrVUE84TwbWfY-metacm9zcy1zbmVkZG9uLUtmN2hYNjRrTHcwLXVuc3BsYXNoLmpwZw==-.jpg', 'category-icons/il4m0goVePdXBWHXve2m0JmoKhgDUu-metadGltLW1vc3Nob2xkZXItclVjMFBRTU0yTm8tdW5zcGxhc2guanBn-.jpg', '2025-06-15 20:42:58', '2025-06-18 21:10:51'),
(3, 'Tas Ransel', 'tas-ransel', '<p>tas ransel</p>', 'category-banners/9QrogdondoXGsuOYDGczsQx9Y2nU28-metaZW1pbmVudC1sdWdnYWdlLTg5TDFiWmdwWDBNLXVuc3BsYXNoLmpwZw==-.jpg', 'category-icons/K8mAQYl3nOTcavN2lfxcxk5hxe1xGS-metabWFudGFzLWhlc3RoYXZlbi1fZzFXZGNLY1Yzdy11bnNwbGFzaC5qcGc=-.jpg', '2025-06-15 20:42:58', '2025-06-18 21:12:22'),
(4, 'Aksesoris', 'aksesoris', '<blockquote><strong>Aksesoris Koper – Detail Kecil, Pengaruh Besar.</strong><br> Kategori aksesoris koper kami menghadirkan beragam pilihan pelengkap perjalanan yang mendukung kenyamanan, keamanan, dan gaya. Mulai dari penutup koper, label bagasi, strap pengaman, hingga organizer dalam koper yang memudahkan pengaturan isi bawaan Anda.</blockquote><p>Setiap produk aksesoris didesain dengan mempertimbangkan kebutuhan traveler modern, menggunakan material berkualitas tinggi, tahan lama, dan fungsional. Pilihan aksesoris dari kami juga memperkuat identitas visual koper Anda dan membuat pengalaman bepergian jadi lebih praktis dan menyenangkan.</p><p><br></p>', 'category-banners/0mxHTUPlH6GmFHWvTtwb5oRMVRquBJ-metaYW5kcmV3LW5lZWwtMS0yOXd5dnZMSkEtdW5zcGxhc2guanBn-.jpg', 'category-icons/e57Z7ATSMHixHRAmj1tB7613L1EwUe-metabGltaS1jaGFuZ2UtcG5ZTzJGSE9vc2stdW5zcGxhc2guanBn-.jpg', '2025-06-15 20:42:58', '2025-06-19 01:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'about_teaser_title', 'Move Beyond Limits', '2025-06-16 01:37:08', '2025-06-16 18:31:21'),
(2, 'about_teaser_description', 'Dalam dunia yang terus bergerak, kami hadir untuk menemani setiap langkah perjalanan Anda. Dengan kualitas terbaik, desain fungsional, dan ketahanan tinggi, koper kami dibuat untuk melampaui batas memberikan pengalaman perjalanan yang nyaman, aman, dan penuh gaya. Dengan semangat Move Beyond Limits, kami berinovasi menghadirkan produk lokal yang mampu bersaing di pasar global, mendukung mobilitas modern, dan menjadi bagian dari cerita perjalanan Anda berikutnya.', '2025-06-16 01:37:08', '2025-06-16 01:37:08'),
(3, 'about_teaser_button_text', 'Selengkapnya', '2025-06-16 01:37:08', '2025-06-16 18:26:04'),
(4, 'about_teaser_button_link', '/tentang-kami', '2025-06-16 01:37:08', '2025-06-16 01:46:29'),
(5, 'about_teaser_image', 'site-settings/ZHuUj328VxW6MmUUyKupdRAniyems6-metacmFudXJ0ZS1zLW00YWRSaDctTS11bnNwbGFzaC5qcGc=-.jpg', '2025-06-16 01:37:08', '2025-06-18 00:26:59'),
(6, 'tiktok_access_token', 'act.K0uCbDlpK3b0YlKCO6PF5B2FkhtP3P6I2j8qaDc6dBSROtkgEhCJvIR4MIGd!5229.va', '2025-06-19 23:51:32', '2025-06-19 23:51:32'),
(7, 'tiktok_refresh_token', 'rft.jNShvFFSdqxT6Kdf20x1emdublu5jwNsaRbYOZcUYG1oKWgtIXERrO5sEHBR!5199.va', '2025-06-19 23:51:32', '2025-06-19 23:51:32'),
(8, 'tiktok_token_expires_at', '2025-06-21 07:39:37', '2025-06-19 23:51:32', '2025-06-20 00:39:37'),
(9, 'tiktok_open_id', '-000Jgi5P29Cux4ROEFpXIrp0nqms5gBYM-F', '2025-06-19 23:51:32', '2025-06-19 23:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `button_text`, `button_link`, `image_path`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Temani Setiap Perjalanan Anda dengan Gaya & Ketangguhan', 'Koper dan tas premium buatan Indonesia, dirancang untuk kenyamanan, keamanan, dan ketahanan maksimal.', NULL, NULL, 'sliders/zv0kstlLORVxxWjmTlXuLaHvbZaOz2-metabWFudGFzLWhlc3RoYXZlbi1fZzFXZGNLY1Yzdy11bnNwbGFzaC5qcGc=-.jpg', 1, '2025-06-15 23:06:14', '2025-06-15 23:27:21'),
(2, 'Brand Koper Lokal yang Dipercaya Ribuan Traveler', 'Bawa barang bawaan Anda dengan tenang—dengan fitur TSA lock, roda 360°, dan desain elegan.\n\n', NULL, NULL, 'sliders/8ZmA1nbI6XtBSvGsHLBwIReZ01gJwB-metacm9zcy1zbmVkZG9uLUtmN2hYNjRrTHcwLXVuc3BsYXNoLmpwZw==-.jpg', 2, '2025-06-16 00:05:10', '2025-06-16 00:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `tiktok_posts`
--

CREATE TABLE `tiktok_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `tiktok_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci,
  `cover_image_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `like_count` int NOT NULL DEFAULT '0',
  `comment_count` int NOT NULL DEFAULT '0',
  `share_count` int NOT NULL DEFAULT '0',
  `view_count` int NOT NULL DEFAULT '0',
  `posted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiktok_posts`
--

INSERT INTO `tiktok_posts` (`id`, `tiktok_id`, `caption`, `cover_image_url`, `share_url`, `like_count`, `comment_count`, `share_count`, `view_count`, `posted_at`, `created_at`, `updated_at`) VALUES
(1, '7517930029351832838', '', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-i-photomode-us/5c5deb293c4943d39c5c3620de02fab2~tplv-photomode-image-cover:640:0:q70.webp?dr=17580&refresh_token=e051b200&x-expires=1751698800&x-signature=OyPapPn%2FSnDw2BlWI0c2rD7325M%3D&t=5897f7ec&ps=d5b8ac02&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&s=TIKTOK_FOR_DEVELOPER&biz_tag=tt_photomode&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7517930029351832838?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 1, 1, 0, 7, '2025-06-20 00:28:18', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(2, '7487571472014200072', '#ramadan #puasaramadhan #eidmubarak #lebaran2025 ', 'https://p16-sign-sg.tiktokcdn.com/tos-alisg-i-photomode-sg/6bf6b98989c544319ba2e21049202c7d~tplv-photomode-image-cover:640:0:q70.webp?dr=17580&refresh_token=8142b4f4&x-expires=1751698800&x-signature=8zlhBzfeeEPK7o%2BXTnsXenNdv68%3D&t=5897f7ec&ps=d5b8ac02&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&s=TIKTOK_FOR_DEVELOPER&biz_tag=tt_photomode&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7487571472014200072?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 20, 0, 0, 455, '2025-03-30 05:01:30', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(3, '7486047034626116870', 'burixxx #valorantclips ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/oIAAHFqhfxKeDjzAjfRE4GI0gSEMCHAQ0PM4IS~tplv-tiktokx-cropcenter-q:300:400:q72.jpeg?dr=14782&refresh_token=15a6ba46&x-expires=1750489200&x-signature=8U0nJ267gPVaJXZkkLtYUN7wKwE%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&sc=cover&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER', 'https://www.tiktok.com/@tegaraq/video/7486047034626116870?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 16, 6, 0, 361, '2025-03-26 02:25:57', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(4, '7485019975082724613', 'GASSSS JOINN', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/oIAY4CPfIziJDEggBHBg5EiBAgH8oA0EmWIAIC~tplv-tiktokx-dmt-logoccm:300:400:tos-useast2a-v-0068/owDEEII6oAEhgY1SIifsBzBBUA8bviCIgAQCAg.jpeg?dr=1368&refresh_token=0ee7bee4&x-expires=1750489200&x-signature=OsN0zPMW9SESzjAUaCGim6OGYzc%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7485019975082724613?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 10, 1, 0, 230, '2025-03-23 08:00:26', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(5, '7425910225665854725', 'Win streak King Indo tembus rangking 30 dunia jalur Football Manager 24🔥🔥🔥 #fmtactics #footballmanager2024 #timnasindonesia ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-i-photomode-us/a260135d4db944459928d0b807305728~tplv-photomode-image-cover:640:0:q70.webp?dr=17580&refresh_token=e5da82b3&x-expires=1751698800&x-signature=nR9xl7cwO27P6J9wgQaHN50dUXM%3D&t=5897f7ec&ps=d5b8ac02&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&s=TIKTOK_FOR_DEVELOPER&biz_tag=tt_photomode&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7425910225665854725?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 10, 1, 0, 478, '2024-10-15 01:04:31', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(6, '7362131304676199686', 'dah lah cooo pensi aja, gini mulu fortnite ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-i-photomode-us/b8eb0b543ee94922b52c4db2fb14233d~tplv-photomode-image-cover:640:0:q70.webp?dr=17580&refresh_token=56d662ac&x-expires=1751698800&x-signature=6DMdV6zWJyT6kZQeHZDabXOPC%2Fo%3D&t=5897f7ec&ps=d5b8ac02&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&s=TIKTOK_FOR_DEVELOPER&sc=cover&biz_tag=tt_photomode', 'https://www.tiktok.com/@tegaraq/video/7362131304676199686?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 9, 2, 0, 482, '2024-04-26 04:09:34', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(7, '7361386251955604754', 'tolong, kenapa abis update kok malah kek gini #fortnite #fyp', 'https://p16-sign-sg.tiktokcdn.com/tos-alisg-p-0037/oo82R3NADAEQA3AmecMzoMQgUIAoeyr6cXiEBf~tplv-tiktokx-cropcenter-q:300:400:q72.jpeg?dr=14782&refresh_token=26f56340&x-expires=1750489200&x-signature=Rs9ECcplYohc52gaST6QUhTU3M0%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7361386251955604754?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 10, 0, 0, 535, '2024-04-24 03:59:03', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(8, '7359184124537490694', 'newbie  #fortnite #fyp #fortniteclips #fortnitememes ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/2d0fdecbbeee4712b79f769121765182_1713443582~tplv-tiktokx-cropcenter-q:300:400:q72.jpeg?dr=14782&refresh_token=58f6e2ff&x-expires=1750489200&x-signature=OjCmZJl1DX6s%2F9Sot9TyIfDp%2Bxg%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7359184124537490694?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 19, 3, 0, 395, '2024-04-18 05:32:59', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(9, '7343623244936678661', 'Goodbye Fortnite Chapter 5 Season 1 #fortniteclips #fortnite #fyp ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/o4fREEnZT8fmzMhpEuBDIIbyQAinBlAc6nBJJi~tplv-tiktokx-cropcenter-q:300:400:q72.jpeg?dr=14782&refresh_token=6660f070&x-expires=1750489200&x-signature=gAYWedt7oMrudn%2B33b3IQpZ8%2F0M%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER&sc=cover', 'https://www.tiktok.com/@tegaraq/video/7343623244936678661?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 13, 1, 0, 393, '2024-03-07 07:08:50', '2025-06-20 00:39:46', '2025-06-20 00:39:46'),
(10, '7335878076053736710', 'packet losss adalah jalan ninjaku  #fortnite #fy #fortniteclips ', 'https://p16-sign-va.tiktokcdn.com/tos-maliva-p-0068/54b410f3064c437398b3bb9b000fe8e5_1708017221~tplv-tiktokx-cropcenter-q:300:400:q72.jpeg?dr=14782&refresh_token=41712c7d&x-expires=1750489200&x-signature=MPac3nQuCUoUSfpIfOZksb0UGdk%3D&t=bacd0480&ps=933b5bde&shp=d05b14bd&shcp=8aecc5ac&idc=maliva&sc=cover&biz_tag=tt_video&s=TIKTOK_FOR_DEVELOPER', 'https://www.tiktok.com/@tegaraq/video/7335878076053736710?utm_campaign=tt4d_open_api&utm_source=sbawr9gksrjn6zhr84', 15, 0, 0, 478, '2024-02-15 10:13:39', '2025-06-20 00:39:46', '2025-06-20 00:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Koperindo', 'admin@koperindo.com', NULL, '$2y$12$eRPTOvVd248Luvw7KROa8OhplldG1D24yFs/8pj1b9psN36yo3okS', NULL, '2025-06-15 20:42:58', '2025-06-15 20:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestones`
--
ALTER TABLE `milestones`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_category_id_foreign` (`post_category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_product_category_id_foreign` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiktok_posts`
--
ALTER TABLE `tiktok_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tiktok_posts_tiktok_id_unique` (`tiktok_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `milestones`
--
ALTER TABLE `milestones`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiktok_posts`
--
ALTER TABLE `tiktok_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_post_category_id_foreign` FOREIGN KEY (`post_category_id`) REFERENCES `post_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_category_id_foreign` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
