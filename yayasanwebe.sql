-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jun 2024 pada 07.22
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yayasanwebe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('9af4f915-a0b4-4e80-8eaf-c1249dc038cd', 'adminwebe@gmail.com', 'adminwebe', 'Admin WeBe', '$2y$12$drHxDrj44UtsRJnmUS.Gh.4i6MazZUdvp40viB9bwoFUvvDdxFp8O', NULL, '2023-12-28 06:16:56', '2023-12-28 06:16:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `username`, `email`, `foto`, `password`, `created_at`, `updated_at`) VALUES
('9b10acd0-4484-4958-b9ab-8f6ea8a74c91', 'Hesty Yolanda', 'Hesty Yolanda', 'hestyyolanda@gmail.com', 'app/anggota/1704959210-XMNmJ.png', '123', '2024-01-11 00:46:51', '2024-01-11 00:46:51'),
('9b17117d-0460-4a47-b562-5790c003e356', 'Yanto', 'YantoKumis', 'yanto@gmail.com', 'app/anggota/1709624291-f9YWG.png', '$2y$12$8154cITbrgtE6xsmqSXN2.Ul.xWaJ2OCKEJvisUSIp8AwlGaowAW6', '2024-03-08 01:56:56', '2024-03-07 18:56:56'),
('9b29b0e7-feb1-4815-be71-b9e79cbd13ac', 'Anggun Safitrii', 'anggun safitri', 'anggunsafitri@gmail.com', 'app/anggota/1706033638-lNNuP.png', '$2y$12$zrBolr7LqdZsFJCxHrKZJ.Q8h5lTrCPbbi2c4o/akrekw6JeSqlJO', '2024-03-05 01:56:26', '2024-06-20 08:08:02'),
('9b29b2ca-7798-410e-884e-49267bddfbb2', 'Luqinul Mifdlol', 'luqinul', 'luqinul@gmail.com', 'app/anggota/1706033955-XnI3h.jpg', '$2y$12$me5VGrQO7vGEj3bbDZG7..NhSc6hkg00h/QMVA7JmLTwjt3rECFDe', '2024-01-23 11:19:15', '2024-01-23 11:19:15'),
('9c52ff82-9ca7-4466-b11d-78d6ffbedb0c', 'arjun', 'arjunmahendra', 'arjun@gmail.com', 'app/anggota/1718802879-AO5Vy.png', '$2y$12$CclhegouCmXSe4.i81CYW.ZlyOZFq.X6.8O/gONcXHaGnfet3PSTy', '2024-06-19 13:14:40', '2024-06-19 13:16:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` char(36) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `id_anggota`, `judul`, `tanggal`, `deskripsi`, `foto`, `status`, `created_at`, `updated_at`) VALUES
('9b104638-1422-41c6-8799-b4ec1e56f861', '9b29b0e7-feb1-4815-be71-b9e79cbd13ac', 'HARI GERAKAN SATU JUTA POHON', '2024-01-10', 'Giat patroli pemantauan dan sosialisasi manfaat konservasi dugong yang dilaksanakan oleh Yayasan Webe Konservasi Ketapang (Yayasan Webe) bersama mitra Pokdarwis dan kelompok masyarakat  pulau Cempedak dan Bawal di semester-1 tahun 2021 menunjukkan hasil yang menggembirakan. Dimana dalam 6 bulan pertama ini tidak ditemukan kasus kematian dugong yang diakibatkan aktifitas nelayan maupun akibat dari aktifitas masyarakat yang lainnya.', 'app/berita/1704941997-qxj7O.png', 2, '2024-01-10 19:59:58', '2024-06-24 06:54:26'),
('9b28a6fe-9847-4011-a343-d015c78c71e9', '9b10acd0-4484-4958-b9ab-8f6ea8a74c91', 'HARI ULANG TAHUN PROVINSI KALBAR', '2024-01-28', 'Ulang Tahun kali ini Provinsi Kalimantan Barat mengusung tema \"Melaju Aman dan Kondusif\". MASATA berharap perjalanan kepariwisataan di Kalimantan Barat terus berkembang secara dinamis, mewujudkan lingkungan yang aman bagi pelaku usaha pariwisata, serta menjamin kenyamanan dan kepuasan bagi setiap wisatawan yang datang berkunjung.', 'app/berita/1709863752-p3bxr.png', 2, '2024-01-22 22:50:27', '2024-06-24 06:54:36'),
('9b2b21db-a501-42c9-afcf-ca6c4d6bb737', '9b29b2ca-7798-410e-884e-49267bddfbb2', 'HARI KORPS WANITA ANGKATAN LAUT', '2024-12-31', 'asndkj', 'app/berita/1708922794-whWhx.png', 2, '2024-01-24 04:25:39', '2024-06-24 06:53:08'),
('9b7ae88e-99fd-42a1-9fed-6ef6e8ad89be', '9b10acd0-4484-4958-b9ab-8f6ea8a74c91', 'SOSIALISASI MANFAAT KONSERVASI DUGONG', '2024-02-29', 'Kegiatan ini dilaksanakan oleh Yayasan WeBe Konservasi Ketapang (Yayasan WeBe) bersama mitra Pokdarwis dan Kelmpok Masyarakat di Pulau Cempedak dan Pulau Bawal.', 'app/berita/1709521899-YV1mz.jpg', 2, '2024-03-03 20:11:39', '2024-06-24 06:53:11'),
('9c52f9ce-7908-4fe3-a156-9b7a277a1cdc', '9b29b0e7-feb1-4815-be71-b9e79cbd13ac', 'Rasi Bintang Orion', '2024-06-19', 'Kunjungan ini merupakan salah satu kegiatan rutin', 'app/berita/1718801922-DFyee.jpg', 2, '2024-06-19 12:58:43', '2024-06-24 06:53:15'),
('9c5c8c12-6cf9-4456-a45d-4a8592a0fc23', '9b17117d-0460-4a47-b562-5790c003e356', 'Rasi Bintang Orion', '2024-06-24', ',.ansdkadkjkjfskfkds', 'app/berita/1719213009-6il39.jpg', 2, '2024-06-24 07:10:09', '2024-06-24 07:10:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `giat`
--

CREATE TABLE `giat` (
  `id` char(36) NOT NULL,
  `id_anggota` char(36) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `giat`
--

INSERT INTO `giat` (`id`, `id_anggota`, `nama`, `tanggal`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
('9b104dc3-d836-468a-932f-0adc3ef51b26', '9b10acd0-4484-4958-b9ab-8f6ea8a74c91', 'GIAT PENYELAMAN WEBE', '2024-01-09', 'Kegiatan monitoring mandiri telah dilakukan sepanjang semester ke 2 tahun 2020 oleh kelompok pemantau, Pokdarwis Cempedak Jaya. Area pemantauan adalah di sekitar pulau Cempedak dan Bawal.', 'app/giat/1707456581-ii5Ue.jpg', '2024-01-10 20:21:04', '2024-02-21 23:15:16'),
('9b2a63b6-d1d9-4094-b588-ba18c4c63928', '9b10acd0-4484-4958-b9ab-8f6ea8a74c91', 'SOSIALISASI DAN PENDAMPINGAN', '2024-01-24', 'Kegiatan sosialisasi, pendampingan dan pelatihan bersama masyarakat pulau Cempedak tentang manfaat pelestarian Dugong untuk masyarakat Pulau Cempedak.', 'app/giat/1709865358-nrM8A.jpg', '2024-01-23 19:33:58', '2024-03-07 19:35:58'),
('9b52bfbd-fd7a-4a8e-9d96-06ee28e7dc01', '9b29b2ca-7798-410e-884e-49267bddfbb2', 'KEGIATAN PATROLI DUGONG', '2024-02-13', 'Upaya konservasi yang dilakukan oleh masyarakat di sekitar Kawasan Taman Nasional Bunaken juga sudah cukup baik, tetapi peril ditingkatkan pemahamannya tentang pentingnya keberadaan spesies ini dan kaitannya dengan lamun sebagai pakan alami duyung.', 'app/giat/1707797064-S22Hw.jpg', '2024-02-12 21:04:25', '2024-02-21 23:14:45'),
('9b7cdd5f-fe5f-418a-953e-933bc69ebaf2', '9b29b0e7-feb1-4815-be71-b9e79cbd13ac', 'PENCATATAN TEMUAN KEMUNCULAN DUGONG', '2024-03-04', 'Temuan Kemunculan dugong yang di catat oleh masyarakat sekitar pulau Cempedak', 'app/giat/1709864073-BYC3M.jpg', '2024-03-04 19:32:03', '2024-03-07 19:14:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nohp` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `link_ig` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `link_ig`, `alamat`, `jabatan`, `created_at`, `updated_at`) VALUES
('9afe9ba3-00a9-4c3c-bcf4-93572a503897', 'Setra Kusumardana', 'setrakusumardana@gmail.com', 'https://wa.me/628128090253?', 'https://www.instagram.com/thesetra?igsh=MWlwanVxZWxnbmpyaw==', 'Jalan RM Sudiono No.49A', 'Ketua DPC Masata Ketapang', '2024-01-02 01:13:55', '2024-02-18 20:58:18'),
('9b5ec297-d161-42c6-afaa-700782e3da77', 'Hervanudin Yusuf', 'evan123@gmail.com', 'https://wa.me/6281350013789?', 'https://www.instagram.com/andaxevan?igsh=aTcwa3ZkY294OTRm', 'Jalan Merdeka, Ketapang', 'Bendahara', '2024-02-18 20:22:19', '2024-02-18 21:00:46'),
('9b79484f-7864-430f-8584-ea349d8bf82b', 'Sukardi', 'kardi@gmail.com', 'https://wa.me/6285753051329?', '-', 'Pontianak, Kalbar', 'Perwakilan WeBe Pontianak', '2024-03-03 00:47:45', '2024-03-24 20:29:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` longtext,
  `sejarah` longtext,
  `experience` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `project` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nama`, `deskripsi`, `sejarah`, `experience`, `project`, `foto`, `created_at`, `updated_at`) VALUES
('9afe8803-2d62-49d7-a6ac-0fea51145c42', 'Yayasan WeBe Konservasi Ketapang', 'Sejak 2013, Yayasan WeBe Konservasi Ketapang (Yayasan WeBe) memulai perjalanannya dengan memperkenalkan olahraga selam SCUBA dan wisata bahari di Kabupaten Ketapang, Kalimantan Barat. Dalam perkembangannya, Yayasan WeBe secara aktif bekerjasama dengan para mitra lainnya dalam pengembangan ekowisata yang berbasis konservasi SDA dan pemberdayaan masyarakat dalam bentuk sosialisasi, pelatihan dan pendampingan.', 'Yayasan WeBe berkomitmen pada pengelolaan SDA yang berkelanjutan dengan mengutamakan prinsip bahwa \"giat konservasi harus memberikan dampak atau manfaat langsung pada masyarakat dan lingkungannya\".   Yayasan WeBe bekerja di wilayah Kabupaten Ketapang dan Kabupaten kayong Utara, Kalimantan Barat,  dengan fokus pada usaha konservasi dan pemberdayaan masyarakat melalui kerja sama dengan instansi pemerintah seperti Kementerian Lingkungan Hidup dan Kehutanan, Kementerian Kelautan dan Perikanan, serta unit-unit pelaksana di daerah, sektor swasta, pemerintah daerah, organisasi dan kelompok masyarakat setempat.', '1. Latihan pengenalan olahraga selam\r\n2. Sosialisasi bersih pantai dan pesisir ke masyarakat\r\n3. Monitoring terumbu karang, lamun dan satwa laut yang dilindungi\r\n4. Pendampingan kelompok masyarakat pengelola ekowisata perdesaan (Pulau Sawi, Pulau Cempedak, dan desa wisata lainnya)', '1. Exploring Pulau Penambun & Gelam – 2017\r\n2. Koordinator kegiatan Wonderful Sail 2 Indonesia, Wonderful West Kalimantan - 2015, 2016, 2017\r\n3. Pengembangan ekowisata Desa Laman Satong, dalam program #jelajahketapang dan bermitra dengan balai TANAGUPA  - 2018, 2019\r\n4. Penyusunan Kajian Rencana Induk Pembangunan Pariwisata Daerah Kabupaten Ketapang, Bappeda Ketapang - 2018\r\n5. Jelajah Karimata, BKSDA Kalbar - 2019\r\n6. Pendampingan Penetapan Zonasi Kawasan Konservasi Perairan Daerah, DKP Kalimantan Barat – 2019\r\n7. Sinkronisasi Program dan Kegiatan Konservasi Kawasan dan Jenis Seluruh Provinsi di Kalimantan, BPSPL – 2019 \r\n8. Transplantasi terumbu karang di pulau Sawi, Ketapang-Kalimantan Barat – 2020\r\n9. Konservasi Dugong & Lamun, 2020', 'app/profil/1704179942-n2r9N.png', '2024-01-02 00:19:03', '2024-03-20 00:08:54');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `giat`
--
ALTER TABLE `giat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
