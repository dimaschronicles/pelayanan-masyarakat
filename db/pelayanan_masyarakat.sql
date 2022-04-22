-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2022 at 04:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan_masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kepkel` varchar(128) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_anak` varchar(128) NOT NULL,
  `jk_anak` varchar(20) NOT NULL,
  `tempat_dilahirkan_anak` varchar(128) NOT NULL,
  `tempat_lahir_anak` varchar(128) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelahiran` varchar(20) NOT NULL,
  `kelahiran_ke` int(11) NOT NULL,
  `penolong_kelahiran` varchar(128) NOT NULL,
  `berat_anak` varchar(20) NOT NULL,
  `panjang_anak` varchar(20) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `desa_ibu` varchar(128) NOT NULL,
  `kecamatan_ibu` varchar(128) NOT NULL,
  `kabupaten_ibu` varchar(128) NOT NULL,
  `provinsi_ibu` varchar(128) NOT NULL,
  `kebangsaan_ibu` varchar(128) NOT NULL,
  `warga_negara_ibu` varchar(128) NOT NULL,
  `tgl_pencatatan_perkawinan` date NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `umur_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `desa_ayah` varchar(128) NOT NULL,
  `kecamatan_ayah` varchar(128) NOT NULL,
  `kabupaten_ayah` varchar(128) NOT NULL,
  `provinsi_ayah` varchar(128) NOT NULL,
  `warga_negara_ayah` varchar(128) NOT NULL,
  `kebangsaan_ayah` varchar(128) NOT NULL,
  `nik_pelapor` varchar(20) NOT NULL,
  `nama_pelapor` varchar(128) NOT NULL,
  `umur_pelapor` int(11) NOT NULL,
  `jk_pelapor` varchar(20) NOT NULL,
  `pekerjaan_pelapor` varchar(128) NOT NULL,
  `alamat_pelapor` text NOT NULL,
  `desa_pelapor` varchar(128) NOT NULL,
  `kecamatan_pelapor` varchar(128) NOT NULL,
  `kabupaten_pelapor` varchar(128) NOT NULL,
  `provinsi_pelapor` varchar(128) NOT NULL,
  `nik_saksi_satu` varchar(20) NOT NULL,
  `nama_saksi_satu` varchar(128) NOT NULL,
  `umur_saksi_satu` int(11) NOT NULL,
  `pekerjaan_saksi_satu` varchar(128) NOT NULL,
  `alamat_saksi_satu` text NOT NULL,
  `desa_saksi_satu` varchar(128) NOT NULL,
  `kecamatan_saksi_satu` varchar(128) NOT NULL,
  `kabupaten_saksi_satu` varchar(128) NOT NULL,
  `provinsi_saksi_satu` varchar(128) NOT NULL,
  `nik_saksi_dua` varchar(20) NOT NULL,
  `nama_saksi_dua` varchar(128) NOT NULL,
  `umur_saksi_dua` int(11) NOT NULL,
  `pekerjaan_saksi_dua` varchar(128) NOT NULL,
  `alamat_saksi_dua` text NOT NULL,
  `desa_saksi_dua` varchar(128) NOT NULL,
  `kecamatan_saksi_dua` varchar(128) NOT NULL,
  `kabupaten_saksi_dua` varchar(128) NOT NULL,
  `provinsi_saksi_dua` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `id_user`, `nama_kepkel`, `no_kk`, `nama_anak`, `jk_anak`, `tempat_dilahirkan_anak`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `pukul`, `jenis_kelahiran`, `kelahiran_ke`, `penolong_kelahiran`, `berat_anak`, `panjang_anak`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `kebangsaan_ibu`, `warga_negara_ibu`, `tgl_pencatatan_perkawinan`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `warga_negara_ayah`, `kebangsaan_ayah`, `nik_pelapor`, `nama_pelapor`, `umur_pelapor`, `jk_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `desa_pelapor`, `kecamatan_pelapor`, `kabupaten_pelapor`, `provinsi_pelapor`, `nik_saksi_satu`, `nama_saksi_satu`, `umur_saksi_satu`, `pekerjaan_saksi_satu`, `alamat_saksi_satu`, `desa_saksi_satu`, `kecamatan_saksi_satu`, `kabupaten_saksi_satu`, `provinsi_saksi_satu`, `nik_saksi_dua`, `nama_saksi_dua`, `umur_saksi_dua`, `pekerjaan_saksi_dua`, `alamat_saksi_dua`, `desa_saksi_dua`, `kecamatan_saksi_dua`, `kabupaten_saksi_dua`, `provinsi_saksi_dua`, `tanggal`, `status`) VALUES
(6, 2, 'Anggie', '3525013006770017', 'asd', 'Laki-laki', 'RS/RB', 'asd', '2022-04-14', '14:55:00', 'Tunggal', 2, 'Dokter', '3', '40', '3525013006770017', 'asd', '2022-04-13', 22, 'mhs', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'WNI', '2022-04-13', '3525013006770017', 'asd', '2022-04-11', 22, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'WNI', 'asd', '3525013006770017', 'asd', 22, 'Laki-laki', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3525013006770017', 'asd', 23, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3525013006770017', 'asd', 22, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-04-14', 'dibatalkan');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kepkel` varchar(128) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik_jenazah` varchar(20) NOT NULL,
  `nama_jenazah` varchar(128) NOT NULL,
  `jk_jenazah` varchar(20) NOT NULL,
  `umur_jenazah` int(11) NOT NULL,
  `tempat_lahir_jenazah` varchar(128) NOT NULL,
  `tanggal_lahir_jenazah` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pekerjaan_jenazah` varchar(128) NOT NULL,
  `alamat_jenazah` text NOT NULL,
  `desa_jenazah` varchar(128) NOT NULL,
  `kecamatan_jenazah` varchar(128) NOT NULL,
  `kabupaten_jenazah` varchar(128) NOT NULL,
  `provinsi_jenazah` varchar(128) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `pukul` time NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `sebab_kematian` varchar(255) NOT NULL,
  `tempat_kematian` varchar(255) NOT NULL,
  `yang_menyatakan` varchar(128) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `umur_ibu` int(11) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `desa_ibu` varchar(128) NOT NULL,
  `kecamatan_ibu` varchar(128) NOT NULL,
  `kabupaten_ibu` varchar(128) NOT NULL,
  `provinsi_ibu` varchar(128) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `umur_ayah` int(11) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `desa_ayah` varchar(128) NOT NULL,
  `kecamatan_ayah` varchar(128) NOT NULL,
  `kabupaten_ayah` varchar(128) NOT NULL,
  `provinsi_ayah` varchar(128) NOT NULL,
  `nik_pelapor` varchar(20) NOT NULL,
  `nama_pelapor` varchar(128) NOT NULL,
  `tanggal_lahir_pelapor` date NOT NULL,
  `umur_pelapor` int(11) NOT NULL,
  `pekerjaan_pelapor` varchar(128) NOT NULL,
  `alamat_pelapor` text NOT NULL,
  `desa_pelapor` varchar(128) NOT NULL,
  `kecamatan_pelapor` varchar(128) NOT NULL,
  `kabupaten_pelapor` varchar(128) NOT NULL,
  `provinsi_pelapor` varchar(128) NOT NULL,
  `nik_saksi_satu` varchar(20) NOT NULL,
  `nama_saksi_satu` varchar(128) NOT NULL,
  `tgl_lhr_saksi_satu` date NOT NULL,
  `umur_saksi_satu` int(11) NOT NULL,
  `pekerjaan_saksi_satu` varchar(128) NOT NULL,
  `alamat_saksi_satu` text NOT NULL,
  `desa_saksi_satu` varchar(128) NOT NULL,
  `kecamatan_saksi_satu` varchar(128) NOT NULL,
  `kabupaten_saksi_satu` varchar(128) NOT NULL,
  `provinsi_saksi_satu` varchar(128) NOT NULL,
  `nik_saksi_dua` varchar(20) NOT NULL,
  `nama_saksi_dua` varchar(128) NOT NULL,
  `tgl_lhr_saksi_dua` date NOT NULL,
  `umur_saksi_dua` int(11) NOT NULL,
  `pekerjaan_saksi_dua` varchar(128) NOT NULL,
  `alamat_saksi_dua` text NOT NULL,
  `desa_saksi_dua` varchar(128) NOT NULL,
  `kecamatan_saksi_dua` varchar(128) NOT NULL,
  `kabupaten_saksi_dua` varchar(128) NOT NULL,
  `provinsi_saksi_dua` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `id_user`, `nama_kepkel`, `no_kk`, `nik_jenazah`, `nama_jenazah`, `jk_jenazah`, `umur_jenazah`, `tempat_lahir_jenazah`, `tanggal_lahir_jenazah`, `agama`, `pekerjaan_jenazah`, `alamat_jenazah`, `desa_jenazah`, `kecamatan_jenazah`, `kabupaten_jenazah`, `provinsi_jenazah`, `anak_ke`, `pukul`, `tanggal_kematian`, `sebab_kematian`, `tempat_kematian`, `yang_menyatakan`, `nik_ibu`, `nama_ibu`, `tanggal_lahir_ibu`, `umur_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `desa_ibu`, `kecamatan_ibu`, `kabupaten_ibu`, `provinsi_ibu`, `nik_ayah`, `nama_ayah`, `tanggal_lahir_ayah`, `umur_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `desa_ayah`, `kecamatan_ayah`, `kabupaten_ayah`, `provinsi_ayah`, `nik_pelapor`, `nama_pelapor`, `tanggal_lahir_pelapor`, `umur_pelapor`, `pekerjaan_pelapor`, `alamat_pelapor`, `desa_pelapor`, `kecamatan_pelapor`, `kabupaten_pelapor`, `provinsi_pelapor`, `nik_saksi_satu`, `nama_saksi_satu`, `tgl_lhr_saksi_satu`, `umur_saksi_satu`, `pekerjaan_saksi_satu`, `alamat_saksi_satu`, `desa_saksi_satu`, `kecamatan_saksi_satu`, `kabupaten_saksi_satu`, `provinsi_saksi_satu`, `nik_saksi_dua`, `nama_saksi_dua`, `tgl_lhr_saksi_dua`, `umur_saksi_dua`, `pekerjaan_saksi_dua`, `alamat_saksi_dua`, `desa_saksi_dua`, `kecamatan_saksi_dua`, `kabupaten_saksi_dua`, `provinsi_saksi_dua`, `tanggal`, `status`) VALUES
