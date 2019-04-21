-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Apr 2019 pada 09.31
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `piora`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`, `email`) VALUES
(2, 'ivan ', 'ivan', '202cb962ac59075b964b07152d234b70', 'ivan@piora.co.id'),
(23, 'Aan sanova', 'Aan', '202cb962ac59075b964b07152d234b70', 'aansanova.14116175@student.itera.ac.id'),
(24, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` text NOT NULL,
  `body` text NOT NULL,
  `kategori` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `judul`, `body`, `kategori`, `gambar`, `slug`, `create_at`) VALUES
(1, 1, 'Olahraga untuk Lansia, Jangan Percaya pada 5 Mitos Ini', 'Kebugaran tubuh pada dasarnya tidak mengenal batasan usia. Tubuh yang bugar akan memberikan kemudahan dan keleluasaan dalam melakukan banyak hal.\r\n\r\nBahkan, menjaga kebugaran tubuh juga sama dengan memastikan sistem metabolisme tubuh berjalan dengan optimal sehingga tidak akan ada masalah dalam berat badan, kadar kolesterol, dan tingkat tekanan darah.\r\n\r\nTidak terkecuali, tubuh yang bugar dan sehat juga akan menciptakan jiwa yang lebih ceria dan bersemangat. Sayangnya, masih banyak orang yang menganggap semakin tua usia seseorang, kemampuannya dalam berolahraga akan berkurang pula.\r\n\r\nNamun, apakah itu benar? Untuk memastikannya, simak 5 mitos olahraga untuk lansia berikut ini.\r\n\r\n1. Terlalu Tua Untuk Olahraga\r\nBanyak sekali orang yang beranggapan bahwa semakin tua usianya, maka kemampuannya untuk berolahraga akan semakin berkurang. Padahal, tidak bergerak dan tidak berolahraga sama sekali akan lebih berbahaya dan mempercepat proses penuaan.\r\n\r\nOrang-orang yang tidak aktif berolahraga akan dua kali lebih besar memiliki risiko terserang penyakit jantung. Apabila Anda sudah terlalu lama tidak berolahraga, cobalah untuk memulai latihan dengan senam aerobik ringan yang dapat menaikkan denyut jantung.\r\n\r\nJadi, tidak ada kata terlalu tua untuk memulai gaya hidup sehat.\r\n\r\n2. Olahraga untuk Lansia Membuat Persendian Sakit\r\nPerlu diakui, kekuatan orang yang sudah berusia lanjut memang tidak lagi sebesar anak-anak muda. Akan tetapi, itu bukan berarti Anda kehilangan peluang untuk berolahraga. Kenali tubuh Anda dan ketahui batasan kemampuan tubuh.\r\n\r\nAnda dapat memulainya dengan berkonsultasi pada dokter sebelum memulai suatu program latihan. Dokter dapat memberikan saran dan masukkan mengenai olahraga untuk lansia dan gerakan apa yang dapat dan tidak dapat Anda lakukan.\r\n\r\nSaat memulainya, pastikan juga Anda didampingi oleh orang yang memang ahli dalam bidang olahraga tersebut untuk menjaga Anda tetap melakukan latihan dengan baik sesuai dengan kapasitas.\r\n\r\n3. Jantung Tidak Lagi Tidak Sekuat Dulu\r\nDengan melakukan latihan secara rutin dan konsisten, jantung Anda akan menjadi lebih kuat dan tidak memberikan risiko apapun. Hal ini tentu dengan kadar latihan yang sesuai dengan usia dan kondisi kesehatanmu.\r\n\r\nAnda tentu tidak dianjurkan untuk mengikuti lari maraton, melainkan cukup dengan berjalan kaki rutin selama 10-30 menit sehari.\r\n\r\nJika dilakukan secara rutin, sirkulasi darah dan tingkat kolesterol akan membaik. Bahkan, latihan rutin ini dapat membuat jiwa Anda terasa semakin bahagia dengan tubuh yang bugar.\r\n\r\n4. Orang Tua Tidak Mampu Berolahraga\r\nYakinlah bahwa olahraga merupakan sebuah kebutuhan tubuh yang harus dipenuhi seberapa tua pun usia Anda. Anda cukup mengenakan sepatu olahraga dan pergilah ke taman untuk melakukan jalan sore atau jogging.\r\n\r\nAnda juga dapat mencoba hobi lain yang dapat melatih otot dan memberikan ruang bagi tubuh untuk bergerak seperti berkebun. Selain itu, memiliki hewan peliharaan yang perlu diajak jalan juga dapat membantu Anda untuk bergerak dan berjalan. Yakini bahwa tidak ada kata tua untuk berolahraga.\r\n\r\n5. Tubuh Tidak Lagi Sekuat Dulu\r\nJangan pernah menyepelekan apa yang Anda miliki sekarang dengan membandingkannya pada apa yang Anda miliki dulu. Jika Anda merasa tidak lagi sekuat dan sebugar saat muda, itu tidak dapat menjadi alasan untuk tidak berolahraga di masa tua.\r\n\r\nOlahraga bukan berarti harus mampu berlari secepat yang Anda lakukan saat masih muda, melainkan dengan bergerak dan berlatih pada kemampuan yang Anda miliki saat ini.\r\n\r\nSeberapa pun jauh perbandingannya, menjaga konsistensi dalam olahraga akan selalu membawa manfaat pada kesehatan Anda.\r\n\r\nSebuah penelitian dari Universitas Yale, Connecticut, Amerika Serikat, menemukan bahwa para orang tua yang membiasakan diri untuk berjalan kaki setidaknya 20 menit sekali memiliki kemungkinan yang lebih kecil untuk terserang gangguan mobililtas dibandingkan yang tidak melakukan sama sekali.\r\n\r\nJadi, jangan pernah ragu untuk mulai berolahraga berapa pun usia Anda.', 'Herbal', '1543803267.jpg', 'Olahraga-untuk-Lansia-Jangan-Percaya-pada-5-Mitos-Ini', '2019-04-15 16:16:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan`
--

CREATE TABLE `aturan` (
  `id_aturan` varchar(15) NOT NULL,
  `id_gejala` varchar(15) NOT NULL,
  `nama-aturan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(15) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `id_admin` varchar(15) NOT NULL,
  `nama_generik` text NOT NULL,
  `merek_dagang` text NOT NULL,
  `indikasi_obat` text NOT NULL,
  `bentuk` text NOT NULL,
  `slug` text NOT NULL,
  `reaksi_obatlain` text NOT NULL,
  `reaksi_makanan` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `id_admin`, `nama_generik`, `merek_dagang`, `indikasi_obat`, `bentuk`, `slug`, `reaksi_obatlain`, `reaksi_makanan`, `create_at`) VALUES
(2, '1', 'Jajal Edit', 'sadasd', 'asdasd', 'asdasd', 'Jajal-Edit', 'asdasd', 'asdasd', '2019-04-21 07:16:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(15) NOT NULL,
  `id_aturan` varchar(15) NOT NULL,
  `id_gejala` varchar(15) NOT NULL,
  `nama_penyakit` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id_aturan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_aturan` (`id_aturan`),
  ADD KEY `id_gejala` (`id_gejala`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);

--
-- Ketidakleluasaan untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD CONSTRAINT `penyakit_ibfk_1` FOREIGN KEY (`id_aturan`) REFERENCES `aturan` (`id_aturan`),
  ADD CONSTRAINT `penyakit_ibfk_2` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id_gejala`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
