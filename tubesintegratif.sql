-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesintegratif`
--

-- --------------------------------------------------------

--
-- Table structure for table `cobaapi`
--

CREATE TABLE `cobaapi` (
  `nama_game` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cobaapi`
--

INSERT INTO `cobaapi` (`nama_game`, `platform`, `deskripsi`, `gambar`) VALUES
('Valorantt', 'Valorarnt', 'Valorants', 'Valoranat');

-- --------------------------------------------------------

--
-- Table structure for table `diamond`
--

CREATE TABLE `diamond` (
  `stock` int(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `nominal` int(255) NOT NULL,
  `material` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diamond`
--

INSERT INTO `diamond` (`stock`, `harga`, `id`, `nominal`, `material`) VALUES
(10, 14000, 1, 125, 'Points'),
(20, 47000, 1, 420, 'Points'),
(10, 15000, 2, 53, 'Diamonds'),
(20, 48000, 2, 154, 'Diamonds'),
(10, 11000, 3, 100, 'Fifa Points'),
(20, 49000, 3, 500, NULL),
(10, 16000, 4, 60, 'Genesis Crystals'),
(20, 18000, 4, 300, 'Genesis Crystals');

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
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `name_game` varchar(255) NOT NULL,
  `gambar` longtext NOT NULL,
  `platform` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name_game`, `gambar`, `platform`, `deskripsi`) VALUES
(1, 'Valorant', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.dribbble.com%2Fusers%2F2348%2Fscreenshots%2F10696082%2Fmedia%2F4a24583ea649f9df1415775a37c84ae5.png%3Fcompress%3D1%26resize%3D400x300&f=1&nofb=1&ipt=a503a1043294f5859d4b5047e42c388d5f5f75b605a0f720a0b052961a4aa691&ipo=images', 'PC', 'Padukan gaya dan pengalamanmu di panggung kompetitif global. Kamu memiliki 13 ronde untuk menyerang dan mempertahankan sisimu dengan keahlian tembak-menembak sengit serta kemampuan taktis. Dengan satu nyawa per ronde, kamu harus berpikir lebih cepat daripada lawan jika ingin tetap hidup. Habisi musuh baik di mode Competitive maupun Unranked serta Deathmatch dan Spike Rush.'),
(2, 'Mobile Legends', 'https://play-lh.googleusercontent.com/UELcKakJhwKhdDJIwpdvd1RjE3ClRXiG0nhChs69fBv-nn5ZkgSp2EkkRTnJYFtYoZyu', 'Mobile', 'Mobile Legends adalah permainan MOBA yang dirancang untuk ponsel. Kedua tim masing-masing berisi lima orang berjuang untuk mencapai dan menghancurkan markas musuh sambil mempertahankan markas mereka sendiri untuk mengendalikan tiga jalur, yang dikenal sebagai jalur \"atas\", \"tengah\" dan \"bawah\", yang menghubung ke setiap markas'),
(3, 'EA FC Mobile', 'https://pbs.twimg.com/media/F073E8xWIAsYusZ.jpg', 'Mobile', 'EAS FC Mobile memberikan pengalaman sepak bola autentik yang tak tertandingi di ponsel. Menampilkan pemain sepak bola, klub, liga, dan kompetisi terhebat di dunia, Anda akan dapat bermain dengan pemain dari klub .'),
(4, 'Genshin Impact', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fres.cloudinary.com%2Fteepublic%2Fimage%2Fprivate%2Fs--JFZqa-Mu--%2Ft_Preview%2Fb_rgb%3A262c3a%2Cc_limit%2Cf_auto%2Ch_630%2Cq_90%2Cw_630%2Fv1576490673%2Fproduction%2Fdesigns%2F7222111_0.jpg&f=1&nofb=1&ipt=1beffdbb1a9b67a5641c2a93e325796f2287697b40fbb6d2fa0f98d12dbb6f15&ipo=images', 'PC', 'Genshin Impact adalah permainan peran aksi (action role-playing game) free-to-play yang dikembangkan oleh miHoYo. Permainan ini dirilis pada September 2020 dan tersedia untuk berbagai platform, termasuk PC, PlayStation, iOS, dan Android.\r\n\r\nDalam Genshin Impact, pemain berperan sebagai \"Traveler,\" seorang petualang yang datang ke dunia fantasi bernama Teyvat. Tujuan utama pemain adalah mencari dan menyelamatkan saudara kembarnya yang hilang di dunia tersebut. Selama perjalanan, pemain akan bertemu dengan berbagai karakter unik yang dapat menjadi anggota tim mereka.');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` enum('Unpaid','Paid','','') NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) NOT NULL,
  `game` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nickname`, `qty`, `status`, `nohp`, `total_price`, `time`, `email`, `game`) VALUES
(76, '876218', 14000, 'Unpaid', 82132601411, 14000, '2023-08-07 00:11:17', 'fahmiammry@gmail.com', 'Valorant'),
(77, 'igris.', 47000, 'Unpaid', 821326313, 47000, '2023-08-07 00:15:25', 'fahmiammryhi@gmail.com', 'Valorant'),
(78, 'pershepon', 15000, 'Unpaid', 821765678, 15000, '2023-08-07 01:55:12', 'ilyas@gmail.com', 'Mobile Legends'),
(79, 'arkan', 15000, 'Unpaid', 819987657, 15000, '2023-08-07 01:58:09', 'arkan@gmail.com', 'Mobile Legends'),
(80, 'Terpragosprasog', 11000, 'Paid', 893647863, 11000, '2023-08-07 02:01:43', 'flakara@gmail.com', 'EA FC Mobile');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `nohp` bigint(20) DEFAULT NULL,
  `role` varchar(16) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `nohp`, `role`) VALUES
(10, 'pragus', 'admin@gmail.com', NULL, '$2y$10$KmJ9l3WZUIXfr7TmcJpQAu5HM3n.zbtQntHqNzLA/1y5x6TU6Pf0O', NULL, NULL, NULL, 918021830, 'admin'),
(11, 'pragoes', 'user@gmail.com', NULL, '$2y$10$UbNaABinmOlREFypvloTYujZdFzLxQmIccgdXKupnoJWV6OubQPGG', NULL, NULL, NULL, 8102831221, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diamond`
--
ALTER TABLE `diamond`
  ADD KEY `id` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diamond`
--
ALTER TABLE `diamond`
  ADD CONSTRAINT `diamond_ibfk_1` FOREIGN KEY (`id`) REFERENCES `game` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
