-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2025 pada 16.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trazor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `barang` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `path_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `judul`, `barang`, `deskripsi`, `path_img`) VALUES
(1, 'SPARE PART', 'Coil Spring', 'Widely used in the mold manufacturing and processing industry, and also used in other industries. MISUMI rectangular coil springs use oil-cooled tempered spring steel to provide stable load and durable life.', 'product-coilspring.png'),
(2, 'SPARE PART', 'Filter Element', 'Hydrafil High-performance Filter Element Replacement improves efficiency, keeps fluids cleaner, and ensures smoother operations. Proudly manufactured and sourced in the USA.', 'product-filterelement.png'),
(3, 'SPARE PART', 'Fifth Wheel', 'Trazor distributes Fifth Wheels from various brands, including the highly durable ULTRA Fifth Wheel.', 'product-fifthwheel.jpg'),
(4, 'SPARE PART', 'Lock Nut', 'The nuts have been designed to remain secure despite severe vibration. Having a nylon insert makes the nut better at sealing the bolt thread against leaking water, oil and other liquids.\r\nWhen you insert the mating bolt into the nylon insert, the thread from the bolt compresses the nylon.', 'product-locknut.png'),
(5, 'SPARE PART', 'Tyre', 'Pirelli heavy-duty tires are designed for optimal performance and reliability in demanding industrial applications.', 'product-tyre.jpg'),
(6, 'SPARE PART', 'Rubber Mounting', 'Made with high-strength natural rubber and steel fittings, shore hardness ensures consistent performance in various environments.', 'product-rubbermounting.png'),
(7, 'SPARE PART', 'Pin & Brushing', 'Crafted from high-grade steel and treated to enhance surface hardness, perform on par with original Komatsu parts.', 'product-pin.jpg'),
(8, 'SPARE PART', 'Hose', 'Alfagomma hoses offer expert customized OEM solutions with reliability and safety for demanding industrial needs.', 'product-hose.jpg'),
(9, 'SPARE PART', 'Washer Plate', '17mm Internal Diameter (ID), 30mm External Diameter (OD), 3.3mm Thickness (T).', 'product-washerplate.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
