-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2019 pada 14.21
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aktualisasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurus`
--

CREATE TABLE `gurus` (
  `kode_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurus`
--

INSERT INTO `gurus` (`kode_guru`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `foto`, `created_at`, `updated_at`) VALUES
('1-AHYADI', 'Drs. AHYADI', '-', '0-0-0', '-', 'ahyadi@gmail.com', '0', NULL, '2019-10-29 14:57:55', '2019-10-29 14:57:55'),
('10-NELY ROSITA AMBARWATI', 'NELY ROSITA AMBARWATI, S.Pd', '-', '0-0-0', '-', 'nelyrositaambarwati@gmail.com', '0', NULL, '2019-10-29 15:10:00', '2019-10-29 15:10:00'),
('11-SILVI ELVIONITA', 'SILVI ELVIONITA, S.Pd', 'KAYU PASAK', '30-6-1992', 'NGUNGUN JORONG KAYU PASAK TIMUR, KANAGARIAN SALAREH AIA\r\nKECAMATAN PALEMBAYAN, KABUPATEN AGAM', 'silvielvionita@gmail.com', '082174503983', '11-SILVI ELVIONITA.jpg', '2019-10-29 15:01:54', '2019-10-30 04:44:01'),
('12-CHERLY DINIATI', 'CHERLY DINIATI, S.Pd', '-', '0-0-0', '-', 'cherlydiniati@gmail.com', '0', NULL, '2019-10-29 22:15:29', '2019-10-29 22:15:29'),
('13-HASMAR NOVITA', 'HASMAR NOVITA, S.Pd', '-', '0-0-0', '-', 'hasmarnovita@gmail.com', '0', NULL, '2019-10-29 15:16:32', '2019-10-29 15:16:32'),
('14-QORIAH F NUR', 'QORI\'AH F NUR, S.Pd', '-', '0-0-0', '-', 'qoriahfnur@gmail.com', '0', NULL, '2019-10-29 15:17:57', '2019-10-29 15:17:57'),
('15-FITRI ENGLA P DEWI', 'FITRI ENGLA P DEWI, S.PdI', '-', '0-0-0', '-', 'fitriengla@gmail.com', '0', NULL, '2019-10-29 15:19:11', '2019-10-29 15:19:11'),
('16-WIRA AGUSRIYENI', 'WIRA AGUSRIYENI, S. Pd', '-', '0-0-0', '-', 'wiraagusriyeni@gmail.com', '0', NULL, '2019-10-29 19:11:31', '2019-10-29 19:11:31'),
('17-AFLAHIL JUHDAINI', 'AFLAHIL JUHDAINI, S. PdI', '-', '0-0-0', '-', 'aflahiljuhdaini@gmail.com', '0', NULL, '2019-10-29 19:12:42', '2019-10-29 19:12:42'),
('18-ELVI PUTRI WENTRI', 'ELVI PUTRI WENTRI, S.Pd', '-', '0-0-0', '-', 'elviputriwentri@gmail.com', '0', NULL, '2019-10-29 19:16:28', '2019-10-29 19:16:28'),
('19-WIDIA GUSMILA', 'WIDIA GUSMILA, S.Pd', '-', '0-0-0', '-', 'widiagusmila@gmail.com', '0', NULL, '2019-10-29 19:18:14', '2019-10-29 19:18:14'),
('2-ERIANTO', 'Drs. ERIANTO, M.Pd', '-', '0-0-0', '-', 'erianto@gmail.com', '0', NULL, '2019-10-29 14:59:06', '2019-10-29 14:59:06'),
('20-IRA PERMATA SARI', 'IRA PERMATA SARI, S.Pd', '-', '0-0-0', '-', 'irapermatasari@gmail.com', '0', NULL, '2019-10-29 19:19:16', '2019-10-29 19:19:16'),
('21-MELIZA EKAWATI', 'MELIZA EKAWATI, S. Pd', '-', '0-0-0', '-', 'melizaekawati@gmail.com', '0', NULL, '2019-10-29 19:20:31', '2019-10-29 19:20:31'),
('22-ZONI AFRIZAL', 'ZONI AFRIZAL, A.Md', '-', '0-0-0', '-', 'zoniafrizal@gmail.com', '0', NULL, '2019-10-29 19:22:09', '2019-10-29 19:22:09'),
('23-MERI NOFRIANTI', 'MERI NOFRIANTI, S.PdI', '-', '0-0-0', '-', 'merinofrianti@gmail.com', '0', NULL, '2019-10-29 19:23:25', '2019-10-29 19:23:25'),
('24-YUSMANELY', 'YUSMANELY, S.PdI', '-', '0-0-0', '-', 'yusmanely@gmail.com', '0', NULL, '2019-10-29 19:25:04', '2019-10-29 19:25:04'),
('25-AKHIRIL MUKMININ', 'AKHIRIL MUKMININ, S.Pd', '-', '0-0-0', '-', 'akhirilmukminin@gmail.com', '0', NULL, '2019-10-29 19:26:14', '2019-10-29 19:26:14'),
('26-YENNI FITRI YENTI', 'YENNI FITRI YENTI, S.Pd', '-', '0-0-0', '-', 'yennifitriyenti@gmail.com', '0', NULL, '2019-10-29 19:27:35', '2019-10-29 19:27:35'),
('27-AFRIZON', 'AFRIZON, S.Kom', '-', '0-0-0', '-', 'afrizon@gmail.com', '0', NULL, '2019-10-29 19:28:50', '2019-10-29 19:28:50'),
('28-WIDIA APRIL MASTUTI', 'WIDIA APRIL MASTUTI, S.Pd', '-', '0-0-0', '-', 'widiaaprilmastuti@gmail.com', '0', NULL, '2019-10-29 19:30:10', '2019-10-29 19:30:10'),
('29-MIMI SUSANTI', 'MIMI SUSANTI, S.Pd', '-', '0-0-0', '-', 'mimisusanti@gmail.com', '0', NULL, '2019-10-29 19:31:17', '2019-10-29 19:31:17'),
('3-RISA ARIF', 'RISA ARIF, S.Pd, M.Pd', '-', '0-0-0', '-', 'risaarif@gmail.com', '0', NULL, '2019-10-29 15:00:20', '2019-10-29 15:00:20'),
('30-WERI EKA PUTRA', 'WERI EKA PUTRA, S.Pd', '-', '0-0-0', '-', 'weriekaputra@gmail.com', '0', NULL, '2019-10-29 19:32:25', '2019-10-29 19:32:25'),
('4-NURAINI', 'NURAINI, S.Pd', '-', '0-0-0', '-', 'nuraini@gmail.com', '0', NULL, '2019-10-29 15:03:03', '2019-10-29 15:03:03'),
('5-SRI ASTUTI', 'SRI ASTUTI, S.Pd', '-', '0-0-0', '-', 'sriastutiC@gmail.com', '0', NULL, '2019-10-29 15:04:08', '2019-10-29 15:04:08'),
('6-YUNIARTI ALFITRI', 'YUNIARTI ALFITRI, S. Pd, Gr', '-', '0-0-0', '-', 'yuniartialfitri@gmail.com', '0', NULL, '2019-10-29 15:05:26', '2019-10-29 15:05:26'),
('7-ASRI YULIATI', 'ASRI YULIATI, S.Pd', '-', '0-0-0', '-', 'asriyuliati@gmail.com', '0', NULL, '2019-10-29 15:06:28', '2019-10-29 15:06:28'),
('8-ELFI DAHNUR', 'ELFI DAHNUR, SE', '-', '0-0-0', '-', 'elfidahnur@gmail.com', '0', NULL, '2019-10-29 15:07:21', '2019-10-29 15:07:21'),
('9-ASRIZAL', 'ASRIZAL, S.Pd', '-', '0-0-0', '-', 'asrizal@gmail.com', '0', NULL, '2019-10-29 15:08:09', '2019-10-29 15:08:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal_sikaps`
--

