-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2023 at 01:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landing_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `content1`, `content2`, `created_at`, `updated_at`) VALUES
(1, 'SEJARAH', 'SMK negeri 1 Kota Bekasi adalah sekolah kejuruan yang memiliki pendidikan selama 3 tahun, SMK Negeri 1 Kota Bekasi diresmikan pada tahun 1998 oleh kepala kanwil departemen pendidikan dan kebudayaan jawa barat Drs, H. Thamrin Gunardi, MA dengan nama STM Negeri 1 Kota Bekasi dan pada tahun 29 April 1998 berganti nama menjadi SMK Negeri 1 Kota Bekasi.\r\n\r\nSMK Negeri 1 kota Bekasi pertama kali didirikan membuka dua program keahlian yaitu Teknik  Otomotif dan Teknik Mesin yang terdiri dari empat rombongan belajar dengan jumlah siswa 144 siswa. SMK Negeri 1 kota Bekasi terus berkembang dari 4 rombongan belajar menjadi 38 rombongan belajar pada tahun 2010 dengan jumlah siswa 1200 siswa. \r\n\r\npada tahun 2018, SMK Negeri 1 Kota Bekasi memiliki peserta didik sebanyak 1638 orang dan membuka 8 kompetensi keahlian yaitu Teknik Kendaraan Ringan, Teknik Pemesinan, Teknik Pengelasan, Teknik Komputer dan Jaringan, Rekayasa perangkat lunak, Multimedia, Busana Butik dan Akuntansi.', 'SMK Negeri 1 Kota Bekasi merupakan sekolah yang ditunjuk oleh Direktorat Pembinaan SMK (PSMK) sebagai Rintisan Sekolah Bertaraf Internasional untuk seluruh kompetensi keahlian sejak tahun 2008. \r\n\r\nSesuai dengan surat keputusan Walikota Bekasi Nomor 420/Kep.169.A-Disdik/IV/2013 tentang penetapan kategori sekolah SMK, SMA dan SMK Negeri Kota Bekasi maka SMK Negeri 1 Kota Bekasi masuk dalam kategori Sekolah Model', '2023-06-30 05:26:39', '2023-06-30 05:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Abdi Malika', 'malika@mailinator.com', 'test', 'test', '2023-07-02 18:20:45', '2023-07-02 18:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakulikuler`
--

CREATE TABLE `ekstrakulikuler` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ekstrakulikuler`
--

INSERT INTO `ekstrakulikuler` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'FUTSAL & SEPAK BOLA,', 'bergerak di bidang olahraga sepak bola', '2023-07-11 04:27:47', '2023-07-11 04:27:47'),
(2, 'BOLA VOLI,', 'bergerak di bidang olahraga bola voli', '2023-07-11 04:28:11', '2023-07-11 04:28:11'),
(3, 'JURNALISTIK', 'bergerak di bidang jurnalistik', '2023-07-11 04:28:39', '2023-07-11 04:28:39'),
(4, 'PMR', 'bergerak di bidang kesehatan', '2023-07-11 04:29:03', '2023-07-11 04:29:03'),
(5, 'Rohani Islam (Rohis) Adz-Zikru', 'bergerak di bidang kerohanian agama Islam', '2023-07-11 04:29:22', '2023-07-11 04:29:22'),
(6, 'Rohani Kristen (Rohkris),', 'bergerak di bidang kerohanian agama Kristen dan Katolik', '2023-07-11 04:29:49', '2023-07-11 04:29:49'),
(7, 'BOXER', 'bergerak di bidang olahraga tarung drajat', '2023-07-11 04:30:09', '2023-07-11 04:30:09'),
(8, 'PASKIBRA,', 'bergerak di bidang pelaksanaan upacara dan pengibaran bendera', '2023-07-11 04:30:30', '2023-07-11 04:30:30'),
(9, 'English Club', 'bergerak di bidang Bahasa Inggris', '2023-07-11 04:30:58', '2023-07-11 04:30:58'),
(10, 'INORI (Ichiban No Hikari),', 'bergerak di bidang Bahasa Jepang', '2023-07-11 04:31:19', '2023-07-11 04:31:19'),
(11, 'Anderpati', 'bergerak di bidang seni drama', '2023-07-11 04:31:42', '2023-07-23 04:15:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Teknik Pemesinan', 'Teknik Pemesinan adalah salah satu kompetensi keahlian yang ada dari awal pendirian sekolah. Saat ini jumlah rombongan belajar pada kompetensi keahlian ini adalah 6 Rombel.  Keterampilan yang diajarkan pada kompetensi keahlian ini adalah Pengetahuan dasar teknik mesin, Gambar teknik mesin, kemampuan penggunaan perkakas seperti mesin frais, mesin bor dan mesin gerinda serta penggunaan perangkat komputer dalam penggunaan mesin CNC (Computer Numerical Control) dan pembuatan gambar mesin menggunakan perangkat lunak CAD (Computer Aided Design).', '2023-06-30 06:11:41', '2023-07-22 22:45:35'),
(2, 'Teknik Pengelasan', 'Teknik Pengelasan merupakan kompetensi keahlian yang dikembangkan dari program keahlian teknik mesin. Kompetensi keahlian ini memiliki 3 rombongan belajar.  Pada kompetensi keahlian teknik pengelasan peserta didik diajarkan keterampilan penggunaan perkakas seperti mesin frais, mesin bor, dan mesin gerinda serta penggunaan alat pengelasan yang sesuai dengan standar industri.  Kompetensi keahlian ini memiliki misi mencetak lulusan yang handal sebagai tenaga las terampil dan mampu bekerja sesuai dengan kebutuhan industri manufaktur yang tersebar baik di dalam negeri maupun luar negeri.', '2023-06-30 06:14:27', '2023-06-30 06:14:27'),
(3, 'Teknik Kendaraan Ringan Otomotif', 'Teknik Kendaraan Ringan Otomotif adalah kompetensi keahlian yang mengajarkan keterampilan perawatan kendaraan mobil sehingga lulusan kompetensi keahlian ini memiliki keahlian sebagai tenaga mekanik perawatan mobil.  Kompetensi keahlian ini menempati area gedung teknik kendaraan ringan yang didalamnya terdapat fasilitas seperti ruang Balancing and spooring, ruang pengujian emisi, ruang kerja kelistrikan bodi otomotif, ruang kerja praktik perawatan mesin kendaraan ringan, ruang praktek perawatan chasis kendaraan ringan.  Lulusan kompetensi keahlian ini menempati bidang pekerjaan seperti tenaga mekanik, tenaga operator pada perusahaan manufaktur, tenaga kerja pada bengkel-bengkel resmi milik perusahaan ATPM (Agen Tunggal Pemegang Merek) produsen mobil berpenumpang yang tersedia di area jabodetabek dan sekitarnya.', '2023-06-30 06:14:47', '2023-06-30 06:14:47'),
(4, 'Rekayasa Perangkat Lunak', 'Rekayasa Perangkat Lunak atau disingkat dengan RPL adalah kompetensi keahlian yang ada di SMK Negeri 1 Kota Bekasi yang menyiapkan siswanya menjadi tenaga kerja pada bidang programmer komputer, database administration, Frontend and Backend Programmer, Android/mobile application developer.  Keterampilan yang diajarkan pada kompetensi keahlian ini adalah pengembangan perangkat lunak, perancangan dan administrasi basis data, integrasi sistem, serta penggunaan teknologi yang saat ini sedang digunakan di industri pengembangan perangkat lunak.  Kompetensi keahlian ini juga bekerja sama dengan beberapa perusahaan teknologi dalam menyelenggarakan sertifikasi seperti dengan Microsoft. inc, Oracle.', '2023-06-30 06:15:08', '2023-06-30 06:15:08'),
(5, 'Multimedia', 'Kompetensi keahlian multimedia membekali peserta didiknya dengan keterampilan penggunaan perangkat lunak pengolah gambar digital, pengolah audio , pembuatan animasi dan model 3 dimensi dan keterampilan khusus seperti desain product packaging.  Selain peserta didik pada kompetensi keahlian ini disiapkan sebagai tenaga kerja pada bidang industri kreatif, mereka juga dibekali dengan keterampilan berwirausaha berdasarkan kompetensi kejuruan yang didapat sehingga setelah lulus, peserta didik memiliki kemampuan untuk menjadi wirausaha baru yang berkontribusi di masyarakat.', '2023-06-30 06:15:25', '2023-06-30 06:15:25'),
(6, 'Teknik Komputer dan Jaringan', 'Teknik Komputer dan Jaringan adalah kompetensi keahlian yang mengajarkan keterampilan sebagai teknisi jaringan komputer yang handal. Pembelajaran yang diberikan pada kompetensi keahlian ini adalah pembuatan jaringan Local Area Network (LAN) dan Wide Area Network, Wireless Network, administrasi server berbasis windows dan linux serta keterampilan pengembangan jaringan menggunakan fiber optik.  Kompetensi keahlian ini bekerja sama dengan mikrotik dalam Mikrotik Academy dimana peserta didik dibekali kemampuan untuk melakukan konfigurasi perangkat router dan switch mikrotik serta memungkinkan peserta didik untuk mendapatkan sertifikat kompetensi internasional dari mikrotik sepert MTCNA, MTCRE dll.', '2023-06-30 06:15:47', '2023-06-30 06:15:47'),
(7, 'Akuntansi', 'Kompetensi Keahlian Akuntansi membekali peserta didik sebagai tenaga akuntan yang mampu membuat dan mengelola pelaporan keuangan, mengelola kas perusahaan serta menghitung biaya operasional pada sebuah usaha/industri.  Peserta didik diajarkan bagaimana mengelola kas sesuai dengan kaidah-kaidah ilmu akuntansi, membuat laporan buku besar serta proses – proses pada akuntansi lainnya.  Lulusan kompetensi keahlian ini menjadi tenaga kerja yang siap bersaing pada perusahaan bidang keuangan, manajemen kekayaan perusahaan serta mampu mengelola siklus akuntasi pada perusahaan.', '2023-06-30 06:16:06', '2023-06-30 06:16:06'),
(8, 'Tata Busana', 'Kompetensi keahlian yang memiliki program pembelajaran tentang memilih bahan tekstil membuat pola, mendisain, menjahit, serta dilengkapi tata rias', '2023-07-22 22:56:23', '2023-07-22 22:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE `landing_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_banner` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_page`
--

INSERT INTO `landing_page` (`id`, `nama_banner`, `judul`, `created_at`, `updated_at`) VALUES
(2, 'banner-lp-230723123113.jpg', 'SMK Negeri 1 Kota Bekasi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo_banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_banner`, `created_at`, `updated_at`) VALUES
(1, '230723060738.jpg', NULL, NULL),
(3, 'logo-lp-230711061527.jpg', NULL, NULL),
(4, 'logo-lp-230711061623.jpg', NULL, NULL),
(5, 'logo-lp-230711061719.jpg', NULL, NULL),
(6, 'logo-lp-230711061802.png', NULL, NULL),
(7, 'logo-lp-230711061944.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_07_002407_about', 1),
(6, '2023_05_07_003231_contact', 1),
(7, '2023_05_07_003422_prestasi', 1),
(8, '2023_05_07_003600_ekstrakulikuler', 1),
(9, '2023_05_07_004714_kompetensi', 1),
(10, '2023_05_07_004917_landing_page', 1),
(11, '2023_05_07_005658_logo', 1),
(12, '2023_07_12_102229_visi', 2),
(13, '2023_07_15_042150_riwayat', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL COMMENT '1.false\r\n2.true',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id_user`, `email`, `token`, `status`, `created_at`) VALUES
(1, 'email1@mailinator.com', 'eFBEXQYh8M', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(7, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(8, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(9, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(10, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(11, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(12, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(13, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(14, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(15, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(16, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(17, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(18, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(19, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(20, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(21, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(22, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(23, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(24, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(25, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(26, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(27, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(28, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(29, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(30, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(31, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(32, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(33, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(34, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(35, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(40, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(41, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(42, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(43, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(44, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(45, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(46, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(47, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(48, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(49, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(50, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(51, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(52, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(53, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(54, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(55, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(56, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(57, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(58, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(59, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(60, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(61, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(62, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(63, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(64, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(65, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(66, 'Juara 1 LKS Animasi Tingkat Provinsi Tahun 2013', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(67, 'Peraih Nilai Ujian Nasional Se-SMK Tingkat Kota Bekasi Tahun 2014', 'Ujian Nasional (UN) adalah kegiatan pengukuran capaian kompetensi lulusan pada mata pelajaran tertentu secara nasional dengan mengacu pada Standar Kompetensi Lulusan. UN merupakan penilaian hasil belajar oleh pemerintah pusat yang bertujuan untuk menilai pencapaian kompetensi lulusan secara nasional pada mata pelajaran tertentu dan menjadi salah satu tolak ukur pencapaian Standar Nasional Pendidikan (SNP) dalam rangka penjaminan dan peningkatan mutu pendidikan.', NULL, NULL),
(68, 'Juara Umum LKS Tingkat Kota Bekasi Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(69, 'Juara 3 LKS Web Design Tingkat Nasional Tahun 2014', 'Lomba Kompetensi Siswa adalah kompetisi tahunan antar siswa pada jenjang SMK sesuai bidang keahlian yang diajarkan pada SMK peserta. Kegiatan ini merupakan salah satu bagian dari rangkaian seleksi untuk mendapatkan siswa-siswi terbaik dari seluruh Provinsi Jawa Tengah yang akan dibimbing lebih lanjut oleh tim bidang kompetisi masing-masing dan akan diikutsertakan pada kompetisi keahlian tingkat nasional.Pemenang LKS tingkat Provinsi akan mewakili Provinsi Jawa Tengah ke ajang LKS SMK Tingkat Nasional. Siswa yang mengikuti LKS adalah siswa terbaik dari kabupaten/kota yang telah lolos seleksi tingkat kabupaten/kota. Kegiatan ini adalah untuk mendorong semangat berprestasi peserta didik SMK yang diadakan setiap tahun dan sebagai upaya mempromosikan lulusan SMK kepada dunia usaha/dunia industri serta pemangku kepentingan lainnya.', NULL, NULL),
(70, 'juara 0', 'lomba ngoding', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Muryanto (1997 s.d 2000)', 'Pada era beliau, SMK Negeri 1 Kota Bekasi memiliki 2 Jurusan yaitu Teknik Mesin dan Teknik Otomotif, pada periode awal SMK Negeri 1 Kota Bekasi tumbuh menjadi sekolah kejuruan yang menjadi favorit bagi orang tua yang ingin menyekolahkan anaknya ke sekolah kejuruan negeri yang ada di Bekasi. Sebagai sekolah kejuruan negeri pertama, beliau meletakkan pondasi disiplin bagi siswa SMK (STM pada awalnya) yang terkenal dengan kegiatan tawuran antar pelajarnya menjadi sekolah yang tidak sama sekali pernah terlibat tawuran di Kota Bekasi dan timur Jakarta.  Pendidikan karakter yang diutamakan pada era beliau mengedepankan pendidikan vokasi yang berbasis karakter yang baik dan kompetensi yang sesuai dengan dunia industri pada zamannya.', '2023-07-14 21:44:57', '2023-07-14 21:44:57'),
(2, 'Drs. Asep Muchamad Abi Musyadiq (2000 s.d 2008)', 'Pada periode ini SMK Negeri 1 Kota Bekasi menjadi sekolah yang semakin diminati, hampir setiap tahunnya pendaftar mencapai + 1800 orang padahal pada saat itu kuota siswa baru yang diterima kurang lebih sekitar 350 orang. Pada periode kepemimpinan beliau, program keahlian ditambah dengan Teknik Elektro yang kemudian berubah menjadi TIK dan kembali berubah menjadi Multimedia pada tahun 2006, Bisnis Manajemen dan Tata Busana, sehingga total jurusan yang ada di SMK Negeri 1 Kota Bekasi menjadi 5 jurusan.  Pada tahun 2006 Sekolah ini menjadi ICT (Information Center Of Technology) Kota Bekasi yaitu sebuah program kementrian pendidikan melalui program Jardiknas (Jaringan Pendidikan Nasional). Program Jardiknas merupakan cikal bakal digitalisasi data pendidikan nasional.', '2023-07-23 05:40:46', '2023-07-23 05:40:46'),
(3, 'Drs. H. Chaerudin, M.Pd (2008 s.d 2011)', 'Pada masa kepemimpinan beliau, program keahlian pada SMK Negeri 1 Kota Bekasi bertambah menjadi 8 yakni Teknik Pengelasan, Teknik Pemesinan, Teknik Kendaraan Ringan Otomotif, Teknik Komputer dan Jaringan, Multimedia, Rekayasa Perangkat Lunak, Tata Busana dan Akuntansi (awalnya Bisnis dan Manajemen).  SMK Negeri 1 Kota Bekasi terpilih dan ditunjuk oleh Dirjen PSMK (Direktorat Jenderal Pendidikan Sekolah menengah Kejuruan) menjadi sekolah RSBI (Rintisan Sekolah Bertaraf Internasional) dimana sekolah diproyeksikan menjadi sekolah kejuruan unggulan yang memiliki lulusan sesuai dengan standar lulusan yang mampu bekerja pada dunia industri multinasional.', '2023-07-23 05:41:14', '2023-07-23 05:41:14'),
(4, 'H. I Made Supriatna, S.Pd, M.Si (2011 s.d 2018)', 'SMK Negeri 1 Kota Bekasi semakin berkembang menjadi sekolah yang berprestasi baik secara akademik maupun non-akademik, hal ini tidak lepas dari semakin meningkatnya kualitas pendidik dan tenaga kependidikan serta hasil proses seleksi peserta didik pada masa PPDB (Penerimaan Peserta Didik Baru).  Pada periode ini, SMK Negeri 1 Kota Bekasi menjadi sekolah rujukan SED-TVET (Sustainable Economic Development Through Technical and Vocational Education and Training). Yakni sebuah program kerja sama antara pemerintah Indonesia dan Jerman dalam mencetak sekolah SMK yang memiliki SNP (Standar Nasional Pendidikan) diatas rata-rata melalui pemenuhan sarana dan prasarana praktik, Modul-modul pembelajaran siswa, magang guru, serta peningkatan mutu manajemen berdasarkan standar mutu ISO 9001:2001 yang menetapkan persyaratan untuk sistem manajemen mutu.', '2023-07-23 05:42:31', '2023-07-23 05:42:31'),
(5, 'Drs. Sugiyono, MM (2018 s.d 2021)', 'Beliau menjabat dari tanggal 18 Maret 2018 sampai 2021. Fokus kepemimpinan beliau adalah meningkatkan kualitas sarana prasarana, kualitas proses kegiatan belajar mengajar dengan memanfaatkan fasilitas IT, salah satunya adalah mempelopori ujian CBT(Computer Based Test) menggunakan perangkat tablet/ smartphone yang dijalankan secara daring pada jaringan internal SMK Negeri 1 Kota Bekasi.  Salah satu perbaikan yang beliau lakukan adalah renovasi wajah sekolah menjadi lebih modern, perbaikan infrastruktur penunjang serta memperbanyak area terbuka hijau yang nyaman di lingkungan sekolah.', '2023-07-23 05:43:00', '2023-07-23 05:43:00'),
(9, 'Drs. Boan, MM (2021 s.d. sekarang)', 'belum ada deskripsi', '2023-07-23 05:49:14', '2023-07-23 05:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL COMMENT 'admin\r\nuser',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'email1@mailinator.com', '2023-06-30 03:58:24', '$2y$10$H05ru807Qcm3O/WvPDagS..g7fxdb7WxzicC1lVZnfwJgjwUD2yKa', 'admin', NULL, '2023-06-30 03:58:24', '2023-08-06 23:50:43'),
(2, 'pengguna1', 'user1@mailinator.com', NULL, '$2y$10$68SiXIgvpicoUZHcgMZZZehMbCqW0UVlc.t0xIwC5ySZIGJZnRqGy', 'user', NULL, '2023-06-30 06:02:00', '2023-07-29 07:52:40'),
(3, 'Abdi Malika', 'email@gmail.com', NULL, '$2y$10$Ab9EctF6DWn6X8585noNROk7dN.buUuXBFCKQKLS4vq1aUomlFUuK', 'user', NULL, '2023-08-07 02:36:46', '2023-08-07 02:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Melaksanakan Sistem Manajemen Mutu ISO 9001 : 2015', NULL, NULL),
(2, 'Membudayakan pengamalan nilai-nilai agama dalam setiap aspek kehidupan seluruh warga sekolah.', NULL, NULL),
(3, 'Menyelenggarakan pendidikan formal kejuruan untuk menghasilkan lulusan yang berkarakter, cerdas, inovatif , kreatif, sesuai dengan tuntutan dunia industri dan mampu berwirausaha.', NULL, NULL),
(4, 'Meningkatkan kualitas tenaga pendidik dan kependidikan sesuai kualifikasi dan kompetensi standar.', NULL, NULL),
(5, 'Menyelenggarakan Lembaga Sertifikasi Profesi dan  Tempat Uji Kompetensi   sesuai dengan bidang kompetensi', NULL, NULL),
(6, 'Menyelenggarakan  sekolah Berbudaya lingkungan', NULL, NULL),
(7, 'Menjadi pusat layanan data dan informasi pembelajaran berbasis IT', NULL, NULL),
(8, 'Menjadi pusat layanan Bursa Kerja Khusus  Kota Bekasi', NULL, NULL),
(11, 'Menjadi SMK Rujukan', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_page`
--
ALTER TABLE `landing_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ekstrakulikuler`
--
ALTER TABLE `ekstrakulikuler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
