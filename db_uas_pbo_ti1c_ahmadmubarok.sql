-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 07:38 AM
-- Server version: 8.0.45
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_ti1c_ahmadmubarok`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) DEFAULT NULL,
  `hari_kerja_masuk` date DEFAULT NULL,
  `gaji_dasar_per_hari` decimal(15,2) DEFAULT NULL,
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(15,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(15,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Ahmad Mubarok', 'IT', '2023-01-10', '500000.00', 'tetap', NULL, NULL, '2000000.00', 'STOCK-001', NULL, NULL),
(2, 'Budi Santoso', 'HR', '2023-02-15', '450000.00', 'tetap', NULL, NULL, '1800000.00', 'STOCK-002', NULL, NULL),
(3, 'Citra Lestari', 'Finance', '2023-03-01', '550000.00', 'tetap', NULL, NULL, '2200000.00', 'STOCK-003', NULL, NULL),
(4, 'Dedi Kurniawan', 'Marketing', '2023-04-10', '400000.00', 'tetap', NULL, NULL, '1500000.00', 'STOCK-004', NULL, NULL),
(5, 'Eka Putri', 'IT', '2023-05-20', '520000.00', 'tetap', NULL, NULL, '2100000.00', 'STOCK-005', NULL, NULL),
(6, 'Fajar Hidayat', 'Operations', '2023-06-12', '480000.00', 'tetap', NULL, NULL, '1900000.00', 'STOCK-006', NULL, NULL),
(7, 'Gita Permata', 'Sales', '2023-07-05', '470000.00', 'tetap', NULL, NULL, '1950000.00', 'STOCK-007', NULL, NULL),
(8, 'Hadi Wijaya', 'IT', '2024-01-05', '300000.00', 'kontrak', 12, 'Agensi Tekno', NULL, NULL, NULL, NULL),
(9, 'Indah Sari', 'Marketing', '2024-02-10', '280000.00', 'kontrak', 6, 'Agensi Kreatif', NULL, NULL, NULL, NULL),
(10, 'Joko Susilo', 'Operations', '2024-03-15', '290000.00', 'kontrak', 24, 'Global Staffing', NULL, NULL, NULL, NULL),
(11, 'Kiki Amelia', 'Finance', '2024-04-01', '310000.00', 'kontrak', 12, 'Agensi Tekno', NULL, NULL, NULL, NULL),
(12, 'Lutfi Hakim', 'IT', '2024-05-10', '320000.00', 'kontrak', 18, 'Agensi Maju', NULL, NULL, NULL, NULL),
(13, 'Maya Anggraini', 'HR', '2024-06-01', '270000.00', 'kontrak', 6, 'Agensi Kreatif', NULL, NULL, NULL, NULL),
(14, 'Nanda Pratama', 'Sales', '2024-07-01', '295000.00', 'kontrak', 12, 'Global Staffing', NULL, NULL, NULL, NULL),
(15, 'Oscar Dewa', 'IT', '2025-01-05', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-001'),
(16, 'Putri Indah', 'Marketing', '2025-01-10', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-002'),
(17, 'Qori Febri', 'Finance', '2025-02-01', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-003'),
(18, 'Rian Hidayat', 'IT', '2025-02-15', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-004'),
(19, 'Siska Amelia', 'HR', '2025-03-01', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-005'),
(20, 'Taufik Hidayat', 'Operations', '2025-03-10', '100000.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'KM-2025-006');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
