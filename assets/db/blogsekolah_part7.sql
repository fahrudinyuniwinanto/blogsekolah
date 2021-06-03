-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2020 at 10:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL,
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `deskripsi`, `img`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `add_1`, `add_2`, `note`) VALUES
(1, 'Penerimaan Mahasiswa PPL UNTIDAR 2019', 'Penerimaan mahasiswa PPL dari Universitas Tidar Magelang/UNTIDAR selama 50 Hari/1 Bulan 14 hari yang bertempat PPL di SMAN 5 Magelang dengan mahasiswa bidang studi Pendidikan Bahasa dan Sastra Inggris.', 'PPL 2019', 'berita_1571706260.JPG', '2019-08-18 20:36:11', 'dev', '2019-10-22 06:34:20', 'admin', 1, '', '', ''),
(2, 'Pembinaan Pelajar Pelopor Keselamatan Lalu Lintas SMA/SMK Se Kota Magelang', 'Pembinaan pelajar pelopor keselamatan berlalu lintas dalam berkendara terutama pada siswa-siswi SMAN 5 Magelang, dan mematuli/ taat kepada peraturan dalam berkendara dari Polantas Kota Magelang.', 'Sosialisasi', 'berita_1571705683.JPG', '2019-08-19 19:16:09', 'dev', '2019-10-22 06:24:43', 'admin', 1, '', '', ''),
(3, 'ULANG TAHUN SMAN 5 MAGELANG KE 29', 'merayakan hari ulang tahun sman 5 magelang dengan berbagai kegiatan, pentas seni, band guru dan guest star klenik genk dan trisuaka.', 'ULTAH SMAN 5 MAGELANG', 'berita_1571618983.JPG', '2019-08-31 20:51:43', 'dev', '2019-10-21 06:19:45', 'admin', 1, '', '', ''),
(4, 'Pendampingan Sekolah Sasaran Model Fasilitasi Peningkatan Mutu Pendidikan Berbasis Rapor Mutu', 'Pendampingan sekolah sasaran model fasilitasi peningkatan mutu pendidikan berbasis rapor mutu tahun 2019 oleh LPMP Jawa Tengah  dan diikuti oleh guru mapel SMAN 5 Magelang selama 2 kali pertemuan pada tanggal 2 September 2019', '-', 'berita_1571705978.JPG', '2019-08-18 20:36:11', 'dev', '2019-10-22 06:29:38', 'admin', 1, '', '', ''),
(5, 'Sosialisasi dari Kejaksaan Kota Magelang Tahun 2019', 'Sosialisasi dan pembina upacara dari kejaksaan kota Magelang terkait dengan hukum dan pelanggaran hukum', '-', 'berita_1571704714.JPG', '2019-09-29 08:52:04', 'dev', '2019-10-22 06:08:34', 'admin', 1, '', '', ''),
(6, 'Pembina Upacara Dari Babin Kantibmas Magelang Utara', 'Pembina upacara dari Babinkantibmas Kelurahan Kedungsari Magelang Utara pada hari senin 14 Oktober 2019 beserta jajaranya untuk pengenalan dan ketertiban bermasyarakat.', '-', 'berita_1571707632.JPG', '2019-10-22 06:57:12', 'admin', '0000-00-00 00:00:00', '', 1, '', '', ''),
(7, 'Jumat Bersih', 'Kegiatan pada hari jumat bersih yang dilakukan oleh siswa-siswi, guru dan karyawan pada waktu pagi hari terutama hari jumat.', 'Jumat Bersih dan Sehat', 'berita_1571708334.JPG', '2019-10-22 07:08:54', 'admin', '0000-00-00 00:00:00', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `note` text NOT NULL,
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar`, `judul`, `deskripsi`, `note`, `add_1`, `add_2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`) VALUES
(1, 'galeri_1571704536.JPG', 'Paspama', 'Upacara HUT RI 74 Smanla', '', '', '', '2019-10-03 19:31:00', 'dev', '2019-10-22 06:05:36', 'admin', 1),
(2, 'galeri_1571704471.JPG', 'HUT SMANLA', 'perayaan hari ulang tahun SMAN 5 Magelang Ke 29', '', '', '', '2019-10-03 19:32:42', 'dev', '2019-10-22 06:04:31', 'admin', 1),
(3, 'galeri_1571704562.jpg', 'Guru Karyawan', 'Keluarga Besar SMAN 5 Magelang', '', '', '', '2019-10-22 06:06:02', 'admin', '0000-00-00 00:00:00', '', 1),
(4, 'galeri_1571707957.jpg', 'Hari Kartini', 'Perayaan Hari Kartini SMAN 5 Magelang Tahun 2019', '', '', '', '2019-10-22 07:02:37', 'admin', '0000-00-00 00:00:00', '', 1),
(5, 'galeri_1571707982.jpg', 'Tari Dayaan/Topeng Ireng', 'Perayaan Hari Kartini SMAN 5 Magelang Tahun 2019', '', '', '', '2019-10-22 07:03:02', 'admin', '0000-00-00 00:00:00', '', 1),
(6, 'galeri_1571708014.JPG', 'Guest Star Trisuaka', 'ULTAH SMAN 5 MAGELANG', '', '', '', '2019-10-22 07:03:34', 'admin', '0000-00-00 00:00:00', '', 1),
(7, 'galeri_1571708034.JPG', 'Band Guru', 'ULTAH SMAN 5 MAGELANG', '', '', '', '2019-10-22 07:03:54', 'admin', '0000-00-00 00:00:00', '', 1),
(8, 'galeri_1571708063.JPG', 'Penyerahaan Santunan Yatim Piatu', 'ULTAH SMAN 5 MAGELANG', '', '', '', '2019-10-22 07:04:23', 'admin', '0000-00-00 00:00:00', '', 1),
(9, 'galeri_1571708103.JPG', 'Osis Smanla', 'Peringatan HUT RI 74 Smanla', '', '', '', '2019-10-22 07:05:03', 'admin', '0000-00-00 00:00:00', '', 1),
(10, 'galeri_1571708121.JPG', 'Paspama', 'Upacara HUT RI 74 Smanla', '', '', '', '2019-10-22 07:05:21', 'admin', '0000-00-00 00:00:00', '', 1),
(11, 'galeri_1571708151.JPG', 'Juara', 'SMANLA BISA', '', '', '', '2019-10-22 07:05:51', 'admin', '0000-00-00 00:00:00', '', 1),
(12, 'galeri_1571708201.jpg', 'Hari Batik', 'Peringatan Hari Batik Nasional Smanla', '', '', '', '2019-10-22 07:06:41', 'admin', '0000-00-00 00:00:00', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kat` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `note` text,
  `for_modul` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kat`, `cat_name`, `note`, `for_modul`) VALUES
(2, 'SAMPUL', '', 'SLIDER'),
(3, 'SISWA', '', 'SLIDER'),
(4, 'PENGGUNA', '', 'USERS');

-- --------------------------------------------------------

--
-- Table structure for table `master_access`
--

CREATE TABLE `master_access` (
  `id` int(11) NOT NULL,
  `nm_access` varchar(255) DEFAULT NULL,
  `note` text,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_access`
--

INSERT INTO `master_access` (`id`, `nm_access`, `note`, `created_at`, `created_by`) VALUES
(1, 'M_USERS', 'MENU USER', '0000-00-00 00:00:00', 0),
(4, 'M_LAPORAN', 'MENU LAPORAN', NULL, NULL),
(5, 'M_SY_CONFIG', 'MENU SISTEM', '0000-00-00 00:00:00', 0),
(16, 'M_SY_CONFIG', '', '2019-06-12 07:48:03', 1),
(23, 'R_BERITA', '', '2019-08-18 20:27:34', 1),
(24, 'C_BERITA', '', '2019-08-18 20:27:43', 1),
(25, 'U_BERITA', '', '2019-08-18 20:27:49', 1),
(26, 'D_BERITA', '', '2019-08-18 20:27:54', 1),
(28, 'M_BUKU', '', '2019-08-19 19:20:12', 1),
(30, 'M_SLIDER', '', '2019-08-27 18:59:17', 1),
(31, 'M_PENGUMUMAN', 'PENGUMUMAN', NULL, NULL),
(32, 'M_GALERI', '', '2019-08-27 19:09:00', 1),
(33, 'M_PTK', '', '2019-08-27 19:09:09', 1),
(34, 'M_SISWA', '', '2019-08-27 19:09:17', 1),
(35, 'M_BERITA', '', '2019-08-27 19:32:54', 1),
(36, 'C_PTK', '', '2019-08-27 19:37:02', 1),
(37, 'C_PENGUMUMAN', '', '2019-08-28 20:20:47', 1),
(38, 'C_SLIDER', '', '2019-08-29 19:18:49', 1),
(39, 'M_PRESTASI_SEKOLAH', 'akses menu prestasi sekolah', '2019-09-29 10:29:38', 1),
(40, 'C_PRESTASI_SEKOLAH', 'create data prestasi sekolah', '2019-09-29 10:38:52', 1),
(41, 'M_PRESTASI_GURU', '', '2019-09-29 11:34:25', 1),
(42, 'M_PRESTASI_SISWA', '', '2019-09-29 11:34:36', 1),
(43, 'C_PRESTASI_GURU', '', '2019-09-29 11:41:40', 1),
(44, 'C_PRESTASI_SISWA', '', '2019-09-29 11:48:32', 1),
(45, 'C_GALERI', '', '2019-09-29 12:02:12', 1),
(46, 'U_GALERI', '', '2019-10-21 09:07:17', 1),
(47, 'U_PENGUMUMAN', '', '2019-10-22 12:02:22', 1),
(48, 'D_PENGUMUMAN', '', '2019-10-24 12:31:16', 1),
(49, 'D_PENGUMUMAN', '', '2019-10-24 12:31:22', 1),
(50, 'D_BERITA', '', '2019-10-24 12:31:32', 1),
(51, 'M_SY_CONFIG', '', '2020-01-06 12:30:09', 1),
(52, 'C_SY_CONFIG', '', '2020-01-06 12:30:20', 1),
(53, 'U_SY_CONFIG', '', '2020-01-06 12:30:29', 1),
(54, 'D_SY_CONFIG', '', '2020-01-06 12:30:36', 1),
(55, 'U_SLIDER', '', '2020-03-30 11:53:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `nama_file` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `hits_download` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi_pengumuman`, `deskripsi`, `nama_file`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `add_1`, `add_2`, `hits_download`) VALUES
(6, 'PEMILOS SMANLA 2019', 'Jangan Lupa Pilih Ketua Osis Favoritmu', '', 'pengumuman_img_1572228127.jpg', '2019-10-04 20:03:21', 'dev', '2019-10-28 07:32:07', 'admin', 1, 'pengumuman_img_1572228127.jpg', '', 0),
(12, 'UPACARA SUMPAH PEMUDA', 'Pengumuman tentang pelaksanaan upacara SUMPAH PEMUDA TAHUN 2019, pada hari senin, 28 Oktober 2019, untuk siswa menggunakan seragam Osis Lengkap', 'Sumpah Pemuda', 'pengumuman_img_1571990765.jpg', '2019-10-12 10:30:27', 'dev', '2019-10-25 13:36:05', 'admin', 1, 'pengumuman_img_1571990765.jpg', '', 0),
(13, 'Jadwal Sesi Simulasi UNBK 2019/2020', 'Jadwal Sesi Simulasi UNBK 2019/2020 , 2 sesi untuk siswa SMAN 5 Magelang', 'Sesi 1 07.30-09.30 Sesi 2 11.00-13.00', 'pengumuman_img_1571900578.png', '2019-10-12 11:15:30', 'dev', '2019-10-24 12:32:58', 'admin', 1, 'Simulasi Ujian Nasional Berbasis Komputer - Tahun Ajaran 2019_2020.pdf', '', 0),
(14, 'SIMULASI 1 UNBK 2019/2020', 'Simulasi 1 UNBK 2019/2020 dilaksanakan pada tanggal 6-8 November 2019 , 2 sesi pukul 7.30-14.00', 'Dilaksanakan 2 Sesi UNBK', 'pengumuman_img_1571890878.png', '2019-10-12 11:18:00', 'dev', '2019-10-24 09:51:18', 'admin', 1, 'pengumuman_img_15718908781.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_guru`
--

CREATE TABLE `prestasi_guru` (
  `id_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(200) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `nama_prestasi` varchar(500) NOT NULL,
  `juara` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_guru`
--

INSERT INTO `prestasi_guru` (`id_prestasi`, `jenis_prestasi`, `nama_guru`, `nama_prestasi`, `juara`, `tahun_perolehan`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `add_1`, `add_2`, `note`) VALUES
(1, 'Pengajar Favorit', 'Ahmad Syahroni, S.Pd', 'Prestasi Pengajar Tercerdas', '2', '2017/2018', '2019-09-29 11:45:22', 'dev', '0000-00-00 00:00:00', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_sekolah`
--

CREATE TABLE `prestasi_sekolah` (
  `id_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(200) NOT NULL,
  `nama_prestasi` varchar(500) NOT NULL,
  `juara` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_sekolah`
--

INSERT INTO `prestasi_sekolah` (`id_prestasi`, `jenis_prestasi`, `nama_prestasi`, `juara`, `tahun_perolehan`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `add_1`, `add_2`, `note`) VALUES
(1, 'juara umum', 'Prestasi Pengajar Tercerdas', '2', '2017/2018', '2020-01-27 13:37:42', 'dev', '0000-00-00 00:00:00', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_siswa`
--

CREATE TABLE `prestasi_siswa` (
  `id_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(200) NOT NULL,
  `nama_siswa` varchar(200) NOT NULL,
  `nama_prestasi` varchar(500) NOT NULL,
  `juara` varchar(50) NOT NULL,
  `tahun_perolehan` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ptk`
--

CREATE TABLE `ptk` (
  `id_ptk` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `nomor_telp` varchar(14) DEFAULT NULL,
  `note` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `add_1` text,
  `add_2` text NOT NULL,
  `isactive` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptk`
--

INSERT INTO `ptk` (`id_ptk`, `fullname`, `nip`, `nik`, `email`, `jabatan`, `foto`, `nomor_telp`, `note`, `created_by`, `updated_by`, `created_at`, `updated_at`, `add_1`, `add_2`, `isactive`) VALUES
(1, 'Agus Haryanto, S. Pd', '', '123123123123', 'dev@email.com', 'Guru Fisika', 'a4.jpg', '085643242654', 'full akses', 1, 1, '2018-03-13 03:06:55', '2019-05-22 12:42:00', '', '', 1),
(2, 'Rafi Ardilah, S. Kom', '', '321321321312321', 'fahrudinyewe@gmail.com', 'Guru TIK', 'a4.jpg', '085643242656', 'Verifikasi', 1, 1, '2018-03-13 03:06:55', '2019-08-18 14:25:27', '', '', 1),
(3, 'Rinda Sulistya', '223311', '3308200106900004', 'fahrudinyewe@gmail.com', 'Guru TIK', 'ptk_1584882314', '123123123', '', 0, 0, '2020-03-22 18:35:14', '0000-00-00 00:00:00', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `tanggal_masuk` datetime DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `nomor_telp` varchar(14) DEFAULT NULL,
  `alumni` int(11) NOT NULL DEFAULT '1' COMMENT '1=siswa,0=alumni',
  `note` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `add_1` text,
  `add_2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `fullname`, `nik`, `email`, `tanggal_masuk`, `foto`, `nomor_telp`, `alumni`, `note`, `created_by`, `updated_by`, `created_at`, `updated_at`, `add_1`, `add_2`) VALUES
(1, 'Arga Diyandra', '3302800010010010001', 'argady@email.com', '0000-00-00 00:00:00', 'a4.jpg', '085643242654', 0, 'full akses', 1, 1, '2018-03-13 03:06:55', '2019-05-22 12:42:00', '', ''),
(2, 'Tito Valian', '3302800010010010002', 'titova@gmail.com', '0000-00-00 00:00:00', 'a4.jpg', '085643242656', 1, 'Verifikasi', 1, 1, '2018-03-13 03:06:55', '2019-08-18 14:25:27', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `kategori` int(11) NOT NULL,
  `note` text NOT NULL,
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `judul`, `kategori`, `note`, `add_1`, `add_2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `hits`) VALUES
(1, 'slider_1567088399.png', 'gambar wa', 1, '', '', '', '2019-08-29 19:28:17', 'dev', '0000-00-00 00:00:00', '', 1, 1),
(2, 'slider_1567088399.png', 'wa lagi', 1, '', '', '', '2019-08-29 19:28:58', 'dev', '0000-00-00 00:00:00', '', 1, 2),
(3, 'slider_1567088399.png', 'zz', 1, '', '', '', '2019-08-29 19:49:59', 'dev', '0000-00-00 00:00:00', '', 1, 2),
(4, 'slider_1567691563.png', 'SLIDER 1', 1, '', '', '', '2019-09-05 19:22:43', 'dev', '0000-00-00 00:00:00', '', 1, 0),
(5, 'slider_1583934869.png', 'Artikel Virus Corona', 1, '', '', '', '2020-03-11 19:24:29', 'dev', '0000-00-00 00:00:00', '', 1, 2),
(6, 'slider_1583935523.png', 'Code Error', 1, '', '', '', '2020-03-11 19:35:23', 'dev', '0000-00-00 00:00:00', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sy_config`
--

CREATE TABLE `sy_config` (
  `id` int(11) NOT NULL,
  `conf_name` varchar(50) NOT NULL,
  `conf_val` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sy_config`
--

INSERT INTO `sy_config` (`id`, `conf_name`, `conf_val`, `note`) VALUES
(3, 'APP_NAME', 'SMK Nananina', ''),
(8, 'OPD_NAME', 'SMK Nananina', ''),
(9, 'LEFT_FOOTER', '<strong>Copyright</strong> Peternak Kode © 2019', ''),
(10, 'RIGHT_FOOTER', 'SMA Negeri Sono', ''),
(11, 'APP_DESC', 'Informasi semua tentang SMA Negeri Sono', '-'),
(12, 'OPD_ADDR', 'Jln. Barito 2, Sidotopo, Kota Magelang', ''),
(13, 'VISI_MISI', '\"Unggul Dalam Prestasi,Cerdas, Trampil dan Berwawasan Lingkungan Berlandaskan Iman dan Taqwa\"', ''),
(14, 'APP_TELP', '(0293) 3149516', ''),
(15, 'APP_EMAIL', 'smasonotuh@yahoo.co.id', ''),
(16, 'APP_FB', 'https://www.facebook.com', ''),
(17, 'APP_TWITTER', 'https://twitter.com', ''),
(18, 'APP_IG', 'https://instagram.com', ''),
(19, 'SAMBUTAN_TITLE', 'Sambutan Kepala Sekolah', ''),
(20, 'SAMBUTAN_BODY', 'Assalamualaikum wr. wb. Puji Syukur kita panjatkan kehadirat Allah SWT', ''),
(21, 'SAMBUTAN_FOTO', 'assets/blogsekolah/kepsek/kepsek.png', ''),
(22, 'BERITA_TITLE', 'Berita Terkini', ''),
(23, 'BERITA_DESC', 'Berikut beberapa berita terhangat', ''),
(24, 'FRONT_PTK_TITLE', 'Data Pendidik dan Tenaga Kependidikan', 'judul untuk halaman ptk'),
(25, 'FRONT_PTK_DESC', 'Data Pendidik dan Tenaga Kependidikan', ''),
(26, 'FRONT_SISWA_TITLE', 'Data Siswa', 'Data Siswa SMA Negeri 5 Magelang'),
(27, 'FRONT_SISWA_DESC', 'Data Siswa SMA Negeri 5 Magelang', ''),
(28, 'FRONT_ALUMNI_TITLE', 'Data Alumni', ''),
(29, 'FRONT_ALUMNI_DESC', 'Data Alumni SKA Negeri Sono', ''),
(30, 'APP_PENGHARGAAN_TITLE', 'Prestasi <br> di Tahun 2019', ''),
(31, 'APP_PENGHARGAAN_DESC', 'Berikut pencapaian beberapa prestasi yang sudah diraih oleh siswa dan pengajar kami', ''),
(32, 'PENGHARGAAN_PENGAJAR_TITLE', 'Prestasi Pengajar', ''),
(33, 'PENGHARGAAN_PENGAJAR_DESC', 'Prestasi atas usaha keras pengajar kami membuahkan hasil dengan diraihnya beberapa penghargaan berikut.', ''),
(34, 'PENGHARGAAN_SISWA_TITLE', 'Prestasi Siswa', ''),
(35, 'PENGHARGAAN_SISWA_DESC', 'Bukti dari usaha kerja keras siswa dalam meraih impiannya terwujud dalam beberapa penghargaan berikut', ''),
(36, 'TERKAIT_PENGHARGAAN_TITLE', 'Prestasi Peraihan Debat Bahasa Inggris', ''),
(37, 'TERKAIT_PENGHARGAAN_DESC', 'Kemenangan telak telah diraih SMA kami dalam kompetisi Debat Bahasa Inggris Tingkat Provinsi Jawa Tengah. Peserta datang dari berbagai wilayah ...', ''),
(38, 'JML_SISWA_LAKI', '34', ''),
(39, 'JML_SISWA_PEREMPUAN', '80', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL COMMENT 'fk dari tabel user_group',
  `foto` varchar(250) DEFAULT NULL,
  `telp` varchar(250) DEFAULT NULL,
  `note` text NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `note_1` text,
  `ip` varchar(15) NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `fullname`, `username`, `password`, `email`, `id_group`, `foto`, `telp`, `note`, `created_by`, `updated_by`, `created_at`, `updated_at`, `note_1`, `ip`, `last_login`) VALUES
(1, 'Developer', 'dev', '227edf7c86c02a44d17eec9aa5b30cd1', 'dev@email.com', 1, 'a4.jpg', '085643242654', 'full akses', 1, 1, '2018-03-13 03:06:55', '2020-01-27 12:47:53', '', '', '2019-08-27 20:12:45'),
(2, 'Administrator SMAN 5', 'admin', '259db408f679c9f48e559a9fb9c16ac5', 'sman5mgl@yahoo.co.id', 1, 'a4.jpg', '085786640255', '-', 1, 1, '2018-03-13 03:06:55', '2020-01-26 16:25:30', '', '', '2019-08-27 20:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `id_group` int(11) DEFAULT NULL,
  `kd_access` varchar(12) DEFAULT NULL,
  `nm_access` varbinary(100) DEFAULT NULL,
  `is_allow` int(1) DEFAULT NULL COMMENT '0=false,1=true',
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `id_group`, `kd_access`, `nm_access`, `is_allow`, `note`) VALUES
(5, 2, '1', NULL, 0, NULL),
(8, 1, '1', NULL, 1, NULL),
(9, 3, '5', NULL, 0, NULL),
(10, 3, '1', NULL, 0, NULL),
(11, 3, '3', NULL, 1, NULL),
(12, 4, '4', NULL, 1, NULL),
(13, 1, '2', NULL, 1, NULL),
(14, 1, '3', NULL, 1, NULL),
(15, 1, '4', NULL, 1, NULL),
(16, 1, '5', NULL, 1, NULL),
(17, 1, '6', NULL, 0, NULL),
(18, 3, '4', NULL, 1, NULL),
(19, 2, '5', NULL, 1, NULL),
(20, 4, '5', NULL, 0, NULL),
(21, 4, '6', NULL, 0, NULL),
(22, 3, '2', NULL, 1, NULL),
(23, 4, '2', NULL, 1, NULL),
(24, 1, '7', NULL, 1, NULL),
(25, 1, '8', NULL, 1, NULL),
(26, 1, '9', NULL, 1, NULL),
(27, 1, '10', NULL, 0, NULL),
(28, 5, '10', NULL, 0, NULL),
(29, 5, '9', NULL, 1, NULL),
(30, 2, '2', NULL, 1, NULL),
(31, 2, '3', NULL, 1, NULL),
(32, 1, '14', NULL, 1, NULL),
(33, 2, '14', NULL, 1, NULL),
(34, 1, '12', NULL, 1, NULL),
(35, 2, '12', NULL, 0, NULL),
(36, 1, '13', NULL, 1, NULL),
(37, 1, '11', NULL, 1, NULL),
(38, 5, '3', NULL, 1, NULL),
(39, 5, '2', NULL, 1, NULL),
(40, 2, '8', NULL, 1, NULL),
(41, 2, '9', NULL, 1, NULL),
(42, 3, '6', NULL, 1, NULL),
(43, 3, '7', NULL, 1, NULL),
(44, 3, '8', NULL, 1, NULL),
(45, 3, '9', NULL, 1, NULL),
(46, 3, '10', NULL, 1, NULL),
(47, 3, '11', NULL, 1, NULL),
(48, 3, '12', NULL, 1, NULL),
(49, 3, '13', NULL, 1, NULL),
(50, 4, '3', NULL, 1, NULL),
(51, 4, '8', NULL, 1, NULL),
(52, 4, '9', NULL, 1, NULL),
(53, 5, '15', NULL, 1, NULL),
(54, 1, '15', NULL, 1, NULL),
(55, 1, '16', NULL, 1, NULL),
(56, 6, '2', NULL, 1, NULL),
(57, 6, '3', NULL, 1, NULL),
(58, 6, '4', NULL, 1, NULL),
(59, 6, '8', NULL, 1, NULL),
(60, 6, '9', NULL, 1, NULL),
(61, 6, '14', NULL, 1, NULL),
(62, 6, '15', NULL, 1, NULL),
(63, 5, '16', NULL, 1, NULL),
(64, 5, '17', NULL, 1, NULL),
(65, 5, '18', NULL, 1, NULL),
(66, 5, '19', NULL, 1, NULL),
(67, 5, '21', NULL, 1, NULL),
(68, 6, '18', NULL, 1, NULL),
(69, 1, '17', NULL, 1, NULL),
(70, 1, '18', NULL, 1, NULL),
(71, 1, '19', NULL, 1, NULL),
(72, 1, '21', NULL, 1, NULL),
(73, 1, '22', NULL, 1, NULL),
(74, 2, '22', NULL, 1, NULL),
(75, 6, '22', NULL, 1, NULL),
(76, 5, '4', NULL, 1, NULL),
(77, 5, '8', NULL, 1, NULL),
(78, 5, '22', NULL, 1, NULL),
(79, 2, '4', NULL, 0, NULL),
(80, 1, '23', NULL, 1, NULL),
(81, 1, '24', NULL, 1, NULL),
(82, 1, '25', NULL, 1, NULL),
(83, 1, '26', NULL, 1, NULL),
(84, 1, '27', NULL, 1, NULL),
(85, 1, '28', NULL, 1, NULL),
(86, 1, '29', NULL, 1, NULL),
(87, 1, '30', NULL, 1, NULL),
(88, 1, '31', NULL, 1, NULL),
(89, 1, '32', NULL, 1, NULL),
(90, 1, '33', NULL, 1, NULL),
(91, 1, '34', NULL, 1, NULL),
(92, 1, '35', NULL, 1, NULL),
(93, 2, '24', NULL, 1, NULL),
(94, 1, '36', NULL, 1, NULL),
(95, 1, '37', NULL, 1, NULL),
(96, 1, '38', NULL, 1, NULL),
(97, 1, '39', NULL, 1, NULL),
(98, 1, '40', NULL, 1, NULL),
(99, 1, '41', NULL, 1, NULL),
(100, 1, '42', NULL, 1, NULL),
(101, 1, '43', NULL, 1, NULL),
(102, 1, '44', NULL, 1, NULL),
(103, 1, '45', NULL, 1, NULL),
(104, 1, '46', NULL, 1, NULL),
(105, 2, '23', NULL, 1, NULL),
(106, 2, '25', NULL, 1, NULL),
(107, 2, '26', NULL, 1, NULL),
(108, 2, '28', NULL, 0, NULL),
(109, 2, '30', NULL, 1, NULL),
(110, 2, '31', NULL, 1, NULL),
(111, 2, '32', NULL, 1, NULL),
(112, 2, '33', NULL, 1, NULL),
(113, 2, '34', NULL, 1, NULL),
(114, 2, '35', NULL, 1, NULL),
(115, 2, '36', NULL, 1, NULL),
(116, 2, '37', NULL, 1, NULL),
(117, 2, '38', NULL, 1, NULL),
(118, 2, '39', NULL, 1, NULL),
(119, 2, '40', NULL, 1, NULL),
(120, 2, '41', NULL, 1, NULL),
(121, 2, '42', NULL, 1, NULL),
(122, 2, '43', NULL, 1, NULL),
(123, 2, '44', NULL, 1, NULL),
(124, 2, '45', NULL, 1, NULL),
(125, 2, '16', NULL, 1, NULL),
(126, 2, '46', NULL, 1, NULL),
(127, 2, '47', NULL, 1, NULL),
(128, 2, '50', NULL, 1, NULL),
(129, 2, '49', NULL, 1, NULL),
(130, 2, '48', NULL, 1, NULL),
(131, 2, '54', NULL, 1, NULL),
(132, 2, '53', NULL, 1, NULL),
(133, 2, '52', NULL, 1, NULL),
(134, 2, '51', NULL, 1, NULL),
(135, 1, '55', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `note` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `group_name`, `note`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Developer', '-', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Administrator', 'Admin Aplikasi', 0, '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id_video` int(11) NOT NULL,
  `link` text NOT NULL,
  `judul` varchar(300) NOT NULL,
  `kategori` int(11) NOT NULL,
  `note` text NOT NULL,
  `add_1` text NOT NULL,
  `add_2` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` varchar(20) NOT NULL,
  `isactive` int(1) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `link`, `judul`, `kategori`, `note`, `add_1`, `add_2`, `created_at`, `created_by`, `updated_at`, `updated_by`, `isactive`, `hits`) VALUES
(1, 'slider_1567087097', 'gambar wa', 1, '', '', '', '2019-08-29 19:28:17', 'dev', '0000-00-00 00:00:00', '', 1, 1),
(2, 'slider_1567087138', 'wa lagi', 1, '', '', '', '2019-08-29 19:28:58', 'dev', '0000-00-00 00:00:00', '', 1, 2),
(3, 'slider_1567088399.png', 'zz', 1, '', '', '', '2019-08-29 19:49:59', 'dev', '0000-00-00 00:00:00', '', 1, 2),
(4, 'https://www.youtube.com/embed/uP3NW-9j9fY', 'Realtime Notification', 1, 'Tutorial penjelasan tentang pembuatan realtime notification dengan PHP Ajax', '', '', '2019-09-05 19:22:43', 'dev', '0000-00-00 00:00:00', '', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kat`) USING BTREE;

--
-- Indexes for table `master_access`
--
ALTER TABLE `master_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `prestasi_guru`
--
ALTER TABLE `prestasi_guru`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `prestasi_sekolah`
--
ALTER TABLE `prestasi_sekolah`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `ptk`
--
ALTER TABLE `ptk`
  ADD PRIMARY KEY (`id_ptk`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `sy_config`
--
ALTER TABLE `sy_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_access`
--
ALTER TABLE `master_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `prestasi_guru`
--
ALTER TABLE `prestasi_guru`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi_sekolah`
--
ALTER TABLE `prestasi_sekolah`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi_siswa`
--
ALTER TABLE `prestasi_siswa`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptk`
--
ALTER TABLE `ptk`
  MODIFY `id_ptk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sy_config`
--
ALTER TABLE `sy_config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
