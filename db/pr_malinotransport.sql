-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Nov 2020 pada 01.18
-- Versi Server: 10.1.32-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pr_malinotransport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_konfigurasi` int(1) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `nama_pimpinan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kontak_person` varchar(20) NOT NULL,
  `npwp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `atas_nama_rekening` varchar(200) NOT NULL,
  `pesan_wa` text NOT NULL,
  `banner` text NOT NULL,
  `logo` text NOT NULL,
  `deskripsi` text NOT NULL,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_konfigurasi`, `nama_perusahaan`, `nama_pimpinan`, `alamat`, `kontak_person`, `npwp`, `email`, `nama_bank`, `no_rekening`, `atas_nama_rekening`, `pesan_wa`, `banner`, `logo`, `deskripsi`, `date_updated`) VALUES
(1, 'CV. Malino Transport', 'Pimpinan', 'jl. Dg. Hayo', '085298730727', '2312', 'admin@gmail.com', 'BNI', '2894u832u43aa', 'Aswar Kasim', 'Halo malinotranspor.com.. boleh saya memesan?', './assets/uploads/images/1.jpg', './assets/uploads/images/malino_transport.png', '<p>lorem ipsumm dolor sit amet</p>', '2020-11-20 07:13:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `id_layanan` varchar(3) NOT NULL,
  `nama_layanan` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `icon` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`id_layanan`, `nama_layanan`, `deskripsi`, `icon`, `date_created`, `date_updated`) VALUES
('B4y', 'Harga Terjangkau', '                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis corporis totam dolor accusantium asperiores. Mollitia nisi placeat doloremque non, rem cum velit, consequuntur optio ipsum hic iste quis assumenda laborum?\r\n                                ', './assets/uploads/images/harga.png', '2020-11-15 09:07:55', '2020-11-15 13:15:14'),
('d7Z', 'Respon Cepat', '                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis corporis totam dolor accusantium asperiores. Mollitia nisi placeat doloremque non, rem cum velit, consequuntur optio ipsum hic iste quis assumenda laborum?\r\n                                ', './assets/uploads/images/car_component1.png', '2020-11-15 09:13:22', '2020-11-15 13:15:23'),
('WnD', 'Pelayanan Maksimal', '                                                                                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore perspiciatis nam esse quis hic odio possimus, ad ab necessitatibus suscipit inventore molestiae fuga corrupti nisi maiores quod, officiis expedita recusandae?                                                                                                ', './assets/uploads/images/nyamman.png', '2020-11-15 09:55:32', '2020-11-15 13:15:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `id_mobil` varchar(3) NOT NULL,
  `merk_mobil` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `rentan` enum('Hari','Pekan','Bulan') NOT NULL,
  `driver` enum('Include','Tidak','','') NOT NULL,
  `bbm` tinyint(1) NOT NULL DEFAULT '0',
  `parkir` tinyint(1) NOT NULL DEFAULT '0',
  `tol` tinyint(1) NOT NULL DEFAULT '0',
  `makanan_driver` tinyint(1) NOT NULL DEFAULT '0',
  `seat` int(2) NOT NULL,
  `type` enum('Manual','Matic','Semi-matic') NOT NULL,
  `gambar` text NOT NULL,
  `display_as` enum('banner','post') NOT NULL DEFAULT 'post',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`id_mobil`, `merk_mobil`, `deskripsi`, `harga`, `rentan`, `driver`, `bbm`, `parkir`, `tol`, `makanan_driver`, `seat`, `type`, `gambar`, `display_as`, `is_active`, `date_created`, `date_updated`) VALUES
('0Ys', 'Avanza', '                                                                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit magni inventore doloremque perferendis, soluta nesciunt aliquid ducimus sunt repellat voluptate asperiores quisquam fuga accusamus dicta at voluptatum recusandae voluptates ut!\r\n                                                                                                ', 400000, 'Hari', 'Include', 0, 1, 1, 1, 9, 'Matic', './assets/uploads/images/77f57d84-477b-4d53-b7c8-ef7889adf15a.jpeg', 'banner', 1, '2020-11-15 10:19:39', '2020-11-17 20:30:22'),
('Iaw', 'Innove Alet 341 MDA', '                                                                                                                                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sed perspiciatis ipsum eum assumenda omnis cumque sunt adipisci, necessitatibus accusamus! Magnam earum magni at tempore molestias iure porro tenetur saepe?\r\n                                                                                                                                                                ', 300000, 'Hari', 'Include', 0, 0, 0, 0, 3, 'Manual', './assets/uploads/images/exterior_2L_11.jpg', 'post', 1, '2020-11-15 06:47:24', '2020-11-15 10:19:04'),
('uvB', 'Pajero Sport ano', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    \r\n aa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur cupiditate dolor ducimus exercitationem animi velit impedit adipisci id cum quisquam, quos nulla? Corporis libero quisquam exercitationem similique optio odit saepe.\r\n                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 400000, 'Hari', 'Include', 0, 0, 0, 0, 8, 'Matic', './assets/uploads/images/exterior_2L_1.jpg', 'banner', 1, '2020-11-15 07:53:12', '2020-11-15 10:17:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role` enum('Admin','User') NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `image`, `password`, `role`, `is_active`, `date_created`) VALUES
(1, 'Aswar Kasim', 'aswarkasim@gmail.com', 'default.jpg', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'User', 1, 1560694881),
(9, 'Admin', 'admin@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 0, 0),
(10, 'assa', 'assa@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'Admin', 1, 0),
(11, 'Accung', 'accung@gmail.com', '', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'User', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  MODIFY `id_konfigurasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
