-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2024 at 02:59 AM
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
-- Database: `pkn_singosari`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pegawai`
--

CREATE TABLE `daftar_pegawai` (
  `nik` int NOT NULL,
  `nip` int NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `no_ktp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int NOT NULL,
  `nomor_telepon` int NOT NULL,
  `status_pernikahan` enum('Menikah','Belum Menikah','Duda','Janda') NOT NULL,
  `kedudukan_hukum` enum('Aktif','Cuti Diluar Tanggungan Negara','Tugas Belajar','pemberhentian Sementara','Masa Persiapan Pensiun','Mencapai BUP','PNS Terkan Hukuman Disiplin','Diberhentikan','Tidak Aktif') NOT NULL,
  `jenis_pegawai` enum('PNS Kab/Kota Bekerja Pada Kab/Kota','PNS Kab/Kota DPK Pada Instansi Negeri','PNS Kab/Kota DPB Pada Instansi Negeri','PNS Kab/Kota DPK Pada Instansi Swasta','PNS Kementrian DPK Pada Instansi Kab/Kota','PNS Kementrian DPB Pada Instansi Kab/Kota, Non-PNS') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `satker` varchar(100) NOT NULL,
  `unit_kerja` varchar(100) NOT NULL,
  `pangkat_terakhir` varchar(50) NOT NULL,
  `jabatan_terakhir` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `eselon` enum('Non Eselon','II a','II b','III a','III b','IV a','IV b','V a') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `daftar_pegawai`
--

INSERT INTO `daftar_pegawai` (`nik`, `nip`, `nama_lengkap`, `foto`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_ktp`, `alamat`, `kode_pos`, `nomor_telepon`, `status_pernikahan`, `kedudukan_hukum`, `jenis_pegawai`, `satker`, `unit_kerja`, `pangkat_terakhir`, `jabatan_terakhir`, `pendidikan_terakhir`, `eselon`) VALUES
(101010, 212121, 'ananda', 'cjdnvdj', 'sda', '2024-03-14', 'Perempuan', 'Kristen', '930032224', 'cdn ', 87492, 9328199, 'Duda', 'Tugas Belajar', 'PNS Kab/Kota DPB Pada Instansi Negeri', 'dn vn ', 'c d', 'dfnd', 'nd fnme', 'n fvn', 'Non Eselon'),
(202020, 7, 'anandah', 'Screenshot 2024-03-23 140007.png', 'sda', '2024-03-20', 'Perempuan', 'Katolik', '', 'dnnw', 99, 90403099, 'Belum Menikah', 'Aktif', 'PNS Kab/Kota Bekerja Pada Kab/Kota', 'nvnv', 'nrjn', 'jfdnjkdn', 'nbsfdb', 'nvn', 'III a'),
(310103, 310103, 'yoga', 'Screenshot 2024-03-23 135501.png', 'f', '2024-03-27', 'Perempuan', 'Kristen', '534343', 'fdvdcxv', 49, 432, 'Menikah', 'Aktif', 'PNS Kab/Kota DPK Pada Instansi Negeri', 'gdfd', 'df', 'df', 'dfg', 'd', 'II a');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_pengguna` int NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` int NOT NULL,
  `level` enum('Administrator','User') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_pengguna`, `username`, `password`, `nik`, `level`) VALUES
(2, '310103', 'yoga', 310103, 'User'),
(8, '101010', 'ananda', 101010, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int NOT NULL,
  `nama_pengguna` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `password` int NOT NULL,
  `level` enum('administrator','sekretaris','','') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int NOT NULL,
  `nama_profil` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telepon` varchar(25) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_profil`, `alamat`, `nomor_telepon`) VALUES
(1, 'Kecamatan Singosarih', 'Jl. Raya Tumapel No.38, Pagentan, Singosari, Malang, Jawa Timur 65153, Indonesia', '(0341) 458009');

-- --------------------------------------------------------

--
-- Table structure for table `ref_jenis_hukuman`
--