(1, 2, 'asd', '3315140205144444', '3315140205144444', 'asd', 'Laki-laki', 299, 'asd', '2022-04-14', 'Katolik', '', 'asd', 'asd', 'asd', 'asd', 'asd', 123, '21:43:00', '2022-04-14', 'Wabah Penyakit', 'asd', 'Kepolisian', '3315140205144444', 'asd', '2022-04-14', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3315140205144444', 'asd', '2022-04-14', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3315140205144444', 'asd', '2022-04-14', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3315140205144444', 'asd', '2022-04-14', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '3315140205144444', 'asd', '2022-04-14', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '2022-04-14', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id_suket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warga_negara` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `tempat_tinggal` text NOT NULL,
  `bukti_nik` varchar(20) NOT NULL,
  `bukti_no_kk` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `keterangan_lain` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id_suket`, `id_user`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `warga_negara`, `agama`, `pekerjaan`, `tempat_tinggal`, `bukti_nik`, `bukti_no_kk`, `keperluan`, `keterangan_lain`, `tanggal`, `status`) VALUES
(1, 2, 'asd', 'Laki-laki', 'asd', '2022-04-05', 'Indonesia', 'Kristen', 'asd', 'asd', '3525011711086076', '3315140205144444', 'asd', 'asd', '2022-04-15', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id_kk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `rt` int(11) NOT NULL,
  `rw` int(11) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `alasan` varchar(128) NOT NULL,
  `jumlah_keluarga` int(11) NOT NULL,
  `anggota_1_nik` varchar(20) NOT NULL,
  `anggota_1_nama` varchar(128) NOT NULL,
  `anggota_2_nik` varchar(20) DEFAULT NULL,
  `anggota_2_nama` varchar(128) DEFAULT NULL,
  `anggota_3_nik` varchar(20) DEFAULT NULL,
  `anggota_3_nama` varchar(128) DEFAULT NULL,
  `anggota_4_nik` varchar(20) DEFAULT NULL,
  `anggota_4_nama` varchar(128) DEFAULT NULL,
  `anggota_5_nik` varchar(20) DEFAULT NULL,
  `anggota_5_nama` varchar(128) DEFAULT NULL,
  `anggota_6_nik` varchar(20) DEFAULT NULL,
  `anggota_6_nama` varchar(128) DEFAULT NULL,
  `anggota_7_nik` varchar(20) DEFAULT NULL,
  `anggota_7_nama` varchar(128) DEFAULT NULL,
  `anggota_8_nik` varchar(20) DEFAULT NULL,
  `anggota_8_nama` varchar(128) DEFAULT NULL,
  `anggota_9_nik` varchar(20) DEFAULT NULL,
  `anggota_9_nama` varchar(128) DEFAULT NULL,
  `anggota_10_nik` varchar(20) DEFAULT NULL,
  `anggota_10_nama` varchar(128) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `id_user`, `nama_lengkap`, `no_kk`, `nik`, `alamat`, `rt`, `rw`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `telepon`, `alasan`, `jumlah_keluarga`, `anggota_1_nik`, `anggota_1_nama`, `anggota_2_nik`, `anggota_2_nama`, `anggota_3_nik`, `anggota_3_nama`, `anggota_4_nik`, `anggota_4_nama`, `anggota_5_nik`, `anggota_5_nama`, `anggota_6_nik`, `anggota_6_nama`, `anggota_7_nik`, `anggota_7_nama`, `anggota_8_nik`, `anggota_8_nama`, `anggota_9_nik`, `anggota_9_nama`, `anggota_10_nik`, `anggota_10_nama`, `tanggal`, `status`) VALUES
(1, 2, 'Anggie Febriansyah', '3525011711086061', '3525011711086076', 'Jatinegara', 2, 3, 'Jatinegara', 'Sempor', 'Kebumen', 'Jawa Tengah', '', 'Karena Membentuk Keluarga Baru', 2, '3525011711086061', 'Anggie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-19', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `id_ktp` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_kk` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`id_ktp`, `id_user`, `jenis`, `nama_lengkap`, `nomor_kk`, `nik`, `alamat`, `rt`, `rw`, `dusun`, `tanggal`, `status`) VALUES
(3, 2, 'Penggantian', 'Anggie Febriansyah', '3525011711086061', '3525013006770017', 'Jatinegara', '02', '04', 'Jatinegara', '2022-04-08', 'dibatalkan'),
(6, 2, 'Perpanjangan', 'Anggie Febriansyah', '3525013006770017', '3525011711086076', 'Jatinegara', '01', '02', 'Jatinegara', '2022-04-17', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `nikah`
--

CREATE TABLE `nikah` (
  `id_nikah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `warga_negara` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `berlaku` date NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nikah`
--

INSERT INTO `nikah` (`id_nikah`, `id_user`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `warga_negara`, `agama`, `pekerjaan`, `tempat_tinggal`, `nik`, `no_kk`, `keperluan`, `berlaku`, `keterangan`, `tanggal`, `status`) VALUES
(2, 2, 'Anggie Febriansyah', 'Laki-laki', 'Kebumen', '2022-04-08', 'Indonesia', 'Islam', 'Kuli', 'Sempor', '3525011711086076', '3315140205144444', 'Nikah', '2022-04-08', '-', '2022-04-08', 'dibatalkan'),
(3, 3, 'Farhan Ramdhani Ashari', 'Laki-laki', 'Bumiayu', '2022-02-02', 'Indonesia', 'Islam', 'Kuli', 'Sempor', '3525011711086076', '3315140205144444', 'Nikah', '0000-00-00', '-', '2022-04-08', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `id_pindah` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama_kepkel` varchar(255) NOT NULL,
  `alamat_sekarang` text NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `jumlah_keluarga` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`id_pindah`, `id_user`, `nik`, `nama_lengkap`, `no_kk`, `nama_kepkel`, `alamat_sekarang`, `alamat_tujuan`, `jumlah_keluarga`, `tanggal`, `status`) VALUES
(1, 2, '3525013006770017', 'Anggie Febriansyah', '3525011711086063', 'Anggie', 'Jatinegara', 'Purwokerto Utara', '3', '2022-04-08', 'selesai'),
(2, 2, '3525013006770017', 'Anggie Febriansyah', '3525011711086063', 'Anggie', 'Purwokerto Utara', 'Baturraden', '3', '2022-04-08', 'menunggu'),
(3, 3, '3525011711086063', 'Farhan Ramdhani Ashari', '3525011711086063', 'Farhan', 'Bantarkawung', 'Purwokerto Barat', '2', '2022-04-08', 'dibatalkan'),
(7, 3, '3525011711086063', 'Farhan', '3525011711086063', 'Hann', 'Pwt', 'Bmy', '2', '2022-04-11', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `sktm`
--

CREATE TABLE `sktm` (
  `id_sktm` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `warga_negara` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sktm`
--

INSERT INTO `sktm` (`id_sktm`, `id_user`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `warga_negara`, `agama`, `nik`, `pekerjaan`, `alamat`, `keperluan`, `tanggal`, `status`) VALUES
(2, 3, 'Farhan Ramdhani Ashari', 'Laki-laki', '1999-12-08', 'Purwokerto', 'Indonesia', 'Islam', '3525011711086063', 'Mahasiswa', 'Bantarkawung', 'Beasiswa', '2022-04-08', 'dibatalkan'),
(4, 3, 'Farhan Ramdhani Ashari', 'Laki-laki', '1999-12-08', 'Purwokerto', 'Indonesia', 'Islam', '3525011711086063', 'Mahasiswa', 'Bantarkawung', 'Bantuan SPP', '2022-04-08', 'selesai'),
(5, 2, 'Anggie Febriansyah', 'Laki-laki', '2022-03-29', 'Kebumen', 'Indonesia', 'Islam', '3525013006770017', 'Mahasiswa', 'Jatinegara', 'Beasiswa', '2022-04-17', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nik`, `nama`, `email`, `no_hp`, `password`, `role`) VALUES
(1, '3525011711086076', 'Dimas Chronicles', 'dimaschronicles@gmail.com', '081903304446', '$2y$10$OLZyoSr5VsOXtftwLT732u4c9m2/UYL09Gop0HeDsdb24DjwkZSAW', 1),
(2, '3525013006770017', 'Anggie', 'anggie@gmail.com', '08981086464', '$2y$10$15ba60OsrkhXlJuL8TuPqeyus0Aci1R7qc6TLjUsucdgvPCrjwkpS', 2),
(3, '3525011711086063 ', 'Farhan', 'farhan@gmail.com', '085198761234', '$2y$10$OLZyoSr5VsOXtftwLT732u4c9m2/UYL09Gop0HeDsdb24DjwkZSAW', 2);

-- --------------------------------------------------------

--
-- Table structure for table `waris`
--

CREATE TABLE `waris` (
  `id_waris` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_alm` varchar(128) NOT NULL,
  `tempat_lahir_alm` varchar(128) NOT NULL,
  `tanggal_lahir_alm` date NOT NULL,
  `pekerjaan_alm` varchar(128) NOT NULL,
  `alamat_alm` text NOT NULL,
  `nama_ahli` varchar(128) NOT NULL,
  `tempat_lahir_ahli` varchar(128) NOT NULL,
  `tanggal_lahir_ahli` date NOT NULL,
  `pekerjaan_ahli` varchar(128) NOT NULL,
  `alamat_ahli` text NOT NULL,
  `keterangan_lain` text DEFAULT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waris`
--

INSERT INTO `waris` (`id_waris`, `id_user`, `nama_alm`, `tempat_lahir_alm`, `tanggal_lahir_alm`, `pekerjaan_alm`, `alamat_alm`, `nama_ahli`, `tempat_lahir_ahli`, `tanggal_lahir_ahli`, `pekerjaan_ahli`, `alamat_ahli`, `keterangan_lain`, `tanggal`, `status`) VALUES
(1, 2, 'asd', 'asd', '2022-04-20', 'asd', 'asd', '', 'asd', '2022-04-20', 'asd', 'asd', NULL, '2022-04-20', 'menunggu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id_suket`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id_ktp`);

--
-- Indexes for table `nikah`
--
ALTER TABLE `nikah`
  ADD PRIMARY KEY (`id_nikah`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indexes for table `sktm`
--
ALTER TABLE `sktm`
  ADD PRIMARY KEY (`id_sktm`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `waris`
--
ALTER TABLE `waris`
  ADD PRIMARY KEY (`id_waris`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id_suket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id_ktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nikah`
--
ALTER TABLE `nikah`
  MODIFY `id_nikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sktm`
--
ALTER TABLE `sktm`
  MODIFY `id_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `waris`
--
ALTER TABLE `waris`
  MODIFY `id_waris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
