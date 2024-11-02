-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 10:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category` enum('DS','NW') NOT NULL,
  `Title` varchar(255) NOT NULL,
  `releaseDate` date NOT NULL,
  `writer_id` bigint(20) UNSIGNED NOT NULL,
  `Description` text NOT NULL,
  `Content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `Category`, `Title`, `releaseDate`, `writer_id`, `Description`, `Content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'DS', 'Machine Learning', '2024-10-10', 1, 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI) saat ini. Belum banyak orang yang mengetahui ...', 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.\r\n            Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah ia sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.<br><br>\r\n            Istilah machine learning pertama kali dikemukakan oleh beberapa ilmuwan matematika seperti Adrien Marie Legendre, Thomas Bayes dan Andrey Markov pada tahun 1920-an dengan mengemukakan dasar-dasar machine learning dan konsepnya. Sejak saat itu ML banyak yang mengembangkan. Salah satu contoh dari penerapan ML yang cukup terkenal adalah Deep Blue yang dibuat oleh IBM pada tahun 1996.', 'assets/Machine-Learning.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(2, 'NW', 'Software Security', '2024-10-12', 2, 'Bisnis masa kini bergantung pada semakin banyaknya program perangkat lunak untuk menjalankan tugas-tugas penting. Seiring dengan semakin ...', 'Keamanan perangkat lunak mengacu pada serangkaian praktik yang membantu melindungi aplikasi perangkat lunak dan solusi digital dari penyerang. Pengembang memasukkan teknik ini ke dalam siklus pengembangan perangkat lunak dan proses pengujian. Hasilnya, perusahaan dapat memastikan solusi digital mereka tetap aman dan dapat berfungsi jika terjadi serangan berbahaya.\r\n            Pengembangan perangkat lunak yang aman sangatlah penting karena selalu ada orang yang ingin mengeksploitasi data bisnis. Karena bisnis semakin bergantung pada perangkat lunak, program-program ini harus tetap aman dan terlindungi. Dengan protokol keamanan perangkat lunak yang kuat, Anda dapat mencegah penyerang mencuri informasi yang berpotensi sensitif seperti nomor kartu kredit \r\n            dan rahasia dagang, serta membangun kepercayaan di antara pengguna.Pencurian data penting dapat menjadi bencana bagi pelanggan dan bisnis. Pelaku kejahatan dapat menyalahgunakan informasi sensitif dan bahkan mencuri identitas pengguna.<br><br> Selain itu, perusahaan dapat menghadapi hukuman hukum jika terjadi pelanggaran data dan mengalami kerusakan reputasi.Bisnis dapat berupaya melindungi \r\n            data penting dengan menerapkan teknik keamanan perangkat lunak ke dalam siklus hidup pengembangan mereka. Menerapkan teknik keamanan memungkinkan organisasi untuk secara proaktif mengidentifikasi kerentanan sistem dan melindungi perangkat lunak mereka dengan lebih baik.', 'assets/Software-Security.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(3, 'DS', 'Deep Learning', '2024-10-16', 1, 'Kecerdasan buatan (AI) mencoba melatih komputer untuk berpikir dan belajar seperti yang dilakukan manusia. Teknologi deep learning mendorong ...', 'Deep learning adalah metode dalam kecerdasan buatan (AI) yang mengajarkan komputer untuk memproses data dengan cara yang terinspirasi otak manusia. Model deep learning dapat mengenali pola kompleks dalam gambar, teks, suara, dan data lain untuk menghasilkan wawasan dan prediksi yang akurat. Anda dapat menggunakan metode deep learning untuk mengotomatiskan tugas yang biasanya \r\n            membutuhkan kecerdasan manusia, seperti mendeskripsikan citra atau menyalin file suara ke dalam teks. Algoritme deep learning merupakan jaringan neural yang meniru otak manusia. Misalnya, otak manusia memiliki jutaan neuron yang saling terhubung yang bekerja sama untuk mempelajari dan memproses informasi.<br><br> Demikian pula, jaringan neural deep learning, atau jaringan neural buatan, terbuat \r\n            dari banyak lapisan neuron buatan yang bekerja sama di dalam komputer. Neuron buatan adalah modul perangkat lunak yang disebut simpul, yang menggunakan perhitungan matematika untuk memproses data. Jaringan neural buatan adalah algoritme deep learning yang menggunakan simpul ini untuk memecahkan masalah kompleks.', 'assets/Deep-Learning.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(4, 'DS', 'Natural Language Processing', '2024-10-18', 3, 'Pemrosesan bahasa alami (NLP) sangat penting untuk menganalisis data teks dan ucapan secara penuh dan efisien. Teknologi ini dapat menjelajahi ...', 'Pemrosesan bahasa alami (NLP) adalah sebuah teknologi machine learning yang memberi komputer kemampuan untuk menginterpretasikan, memanipulasi, dan memahami bahasa manusia. Banyak organisasi dewasa ini memiliki begitu banyak data suara dan teks dari berbagai saluran komunikasi seperti email, pesan teks, umpan berita media sosial, video, audio, dan banyak lagi. Mereka \r\n            menggunakan perangkat lunak NLP untuk memproses data ini secara otomatis, menganalisis maksud atau sentimen dalam pesan, dan merespons komunikasi manusia dalam waktu nyata. NLP menggabungkan linguistik komputasi - pemodelan bahasa manusia berbasis aturan - dengan model statistik, machine learning (pembelajaran mesin), dan deep learning (pembelajaran mendalam).<br><br> Bersama-sama, kesemua \r\n            teknologi itu memungkinkan program komputer untuk memproses bahasa manusia dalam bentuk teks atau data suara dan untuk memahami makna sepenuhnya, lengkap dengan maksud dan sentimen pembicara atau penulisan. NLP dapat membantu perusahaan meningkatkan wawasan mereka dan mendapatkan lebih banyak visibilitas ke semua aspek operasi yang dihadapi pelanggan mereka daripada sebelumnya.', 'assets/nlp.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(5, 'NW', 'Network Administration', '2024-10-20', 2, 'Network administrator adalah salah satu profesi di bidang IT yang berperan penting dalam mengatur jaringan perusahaan. Dalam menjalankan tugasnya ...', 'Network Administration merupakan professional yang bertanggung jawab atas pemeliharaan perangkat keras komputer dan perangkat lunak yang terdiri dari sebuah jaringan komputer. Biasanya bertugas untuk melakukan konfigurasi, pemeliharaan, pemeliharaan, dan monitoring jarinngan. Dimana fungsinya untuk spesialisasi jaringan atau analisis jaringan. Administrator bertanggung \r\n            jawab atas keamanan dari jaringan dan untuk menetapkan alamat IP ke perangkat yang terhubung ke jaringan. Menetapkan dan memberikan alamat subnet IP untuk mengontrol administrator atas personil yang terhubung ke subnet. Hal ini juga membantu untuk memastikan bahwa administrator mengetahui setiap sistem yang terhubung dan yang secara pribadi bertanggung jawab untuk sistem.<br><br> Network \r\n            Administration merupakan professional yang bertanggung jawab atas pemeliharaan perangkat keras komputer dan perangkat lunak yang terdiri dari sebuah jaringan komputer. Biasanya bertugas untuk melakukan konfigurasi, pemeliharaan, pemeliharaan, dan monitoring jarinngan. Dimana fungsinya untuk spesialisasi jaringan atau analisis jaringan. Administrator bertanggung jawab atas keamanan \r\n            dari jaringan dan untuk menetapkan alamat IP ke perangkat yang terhubung ke jaringan. Menetapkan dan memberikan alamat subnet IP untuk mengontrol administrator atas personil yang terhubung ke subnet. Hal ini juga membantu untuk memastikan bahwa administrator mengetahui setiap sistem yang terhubung dan yang secara pribadi bertanggung jawab untuk sistem ', 'assets/Network-Administrator.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(6, 'NW', 'Popular Network Technology', '2024-10-24', 1, 'Permintaan akan konektivitas dan jaringan telah meningkat secara signifikan karena semakin banyak konsumen dan bisnis yang mencari konektivitas yang ...', 'Munculnya Kecerdasan Buatan (AI), 5G dan seterusnya, 6G, Internet of Things (IoT), Big Data, dan banyak lagi telah menandai transformasi luar biasa di berbagai industri. Teknologi baru ini secara digital mengubah sektor telekomunikasi untuk memenuhi permintaan bisnis dan pelanggan yang terus tumbuh. Transformasi digital dengan tren teknologi ini akan memengaruhi industri \r\n            telekomunikasi untuk mewujudkan inovasi, agar tetap kompetitif di pasar. Tren yang muncul pada tahun 2024 akan mendukung sektor telekomunikasi dalam menghadapi tantangan yang terlibat dalam manajemen dan keamanan jaringan.<br><br> Di tahun-tahun mendatang, dengan bantuan tren teknologi ini, industri telekomunikasi dapat merenovasi model operasional dan bisnis mereka untuk memperluas basis \r\n            pelanggan mereka dan meluncurkan produk, solusi, dan layanan yang inovatif. Tahun 2024 akan menandai era di mana perusahaan mengintegrasikan metode yang ramah lingkungan dan berkelanjutan ke dalam strategi dan kerangka kerja bisnis mereka. Praktik terbaik mencakup pelaksanaan prosedur hemat energi dan dorongan program tanggung jawab sosial perusahaan. Transformasi digital yang berkelanjutan \r\n            merupakan kendala strategis yang mencakup keunggulan kompetitif bagi perusahaan mana pun.', 'assets/Popular-Network.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(21, '0001_01_01_000000_create_users_table', 1),
(22, '0001_01_01_000001_create_cache_table', 1),
(23, '0001_01_01_000002_create_jobs_table', 1),
(24, '2024_11_02_041523_create_writers_table', 1),
(25, '2024_11_02_041628_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ba6d2eLnrgR0aNlDVRslzCIBtfc303F2vQzZwwOI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNzk4RmlPanJXM0VPRk4wNHVtN1JDMDZZTkxFRjBEZVdMcGVYNkV4cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730538900),
('jOkTNPEZgt1szCF7kvm6hQ9GurbYXfrOCBb2UsYv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDVoeFkwUGJuMVBoeFJwWU0yUTVXVGJmZEtuRUZJaVBqVHlxNG41aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wb3B1bGFyP3BhZ2U9MiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730538151);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `writers`
--

CREATE TABLE `writers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `writers`
--

INSERT INTO `writers` (`id`, `Name`, `specialist`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Bayu', 'Spesialis Data Science', 'assets/profile/ahmed.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(2, 'Caca Daniel', 'Spesialis Network Security', 'assets/profile/caca.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28'),
(3, 'Dedi Endo', 'Spesialis Network Security', 'assets/profile/dedi.jpg', '2024-11-02 00:20:28', '2024-11-02 00:20:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `writers`
--
ALTER TABLE `writers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `writers_name_unique` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `writers`
--
ALTER TABLE `writers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `writers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
