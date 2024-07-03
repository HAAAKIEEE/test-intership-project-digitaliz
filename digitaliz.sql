-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2024 pada 06.58
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
-- Database: `digitaliz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_course`
--

CREATE TABLE `data_course` (
  `id_course` int(3) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `durasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_course`
--

INSERT INTO `data_course` (`id_course`, `judul`, `deskripsi`, `link`, `durasi`) VALUES
(1, 'Programing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt mauris nunc, vel vehicula nunc mollis nec. Suspendisse sollicitudin sollicitudin massa ac viverra. Maecenas in faucibus est. Curabitur urna ante, sodales at vulputate ut, congue nec neque. Nam pharetra porttitor risus. Phasellus ut efficitur nisl. Aliquam semper arcu sed lacus pharetra, et pharetra risus fermentum', 'https://www.youtube.com/watch?v=QAKq8UBv4GI', '2 Jam'),
(2, 'Ui/Ux', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt mauris nunc, vel vehicula nunc mollis nec. Suspendisse sollicitudin sollicitudin massa ac viverra. Maecenas in faucibus est. Curabitur urna ante, sodales at vulputate ut, congue nec neque. Nam pharetra porttitor risus. Phasellus ut efficitur nisl. Aliquam semper arcu sed lacus pharetra, et pharetra risus fermentum', 'https://www.youtube.com/watch?v=QAKq8UBv4GI', '2 Jam'),
(3, 'Desain', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt mauris nunc, vel vehicula nunc mollis nec. Suspendisse sollicitudin sollicitudin massa ac viverra. Maecenas in faucibus est. Curabitur urna ante, sodales at vulputate ut, congue nec neque. Nam pharetra porttitor risus. Phasellus ut efficitur nisl. Aliquam semper arcu sed lacus pharetra, et pharetra risus fermentum', 'https://www.youtube.com/watch?v=QAKq8UBv4GI', '2 Jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_course`
--
ALTER TABLE `data_course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_course`
--
ALTER TABLE `data_course`
  MODIFY `id_course` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
