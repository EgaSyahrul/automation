-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2022 pada 08.21
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rushbin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `role`) VALUES
('admin@admin', '202cb962ac59075b964b07152d234b70', 'admin'),
('egasyahrul2@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sampah`
--

CREATE TABLE `daftar_sampah` (
  `id_sampah` varchar(7) NOT NULL,
  `nama_sampah` varchar(50) NOT NULL,
  `jenis_sampah` enum('sampah kertas','sampah plastik','sampah kaca','sampah kaleng','sampah kayu','sampah besi','sampah kain') NOT NULL,
  `jumlah_sampah` int(5) NOT NULL,
  `point` int(10) NOT NULL,
  `harga_jual` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_sampah`
--

INSERT INTO `daftar_sampah` (`id_sampah`, `nama_sampah`, `jenis_sampah`, `jumlah_sampah`, `point`, `harga_jual`) VALUES
('SP-0001', 'botol aqua', 'sampah plastik', 85, 30, 50000),
('SP-0002', 'botol lemineral', 'sampah plastik', 20, 30, 50000),
('SP-0003', 'botol uc1000', 'sampah kaca', 20, 10, 30000),
('SP-0004', 'koran', 'sampah kertas', 68, 20, 12000),
('SP-0005', 'perabotan kayu', 'sampah kayu', 80, 5, 15000),
('SP-0006', 'paku, mur, dan sekrup', 'sampah besi', 30, 10, 10000),
('SP-0007', 'baju bekas', 'sampah kain', 30, 15, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_beli`
--

CREATE TABLE `laporan_beli` (
  `kode_transaksi` varchar(7) NOT NULL,
  `id_sampah` varchar(7) NOT NULL,
  `nama_sampah` varchar(50) NOT NULL,
  `jumlah_sampah` int(5) NOT NULL,
  `point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_beli`
--

INSERT INTO `laporan_beli` (`kode_transaksi`, `id_sampah`, `nama_sampah`, `jumlah_sampah`, `point`) VALUES
('TB00001', '', '', 0, 0),
('TB00001', '', '', 0, 0),
('TB00001', '', '', 0, 0),
('', '', '', 0, 0),
('', '', '', 0, 0),
('', '', '', 0, 0),
('TB00011', 'Array', 'botol aqua', 20, 30),
('TB00011', 'Array', 'botol aqua', 5, 30),
('TB00011', 'Array', 'botol aqua', 5, 30),
('TB00011', 'Array', 'botol aqua', 5, 30),
('TB00011', 'Array', 'botol aqua', 20, 30),
('TB00011', 'Array', 'botol aqua', 5, 30),
('TB00011', 'Array', 'botol aqua', 20, 30),
('TB00012', 'Array', 'botol aqua', 20, 30),
('TB00026', 'SP-0004', 'koran', 3, 60),
('TB00027', 'SP-0004', 'koran', 20, 400),
('TB00030', 'SP-0001', 'botol aqua', 3, 90),
('TB00031', 'SP-0004', 'koran', 10, 200),
('TB00031', 'SP-0001', 'botol aqua', 10, 300),
('TB00031', 'SP-0004', 'koran', 10, 200),
('TB00031', 'SP-0001', 'botol aqua', 10, 300),
('TB00032', 'SP-0001', '', 10, 300),
('TB00032', 'SP-0004', 'koran', 5, 100),
('TB00008', 'SP-0001', 'botol aqua', 5, 0),
('TB00033', 'SP-0004', 'koran', 5, 100),
('TB00034', 'SP-0001', 'botol aqua', 5, 150),
('TB00035', 'SP-0001', 'botol aqua', 5, 150),
('TB00036', 'SP-0004', 'koran', 5, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_jual`
--

CREATE TABLE `laporan_jual` (
  `kode_transaksi` varchar(7) NOT NULL,
  `id_sampah` varchar(7) NOT NULL,
  `nama_sampah` varchar(50) NOT NULL,
  `jumlah_sampah` int(5) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan_jual`
--

INSERT INTO `laporan_jual` (`kode_transaksi`, `id_sampah`, `nama_sampah`, `jumlah_sampah`, `total`) VALUES
('TB00001', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00001', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('TB00001', 'SP-0001', 'botol aqua', 5, 250000),
('', 'SP-0001', 'botol aqua', 5, 250000),
('', 'SP-0001', 'botol aqua', 5, 250000),
('TB00002', 'SP-0001', 'botol aqua', 5, 250000),
('TB00003', 'SP-0001', 'botol aqua', 5, 250000),
('TB00004', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00005', 'SP-0001', 'botol aqua', 2, 100000),
('TB00006', 'SP-0001', 'botol aqua', 50, 2500000),
('TB00007', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00007', 'SP-0001', 'botol aqua', 20, 1000000),
('TB00008', 'SP-0001', 'botol aqua', 40, 2000000),
('TB00009', 'SP-0001', 'botol aqua', 40, 2000000),
('TB00010', 'SP-0001', 'botol aqua', 20, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(7) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `alamat`, `jabatan`, `username`) VALUES
('K000001', 'Ega Syahrul Ramadhanto', 'Jalan yang tidak pernah kembali', 'Pegawai', 'admin@admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(7) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `alamat3` varchar(50) NOT NULL,
  `point` int(10) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `telepon`, `alamat1`, `alamat2`, `alamat3`, `point`, `username`) VALUES
('P-00001', 'Ega Syahrul Ramadhanto', '082331879753', 'jalan salah arah tampa tujuan', 'jalan tersesat kedalam lautan dalam', 'jalan kemanapun jadi badut', 100, 'egasyahrul2@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pickup`
--

CREATE TABLE `pickup` (
  `id_pengantaran` varchar(10) NOT NULL,
  `id_pengguna` varchar(7) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pickup`
--

INSERT INTO `pickup` (`id_pengantaran`, `id_pengguna`, `nama_lengkap`, `alamat`, `tanggal`, `status`) VALUES
('P-00000002', 'P-00001', 'Ega Syahrul Ramadhanto', 'Jln. Admin Sentosa III', '2022-12-12 04:55:52', '2'),
('P-00000003', 'P-00001', 'Ega Syahrul Ramadhanto', 'Jln. Admin Sentosa III', '2022-12-12 05:20:58', '2'),
('P-00000004', 'P-00001', 'Ega Syahrul Ramadhanto', 'Jln. Admin Sentosa III', '2022-12-12 05:57:43', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_beli`
--

CREATE TABLE `transaksi_beli` (
  `kode_transaksi` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `total_point` int(10) NOT NULL,
  `id_pengguna` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_beli`
--

INSERT INTO `transaksi_beli` (`kode_transaksi`, `tanggal`, `waktu`, `nama_lengkap`, `total_point`, `id_pengguna`) VALUES
('', '0000-00-00', '00:00:00', '', 0, ''),
('TB00001', '2022-11-21', '03:47:23', '', 0, ''),
('TB00002', '2022-11-21', '03:51:31', '', 0, ''),
('TB00003', '2022-11-21', '03:55:12', '', 0, ''),
('TB00004', '2022-11-21', '03:55:44', '', 0, ''),
('TB00005', '2022-11-21', '03:57:50', '', 0, ''),
('TB00006', '2022-11-21', '03:58:09', '', 0, ''),
('TB00007', '2022-11-21', '05:37:36', '', 0, ''),
('TB00008', '2022-11-21', '05:38:14', '', 0, ''),
('TB00009', '2022-11-21', '07:46:23', '', 0, ''),
('TB00010', '2022-11-21', '11:36:52', '', 0, ''),
('TB00011', '2022-11-21', '15:51:35', '', 0, ''),
('TB00012', '2022-11-21', '16:01:04', '', 0, ''),
('TB00013', '2022-11-23', '06:10:51', '', 0, ''),
('TB00014', '2022-11-23', '00:00:00', '', 0, ''),
('TB00015', '2022-11-23', '00:00:00', '', 0, ''),
('TB00016', '2022-11-23', '00:00:00', '', 0, ''),
('TB00017', '2022-11-23', '00:00:00', '', 0, ''),
('TB00018', '2022-11-23', '00:00:00', '', 0, ''),
('TB00019', '2022-11-23', '06:32:45', 'admin@admin', 0, ''),
('TB00020', '2022-11-23', '06:34:27', 'admin@admin', 0, ''),
('TB00021', '2022-11-24', '16:40:23', 'admin@admin', 0, ''),
('TB00022', '2022-11-24', '16:52:06', 'admin@admin', 750, ''),
('TB00023', '2022-11-28', '02:17:24', 'Ega Syahrul Ramadhanto', 0, ''),
('TB00024', '2022-11-28', '02:18:41', 'Ega Syahrul Ramadhanto', 0, ''),
('TB00025', '2022-11-28', '02:36:07', 'Ega Syahrul Ramadhanto', 600, 'P-00001'),
('TB00026', '2022-12-05', '10:55:17', 'Ega Syahrul Ramadhanto', 60, 'P-00001'),
('TB00027', '2022-12-05', '11:00:34', 'Ega Syahrul Ramadhanto', 400, 'P-00001'),
('TB00028', '2022-12-05', '11:09:06', 'Ega Syahrul Ramadhanto', 60, 'P-00001'),
('TB00029', '2022-12-07', '07:57:33', 'Ega Syahrul Ramadhanto', 150, 'P-00001'),
('TB00030', '2022-12-07', '06:30:32', 'Ega Syahrul Ramadhanto', 90, 'P-00001'),
('TB00031', '2022-12-08', '07:53:17', 'Ega Syahrul Ramadhanto', 1000, 'P-00001'),
('TB00032', '2022-12-10', '02:50:41', 'Ega Syahrul Ramadhanto', 400, 'P-00001'),
('TB00033', '2022-12-12', '10:15:58', 'Ega Syahrul Ramadhanto', 100, 'P-00001'),
('TB00034', '2022-12-12', '10:40:26', 'Ega Syahrul Ramadhanto', 150, 'P-00001'),
('TB00035', '2022-12-12', '10:41:51', 'Ega Syahrul Ramadhanto', 150, 'P-00001'),
('TB00036', '2022-12-12', '10:44:42', 'Ega Syahrul Ramadhanto', 100, 'P-00001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_jual`
--

CREATE TABLE `transaksi_jual` (
  `kode_transaksi` varchar(7) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_jual`
--

INSERT INTO `transaksi_jual` (`kode_transaksi`, `tanggal`, `waktu`, `nama_lengkap`, `total_pembelian`) VALUES
('', '0000-00-00', '00:00:00', '', 0),
('TB00001', '2022-11-23', '06:06:35', '', 0),
('TB00002', '2022-11-23', '06:13:27', '', 0),
('TB00003', '2022-11-23', '06:26:55', '', 0),
('TB00004', '2022-11-28', '04:11:15', 'Ega Syahrul Ramadhanto', 1000000),
('TB00005', '2022-12-03', '14:04:59', 'Ega Syahrul Ramadhanto', 100000),
('TB00006', '2022-12-05', '11:13:33', 'Ega Syahrul Ramadhanto', 2500000),
('TB00007', '0000-00-00', '00:00:00', 'Ega Syahrul Ramadhanto', 2000000),
('TB00008', '0000-00-00', '00:00:00', 'Ega Syahrul Ramadhanto', 2000000),
('TB00009', '0000-00-00', '00:00:00', 'Ega Syahrul Ramadhanto', 2000000),
('TB00010', '2022-12-12', '10:20:31', 'Ega Syahrul Ramadhanto', 1000000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `daftar_sampah`
--
ALTER TABLE `daftar_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `pickup`
--
ALTER TABLE `pickup`
  ADD PRIMARY KEY (`id_pengantaran`);

--
-- Indeks untuk tabel `transaksi_beli`
--
ALTER TABLE `transaksi_beli`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `transaksi_jual`
--
ALTER TABLE `transaksi_jual`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
