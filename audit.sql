-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 11:19 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depcont` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `approver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auditees`
--

CREATE TABLE `auditees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auditees`
--

INSERT INTO `auditees` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'PJO', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(2, 'Dept Head', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(3, 'Section Head', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(4, 'Safety Contractor', '2019-06-15 09:18:12', '2019-06-15 09:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `auditors`
--

CREATE TABLE `auditors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auditors`
--

INSERT INTO `auditors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Luhut Lumban Raja', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(2, 'Traju AA', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(3, 'Hendrianto Tan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(4, 'Ezra Boron', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(5, 'Andhi HP', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(6, 'Emyliana M', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(7, 'Charles S', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(8, 'Suhendrawan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(9, 'Ryandi Hermawan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(10, 'Anisa Nanhidayah', '2019-06-15 09:18:12', '2019-06-15 09:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Kesesuaian', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(2, 'Observasi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(3, 'Minor', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(4, 'Mayor', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(5, 'Kritikal', '2019-06-15 09:18:12', '2019-06-15 09:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'CV. Alif Pratama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(2, 'CV. Aqualdo', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(3, 'CV. Bena Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(4, 'CV. Bintang Azzahra', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(5, 'CV. Binungan Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(6, 'CV. Bukit Manimbora', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(7, 'CV. Citra Karya Setia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(8, 'CV. Damayanti', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(9, 'CV. Derawan Beach Cafe', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(10, 'CV. Gamping Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(11, 'CV. Harapanku', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(12, 'CV. Haryda Oto', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(13, 'CV. Hulu Putra Banua', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(14, 'CV. Juwita', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(15, 'CV. Karya Amanda', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(16, 'CV. Kirana Lestari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(17, 'CV. Langgan Jaya Abadi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(18, 'CV. Megah Jaya Abadi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(19, 'CV. Nusantara Tehnik', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(20, 'CV. Putri Dewi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(21, 'CV. Rangga', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(22, 'CV. Restu Amanah', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(23, 'CV. Rimba Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(24, 'CV. Sambaliung Fiber', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(25, 'CV. Santoso Putra Mandiri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(26, 'CV. Sumber Daya Tasuk', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(27, 'CV. Surya Wijaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(28, 'CV. Teguh Harapan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(29, 'CV. Tiara', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(30, 'CV. Triana Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(31, 'CV. Tunas Mekar', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(32, 'CV. Varissa Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(33, 'Koperasi Banua Sanggam Bersama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(34, 'Koperasi Bersama Kita Bisa', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(35, 'Koperasi Bintang Harapan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(36, 'Koperasi Gaai Mandiri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(37, 'Koperasi Karyawan Bina Bersama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(38, 'Koperasi Maju Bersama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(39, 'Koperasi Saturut', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(40, 'PT. Abadi Raya Commerce', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(41, 'PT. Aditama Putra Grup', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(42, 'PT. Aesculap', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(43, 'PT. Agricon Putra Citra Optima', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(44, 'PT. Agung Buana Rejeki', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(45, 'PT. AKR Corporindo', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(46, 'PT. Altrak 1978', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(47, 'PT. Andalan Multi Kencana', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(48, 'PT. Aneka Cahaya Karunia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(49, 'PT. Anugerah Bahtera Lestari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(50, 'PT. Anugrah Sarana Berkat', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(51, 'PT. Arcistec International', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(52, 'PT. Asian Bulk Logistik', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(53, 'PT. Autorent Lancar Sejahtera', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(54, 'PT. Aviako Sepinggan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(55, 'PT. Bagong Dekaka Makmur', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(56, 'PT. Bandang Mining Coal', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(57, 'PT. Bayu Sejati Paser', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(58, 'PT. Berca Harydayaperkasa', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(59, 'PT. Berkat Jaya Sukses', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(60, 'PT. Berkat Teman Sejati', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(61, 'PT. Bina Abadi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(62, 'PT. Binungan Mandiri Sejahtera', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(63, 'PT. Blasosem Putra', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(64, 'PT. Buana Indah Lalebata', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(65, 'PT. Budi Harta Lestari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(66, 'PT. Bukit Makmur Mandiri Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(67, 'PT. Bumi Hamparan Luas', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(68, 'PT. Cahaya Sakti Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(69, 'PT. Cahaya Trijaya Sentosa', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(70, 'PT. Cardig Anugerah Sarana Catering', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(71, 'PT. Cipta Hydropower', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(72, 'PT. Cipta Krida Bahari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(73, 'PT. Citra Alam Semesta', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(74, 'PT. Cominco Mitra Perkasa', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(75, 'PT. Conbloc Infratecno', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(76, 'PT. Dahana', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(77, 'PT. Davidi International', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(78, 'PT. Dermaga Sukses Jaya Abadi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(79, 'PT. Dharma Lautan Nusantara', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(80, 'PT. Dian Ciptamas Agung', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(81, 'PT. DNX Indonesia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(82, 'PT. Duta Borneo Mining', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(83, 'PT. Dwijaya Sentral Sarana', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(84, 'PT. Eka Dharma Jaya Sakti', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(85, 'PT. Elnusa Petrofin', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(86, 'PT. Eonchemicals Putra', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(87, 'PT. Epiroc Southern Asia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(88, 'PT. Episi Sucofindo', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(89, 'PT. Equipment Reliability Management', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(90, 'PT. E-Tirta Medical Centre', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(91, 'PT. Eurotruk Trasindo', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(92, 'PT. Fajar Anugerah Dinamika', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(93, 'PT. Galva Technovision', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(94, 'PT. Gardamas Surya Lestari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(95, 'PT. Garuda Bakti Nusantara', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(96, 'PT. Gelar Gatralaras', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(97, 'PT. Geosains Enjiniring Nusantara', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(98, 'PT. Geoservices', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(99, 'PT. Geotechnical & Environmental Service Indonesia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(100, 'PT. Grasindo Pratama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(101, 'PT. Gunung Gaya  Persada', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(102, 'PT. Hakiki Inti Sejati', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(103, 'PT. Harmoni Mitra Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(104, 'PT. Harum Manis Indonesia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(105, 'PT. Hexindo Adiperkasa', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(106, 'PT. Hidup Baru Perdana Abadi', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(107, 'PT. Hidup Baru Sukses Mandiri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(108, 'PT. Indo Pusaka Berau', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(109, 'PT. Indonesia Carbon Energy', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(110, 'PT. Intecs Teknikatama Indsutri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(111, 'PT. Jakarta Prima Cranes', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(112, 'PT. Kalimantan Teknik Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(113, 'PT. Kaliraya Sari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(114, 'PT. Kanitra Mitra Jaya Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(115, 'PT. Kasam', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(116, 'PT. Kharisma Berkat Sukses', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(117, 'PT. Kinend', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(118, 'PT. Kirana Berau', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(119, 'PT. Limbah Bina Sejahtera', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(120, 'PT. Linda Jaya Mandiri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(121, 'PT. Lintas Wahana Indonesia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(122, 'PT. Madhani Talatah Nusantara', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(123, 'PT. Majau Inti Jaya', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(124, 'PT. Maju Asri Jaya Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(125, 'PT. Maju Bersama Binungan', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(126, 'PT. Mega Jasa Karya Bersama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(127, 'PT. Megah Mutiara Sakti', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(128, 'PT. Mentari Cipta Mandiri', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(129, 'PT. MHE Demag', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(130, 'PT. Mitra Alam Segara Sejati', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(131, 'PT. Mitra Bahtera Segarasejati', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(132, 'PT. Mitra Pinasthika Mustika', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(133, 'PT. Mitra Sukses Raharja', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(134, 'PT. Mitra Usaha Katiga', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(135, 'PT. Multi Nitrotama Kimia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(136, 'PT. Multindo Technology Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(137, 'PT. Multitama Indonesia', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(138, 'PT. Mustika Ganda Utama', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(139, 'PT. Mutiara Tanjung Lestari', '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(140, 'PT. Nuansa Makmur Mandiri', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(141, 'PT. Nusa Mandiri', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(142, 'PT. Padang Kuring Boga Utama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(143, 'PT. Pamapersada Nusantara', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(144, 'PT. Panca Prima Engineering', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(145, 'PT. Pancaran Samudera Transport', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(146, 'PT. Pangansari Utama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(147, 'PT. Partsindo Servicatama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(148, 'PT. Paz Ace Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(149, 'PT. Pelayaran Daya Samudera Mandiri', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(150, 'PT. Pelayaran Kartika Samudera Adijaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(151, 'PT. Pelayaran Sanditia Perkasa Maritim', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(152, 'PT. Pelayaran Trans Sarana Makmur', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(153, 'PT. Permata Dwitunggal Abadi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(154, 'PT. Pertamina Bina Medika', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(155, 'PT. Pertamina Patra Niaga', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(156, 'PT. Petro Andalan Nusantara', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(157, 'PT. Prima Unggul Persada', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(158, 'PT. Primadian Mitra Sejati', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(159, 'PT. Puncak Makmur Jaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(160, 'PT. Pusaka Tandi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(161, 'PT. Putra Daerah Mandiri Jaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(162, 'PT. Rentokil Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(163, 'PT. Resource Equipment Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(164, 'PT. Resty Nur', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(165, 'PT. Ricobana Abadi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(166, 'PT. Roda Tehnik', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(167, 'PT. Salwa Jaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(168, 'PT. Sambakungan Samburakat Maluang Lati', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(169, 'PT. Samburakat Jaya Utama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(170, 'PT. Samudera Berkah Adhiguna', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(171, 'PT. Sanggar Sarana Baja', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(172, 'PT. Saptaindra Sejati', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(173, 'PT. Sarana Langgeng Perkasa', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(174, 'PT. Sarana Power Sedaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(175, 'PT. Satnetcom Balikpapan', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(176, 'PT. Segara Persada Nusantara', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(177, 'PT. Sejahtera Tridaya Prima', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(178, 'PT. Sentratek Adiprestasi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(179, 'PT. Shield On Service', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(180, 'PT. Sinar Pagi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(181, 'PT. Smartfren Telecom, Tbk', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(182, 'PT. Sucofindo', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(183, 'PT. Sumber Makmur Sejahtera Buana', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(184, 'PT. Sumber Mitra Binungan', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(185, 'PT. Sumber Multi Rejeki', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(186, 'PT. Surveyor Carbon Consulting Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(187, 'PT. Surya Nusantara Perkasa', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(188, 'PT. Surya Utama Nuansa', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(189, 'PT. Tanjung Harapan Selatan', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(190, 'PT. Tata Wisata', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(191, 'PT. Taubah Berlian Jaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(192, 'PT. Terusan Raya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(193, 'PT. Tidung Jaya Mandiri Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(194, 'PT. Tirta Sarana Borneo', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(195, 'PT. Trada Dryship', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(196, 'PT. Trakindo Utama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(197, 'PT. Trans Continent', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(198, 'PT. Transavia Otomasi Pratama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(199, 'PT. Transkon Jaya', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(200, 'PT. Tri Ananda Pratama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(201, 'PT. Trifita Perkasa', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(202, 'PT. Tunas Artha Gardatama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(203, 'PT. Tunas Jaya Pratama', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(204, 'PT. United Tractors', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(205, 'PT. United Tractors Pandu Engineering', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(206, 'PT. Utama Alam Energi', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(207, 'PT. Valvtrol Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(208, 'PT. Velseis Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(209, 'PT. Virtus Facility Services', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(210, 'PT. Wahanabhara Bhakti', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(211, 'PT. Weir Mineral Indonesia', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(212, 'PT. Yerry Primatama Hosindo', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(213, 'PT. Yusrina Borneo Quantum', '2019-06-15 09:18:13', '2019-06-15 09:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Accounting & Financial Control', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(2, 'Asset & Facility Infrasstructure Mtc', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(3, 'Bank & Trade Finance', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(4, 'Board of Directors', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(5, 'Budget Control', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(6, 'Business Analyst Specialist', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(7, 'C & B Strategic', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(8, 'Cash Management', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(9, 'Coal Handling Infr', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(10, 'Community Base Development', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(11, 'Community Enterprise Development', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(12, 'Compensation Ben & Jkt Office Rep', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(13, 'Contractor Management', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(14, 'Corporate Affairs & Gov.Relation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(15, 'Corporate Development Program', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(16, 'Corporate Legal & Operations', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(17, 'Corporate Secretary', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(18, 'Corporate Support', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(19, 'Electrical Project Improvement', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(20, 'Emergency Response & Services', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(21, 'Environment', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(22, 'External Relation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(23, 'Financial Controlling', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(24, 'Financial Planning & Management Reporting', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(25, 'Financial Reporting', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(26, 'Fixed Plant Maintenance', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(27, 'General Service Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(28, 'Geology & Exploration', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(29, 'Geotechnic & Hydrology', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(30, 'HRIS & Big Data Analytics', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(31, 'HSE Certification & Training', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(32, 'Human Resource Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(33, 'Industrial Relation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(34, 'Internal Audit', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(35, 'IT Infrastructure & Project Dev Group', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(36, 'Knowledge Management System', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(37, 'Land Aqcuisition & Management', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(38, 'Legal Mining', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(39, 'Legal Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(40, 'License', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(41, 'Logistic', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(42, 'Long Term Mine Plan', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(43, 'Management Information System', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(44, 'Management Reporting', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(45, 'Marine Support & Admin', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(46, 'Marketing & Sales', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(47, 'Mine Closure', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(48, 'Mine Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(49, 'Occupational Helath & Safety', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(50, 'Operation Compliance', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(51, 'Payroll', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(52, 'Planning & Budget Control', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(53, 'Port & Barging Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(54, 'Procurement', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(55, 'Product Quality & Delivery Control', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(56, 'Public Relation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(57, 'Safety Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(58, 'Security', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(59, 'Shared Service Unit', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(60, 'Shipping', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(61, 'Short Term Mine Plan', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(62, 'Supporting Infrastructure Dev', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(63, 'Surveying & Geospatial Information', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(64, 'System Development', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(65, 'Talent Acquisition & Assessment Centre', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(66, 'Tax Operation & Gov.Lialitities', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(67, 'Tax Strategy Compliance & Ligitation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(68, 'Vendor Qualification', '2019-06-15 09:18:13', '2019-06-15 09:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_08_043730_create_contractors_table', 1),
(4, '2019_06_08_052543_create_departments_table', 1),
(5, '2019_06_08_052923_create_sites_table', 1),
(6, '2019_06_08_053234_create_auditors_table', 1),
(7, '2019_06_08_053535_create_categories_table', 1),
(8, '2019_06_08_053856_create_auditees_table', 1),
(9, '2019_06_08_063336_create_agendas_table', 1),
(10, '2019_06_09_034827_create_rencanas_table', 1),
(11, '2019_06_09_113230_create_plors_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plors`
--

CREATE TABLE `plors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_nc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audit_period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `depcont` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `auditor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `problem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smkp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smk3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ohsas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `begems` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `root` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `corrective` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `due_date1` date DEFAULT NULL,
  `pj1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `eviden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `preventive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `due_date2` date DEFAULT NULL,
  `pj2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum diisi',
  `status2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Not yet Approved',
  `expired` date DEFAULT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '-',
  `statusFinal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plors`
--

INSERT INTO `plors` (`id`, `proposer`, `no_nc`, `audit_period`, `depcont`, `site`, `date`, `auditor`, `problem`, `location`, `object`, `category`, `smkp`, `smk3`, `ohsas`, `iso`, `begems`, `approver`, `status1`, `type`, `root`, `corrective`, `due_date1`, `pj1`, `eviden`, `preventive`, `due_date2`, `pj2`, `status2`, `expired`, `reason`, `note`, `statusFinal`, `created_at`, `updated_at`) VALUES
(1, 'Anisa Nanhidayah', '1', '1', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten memantau Sub-Kontraktornya dalam penerapan Log Out-Tag Out (LOTO)', 'Pit Stop SIS - SMO', '1. Beberapa karyawan UT yang melakukan pekerjaan pada EX2000-0026, belum seluruhnya memasang LOTO 2. Pada pekerjaan di PC 1250-013 tidak ditemukan personal lock PJ Teknis berwarna kuning', 'Minor', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', 'IV.4; 6.5.6; 4.4; 8.1; P-FPM-02', '', 'Anisa Nanhidayah', 'Approved', 2, 'Kurangnya pemahaman mekanik terkait pemasangan LOTO, pada saat aktivitas, belum terdistribusikannya personal lock (gembok) warna kuning untuk pengawas di pit stop', 'Pemasangan LOTO pada unit yang sedang diwashing, sebelum ada perbaikan unit, pendistribusian gembok kuning untuk dipasang pada pekerjaan mantenance oleh pengawas', '2019-01-20', 'Belum diisi', 'Belum diisi', 'Sosialisasi penggunaan LOTO pada mekanik, penyediaan gembok warna kuning untuk pengawas teknis di lapangan (pit stop)', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(2, 'Anisa Nanhidayah', '2', '2', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan pemeliharaan/perawatan peralatan', 'Pit Stop SIS - SMO', 'Ditemukan sampel HD 156, alarm fatique tidak berfungsi dengan baik sesuai dengan F-CMP-08.07_Formulir Pemeriksaan Kelayakan A2B, Truck, Crane, Alat Angkut Peledak', 'Minor', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', 'V.2; 7.1.1; 10.2; 10.2; P-CMP-05', '', 'Anisa Nanhidayah', 'Approved', 2, 'Kurang kontrol dalam pengisian KIP (Kartu Inspeksi Peralatan)bdi saat pengecekan tabung acetylene untuk digunakan', 'Dilakukan pengisian KIP tabung acetylene saat inspeksi sebelum digunakan sesuai bulan', '2019-01-15', 'Belum diisi', 'Belum diisi', 'Sosialisasi pengisisan KIP saat pengecekan peralatan kepada mekanik, inspeksi peralatan oleh pengawas sebelum pekerjaan dimulai', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(3, 'Anisa Nanhidayah', '3', '3', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan pemeliharaan/perawatan peralatan', 'Area Dumping elevasi 40 PT SIS - SMO', 'Ditemukan sampel HD 156, alarm fatique tidak berfungsi dengan baik sesuai dengan F-CMP-08.07_Formulir Pemeriksaan Kelayakan A2B, Truck, Crane, Alat Angkut Peledak', 'Minor', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', 'IV.4; 6.2.1; 4.4; 8.1', '', 'Anisa Nanhidayah', 'Approved', 2, 'Kurangnya kontrol dan monitoring pemeriksaan terkait alarm fatigue', 'Melakukan perbaikan alarm fatigue unit HD 156', '2019-01-30', 'Belum diisi', 'Belum diisi', 'Dilakukan pengecekan alarm fatigue disaat unit sedang periodical inspection', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(4, 'Anisa Nanhidayah', '4', '4', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS SMO belum konsisten dalam penerapan prosedur pengelolaan kelelahan (fatigue)', 'Area Dumping elevasi 40 PT SIS - SMO', 'Pada saat audit dilapangan yang dilaksanakan sampai pukul 16.10, pengawas belum dilakukan tes fatigue untuk operator-operator HD yang sedang mengerjakan dumping OB', 'Minor', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', 'IV.3; 6.2.1; 4.4; 8.1; P-OHS-06', '', 'Anisa Nanhidayah', 'Approved', 2, 'Kurangnya kontrol dan konsistensi pelaksanaan test fatigue, karena formulir/checklist test fatgue habis', 'Pelaksanaan tes fatigue di saat jam kritis oleh pengawas penimbunan, penyediaan checklist/formulir di pos', '2019-01-20', 'Belum diisi', 'Belum diisi', 'Sosialisasi kepada pengawas penimbunan untuk pelaksanaan test fatigue agar dijalankan secara konsistens, monitoring pelaksanaan test fatigue', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(5, 'Anisa Nanhidayah', '5', '5', 'SIS', 'SMO', '2018-11-23', 'Ezra Boron, Anisa NH', 'PT SIS belum konsisten di dalam pemenuhan Elemen II SMKP', 'Office PT SIS - SMO', 'SOP HIRA & EAIA DC (SHE/08/001/SOP) PT SIS belum  sesuai ketentuan yang dipersyaratkan oleh SMKP seperti : komunikasi & konsultasi risiko, serta penetapan konteks risiko', 'Minor', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', 'II.2; 2.1.1; 4.3; 6.1', '', 'Anisa Nanhidayah', 'Approved', 2, 'Kurangnya kontrol dalam update legal di dalam SOP HIRA (SHE/08/001/SOP)', 'Meminta HO PT SIS terkait update SOP HIRA & EAIA DC yang sudah direvisi', '2019-01-20', 'Belum diisi', 'Belum diisi', 'Memonitoring update legal di dalam HIRA yang sudah direview', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(6, 'Anisa Nanhidayah', '6', '6', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'Kurangnya fasilitas keselamatan pada area pembangunan workshop baru PT SIS BMO', 'Pembangunan Workshop SIS BMO oleh CV Putri Dewi', ' Perlunya penempatan APAR untuk area kerja office dan warehouse CV Putri Dewi mengingat adanya bahan bakar yang disimpan di dalam warehouse', 'Observasi', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', 'IV.9; 6.7.1; 4.4; 8.2', '', 'Anisa Nanhidayah', 'Approved', 2, 'Penempatan APAR belum mempertimbangkan radius dan potensi bahaya kebakaran di area werehouse dan office', 'Menambah APAR di area office dan werehouse', '2019-01-31', 'Belum diisi', 'Belum diisi', 'dengan mempehitungkan tingkat risiko', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(7, 'Anisa Nanhidayah', '7', '7', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum konsisten dalam implementasi pelaksanaan pemeliharaan / perawatan peralatan pertambangan', 'Pit Stop C2 SIS - BMO', 'PC 2000-8 ditemukan 1. Mekanik AC yang belum memasang personal danger tag 2. Mekanik PT Intecs yang menggunakan danger tag PT RBA untuk bekerja di area PT SIS ...', 'Minor', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', 'IV.4; 6.1.3; 4.4; 8.1; P-FPM-07', '', 'Anisa Nanhidayah', 'Approved', 2, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(8, 'Anisa Nanhidayah', '8', '8', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum konsisten dalam memonitor Sub-Kontraktornya (CV Putri Dewi) dalam pelaksanaan inspeksi alat bantu kerja', 'Pembangunan workshop SIS - BMO', 'Pada saat audit di lapangan ditemukan :\r\n      1. Peralatan kelistrikan yang tidak dilakukan inspeksi\r\n      2. Full body harness belum dilakukan inspeksi \r\n      ...', 'Minor', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', 'V.2; 7.1.1; 4.5; 10.2; P-CMP-05', '', 'Anisa Nanhidayah', 'Approved', 2, 'Jadwal & Pelaksanaan inspeksi lokasi project saat ini belum mengakomodir semua objek inspeksi yang berada di pembangunan workshop baru', 'Membuat jadwal inspeksi lokasi project lebih detail', '2019-01-02', 'Belum diisi', 'Belum diisi', 'Melakukan kegiatan inspeksi mengacu pada jadwal yang sudah dibuat dan dimonitor follow upnya', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(9, 'Anisa Nanhidayah', '9', '9', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS belum konsisten di dalam memenuhi elemen II SMKP', 'Office PT SIS - BMO', 'SOP HIRA & EAIA DC (SHE/08/001/SOP) PT SIS belum  sesuai ketentuan yang dipersyaratkan oleh SMKP seperti : komunikasi & konsultasi risiko, serta penetapan konteks risiko', 'Minor', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', 'II.2; 2.1.1; 4.3; 6.1; P-DEV-03', '', 'Anisa Nanhidayah', 'Approved', 2, 'Ruang lingkup telah direvisi pada dokumen SHE/08/001/STD revisi 4', 'Mengumpulkan dokkumen SHE/08/001/STD', '2019-01-15', 'Belum diisi', 'Belum diisi', 'Melakukan review secara berkala', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(10, 'Anisa Nanhidayah', '10', '10', 'SIS', 'BMO', '2018-11-28', 'Ezra Boron, Anisa NH', 'PT SIS BMO belum update mengenai refrensi peraturan tebaru 2018 pada prosedur kerjanya', 'Office PT SIS - BMO', 'Pada saat audit dokumen ditemukan beberapa sampel prosedur kerja belum mencantumkan peraturan terbaru.', 'Minor', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', 'II.2,III.13, IV.1; 1.4.2, 2.1.1, ; 4.3; 6.1, 7.4', '', 'Anisa Nanhidayah', 'Approved', 2, 'Saat ini SOP masih progress revisi', 'Melakukan revisi refrensi peraturan terbaru untuk SOP ', '2019-03-31', 'Belum diisi', 'Belum diisi', 'Melakukan revisi SOP secara berkala', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Closed', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(11, 'Anisa Nanhidayah', '1', '1', 'LOGISTIK', 'SUARAN', '2018-12-04', 'Emyliana M, Suhendrawan', 'Oiltrap pada Gudang B3 di Logistik Suaran tidak dikelola secara memadai', 'Logistik Dept. - Warehouse Suaran', 'Pada saat audit berlangsung, diketahui bahwa diatas oil trap gudang B3, terdapat tumpukan besi-besi rambu dan checklist pemantauan oiltrap hanya di tandatangani hanya sampai bulan Mei 2018.', 'Minor', 'Elemen 4 SMKP - Implementasi; P-ENV-02 P. Pengelolaan B3 dan LB3', 'Elemen 4 SMKP - Implementasi; P-ENV-02 P. Pengelolaan B3 dan LB3', 'Elemen 4 SMKP - Implementasi; P-ENV-02 P. Pengelolaan B3 dan LB3', 'Elemen 4 SMKP - Implementasi; P-ENV-02 P. Pengelolaan B3 dan LB3', '', 'Anisa Nanhidayah', 'Approved', 1, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(12, 'Anisa Nanhidayah', '2', '2', 'LOGISTIK', 'SUARAN', '2018-12-04', 'Emyliana M, Suhendrawan', 'Instalasi peralatan berupa gasket pada sambungan hose transfer dan reducer, bukan merupakan gasket standard dan tidak dalam kondisi yang baik', 'Logistik Dept. - Warehouse Suaran', 'gasket yang terpasang pada sambungan hose transfer fuel dan reducer tidak menggunakan gasket standar. Dan merupakan gasket yang dibuat sendiri, serta kondisi sambungan yang tidak baik', 'Minor', 'Elemen 4 SMKP - Implementasi; P-LOG-02 P. Bunker BBC, F-LOG-02', 'Elemen 4 SMKP - Implementasi; P-LOG-02 P. Bunker BBC, F-LOG-02', 'Elemen 4 SMKP - Implementasi; P-LOG-02 P. Bunker BBC, F-LOG-02', 'Elemen 4 SMKP - Implementasi; P-LOG-02 P. Bunker BBC, F-LOG-02', '', 'Anisa Nanhidayah', 'Approved', 1, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(13, 'Anisa Nanhidayah', '3', '3', 'LOGISTIK', 'SUARAN', '2018-12-04', 'Emyliana M, Suhendrawan', 'Instalasi pipa hydrant di area Jetty Fuel Suaran korosi dan terdapat beberapa titik kebocoran', 'Logistik Dept. - Warehouse Suaran', 'Pada saat audit kami menemukan instalasi pipa hydrant di Jetty Fuel Suaran sudah dalam kondisi korosi serta terdapat beberapa titik kebocoran', 'Minor', 'Elemen 4 SMKP - Implementasi; P-ERG-02 P. Kesiapsiagaan dan Tanggap Darurat; S-ERG-02 Std. Instalasi Proteksi Kebakaran', 'Elemen 4 SMKP - Implementasi; P-ERG-02 P. Kesiapsiagaan dan Tanggap Darurat; S-ERG-02 Std. Instalasi Proteksi Kebakaran', 'Elemen 4 SMKP - Implementasi; P-ERG-02 P. Kesiapsiagaan dan Tanggap Darurat; S-ERG-02 Std. Instalasi Proteksi Kebakaran', 'Elemen 4 SMKP - Implementasi; P-ERG-02 P. Kesiapsiagaan dan Tanggap Darurat; S-ERG-02 Std. Instalasi Proteksi Kebakaran', '', 'Anisa Nanhidayah', 'Approved', 1, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(14, 'Anisa Nanhidayah', '4', '4', 'LOGISTIK', 'SUARAN', '2018-12-04', 'Emyliana M, Suhendrawan', 'Kondisi jembatan untuk perlintasan orang yang melewati jalur pipa Bahan Bakar Cair sudah dalam kondisi tidak laik digunakan', 'Logistik Dept. - Warehouse Suaran', 'Pada saat audit, kami menemukan jembatan perlintasan orang yang melewati jalur pipa BBC menuju Booster Room sudah dalam kondisi yang tidak laik digunakan', 'Minor', 'Elemen 4 SMKP - Implementasi', 'Elemen 4 SMKP - Implementasi', 'Elemen 4 SMKP - Implementasi', 'Elemen 4 SMKP - Implementasi', '', 'Anisa Nanhidayah', 'Approved', 1, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(15, 'Anisa Nanhidayah', '5', '5', 'LOGISTIK', 'SUARAN', '2018-12-04', 'Emyliana M, Suhendrawan', 'Dept. Logistik belum konsistem dalam penerapan SMKP elemen II.2.3 tentang Identifikasi bahaya dan penilaian risiko.', 'Logistik Dept. - Office Suaran', 'Dalam penyusuan HIRA Dept. Logistik, beberapa hal yang belum diidentifikasi berdasarkan pada standar SMKP, yaitu : - Belum dimasukkan aktivitas kontraktor MIJ untuk pengangkutan ...', 'Minor', 'SMKP Elemen II.2.3', 'SMKP Elemen II.2.3', 'SMKP Elemen II.2.3', 'SMKP Elemen II.2.3', '', 'Anisa Nanhidayah', 'Approved', 1, 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Belum diisi', 'Belum diisi', NULL, 'Belum diisi', 'Not yet Approved', NULL, '-', '-', 'Open', '2019-06-15 09:18:13', '2019-06-15 09:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `rencanas`
--

CREATE TABLE `rencanas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `proposer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isps_scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isps_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isps_from` date NOT NULL,
  `isps_to` date NOT NULL,
  `isps_remaks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_from` date NOT NULL,
  `special_to` date NOT NULL,
  `special_remaks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt1_scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt1_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt1_from` date NOT NULL,
  `smt1_to` date NOT NULL,
  `smt1_remaks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt2_scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt2_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smt2_from` date NOT NULL,
  `smt2_to` date NOT NULL,
  `smt2_remaks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siap_scope` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siap_content` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `siap_from` date NOT NULL,
  `siap_to` date NOT NULL,
  `siap_remaks` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Office', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(2, 'Binungan Mining Operation 1', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(3, 'Binungan Mining Operation 2', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(4, 'Lati Mining Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(5, 'Sambarata Mining Operation', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(6, 'Shipping', '2019-06-15 09:18:13', '2019-06-15 09:18:13'),
(7, 'Eksplorasi', '2019-06-15 09:18:13', '2019-06-15 09:18:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit` int(11) DEFAULT NULL,
  `special` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `permit`, `special`, `created_at`, `updated_at`) VALUES
(1, 'Anisa Nanhidayah', 'anisa', '123456', 'Audit Supervisor', 1, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(2, 'Ryandi Hermawan', 'ryandi', '123456', 'Audit Supervisor', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(3, 'Ezra Boron', 'ezra', '123456', 'Audit Superintendent', 1, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(4, 'Andhi H', 'andhi', '123456', 'Audit Superintendent', 1, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(5, 'Emyliana M', 'emy', '123456', 'Audit Superintendent', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(6, 'Suhendrawan', 'suhendra', '123456', 'Audit Superintendent', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(7, 'Charles S', 'charles', '123456', 'Audit Superintendent', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(8, 'Luhut Lumban Raja', 'luhut', '123456', 'Audit Manager', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(9, 'Haris Wiyono', 'haris', '123456', 'Audit General Manager', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(10, 'Feri Indrayana', 'feri', '123456', 'Kepala Teknik Tambang', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(11, 'Yombi Gautama', 'yombi', '123456', 'Wakil Kepala Teknik Tambang', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(12, 'Sutami Sitorus', 'sutami', '123456', 'Wakil Kepala Teknik Tambang', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(13, 'Bobby Riyanto', 'bobby', '123456', 'Wakil Kepala Teknik Tambang', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(14, 'Traju AA', 'traju', '123456', 'Auditor', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(15, 'Hendrianto Tan', 'hendri', '123456', 'Auditor', 0, 1, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(16, 'Penanggung Jawab Operasi', 'pjo', '123456', 'Auditee', 0, 0, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(17, 'Department Head', 'depthead', '123456', 'Auditee', 0, 0, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(18, 'Section Head', 'secthead', '123456', 'Auditee', 0, 0, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(19, 'Safety Contractor', 'safety', '123456', 'Auditee', 0, 0, '2019-06-15 09:18:12', '2019-06-15 09:18:12'),
(20, 'General User', 'umum', '123456', 'General User', 0, 0, '2019-06-15 09:18:12', '2019-06-15 09:18:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditees`
--
ALTER TABLE `auditees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auditors`
--
ALTER TABLE `auditors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plors`
--
ALTER TABLE `plors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencanas`
--
ALTER TABLE `rencanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auditees`
--
ALTER TABLE `auditees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auditors`
--
ALTER TABLE `auditors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plors`
--
ALTER TABLE `plors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rencanas`
--
ALTER TABLE `rencanas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
