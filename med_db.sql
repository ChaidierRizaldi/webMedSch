-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 02:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `med_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blok`
--

CREATE TABLE `blok` (
  `id_blok` int(11) NOT NULL,
  `nama_blok` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blok`
--

INSERT INTO `blok` (`id_blok`, `nama_blok`) VALUES
(1, 'Blok 3.1 Kehamilan Dan Masalah Reproduksi'),
(2, 'Blok 3.2 Masalah Pada Anak'),
(3, 'Blok 3.3 Masalah Pada Remaja'),
(4, 'Blok 3.4 Masalah Pada Dewasa I'),
(5, 'Blok 3.5 Masalah pada Dewasa II'),
(6, 'Blok 4.1 Seribu Hari Pertama Kehidupan'),
(7, 'Blok 4.2 Kegawatdaruratan'),
(8, 'Blok 4.3 Komprehensif Klinik'),
(9, 'Blok 4.4 Kesehatan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `blok_tiap_mahasiswa`
--

CREATE TABLE `blok_tiap_mahasiswa` (
  `id` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blok_tiap_mahasiswa`
--

INSERT INTO `blok_tiap_mahasiswa` (`id`, `id_mhs`, `id_blok`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 3, 1),
(5, 3, 2),
(6, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blok_tiap_pengajar`
--

CREATE TABLE `blok_tiap_pengajar` (
  `id` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blok_tiap_pengajar`
--

INSERT INTO `blok_tiap_pengajar` (`id`, `id_pengajar`, `id_blok`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_blok` int(11) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `jam` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL,
  `ruang_kelas` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `angkatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_pengajar`, `id_kelompok`, `id_blok`, `tanggal`, `jam`, `mata_kuliah`, `ruang_kelas`, `status`, `note`, `angkatan`) VALUES
(1, 1, 1, 1, '2020/09/02', '08.00 - 08.50\r\n09.00 - 09.50', 'Pengantar Blok |\r\nSosialisasi OSCE Ket. Medik & IPM', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(2, 15, 1, 1, '2020/09/02', '10.00 - 10.50\r\n11.00 - 11.50', 'Tutorial SK 1 (1)', 'Fakultas Kedokteran UII', 1, NULL, 17),
(3, 15, 1, 1, '2020/09/03', '08.00 - 08.50\r\n09.00 - 09.50', 'Obgyn : Obstetri Panggul', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(4, 9, 2, 1, '2020/09/03', '10.00 - 10.50\r\n11.00 - 11.50', 'Medik 1', 'Fakultas Kedokteran UII', 1, NULL, 17),
(5, 15, 2, 1, '2020/09/04', '08.00 - 08.50\r\n09.00 - 09.50', 'Obgyn : Pemekrisaan Penunjang Dalam Kehamilan', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(6, 15, 2, 1, '2020/09/04', '10.00 - 10.50\r\n11.00 - 11.50', 'Tutorial SK 1 (2)', 'Fakultas Kedokteran UII', 1, NULL, 17),
(7, 9, 2, 1, '2020/09/05', '10.00 - 10.50\r\n11.00 - 11.50', 'Medik 2', 'Fakultas Kedokteran UII', 1, NULL, 17),
(8, 9, 2, 1, '2020/09/05', '13.00 - 13.50\r\n14.00 - 14.50', 'Medik 3', 'Fakultas Kedokteran UII', 1, NULL, 17),
(9, 15, 2, 1, '2020/09/06', '08.00 - 08.50\r\n09.00 - 09.50', 'Obgyn : Kehamilan Dengan Resiko 1', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(10, 1, 2, 2, '2020/09/20', '08.00 - 08.50\r\n09.00 - 09.50', 'Pengantar Blok ', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(11, 1, 2, 2, '2020/09/20', '13.00 - 13.50\r\n14.00 - 14.50', 'EBM : Telaah Kritis Jurnal Harm dan Etiology', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(12, 2, 2, 2, '2020/09/21', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 1', 'Fakultas Kedokteran UII', 1, NULL, 17),
(13, 1, 2, 2, '2020/09/21', '10.00 - 10.50\r\n11.00 - 11.50', 'IKA : Gangguan Pertumbuhan Pada Anak', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(14, 3, 2, 2, '2020/09/21', '13.00 - 13.50\r\n14.00 - 14.50', 'Praktikum Kel. B : Parasitologi 1', 'Laboratorium Fakultas Kedokteran UII', 1, NULL, 17),
(15, 2, 2, 2, '2020/09/21', '15.15 - 16.00\r\n16.00 - 16.50', 'Praktikum Kel. C : Parasitologi 1', 'Laboratorium Fakultas Kedokteran UII', 1, NULL, 17),
(16, 2, 2, 2, '2020/09/22', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 2', 'Fakultas Kedokteran UII', 1, NULL, 17),
(17, 1, 2, 2, '2020/09/22', '10.00 - 10.50\r\n11.00 - 11.50', 'IKA : Gangguan Perkembangan Pada Anak', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(18, 3, 2, 2, '2020/09/22', '13.00 - 13.50\r\n14.00 - 14.50', 'Biokimia : Gizi Dan Tumbuh Kembang Anak', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(19, 2, 2, 2, '2020/09/22', '15.15 - 16.00\r\n16.00 - 16.50', 'Praktikum Kel. A : Parasitologi 1', 'Laboratorium Fakultas Kedokteran UII', 1, NULL, 17),
(20, 1, 2, 2, '2020/09/23', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 3 + MK', 'Fakultas Kedokteran UII', 1, NULL, 17),
(21, 2, 2, 2, '2020/09/23', '10.00 - 10.50\r\n11.00 - 11.50', 'Ket. Medik 1 Klasikal : (Pemeriksaan Fisik Pada Anak', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(22, 1, 2, 2, '2020/09/23', '13.00 - 13.50\r\n14.00 - 14.50', 'Ket. Medik 2 (KPSP/DENVER II)', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(23, 3, 2, 2, '2020/09/24', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 4', 'Fakultas Kedokteran UII', 1, NULL, 17),
(24, 2, 2, 2, '2020/09/24', '10.00 - 10.50\r\n11.00 - 11.50', 'IKA : Perinatologi, Neonatus Normal', 'Gedung Kuliah Umum (Prof. Dr. Sardjito)', 1, NULL, 17),
(25, 2, 2, 2, '2020/09/24', '15.15 - 16.00\r\n16.00 - 16.50', 'Praktikum Kel. A : Parasitologi 2', 'Laboratorium Fakultas Kedokteran UII', 1, NULL, 17),
(26, 2, 2, 2, '2020/09/22', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 2', 'Fakultas Kedokteran UII', 1, NULL, 17),
(27, 4, 3, 2, '2020/09/22', '08.00 - 08.50\r\n09.00 - 09.50', 'Tutorial 2', 'Fakultas Kedokteran UII', 1, NULL, 17);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `nama_kelompok` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nama_kelompok`) VALUES
(1, 'kelompok 1'),
(2, 'kelompok 2'),
(3, 'Kelompok 3'),
(4, 'Kelompok 4');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `id_kelompok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `email`, `password`, `nama_lengkap`, `nim`, `id_kelompok`) VALUES
(1, 'test@email.com', '1234', 'testing', '17523001', 1),
(2, 'kukuhAnugrah@gmail.com', '$2b$10$snnhWUTfkn4exo.Scc/vs.iOX769N.KkVR6Sc.isOEhRGyZMtPr/C', 'kukuh Anugrah', '17523002', 1),
(3, 'rizaldiBali@gmail.com', '$2b$10$0JyBfjxD0YijdSxr/EPGruwpc.Qh8N1QsgS0cdHjbpMJer965Phta', 'Rizaldi Bali', '17523003', 2),
(4, '17711181@uii.ac.id', 'yanti123', 'Yanti Purnama Sari', '17711181', 1),
(5, '17711162@uii.ac.id', 'silvi123', 'Silvi Rahmawati', '17711162', 1),
(6, '17711097@uii.ac.id', 'sifa123', 'Syifa\'a Maharani I', '17711097', 2),
(7, '17711033@uii.ac.id', 'rizal123', 'Rizal Ahsan Rizqi', '17711033', 2),
(8, '17711154@uii.ac.id', 'rusdi123', 'Fadila Rusdi AS', '17711154', 3),
(9, '17711122@uii.ac.id', 'kenny123', 'Kenny Ambarwati', '17711122', 3),
(10, '17711123@uii.ac.id', 'ici123', 'Fristly Nasri', '17711123', 4),
(11, '17711059@uii.ac.id', 'via123', 'Via Rustiana', '17711059', 4),
(12, '17711155@uii.ac.id', 'natasha123', 'Natasha Latifa', '17711155', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `bidang kepakaran` varchar(255) DEFAULT NULL,
  `nidn` varchar(200) DEFAULT NULL,
  `no_hp` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama`, `jabatan`, `bidang kepakaran`, `nidn`, `no_hp`, `email`, `password`, `role`) VALUES
(1, 'dr. Linda Rosita, M.Kes, Sp.PK(K)', 'Dekan', 'Pathologi Klinik', '4009097001', '(0274) 898444', '017110102@uii.ac.id', 'linda123', 1),
(2, 'dr. Erlina Marfianti, M.Sc, Sp.PD', 'Wakil Dekan Bidang Sumber Daya', 'Ilmu Penyakit Dalam', '4009097002', '(0274) 898444', '017110407@uii.ac.id', 'erlina123', 1),
(3, 'dr. Nur Aisyah Jamil, M.Sc', 'Wakil Dekan Bidang Keagamaan, Kemahasiswaan, dan Alumni', 'Ilmu Kesehatan Masyarakat', '4009097003', '(0274) 898444', '097110102@uii.ac.id', 'aisyah123', 1),
(4, 'Dr. dr. Isnatin Miladiyah, M.Kes', 'Ketua Jurusan Kedokteran', 'Farmakologi', '4009097004', '(0274) 898444', 'isnatin@uii.ac.id', 'isnatin123', 1),
(5, 'Dr. dr. Farida Juliantina Rachmawaty, M.Kes', 'Sekretaris Jurusan Kedokteran', 'Mikrobiologi', '4009097005', '	081328584137', '017110101@uii.ac.id', 'farida123', 1),
(6, 'dr. Ana Fauziyati, M.Sc., Sp.PD.', 'Ketua Program Studi Profesi Dokter', 'Ilmu Penyakit Dalam', '4009097006', '(0274) 898444', '	anafauziyati@uii.ac.id', 'ana123', 1),
(7, 'dr. Umatul Khoiriyah, M.Med.Ed, Ph.D', 'Ketua Program Studi Kedokteran – Program Sarjana', 'Medical Education', '4009097007', '(0274) 898444', '047110101@uii.ac.id', 'uma123', 1),
(8, 'dr. Zainuri Sabta Nugraha, M.Sc.', 'Pengajar', 'Anatomi', '4009097008', '(0274) 898444', '027110430@uii.ac.id', 'zainuri123', 1),
(9, 'dr. Fuad Khadafianto, M.MedEd', 'Pengajar', 'Medical Education', '4009097009', '(0274) 898444', '097110403@uii.ac.id', 'fuad123', 1),
(10, 'Prof. Dr. dr. H. Soewadi, MPH, Sp.KJ(K)', 'Pengajar', 'Ilmu Kesehatan Jiwa', '4009097010', '(0274) 898444', '077110437@uii.ac.id\r\n', 'soewadi123', 1),
(11, 'drg. Andy Yok Siswosaputro, M.Kes', 'Pengajar', 'Ilmu Forensik', '4009097011', '(0274) 898444', '107110401@uii.ac.id', 'andy123', 1),
(12, 'Prof.Dr.dr.H.Rusdi Lamsudin, M.Med.Sc., Sp.S(K)', 'Pengajar', 'Ilmu Penyakit Syaraf', '4009097012', '(0274) 898444', '017110301@uii.ac.id', 'rusdi123', 1),
(13, 'dr. Fitria Siwi Nur Rochmah, M. Sc', 'Pengajar', 'Parasitologi', '4009097013', '(0274) 898444', '097110418@uii.ac.id', 'fitria123', 1),
(14, '	dr. Evy Sulistyoningrum, M.Sc', 'Pengajar', 'Histologi', '4009097014', '(0274) 898444', 'evy.sulistyoningrum@uii.ac.id\r\n', 'evy123', 1),
(15, 'dr. Tien Budi Febriani, M.Sc., Sp.A', 'Pengajar', 'Ilmu Kesehatan Anak', '4009097015', '(0274) 898444', '037110417@uii.ac.id', 'tien123', 1),
(16, 'dr. Miranti Dewi Pramaningtyas, M.Sc', 'Pengajar', 'Fisiologi', '4009097016', '089681906268', 'miranti.dewi@uii.ac.id', 'miranti123', 1),
(17, 'Ahmad M. Raf’ie Pratama, S.T., MIT., PH.D.', 'Pengajar', 'Dosen', '4009097017', '083147123567', 'ahmad.rafie@uii.ac.id', 'rafie123', 0),
(18, 'Arrie Kurniawardhani, S.SI., M.KOM.', 'Pengajar', 'Dosen', '4009097018', '087542765098', 'arrie.kurniawardhani@uii.ac.id', 'arrie123', 0),
(19, 'Erika Ramadhani, S.T., M.ENG.', 'Pengajar', 'Dosen', '4009097019', '0875427650900', 'erika@uii.ac.id', 'erika123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `blok_tiap_mahasiswa`
--
ALTER TABLE `blok_tiap_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blok_tiap_pengajar`
--
ALTER TABLE `blok_tiap_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blok`
--
ALTER TABLE `blok`
  MODIFY `id_blok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blok_tiap_mahasiswa`
--
ALTER TABLE `blok_tiap_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blok_tiap_pengajar`
--
ALTER TABLE `blok_tiap_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