CREATE TABLE `jurnal_sikaps` (
  `id` int(10) UNSIGNED NOT NULL,
  `catatan_perilaku` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_utama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jurnal_sikaps`
--

INSERT INTO `jurnal_sikaps` (`id`, `catatan_perilaku`, `nilai_utama`, `nis`, `kode_mapel`, `kode_ta`, `created_at`, `updated_at`) VALUES
(2, 'Peserta didik selalu memasuki kelas sebelum pelajaran dimulai dan tidak pernah meninggalkan ruangan kelas selama proses pembelajaran berlangsung tanpa seizin guru', 'Disiplin', '0967', '007-X AKT', 1, '2019-10-30 05:20:49', '2019-10-30 05:20:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kds`
--

CREATE TABLE `kds` (
  `kode_kd` int(10) UNSIGNED NOT NULL,
  `no_kd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kds`
--

INSERT INTO `kds` (`kode_kd`, `no_kd`, `nama_kd`, `kode_guru`, `kode_mapel`, `created_at`, `updated_at`) VALUES
(1, '3.1', 'Memahami Komponen-komponen dan bentuk interaksi dalam ekosistem.', '11-SILVI ELVIONITA', '007-X AKT', '2019-10-29 23:40:47', '2019-10-29 23:40:47'),
(2, '3.2', 'Menganalisis Keseimbangan lingkungan.', '11-SILVI ELVIONITA', '007-X AKT', '2019-10-29 23:41:10', '2019-10-29 23:41:10'),
(3, '3.3', 'Menerapkan prosedur mitigasi bencana alam.', '11-SILVI ELVIONITA', '007-X AKT', '2019-10-29 23:41:47', '2019-10-29 23:41:47'),
(4, '3.4', 'Memahami gejala alam biotik dan abiotik.', '11-SILVI ELVIONITA', '007-X AKT', '2019-10-29 23:42:18', '2019-10-29 23:42:18'),
(5, '3.5', 'Menganalisis materi dan perubahannya', '11-SILVI ELVIONITA', '007-X AKT', '2019-10-29 23:42:45', '2019-10-29 23:42:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `kelas`, `jurusan`, `kode_guru`, `created_at`, `updated_at`) VALUES
('X AKT', 'X AKUNTANSI', 'AKUNTANSI', '11-SILVI ELVIONITA', '2019-10-29 09:53:45', '2019-10-29 09:53:45'),
('XII MLD', 'XII MULTIMEDIA', 'MULTIMEDIA', '29-MIMI SUSANTI', '2019-10-29 19:35:17', '2019-10-29 19:35:17'),
('XII TEI', 'XII TEKNIK ELEKTRONIKA INDUSTRI', 'TEKNIK ELEKTRONIKA INDUSTRI', '24-YUSMANELY', '2019-10-29 19:34:38', '2019-10-29 19:34:38'),
('XII TSP', 'XII TEKNIK SURVEY PEMETAAN', 'TEKNIK SURVEY PEMETAAN', '28-WIDIA APRIL MASTUTI', '2019-10-29 19:33:46', '2019-10-29 19:33:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapelkelas`
--

CREATE TABLE `mapelkelas` (
  `kode_mapel_kelas` int(10) UNSIGNED NOT NULL,
  `kode_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapelkelas`
--

INSERT INTO `mapelkelas` (`kode_mapel_kelas`, `kode_kelas`, `kode_mapel`, `kode_guru`, `created_at`, `updated_at`) VALUES
(1, 'X AKT', '001-X AKT', '10-NELY ROSITA AMBARWATI', '2019-10-29 20:41:56', '2019-10-29 20:41:56'),
(2, 'X AKT', '002-X AKT', '17-AFLAHIL JUHDAINI', '2019-10-29 20:42:26', '2019-10-29 20:42:26'),
(3, 'X AKT', '003-X AKT', '18-ELVI PUTRI WENTRI', '2019-10-29 20:43:21', '2019-10-29 20:43:21'),
(4, 'X AKT', '007-X AKT', '11-SILVI ELVIONITA', '2019-10-29 20:43:45', '2019-10-29 20:43:45'),
(5, 'X AKT', '008-X AKT', '30-WERI EKA PUTRA', '2019-10-29 20:44:13', '2019-10-29 20:44:13'),
(6, 'X AKT', '009-X AKT', '19-WIDIA GUSMILA', '2019-10-29 20:45:02', '2019-10-29 20:45:02'),
(7, 'X AKT', '010-X AKT', '2-ERIANTO', '2019-10-29 20:45:45', '2019-10-29 20:45:45'),
(8, 'X AKT', '011-X AKT', '8-ELFI DAHNUR', '2019-10-29 20:46:16', '2019-10-29 20:46:16'),
(9, 'X AKT', 'O12-X AKT', '16-WIRA AGUSRIYENI', '2019-10-29 20:46:47', '2019-10-29 20:46:47'),
(10, 'X AKT', '013-X AKT', '4-NURAINI', '2019-10-29 20:47:16', '2019-10-29 20:47:16'),
(11, 'X AKT', '014-X AKT', '8-ELFI DAHNUR', '2019-10-29 20:47:40', '2019-10-29 20:47:40'),
(12, 'X AKT', '015-X AKT', '8-ELFI DAHNUR', '2019-10-29 20:48:05', '2019-10-29 20:48:05'),
(13, 'X AKT', '016-X AKT', '8-ELFI DAHNUR', '2019-10-29 20:48:32', '2019-10-29 20:48:32'),
(14, 'XII TEI', '001-XII TEI', '14-QORIAH F NUR', '2019-10-29 22:09:06', '2019-10-29 22:09:06'),
(16, 'XII TEI', '002-XII TEI', '7-ASRI YULIATI', '2019-10-29 22:12:05', '2019-10-29 22:12:05'),
(17, 'XII TEI', '003-XII TEI', '12-CHERLY DINIATI', '2019-10-29 22:16:30', '2019-10-29 22:16:30'),
(18, 'XII TEI', '004-XII TEI', '8-ELFI DAHNUR', '2019-10-29 22:17:03', '2019-10-29 22:17:03'),
(19, 'XII TEI', '005-XII TEI', '11-SILVI ELVIONITA', '2019-10-29 22:17:29', '2019-10-29 22:17:29'),
(20, 'XII TEI', '006-XII TEI', '7-ASRI YULIATI', '2019-10-29 23:24:25', '2019-10-29 23:24:25'),
(21, 'XII TEI', '007-XII TEI', '23-MERI NOFRIANTI', '2019-10-29 23:25:32', '2019-10-29 23:25:32'),
(22, 'XII TEI', '008-XII TEI', '24-YUSMANELY', '2019-10-29 23:27:22', '2019-10-29 23:27:22'),
(23, 'XII TEI', '009-XII TEI', '17-AFLAHIL JUHDAINI', '2019-10-29 23:28:08', '2019-10-29 23:28:08'),
(24, 'XII TEI', '010-XII TEI', '7-ASRI YULIATI', '2019-10-29 23:28:52', '2019-10-29 23:28:52'),
(25, 'XII TEI', '011-XII TEI', '28-WIDIA APRIL MASTUTI', '2019-10-29 23:30:31', '2019-10-29 23:30:31'),
(26, 'XII TEI', '012-XII TEI', '30-WERI EKA PUTRA', '2019-10-29 23:31:39', '2019-10-29 23:31:39'),
(27, 'XII TEI', '013-12 TEI', '11-SILVI ELVIONITA', '2019-10-29 23:32:36', '2019-10-29 23:32:36'),
(28, 'XII TEI', '014-XII TEI', '28-WIDIA APRIL MASTUTI', '2019-10-29 23:33:09', '2019-10-29 23:33:09'),
(29, 'XII TEI', '015-XII TEI', '2-ERIANTO', '2019-10-29 23:34:17', '2019-10-29 23:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapels`
--

CREATE TABLE `mapels` (
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mapels`
--

INSERT INTO `mapels` (`kode_mapel`, `mapel`, `created_at`, `updated_at`) VALUES
('001-X AKT', 'MATEMATIKA AKT X', '2019-10-29 21:14:57', '2019-10-29 21:15:48'),
('001-XII TEI', 'MATEMATIKA TEI XII', '2019-10-29 21:00:45', '2019-10-29 21:54:34'),
('002-X AKT', 'PENDIDIKAN AGAMA ISLAM AKT X', '2019-10-29 19:38:39', '2019-10-29 21:56:33'),
('002-XII TEI', 'PROGRAM PERALATAN SISTEM PENGENDALI ELEKTRONIK BERKAITAN DENGAN I/O BERBANTUAN PLC DAN KOMPUTER', '2019-10-29 21:01:51', '2019-10-29 21:01:51'),
('003-X AKT', 'BAHASA INGGRIS AKT X', '2019-10-29 19:39:14', '2019-10-29 21:56:47'),
('003-XII TEI', 'MENGOPERASIKAN RANGKAIAN ELEKTRONIKA TERAPAN', '2019-10-29 21:02:27', '2019-10-29 21:02:27'),
('004-X AKT', 'SPREADSHEET AKT X', '2019-10-29 19:42:22', '2019-10-29 22:01:24'),
('004-XII TEI', 'KEWIRAUSAHAAN TEI XII', '2019-10-29 21:02:56', '2019-10-29 21:58:07'),
('005-X AKT', 'SISTEM DIGITAL AKT X', '2019-10-29 19:53:05', '2019-10-29 21:58:33'),
('005-XII TEI', 'ILMU PENGETAHUAN ALAM TEI XII', '2019-10-29 21:03:15', '2019-10-29 21:58:46'),
('006-X AKT', 'SEJARAH INDONESIA AKT X', '2019-10-29 20:35:13', '2019-10-29 21:59:02'),
('006-XII TEI', 'PROGRAM PERALATAN SISTEM PENGENDALI ELEKTRONIK BERKAITAN DENGAN I/O BERBANTUAN MIKROPROSESOR DAN MIKROKONTROLER', '2019-10-29 21:04:20', '2019-10-29 21:04:20'),
('007-X AKT', 'ILMU PENGETAHUAN ALAM AKT X', '2019-10-29 20:35:35', '2019-10-29 21:59:55'),
('007-XII TEI', 'PENDIDIKAN ALQURAN TEI XII', '2019-10-29 21:04:43', '2019-10-29 22:01:45'),
('008-X AKT', 'PENDIDIKAN JASMANI AKT X', '2019-10-29 20:35:57', '2019-10-29 22:00:22'),
('008-XII TEI', 'KIMIA TEI XII', '2019-10-29 21:05:02', '2019-10-29 22:00:47'),
('009-X AKT', 'SENI BUDAYA AKT X', '2019-10-29 20:36:40', '2019-10-29 22:01:03'),
('009-XII TEI', 'PENDIDIKAN AGAMA ISLAM TEI XII', '2019-10-29 21:05:17', '2019-10-29 22:02:05'),
('010-X AKT', 'BAHASA INDONESIA AKT X', '2019-10-29 20:37:51', '2019-10-29 22:02:26'),
('010-XII TEI', 'PERAKITAN PERALATAN DAN PERANGKAT ELEKTRONIK SISTEM OTOMASI ELEKTRONIKA', '2019-10-29 21:06:04', '2019-10-29 21:06:04'),
('011-X AKT', 'AKUNTANSI DASAR', '2019-10-29 20:38:12', '2019-10-29 20:38:12'),
('011-XII TEI', 'BAHASA INGGRIS TEI XII', '2019-10-29 21:06:27', '2019-10-29 22:02:45'),
('012-XII TEI', 'PENDIDIKAN JASMANI TEI XII', '2019-10-29 21:06:46', '2019-10-29 22:03:26'),
('013-12 TEI', 'FISIKA TEI XII', '2019-10-29 21:07:00', '2019-10-29 22:03:41'),
('013-X AKT', 'ETIKA PROFESI', '2019-10-29 20:39:03', '2019-10-29 20:39:03'),
('014-X AKT', 'PERBANKAN DASAR', '2019-10-29 20:39:33', '2019-10-29 20:39:33'),
('014-XII TEI', 'KKPI TEI XII', '2019-10-29 21:07:14', '2019-10-29 22:06:36'),
('015-X AKT', 'ADMINISTRASI UMUM', '2019-10-29 20:40:29', '2019-10-29 20:40:29'),
('015-XII TEI', 'BAHASA INDONESIA TEI XII', '2019-10-29 21:07:31', '2019-10-29 22:06:51'),
('016 XII TEI', 'PERAKIT PERALATAN DAN PERANGKAT ELEKTRONIK SISTEM PENGENDALI ELEKTRONIKA', '2019-10-29 21:08:09', '2019-10-29 21:08:09'),
('016-X AKT', 'EKONOMI BISNIS', '2019-10-29 20:41:02', '2019-10-29 20:41:02'),
('017-XII TEI', 'PENDIDIKAN KEWARGANEGARAAN TEI XII', '2019-10-29 21:08:23', '2019-10-29 22:07:09'),
('O12-X AKT', 'PENDIDIKAN KEWARGANEGARAAN AKT X', '2019-10-29 20:38:39', '2019-10-29 22:07:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_10_04_131340_create_gurus_table', 1),
(3, '2019_10_04_133247_create_mapels_table', 1),
(4, '2019_10_04_133629_create_kelas_table', 1),
(5, '2019_10_05_045701_create_tas_table', 1),
(6, '2019_10_05_134153_create_siswas_table', 1),
(7, '2019_10_06_132721_create_mapelkelas_table', 1),
(8, '2019_10_10_065217_create_kds_table', 1),
(9, '2019_10_13_033423_add_foto_to_gurus_table', 1),
(10, '2019_10_13_055214_create_nilai_pengetahuans_table', 1),
(11, '2019_10_15_013715_create_nilai_ujians_table', 1),
(12, '2019_10_15_052609_create_nilai_keterampilans_table', 1),
(13, '2019_10_15_110455_create_jurnal_sikaps_table', 1),
(14, '2019_10_15_120137_add_kode_ta_to_jurnal_sikaps_table', 1),
(15, '2019_10_15_163943_create_penilaian_karakters_table', 1),
(16, '2019_10_26_080849_add_foto_to_siswas_table', 1),
(17, '2019_10_28_020642_create_posts_table', 1),
(18, '2019_10_28_030509_add_kode_guru_to_posts_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_keterampilans`
--

CREATE TABLE `nilai_keterampilans` (
  `id` int(10) UNSIGNED NOT NULL,
  `praktik_1` int(11) DEFAULT NULL,
  `praktik_2` int(11) DEFAULT NULL,
  `praktik_3` int(11) DEFAULT NULL,
  `praktik_4` int(11) DEFAULT NULL,
  `praktik_5` int(11) DEFAULT NULL,
  `produk` int(11) DEFAULT NULL,
  `proyek` int(11) DEFAULT NULL,
  `kode_kd` int(11) NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_keterampilans`
--

INSERT INTO `nilai_keterampilans` (`id`, `praktik_1`, `praktik_2`, `praktik_3`, `praktik_4`, `praktik_5`, `produk`, `proyek`, `kode_kd`, `nis`, `kode_mapel`, `kode_ta`, `created_at`, `updated_at`) VALUES
(1, 86, 90, 78, 75, 90, 90, 85, 1, '0967', '007-X AKT', 1, '2019-10-30 05:05:07', '2019-10-30 05:06:41'),
(2, 90, NULL, NULL, NULL, NULL, 86, 80, 2, '0967', '007-X AKT', 1, '2019-10-30 05:07:12', '2019-10-30 05:07:43'),
(3, 90, 77, NULL, NULL, NULL, 80, 85, 3, '0967', '007-X AKT', 1, '2019-10-30 05:08:13', '2019-10-30 05:08:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_pengetahuans`
--

CREATE TABLE `nilai_pengetahuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tugas_1` int(11) DEFAULT NULL,
  `tugas_2` int(11) DEFAULT NULL,
  `tugas_3` int(11) DEFAULT NULL,
  `tugas_4` int(11) DEFAULT NULL,
  `kuis_1` int(11) DEFAULT NULL,
  `kuis_2` int(11) DEFAULT NULL,
  `kuis_3` int(11) DEFAULT NULL,
  `pengamatan` int(11) DEFAULT NULL,
  `uh` int(11) DEFAULT NULL,
  `uh_remedial` int(11) DEFAULT NULL,
  `kode_kd` int(11) NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_pengetahuans`
--

INSERT INTO `nilai_pengetahuans` (`id`, `tugas_1`, `tugas_2`, `tugas_3`, `tugas_4`, `kuis_1`, `kuis_2`, `kuis_3`, `pengamatan`, `uh`, `uh_remedial`, `kode_kd`, `nis`, `kode_mapel`, `kode_ta`, `created_at`, `updated_at`) VALUES
(1, 95, 96, 85, 95, 95, 85, 88, 80, 90, NULL, 1, '0967', '007-X AKT', 1, '2019-10-29 23:44:18', '2019-10-30 00:13:35'),
(2, 88, 87, 96, 90, 82, 88, 95, 80, 75, NULL, 2, '0967', '007-X AKT', 1, '2019-10-30 00:14:08', '2019-10-30 00:16:13'),
(3, 87, 78, 86, 80, 85, 75, 90, 80, 50, 100, 3, '0967', '007-X AKT', 1, '2019-10-30 03:46:04', '2019-10-30 04:54:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_ujians`
--

CREATE TABLE `nilai_ujians` (
  `id` int(10) UNSIGNED NOT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `ket` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nilai_ujians`
--

INSERT INTO `nilai_ujians` (`id`, `uts`, `uas`, `ket`, `nis`, `kode_mapel`, `kode_ta`, `created_at`, `updated_at`) VALUES
(1, 95, 95, 'P', '0967', '007-X AKT', 1, '2019-10-30 00:13:52', '2019-10-30 04:51:01'),
(2, 85, 90, 'K', '0967', '007-X AKT', 1, '2019-10-30 05:07:54', '2019-10-30 05:08:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_karakters`
--

CREATE TABLE `penilaian_karakters` (
  `id` int(10) UNSIGNED NOT NULL,
  `kemandirian` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inisiatif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kerjasama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tang_jawab` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kejujuran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gemar_membaca` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menghargai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komunikatif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemimpinan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_mapel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penilaian_karakters`
--

INSERT INTO `penilaian_karakters` (`id`, `kemandirian`, `inisiatif`, `kerjasama`, `tang_jawab`, `kejujuran`, `gemar_membaca`, `menghargai`, `komunikatif`, `kepemimpinan`, `ket`, `nis`, `kode_mapel`, `created_at`, `updated_at`) VALUES
(1, 'Peserta didik mampu menyelesaikan tugas-tugas yang diberikan secara mandiri', 'Peserta didik memiliki inisiatif untuk menanyakan materi yang belum dipahaminya tanpa diminta guru', 'Peserta didik mampu bekerjasama dengan teman sekolompoknya untuk memecahkan masalah yang diberikan', 'Peserta didik selalu mengumpulkan tugas-tugasnya tepat waktu', 'Peserta didik tidak mencontek saat ujian', 'Peserta didik mau mencari informasi di buku paket dan sumber lain untuk memecahkan masalah', 'Peserta didik selalu memperhatikan saat guru menjelaskan', 'Peserta didik mampu menyampaikan gagasannya dengan baik', '-', '-', '0967', '001-X AKT', '2019-10-30 05:32:02', '2019-10-30 05:32:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_guru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `isi`, `kode_guru`, `kode_kelas`, `created_at`, `updated_at`) VALUES
(1, 'GOTONG ROYONG', 'Diumumkan kepada seluruh peserta didik jurusan Akuntansi SMK Negeri 1 Ampek Nagari\r\nBesok tanggal 2 Oktober 2019 kita gotong royong membersihkan labor Akuntansi\r\nJam 8.00-10.00 WIB. Peserta didik harap telah berkumpul di depan labor jam 7.45 WIB', '11-SILVI ELVIONITA', 'X AKT', '2019-10-30 03:49:01', '2019-10-30 03:49:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `nis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `kode_kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `foto`, `kode_kelas`, `created_at`, `updated_at`) VALUES
('0967', 'DILA FATMAWATI', '-', '0-0-0', '-', 'dilafatmawati@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:41:00', '2019-10-29 14:41:00'),
('0968', 'AMELIA CITRA', '-', '0-0-0', '-', 'ameliacitra@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:42:26', '2019-10-29 14:42:26'),
('0969', 'ELA SUPIYA', '-', '0-0-0', '-', 'elasupiya@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:43:33', '2019-10-29 14:43:33'),
('0970', 'ELISA PUTRI SITORUS', '-', '0-0-0', '-', 'elisaputrisitorus@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:44:22', '2019-10-29 14:44:22'),
('0971', 'FEBRI YANTI', '-', '0-0-0', '-', 'febriyanti@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:45:19', '2019-10-29 14:45:54'),
('0972', 'JENI PARLIMAN SARI', '-', '00-00-00', '-', 'jeniparlimansari@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:46:56', '2019-10-29 14:46:56'),
('0973', 'MAHARANI SYAFRINA', '-', '0-0-0', '-', 'maharanisyafrina@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:47:48', '2019-10-29 14:47:48'),
('0974', 'MARDHA TILLA', '-', '00-00-00', '-', 'mardhatilla@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:48:43', '2019-10-29 14:48:43'),
('0975', 'MARIANI SIANIPAR', '-', '00-00-00', '-', 'marianisianipar@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:49:54', '2019-10-29 14:49:54'),
('0976', 'MUHAMMAD RIFALDI', '-', '0-0-0', '-', 'muhammadrifaldi@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:51:00', '2019-10-29 14:51:00'),
('0977', 'MUTIARA PUTRI INDAH', '-', '0-0-0', '-', 'mutiaraputriindah@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:51:55', '2019-10-29 14:51:55'),
('0979', 'PENI RAMADHAN', '-', '0-0-0', '-', 'peniramadhan@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:53:03', '2019-10-29 14:53:03'),
('0980', 'PIKA MAISARI', '-', '0-0-0', '-', 'pikamaisari@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:53:46', '2019-10-29 14:53:46'),
('0981', 'RAHMAD', '-', '0-0-0', '-', 'rahmad@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:54:38', '2019-10-29 14:54:38'),
('0982', 'SESYIRIA FRANSISKA', '-', '0-0-0', '-', 'sesyiriafransiska@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:55:51', '2019-10-29 14:55:51'),
('0983', 'SUMIATI SITORUS', '-', '0-0-0', '-', 'sumiatisitorus@gmail.com', '0', NULL, 'X AKT', '2019-10-29 14:56:40', '2019-10-29 14:56:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tas`
--

CREATE TABLE `tas` (
  `kode_ta` int(10) UNSIGNED NOT NULL,
  `ta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tas`
--

INSERT INTO `tas` (`kode_ta`, `ta`, `created_at`, `updated_at`) VALUES
(1, '2019/2020', '2019-10-28 15:07:52', '2019-10-28 15:07:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', '$2y$10$SHG.pXeNdwJnbizl4.2dr.qGmQOEbFRgsWHysVGHOrMbyjYftudRW', 'admin', 'mqqR1Or2QCN9GRz6P2QMrQiUrmcrHQIjoFJurPnGTwjIVhCjVDPPARAU28jA', '2019-10-28 15:06:58', '2019-10-28 15:06:58'),
(3, 'DILA FATMAWATI', '0967', '$2y$10$.SaZzgT6KC1VJ5KPNGUDJ.ADmwwq1NhZS8y.cKkH6WwyfaqmeLzBm', 'siswa', 'yWhf3d8Rf8GN706yiL7pJgp1YV8hodPBGgOdCwWT8PlYtZraGOMT6R8MB0xo', '2019-10-29 14:41:00', '2019-10-29 14:41:00'),
(4, 'AMELIA CITRA', '0968', '$2y$10$xek6En6Q3gfuZfxMp7RlT.BFAUgrgRorvT6Qh2JLU2vBQfVGE5lIu', 'siswa', NULL, '2019-10-29 14:42:26', '2019-10-29 14:42:26'),
(5, 'ELA SUPIYA', '0969', '$2y$10$LZSTtO3OwgryRSqPxKWnVuPPLQ7UBBAQIzedxKNXEiUosoIAB54FO', 'siswa', NULL, '2019-10-29 14:43:33', '2019-10-29 14:43:33'),
(6, 'ELISA PUTRI SITORUS', '0970', '$2y$10$oNAFyJ7r/sm0K0QalH/LmemjZyOieEVgHwoMpHfHj6WsKuNCRyChO', 'siswa', NULL, '2019-10-29 14:44:23', '2019-10-29 14:44:23'),
(7, 'FEBRI YANTI', '0971', '$2y$10$mCBSLCirQBiz7sDP3kW1DeAcb1xICWivOL.ZuCHEmuQ.Jzpvdil92', 'siswa', NULL, '2019-10-29 14:45:19', '2019-10-29 14:45:54'),
(8, 'JENI PARLIMAN SARI', '0972', '$2y$10$pd.E7dO8LQ94HJ8jE43jiO5nsSTJRrnL7W7Hs8H7Q84nbhU2QRkxa', 'siswa', NULL, '2019-10-29 14:46:56', '2019-10-29 14:46:56'),
(9, 'MAHARANI SYAFRINA', '0973', '$2y$10$rvaGuzUu/ZvM3Nw9UB/tg.w/Fw7jTAjsCc3B9DC0AQihejk2ad37O', 'siswa', NULL, '2019-10-29 14:47:48', '2019-10-29 14:47:48'),
(10, 'MARDHA TILLA', '0974', '$2y$10$0RkqmZY5Mue6GMlRD6fJHO.2lzyT8VPuQqudDC2B6aWSoXSJFS2NS', 'siswa', NULL, '2019-10-29 14:48:44', '2019-10-29 14:48:44'),
(11, 'MARIANI SIANIPAR', '0975', '$2y$10$XcLr0DX6jkKoVL45Mb6I0ezgPZ9iyIBjpar0u/I29foam5sgnlK.q', 'siswa', NULL, '2019-10-29 14:49:54', '2019-10-29 14:49:54'),
(12, 'MUHAMMAD RIFALDI', '0976', '$2y$10$CGoSNcxZ4h2WR.XFCXU7YeCpHpdcAV5KvKi4o8g8LkLz5WSrFo3hu', 'siswa', NULL, '2019-10-29 14:51:00', '2019-10-29 14:51:00'),
(13, 'MUTIARA PUTRI INDAH', '0977', '$2y$10$.Hi7gZ69GgulLcg55FxRUu6GCSul2bdUdqqSGD8tU3JlS.o0Q.rOK', 'siswa', NULL, '2019-10-29 14:51:55', '2019-10-29 14:51:55'),
(14, 'PENI RAMADHAN', '0979', '$2y$10$SiThGhCwJGL/gWQBJYlaPuoJODOjaHS2GS230MKkrmeldkWNFdyMq', 'siswa', NULL, '2019-10-29 14:53:03', '2019-10-29 14:53:03'),
(15, 'PIKA MAISARI', '0980', '$2y$10$2GklXEP00OFeMdDQkGm6jeaQyA/xkpcibraeNUVhg4pgCwWue85Za', 'siswa', NULL, '2019-10-29 14:53:46', '2019-10-29 14:53:46'),
(16, 'RAHMAD', '0981', '$2y$10$FhdPwSjkLm2qOVhfetUu5.Xeo0xpOIAJeB9xaHOwU390EkigqigYK', 'siswa', NULL, '2019-10-29 14:54:38', '2019-10-29 14:54:38'),
(17, 'SESYIRIA FRANSISKA', '0982', '$2y$10$Af3I9mHIqdVyDBjFIHKUvuTb.EOikL08oOQi7J134hwrJTTaH4no6', 'siswa', NULL, '2019-10-29 14:55:52', '2019-10-29 14:55:52'),
(18, 'SUMIATI SITORUS', '0983', '$2y$10$X1cLBf/J0JtHlqQEBjbT1.kqcNjHtHmir1R2WeP9kFBwxp6n5SWW2', 'siswa', NULL, '2019-10-29 14:56:40', '2019-10-29 14:56:40'),
(19, 'Drs. AHYADI', '1-AHYADI', '$2y$10$stJeUZWv4ZrdNmhR.54lK.uqPJLoG0P2eDC1ixEZSB8SlIi0xwJ4W', 'guru', NULL, '2019-10-29 14:57:55', '2019-10-29 14:57:55'),
(20, 'Drs. ERIANTO, M.Pd', '2-ERIANTO', '$2y$10$pZEz1VhIe9nr/kqKaN1aw.0sN.cZnN8zRkpsBXC7uRkUjV9bHXHWq', 'guru', NULL, '2019-10-29 14:59:06', '2019-10-29 14:59:06'),
(21, 'RISA ARIF, S.Pd, M.Pd', '3-RISA ARIF', '$2y$10$H44LX5zxRDLgSfh8csM4t.4n2oGSScDpCguQRxCRX4UJSncm4X2Na', 'guru', NULL, '2019-10-29 15:00:20', '2019-10-29 15:00:20'),
(22, 'SILVI ELVIONITA, S.Pd', '11-SILVI ELVIONITA', '$2y$10$75B3TZUWzHb1.g26j0XRMO9WmtwMhptbeWQlurIqzeFCYvb5kF4.y', 'guru', 'BjZ57j7I8VKegyZaKJufmrb4iTlHJzPF1LmLO0raAkSH0rI3oDzNPyT7NpJX', '2019-10-29 15:01:55', '2019-10-29 15:01:55'),
(23, 'NURAINI, S.Pd', '4-NURAINI', '$2y$10$UWjo7LX3IqNNZIb7wYPp4.SFhbr.FiriMPQz86c.TmcSpOBuUci/S', 'guru', NULL, '2019-10-29 15:03:04', '2019-10-29 15:03:04'),
(24, 'SRI ASTUTI, S.Pd', '5-SRI ASTUTI', '$2y$10$Ohfsh.KfQBh/CzEg2.6sPuT/fTb1eT6aLBdyixMZij3mlnNuEQ0vi', 'guru', NULL, '2019-10-29 15:04:09', '2019-10-29 15:04:09'),
(25, 'YUNIARTI ALFITRI, S. Pd, Gr', '6-YUNIARTI ALFITRI', '$2y$10$yX.SbIcjFdeydyN7uZk6wOjpatXp3OIT7BXkY7Lz8M6ui6fsbvDZ.', 'guru', NULL, '2019-10-29 15:05:26', '2019-10-29 15:05:26'),
(26, 'ASRI YULIATI, S.Pd', '7-ASRI YULIATI', '$2y$10$qSKacfo4JDeAyTCOeHYJjeklpm3ETA3Vif0wrrHM3cwIy0iBGX/.m', 'guru', NULL, '2019-10-29 15:06:28', '2019-10-29 15:06:28'),
(27, 'ELFI DAHNUR, SE', '8-ELFI DAHNUR', '$2y$10$z/0/Nhfxia1TyeOfdycYSe7/VQjb6K2ln1XdxAvt9VTM2veBpevhe', 'guru', NULL, '2019-10-29 15:07:22', '2019-10-29 15:07:22'),
(28, 'ASRIZAL, S.Pd', '9-ASRIZAL', '$2y$10$vbJn9S04nIQyYQLBaqHz7OBL12yHNV7w/MAa.qbHzZu9iQ0qY7gQe', 'guru', NULL, '2019-10-29 15:08:09', '2019-10-29 15:08:09'),
(29, 'NELY ROSITA AMBARWATI, S.Pd', '10-NELY ROSITA AMBARWATI', '$2y$10$461B57Ptg9Qip/7Y9SLe4.iMsJyKO752mT4hG.uQtK0EX6gUwX/eW', 'guru', NULL, '2019-10-29 15:10:00', '2019-10-29 15:10:00'),
(30, 'HASMAR NOVITA, S.Pd', '13-HASMAR NOVITA', '$2y$10$XfMVrT1y1g4XWvJbQhr.6ecRXYsZFfIXaN0tneJjkjeU0pN37a6Eu', 'guru', NULL, '2019-10-29 15:16:33', '2019-10-29 15:16:33'),
(31, 'QORI\'AH F NUR, S.Pd', '14-QORIAH F NUR', '$2y$10$rUbGbwilkXGAZ3hB5xJawutkz0a0xS3p7SBVTaEYCMjNgvQGTCKZK', 'guru', NULL, '2019-10-29 15:17:58', '2019-10-29 15:17:58'),
(32, 'FITRI ENGLA P DEWI, S.PdI', '15-FITRI ENGLA P DEWI', '$2y$10$I7MqAYzDpgVUiDgPBsEmWepC5DSlMb9krAW7OguGboeVgaCtw.ZBK', 'guru', NULL, '2019-10-29 15:19:12', '2019-10-29 15:19:12'),
(33, 'WIRA AGUSRIYENI, S. Pd', '16-WIRA AGUSRIYENI', '$2y$10$fX4/H/jXu5jNFLUEId9T7.iCWB8/SPThGzd/8GZng1x98YiIizHKa', 'guru', NULL, '2019-10-29 19:11:31', '2019-10-29 19:11:31'),
(34, 'AFLAHIL JUHDAINI, S. PdI', '17-AFLAHIL JUHDAINI', '$2y$10$FgvXYTC5pjnI2ptN5WijWeOva0270WkakC5i0hDP8rqW5.fL9XcTe', 'guru', NULL, '2019-10-29 19:12:42', '2019-10-29 19:12:42'),
(35, 'ELVI PUTRI WENTRI, S.Pd', '18-ELVI PUTRI WENTRI', '$2y$10$ME.5ZzXwkBUzYbMsjklkEe3NA00xQym0uybKdL5vh2sKDhzN.z3lO', 'guru', NULL, '2019-10-29 19:16:28', '2019-10-29 19:16:28'),
(36, 'WIDIA GUSMILA, S.Pd', '19-WIDIA GUSMILA', '$2y$10$B3wTlz0fAcLKmnN1JlgVg.PreRX38hlhv0dEoXFFKeBCnRgC6IdL2', 'guru', NULL, '2019-10-29 19:18:14', '2019-10-29 19:18:14'),
(37, 'IRA PERMATA SARI, S.Pd', '20-IRA PERMATA SARI', '$2y$10$kiZxaHDBUe4Nte4dUBGjLezAIKvYZQ4m/2T8glzMbVxf003flEUAW', 'guru', NULL, '2019-10-29 19:19:16', '2019-10-29 19:19:16'),
(38, 'MELIZA EKAWATI, S. Pd', '21-MELIZA EKAWATI', '$2y$10$0FKNjbsQCwvjbbGAYAdzv.U9WLKnkZjRQt6iWXvI6MFlc8dOYCr5K', 'guru', NULL, '2019-10-29 19:20:31', '2019-10-29 19:20:31'),
(39, 'ZONI AFRIZAL, A.Md', '22-ZONI AFRIZAL', '$2y$10$y7ysjwmowBtf3vPULrN59.t3P4jdbxrx0Idv7sBMcAc7azfY5n0Oi', 'guru', NULL, '2019-10-29 19:22:10', '2019-10-29 19:22:10'),
(40, 'MERI NOFRIANTI, S.PdI', '23-MERI NOFRIANTI', '$2y$10$fzNu18pv9ecNOcC7H4ZgquZc68aqzJEW5F6HfPAcjMoBOZ/jb3ADq', 'guru', NULL, '2019-10-29 19:23:25', '2019-10-29 19:23:25'),
(41, 'YUSMANELY, S.PdI', '24-YUSMANELY', '$2y$10$tr.vDb9srrFpL2/J6Wil.eWVkny4WKEtxo2OYhVvSr6vKrdGnUBMy', 'guru', NULL, '2019-10-29 19:25:05', '2019-10-29 19:25:05'),
(42, 'AKHIRIL MUKMININ, S.Pd', '25-AKHIRIL MUKMININ', '$2y$10$WbNxhgm7c1e9t6ZoOqtzIO6Hz0/uCiSw0gQvJ.om1M5ENlvm.DOxy', 'guru', NULL, '2019-10-29 19:26:14', '2019-10-29 19:26:14'),
(43, 'YENNI FITRI YENTI, S.Pd', '26-YENNI FITRI YENTI', '$2y$10$bSrnWO/FryipqAhA/BxLcuuDoTpo3wlI7vO2KlRqJUaoaRcxrIkyW', 'guru', NULL, '2019-10-29 19:27:35', '2019-10-29 19:27:35'),
(44, 'AFRIZON, S.Kom', '27-AFRIZON', '$2y$10$qHJWjTGNnte24e4poN/hT.V32Ph4lUu194AL2GKXfmPOmrs5dXwtm', 'guru', NULL, '2019-10-29 19:28:50', '2019-10-29 19:28:50'),
(45, 'WIDIA APRIL MASTUTI, S.Pd', '28-WIDIA APRIL MASTUTI', '$2y$10$1uZSmgcwk4PRKww/fkWav.3U0qZiD6gBANbh0Q7eaQ3tFG/iu.Fx6', 'guru', NULL, '2019-10-29 19:30:11', '2019-10-29 19:30:11'),
(46, 'MIMI SUSANTI, S.Pd', '29-MIMI SUSANTI', '$2y$10$0pDR1wwOazMnj80NVdsNC.apoT47WfqbJMJmirbQhA5lrj89ycAey', 'guru', NULL, '2019-10-29 19:31:17', '2019-10-29 19:31:17'),
(47, 'WERI EKA PUTRA, S.Pd', '30-WERI EKA PUTRA', '$2y$10$WFFoNtnJHAj/.XKl/1l6Qu2RbguXou5Y7Z9OvuexFpCIAATowxloa', 'guru', NULL, '2019-10-29 19:32:25', '2019-10-29 19:32:25'),
(48, 'CHERLY DINIATI, S.Pd', '12-CHERLY DINIATI', '$2y$10$dxAQDjAHNTVsWnZv1hc7DeYk1ZXcX8aU7HOHz08TilFaxZTxHg/sm', 'guru', NULL, '2019-10-29 22:15:29', '2019-10-29 22:15:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gurus`
--
ALTER TABLE `gurus`
  ADD PRIMARY KEY (`kode_guru`),
  ADD UNIQUE KEY `gurus_email_unique` (`email`);

--
-- Indeks untuk tabel `jurnal_sikaps`
--
ALTER TABLE `jurnal_sikaps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kds`
--
ALTER TABLE `kds`
  ADD PRIMARY KEY (`kode_kd`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indeks untuk tabel `mapelkelas`
--
ALTER TABLE `mapelkelas`
  ADD PRIMARY KEY (`kode_mapel_kelas`);

--
-- Indeks untuk tabel `mapels`
--
ALTER TABLE `mapels`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_keterampilans`
--
ALTER TABLE `nilai_keterampilans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_pengetahuans`
--
ALTER TABLE `nilai_pengetahuans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_ujians`
--
ALTER TABLE `nilai_ujians`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian_karakters`
--
ALTER TABLE `penilaian_karakters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tas`
--
ALTER TABLE `tas`
  ADD PRIMARY KEY (`kode_ta`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurnal_sikaps`
--
ALTER TABLE `jurnal_sikaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kds`
--
ALTER TABLE `kds`
  MODIFY `kode_kd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mapelkelas`
--
ALTER TABLE `mapelkelas`
  MODIFY `kode_mapel_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `nilai_keterampilans`
--
ALTER TABLE `nilai_keterampilans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilai_pengetahuans`
--
ALTER TABLE `nilai_pengetahuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `nilai_ujians`
--
ALTER TABLE `nilai_ujians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penilaian_karakters`
--
ALTER TABLE `penilaian_karakters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tas`
--
ALTER TABLE `tas`
  MODIFY `kode_ta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