CREATE TABLE `ref_jenis_hukuman` (
  `id_jenis_hukuman` int NOT NULL,
  `jenis_hukuman` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_tingkat_hukuman` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_jenis_hukuman`
--

INSERT INTO `ref_jenis_hukuman` (`id_jenis_hukuman`, `jenis_hukuman`, `id_tingkat_hukuman`) VALUES
(1, 'Teguran Lisan', 1),
(2, 'Teguran Tertulis', 1),
(3, 'Pernyataan Tidak Puas Secara Tertulis', 1),
(4, 'Penundaan Kenaikan Gaji Berkala Selama 1 (satu) Tahun', 2),
(5, 'Penundaan Kenaikan Pangkat Selama 1 (satu) Tahun', 2),
(6, 'Penurunan Pangkat Setingkat Lebih Rendah Selama 1 (satu) Tahun', 2),
(7, 'Penurunan Pangkat Setingkat Lebih Rendah Selama 3 (tiga) Tahun', 3),
(8, 'Pemindahan Dalam Rangka Penurunan Jabatan Setingkat Lebih Rendah', 3),
(9, 'Pembebasan Dari Jabatan', 3),
(10, 'Pemberhentian Dengan Hormat Tidak Atas Permintaan Sendiri Sebagai PNS', 3),
(11, 'Pemberhentian Tidak Dengan Hormat Sebagai PNS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ref_tingkat_hukuman`
--

CREATE TABLE `ref_tingkat_hukuman` (
  `id_tingkat_hukuman` int NOT NULL,
  `tingkat_hukuman` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ref_tingkat_hukuman`
--

INSERT INTO `ref_tingkat_hukuman` (`id_tingkat_hukuman`, `tingkat_hukuman`) VALUES
(1, 'RINGAN'),
(2, 'SEDANG'),
(3, 'BERAT');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_diklat`
--

CREATE TABLE `riwayat_diklat` (
  `id_diklat` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_diklat` enum('Diklat Struktural','Diklat Fungsional') COLLATE utf8mb4_general_ci NOT NULL,
  `nama_diklat` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_jam` int NOT NULL,
  `tanggal_pelaksanaan_diklat` date NOT NULL,
  `nomor_sertifikat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_penyelenggara` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `diklat` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_diklat`
--

INSERT INTO `riwayat_diklat` (`id_diklat`, `nik`, `nama`, `jenis_diklat`, `nama_diklat`, `jumlah_jam`, `tanggal_pelaksanaan_diklat`, `nomor_sertifikat`, `instansi_penyelenggara`, `diklat`) VALUES
(8, 202020, '', 'Diklat Struktural', 'gfghnkkk', 7, '2024-03-21', 'ghhb ', 'hjnjk', 'Screenshot 2024-03-23 140145.png'),
(9, 310103, '', 'Diklat Struktural', 'mfn', 4, '2024-03-27', '5345', 'nbn', 'Screenshot 2024-03-23 140145.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_golongan`
--

CREATE TABLE `riwayat_golongan` (
  `id_golongan` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `golongan` enum('Non Eselon','II a','II b','II c','II d','III a','III b','III c','III d','IV a','IV b','IV c','IV d','V a') COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tmt_kp` date NOT NULL,
  `nomor_sk` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_sk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_hukuman_disiplin`
--

CREATE TABLE `riwayat_hukuman_disiplin` (
  `id_hukuman` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis_hukuman` int NOT NULL,
  `nomor_sk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_sk_hukuman` date NOT NULL,
  `tmt_awal_hukuman_disiplin` date NOT NULL,
  `lama_hukuman_tahun` int NOT NULL,
  `lama_hukuman_bulan` int NOT NULL,
  `tmt_akhir_hukuman_disiplin` date NOT NULL,
  `dasar_hukum_disiplin` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `alasan_hukum_disiplin` text COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_hukuman_disiplin` text COLLATE utf8mb4_general_ci NOT NULL,
  `hd` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_hukuman_disiplin`
--

INSERT INTO `riwayat_hukuman_disiplin` (`id_hukuman`, `nik`, `nama`, `id_jenis_hukuman`, `nomor_sk`, `tanggal_sk_hukuman`, `tmt_awal_hukuman_disiplin`, `lama_hukuman_tahun`, `lama_hukuman_bulan`, `tmt_akhir_hukuman_disiplin`, `dasar_hukum_disiplin`, `alasan_hukum_disiplin`, `deskripsi_hukuman_disiplin`, `hd`) VALUES
(13, 9849809, 'ellok ananda', 1, '87879', '2024-03-12', '2024-03-29', 0, 8, '2024-03-16', 'nfn', 'hgh', 'nfnd', ''),
(14, 9849809, 'ellok ananda', 1, '9089', '2024-03-15', '2024-03-14', 0, 4, '2024-03-22', 'fre', 'vbdgdg', 'fdvd', ''),
(15, 202020, 'anandah', 1, '87879000', '2024-03-04', '2024-03-12', 0, 4, '2024-03-23', 'cjdnjcn', 'vmcvmc', 'cvnmvnm', '20240302233126877.jpg'),
(16, 310103, 'yoga', 1, '9890', '2024-03-07', '2024-03-22', 0, 2, '2024-03-11', 'fre', 'hgh', 'ghhr', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_jabatan`
--

CREATE TABLE `riwayat_jabatan` (
  `id_jabatan` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_induk` enum('Pemerintah Kabupaten Malang','Badan Narkotika Nasional','Sekretariat Jendral Komisi Pemilihan Umum','Pemerintah Provinsi Jawa Timur') COLLATE utf8mb4_general_ci NOT NULL,
  `instansi_kerja` enum('Pemerintah Kabupaten Malang','Badan Narkotika Nasional','Sekretariat Jendral Komisi Pemilihan Umum','Pemerintah Provinsi Jawa Timur') COLLATE utf8mb4_general_ci NOT NULL,
  `unit_organisasi` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_jabatan` enum('Jabatan Struktural','Jabatan Fungsional Umum','Jabatan Fungsional Tertentu') COLLATE utf8mb4_general_ci NOT NULL,
  `nama_jabatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `nomor_sk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_sk` date NOT NULL,
  `sk` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_jabatan`
--

INSERT INTO `riwayat_jabatan` (`id_jabatan`, `nik`, `nama`, `instansi_induk`, `instansi_kerja`, `unit_organisasi`, `jenis_jabatan`, `nama_jabatan`, `tmt_jabatan`, `nomor_sk`, `tanggal_sk`, `sk`) VALUES
(28, 202020, 'anandah', 'Badan Narkotika Nasional', 'Badan Narkotika Nasional', 'nnsnv', 'Jabatan Fungsional Tertentu', 'ncsmn', '2024-04-06', 'nxmcnm', '2024-04-06', 'Screenshot 2024-03-23 140145.png'),
(29, 310103, 'yoga', 'Badan Narkotika Nasional', 'Pemerintah Kabupaten Malang', 'jfnj', 'Jabatan Struktural', 'jgnbn', '2024-03-29', '89048', '2024-03-04', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_keluarga`
--

CREATE TABLE `riwayat_keluarga` (
  `id_keluarga` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_keluarga` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `hubungan_keluarga` enum('Suami','Istri','Anak Kandung','Anak Angkat','Anak Tiri','Ayah','Ibu','Mertua Laki-Laki','Mertua Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_keluarga` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_keluarga` date NOT NULL,
  `jenis_kelamin_keluarga` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `agama_keluarga` enum('Islam','Kristen','Katolik','Hindu','Budha','Lainya') COLLATE utf8mb4_general_ci NOT NULL,
  `nik_keluarga` int NOT NULL,
  `alamat_keluarga` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_pernikahan` enum('Belum Menikah','Menikah','Janda','Duda') COLLATE utf8mb4_general_ci NOT NULL,
  `status_pekerjaan` enum('Belum Bekerja','Bekerja di Instansi Negeri','Bekerja di Instansi Swasta','Wiraswasta','Pensiunan','Tidak Bekerja') COLLATE utf8mb4_general_ci NOT NULL,
  `wajib_pajak` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status_hidup` enum('Hidup','Meninggal') COLLATE utf8mb4_general_ci NOT NULL,
  `tunjangan_gaji` enum('Ya','Tidak') COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_keluarga`
--

INSERT INTO `riwayat_keluarga` (`id_keluarga`, `nik`, `nama`, `nama_keluarga`, `hubungan_keluarga`, `tempat_lahir_keluarga`, `tanggal_lahir_keluarga`, `jenis_kelamin_keluarga`, `agama_keluarga`, `nik_keluarga`, `alamat_keluarga`, `status_pernikahan`, `status_pekerjaan`, `wajib_pajak`, `status_hidup`, `tunjangan_gaji`) VALUES
(6, 11, 'asa', 'budi', 'Anak Angkat', 'Malang', '2023-08-17', 'Laki-Laki', 'Hindu', 2147483647, 'Mlaang Juga', 'Menikah', 'Wiraswasta', 'Motor', 'Hidup', 'Ya'),
(7, 222, 'sefia', 'jhjjrfh', 'Anak Kandung', 'fdgnfn', '2024-03-16', 'Perempuan', 'Islam', 3, 'fdvd', 'Menikah', 'Bekerja di Instansi Negeri', 're', 'Hidup', 'Ya');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kenaikan_gaji_berkala`
--

CREATE TABLE `riwayat_kenaikan_gaji_berkala` (
  `id_gaji` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `golongan_ruang` enum('I/a','I/b','I/c','I/d','II/a','II/b','II/c','II/d','II/e','III/a','III/b','III/c','III/d','IV/a','IV/b','IV/c','IV/d','IV/e') COLLATE utf8mb4_general_ci NOT NULL,
  `tmt_kgb` date NOT NULL,
  `masa_kerja_tahun` int NOT NULL,
  `masa_kerja_bulan` int NOT NULL,
  `nomor_sk` int NOT NULL,
  `tanggal_sk_kgb` date NOT NULL,
  `jenis_kenaikan` enum('kenaikan pangkat','kgb','penyesuaian tabel gaji pokok','sk lain-lain','cpns') COLLATE utf8mb4_general_ci NOT NULL,
  `gaji` int NOT NULL,
  `spesimen_pejabat` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `sp` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_kenaikan_gaji_berkala`
--

INSERT INTO `riwayat_kenaikan_gaji_berkala` (`id_gaji`, `nik`, `nama`, `golongan_ruang`, `tmt_kgb`, `masa_kerja_tahun`, `masa_kerja_bulan`, `nomor_sk`, `tanggal_sk_kgb`, `jenis_kenaikan`, `gaji`, `spesimen_pejabat`, `sp`) VALUES
(9, 202020, 'anandah', 'II/a', '2024-03-01', 2, 3, 87879, '2024-03-01', 'kgb', 54343000, 'tgrdg', 'Screenshot 2024-03-23 140007.png'),
(10, 310103, 'yoga', 'II/d', '2024-03-19', 4, 3, 3, '2024-03-14', 'penyesuaian tabel gaji pokok', 54343000, 'tgrdg', 'Screenshot 2024-03-24 115033.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_kursus`
--

CREATE TABLE `riwayat_kursus` (
  `id_kursus` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kursus` enum('diklat fungsional','diklat teknis','workshop','pelatihan manajerial','pelatihan sosial kultural','sosialisasi','bimbingan teknis','seminar','magang','kursus','penataran','pengembangan kompetensi','coaching') NOT NULL,
  `nama_kursus` varchar(50) NOT NULL,
  `jumlah_jam` int NOT NULL,
  `tgl_kursus` date NOT NULL,
  `tgl_selesai_kursus` date NOT NULL,
  `no_sertif` varchar(50) NOT NULL,
  `instansi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `course` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat_kursus`
--

INSERT INTO `riwayat_kursus` (`id_kursus`, `nik`, `nama`, `jenis_kursus`, `nama_kursus`, `jumlah_jam`, `tgl_kursus`, `tgl_selesai_kursus`, `no_sertif`, `instansi`, `course`) VALUES
(1, 202020, 'anandah', 'diklat fungsional', 'hbh', 2, '2024-03-29', '2024-03-29', 'fdf', 'dfd', 'angg.png'),
(2, 310103, 'yoga', 'diklat teknis', 'hbh', 4, '2024-03-22', '2024-03-13', 'fdf', 'dfd', 'Screenshot 2024-03-24 115110.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_mutasi_cpns_ke_pns`
--

CREATE TABLE `riwayat_mutasi_cpns_ke_pns` (
  `id_mutasi` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tmt_cpns` date NOT NULL,
  `nomor_sk_cpns` int NOT NULL,
  `tanggal_sk_cpns` date NOT NULL,
  `nomor_bkn_pengangkatan_cpns` int NOT NULL,
  `tmt_pns` date NOT NULL,
  `nomor_sk_pns` int NOT NULL,
  `tanggal_sk_pns` date NOT NULL,
  `nomor_sttpl_diklat_pra_jabatan` int NOT NULL,
  `tanggal_sttpl_diklat_pra_jabatan` date NOT NULL,
  `nomor_surat_keterangan_sehat` int NOT NULL,
  `tanggal_surat_keterangan_sehat` date NOT NULL,
  `jenis_pengadaan_pegawai` enum('Umum','Tenaga Honorer') COLLATE utf8mb4_general_ci NOT NULL,
  `mutasi` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_mutasi_cpns_ke_pns`
--

INSERT INTO `riwayat_mutasi_cpns_ke_pns` (`id_mutasi`, `nik`, `nama`, `tmt_cpns`, `nomor_sk_cpns`, `tanggal_sk_cpns`, `nomor_bkn_pengangkatan_cpns`, `tmt_pns`, `nomor_sk_pns`, `tanggal_sk_pns`, `nomor_sttpl_diklat_pra_jabatan`, `tanggal_sttpl_diklat_pra_jabatan`, `nomor_surat_keterangan_sehat`, `tanggal_surat_keterangan_sehat`, `jenis_pengadaan_pegawai`, `mutasi`) VALUES
(12, 11, '', '2023-12-08', 80, '2023-11-18', 1213, '2023-11-17', 321321, '2023-11-03', 4466, '2023-11-23', 674854, '2023-11-29', 'Umum', ''),
(13, 222, '', '2024-03-07', 9899000, '2024-03-05', 879879, '2024-04-05', 6, '2024-03-22', 980787, '2024-03-23', 878798, '2024-03-09', 'Umum', ''),
(14, 202020, 'anandah', '2024-03-13', 34431111, '2024-03-25', 4, '2024-03-21', 5, '2024-03-04', 7, '2024-03-21', 8, '2024-03-27', 'Umum', 'Screenshot 2024-03-23 140145.png'),
(17, 310103, 'yoga', '2024-03-20', 2, '2024-03-22', 2, '2024-03-30', 2, '2024-03-09', 2, '2024-03-23', 2, '2024-03-06', 'Umum', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pangkat`
--

CREATE TABLE `riwayat_pangkat` (
  `id_pangkat` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_sk` varchar(20) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tmt_jabatan` date NOT NULL,
  `no_bkn` varchar(20) NOT NULL,
  `tgl_bkn` date NOT NULL,
  `jenis_kenaikan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `masa_kerja_tahun` int NOT NULL,
  `masa_kerja_bulan` int NOT NULL,
  `angka_kredit` int NOT NULL,
  `pgkt` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat_pangkat`
--

INSERT INTO `riwayat_pangkat` (`id_pangkat`, `nik`, `nama`, `no_sk`, `tgl_sk`, `tmt_jabatan`, `no_bkn`, `tgl_bkn`, `jenis_kenaikan`, `golongan`, `masa_kerja_tahun`, `masa_kerja_bulan`, `angka_kredit`, `pgkt`) VALUES
(1, 202020, 'anandah', 'gdkkkk', '2024-03-07', '2024-03-14', 'fgd', '2024-03-07', 'dg', 'dgf', 4, 3, 3, 'angg.png'),
(2, 310103, 'yoga', 'gdkk', '2024-03-18', '2024-03-28', 'fgd', '2024-03-21', 'dg', 'dgf', 2, 3, 2, 'Screenshot 2024-03-24 115146.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_pendidikan` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tingkat_pendidikan` enum('S3','S2','S1','D4','D3','D2','D1','SLTA','SLTP','SD') COLLATE utf8mb4_general_ci NOT NULL,
  `program_studi` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_ijazah` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_ijazah` date NOT NULL,
  `nama_lembaga_pendidikan` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `gelar` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `ijazah_pengangkatan_cpns` enum('Ya','Tidak') COLLATE utf8mb4_general_ci NOT NULL,
  `ijazah` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_pendidikan`, `nik`, `nama`, `tingkat_pendidikan`, `program_studi`, `nomor_ijazah`, `tanggal_ijazah`, `nama_lembaga_pendidikan`, `gelar`, `ijazah_pengangkatan_cpns`, `ijazah`) VALUES
(2, 11, 'asa', 'S1', 'informatika', '99/SI/20', '2023-08-22', 'Itn', 's.Kom', 'Ya', ''),
(3, 222, 'sefia', 'S3', 'informatika', '9289', '2024-03-21', 'nf', 'fd', 'Tidak', ''),
(4, 9849809, 'ellok ananda', 'D4', 'infor', '9289', '2024-03-30', 'nf', 'kdsa', 'Tidak', 'init pharmashop.png'),
(5, 202020, 'anandah', 'D2', 'bfb', '94389', '2024-03-17', 'nf', 'hfrj', 'Tidak', 'Screenshot 2024-03-23 140145.png'),
(6, 310103, 'yoga', 'S2', 'infor', '9289', '2024-03-27', 'nf', 'fd', 'Tidak', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penghargaan`
--

CREATE TABLE `riwayat_penghargaan` (
  `id_penghargaan` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `no_sk` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tmt_sk` date NOT NULL,
  `nama_penghargaan` varchar(50) NOT NULL,
  `reward` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat_penghargaan`
--

INSERT INTO `riwayat_penghargaan` (`id_penghargaan`, `nik`, `nama`, `no_sk`, `tgl_sk`, `tmt_sk`, `nama_penghargaan`, `reward`) VALUES
(1, 202020, 'anandah', 'fdgf', '2024-03-14', '2024-02-28', 'cds', 'angg.png'),
(2, 310103, 'yoga', 'fd', '2024-03-21', '2024-03-22', 'cds', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penilaian_kinerja`
--

CREATE TABLE `riwayat_penilaian_kinerja` (
  `id_penilaian` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun_laporan` int NOT NULL,
  `nama_pejabat_penilai` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nip_pejabat_penilai` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `golongan_pejabat_penilai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan_pejabat_penilai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `unor_pejabat_penilai` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nilai_kinerja` int NOT NULL,
  `nilai_perilaku` int NOT NULL,
  `predikat_nilai` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nilai` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_penilaian_kinerja`
--

INSERT INTO `riwayat_penilaian_kinerja` (`id_penilaian`, `nik`, `nama`, `tahun_laporan`, `nama_pejabat_penilai`, `nip_pejabat_penilai`, `golongan_pejabat_penilai`, `jabatan_pejabat_penilai`, `unor_pejabat_penilai`, `nilai_kinerja`, `nilai_perilaku`, `predikat_nilai`, `nilai`) VALUES
(5, 202020, 'anandah', 444, 'ndsnjngjfnk', '34332', 'bfvgc', 'fgbcv', 'fgbhf', 3, 3, 'd', 'Screenshot 2024-03-23 140145.png'),
(8, 310103, 'yoga', 2003, 'ndsnjngjfnk', '34332', 'bfvgc', 'fgbcv', 'fgbhf', 9, 9, 'a', 'angg.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_satya_lencana`
--

CREATE TABLE `riwayat_satya_lencana` (
  `id_satya_lencana` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_sk` varchar(20) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tmt_sk` date NOT NULL,
  `tahun` int NOT NULL,
  `satya_lencana` enum('satya lencana x','satya lencana xx','satya lencana xxx') NOT NULL,
  `satlen` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `riwayat_satya_lencana`
--

INSERT INTO `riwayat_satya_lencana` (`id_satya_lencana`, `nik`, `nama`, `no_sk`, `tgl_sk`, `tmt_sk`, `tahun`, `satya_lencana`, `satlen`) VALUES
(3, 202020, 'anandah', 'fd', '2024-03-21', '2024-03-02', 99, 'satya lencana x', 'Screenshot 2024-03-23 140145.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_tugas_tambahan`
--

CREATE TABLE `riwayat_tugas_tambahan` (
  `id_tugas` int NOT NULL,
  `nik` int NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_organisasi` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_tugas_tambahan` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `tmt_awal_tugas_tambahan` date NOT NULL,
  `tmt_akhir_tugas_tambahan` date NOT NULL,
  `nomor_sk` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_sk` date NOT NULL,
  `perangkat_daerah` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tugas` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_tugas_tambahan`
--

INSERT INTO `riwayat_tugas_tambahan` (`id_tugas`, `nik`, `nama`, `unit_organisasi`, `nama_tugas_tambahan`, `tmt_awal_tugas_tambahan`, `tmt_akhir_tugas_tambahan`, `nomor_sk`, `tanggal_sk`, `perangkat_daerah`, `tugas`) VALUES
(2, 9849809, 'ellok ananda', 'jfnj', 'nfnd kkk', '2024-03-06', '2024-03-13', 'fd', '2024-03-23', 'fd', ''),
(3, 202020, 'anandah', 'nnmkkkk', 'm,mnm,', '2024-03-12', '2024-03-10', 'fgvhh', '2024-03-17', 'nnnm', '20240302233126877.jpg'),
(4, 310103, 'yoga', 'asdf', 'nfnd ', '2024-03-22', '2024-03-14', '904', '2024-03-09', 'fd', 'angg.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_riwayat_hukuman_disiplin`
-- (See below for the actual view)
--
CREATE TABLE `v_riwayat_hukuman_disiplin` (
`alasan_hukum_disiplin` text
,`dasar_hukum_disiplin` varchar(25)
,`deskripsi_hukuman_disiplin` text
,`hd` varchar(200)
,`id_hukuman` int
,`id_jenis_hukuman` int
,`id_tingkat_hukuman` int
,`jenis_hukuman` varchar(100)
,`lama_hukuman_bulan` int
,`lama_hukuman_tahun` int
,`nama` varchar(25)
,`nik` int
,`nomor_sk` varchar(20)
,`tanggal_sk_hukuman` date
,`tingkat_hukuman` varchar(50)
,`tmt_akhir_hukuman_disiplin` date
,`tmt_awal_hukuman_disiplin` date
);

-- --------------------------------------------------------

--
-- Structure for view `v_riwayat_hukuman_disiplin`
--
DROP TABLE IF EXISTS `v_riwayat_hukuman_disiplin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_riwayat_hukuman_disiplin`  AS SELECT `riwayat_hukuman_disiplin`.`id_hukuman` AS `id_hukuman`, `riwayat_hukuman_disiplin`.`nik` AS `nik`, `riwayat_hukuman_disiplin`.`nama` AS `nama`, `riwayat_hukuman_disiplin`.`id_jenis_hukuman` AS `id_jenis_hukuman`, `riwayat_hukuman_disiplin`.`nomor_sk` AS `nomor_sk`, `riwayat_hukuman_disiplin`.`tanggal_sk_hukuman` AS `tanggal_sk_hukuman`, `riwayat_hukuman_disiplin`.`tmt_awal_hukuman_disiplin` AS `tmt_awal_hukuman_disiplin`, `riwayat_hukuman_disiplin`.`lama_hukuman_tahun` AS `lama_hukuman_tahun`, `riwayat_hukuman_disiplin`.`lama_hukuman_bulan` AS `lama_hukuman_bulan`, `riwayat_hukuman_disiplin`.`tmt_akhir_hukuman_disiplin` AS `tmt_akhir_hukuman_disiplin`, `riwayat_hukuman_disiplin`.`dasar_hukum_disiplin` AS `dasar_hukum_disiplin`, `riwayat_hukuman_disiplin`.`deskripsi_hukuman_disiplin` AS `deskripsi_hukuman_disiplin`, `riwayat_hukuman_disiplin`.`alasan_hukum_disiplin` AS `alasan_hukum_disiplin`, `riwayat_hukuman_disiplin`.`hd` AS `hd`, `ref_tingkat_hukuman`.`tingkat_hukuman` AS `tingkat_hukuman`, `ref_jenis_hukuman`.`jenis_hukuman` AS `jenis_hukuman`, `ref_jenis_hukuman`.`id_tingkat_hukuman` AS `id_tingkat_hukuman` FROM ((`riwayat_hukuman_disiplin` join `ref_jenis_hukuman` on((`riwayat_hukuman_disiplin`.`id_jenis_hukuman` = `ref_jenis_hukuman`.`id_jenis_hukuman`))) join `ref_tingkat_hukuman` on((`ref_jenis_hukuman`.`id_tingkat_hukuman` = `ref_tingkat_hukuman`.`id_tingkat_hukuman`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `ref_jenis_hukuman`
--
ALTER TABLE `ref_jenis_hukuman`
  ADD PRIMARY KEY (`id_jenis_hukuman`);

--
-- Indexes for table `ref_tingkat_hukuman`
--
ALTER TABLE `ref_tingkat_hukuman`
  ADD PRIMARY KEY (`id_tingkat_hukuman`);

--
-- Indexes for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  ADD PRIMARY KEY (`id_diklat`),
  ADD KEY `riwayat_diklat_ibfk_1` (`nik`);

--
-- Indexes for table `riwayat_golongan`
--
ALTER TABLE `riwayat_golongan`
  ADD PRIMARY KEY (`id_golongan`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `riwayat_hukuman_disiplin`
--
ALTER TABLE `riwayat_hukuman_disiplin`
  ADD PRIMARY KEY (`id_hukuman`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  ADD PRIMARY KEY (`id_jabatan`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `riwayat_keluarga`
--
ALTER TABLE `riwayat_keluarga`
  ADD PRIMARY KEY (`id_keluarga`),
  ADD KEY `nik` (`nik`),
  ADD KEY `nik_keluarga` (`nik_keluarga`);

--
-- Indexes for table `riwayat_kenaikan_gaji_berkala`
--
ALTER TABLE `riwayat_kenaikan_gaji_berkala`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indexes for table `riwayat_kursus`
--
ALTER TABLE `riwayat_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `riwayat_mutasi_cpns_ke_pns`
--
ALTER TABLE `riwayat_mutasi_cpns_ke_pns`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `riwayat_pangkat`
--
ALTER TABLE `riwayat_pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `riwayat_penghargaan`
--
ALTER TABLE `riwayat_penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `riwayat_penilaian_kinerja`
--
ALTER TABLE `riwayat_penilaian_kinerja`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `riwayat_satya_lencana`
--
ALTER TABLE `riwayat_satya_lencana`
  ADD PRIMARY KEY (`id_satya_lencana`);

--
-- Indexes for table `riwayat_tugas_tambahan`
--
ALTER TABLE `riwayat_tugas_tambahan`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pegawai`
--
ALTER TABLE `daftar_pegawai`
  MODIFY `nik` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310104;

--
-- AUTO_INCREMENT for table `riwayat_diklat`
--
ALTER TABLE `riwayat_diklat`
  MODIFY `id_diklat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `riwayat_golongan`
--
ALTER TABLE `riwayat_golongan`
  MODIFY `id_golongan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `riwayat_hukuman_disiplin`
--
ALTER TABLE `riwayat_hukuman_disiplin`
  MODIFY `id_hukuman` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `riwayat_jabatan`
--
ALTER TABLE `riwayat_jabatan`
  MODIFY `id_jabatan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `riwayat_keluarga`
--
ALTER TABLE `riwayat_keluarga`
  MODIFY `id_keluarga` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayat_kenaikan_gaji_berkala`
--
ALTER TABLE `riwayat_kenaikan_gaji_berkala`
  MODIFY `id_gaji` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `riwayat_kursus`
--
ALTER TABLE `riwayat_kursus`
  MODIFY `id_kursus` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_mutasi_cpns_ke_pns`
--
ALTER TABLE `riwayat_mutasi_cpns_ke_pns`
  MODIFY `id_mutasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `riwayat_pangkat`
--
ALTER TABLE `riwayat_pangkat`
  MODIFY `id_pangkat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_pendidikan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `riwayat_penghargaan`
--
ALTER TABLE `riwayat_penghargaan`
  MODIFY `id_penghargaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `riwayat_penilaian_kinerja`
--
ALTER TABLE `riwayat_penilaian_kinerja`
  MODIFY `id_penilaian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `riwayat_satya_lencana`
--
ALTER TABLE `riwayat_satya_lencana`
  MODIFY `id_satya_lencana` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_tugas_tambahan`
--
ALTER TABLE `riwayat_tugas_tambahan`
  MODIFY `id_tugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
