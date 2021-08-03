-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2021 pada 14.50
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `project_bpwl_kelompok1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `password`) VALUES
('Adm_Boby', 'boby'),
('Adm_Farah', 'farah'),
('Adm_Rezky', 'rezky');

-- --------------------------------------------------------

CREATE SEQUENCE detail_id
INCREMENT BY 1
MINVALUE 6
MAXVALUE 999
START WITH 6
NOCACHE
NOCYCLE;

CREATE SEQUENCE menu_id
INCREMENT BY 1
MINVALUE 12
MAXVALUE 999
START WITH 12
NOCACHE
NOCYCLE;

CREATE SEQUENCE pembeli_id
INCREMENT BY 1
MINVALUE 11
MAXVALUE 999
START WITH 11
NOCACHE
NOCYCLE;

CREATE SEQUENCE pesanan_id
INCREMENT BY 1
MINVALUE 4
MAXVALUE 999
START WITH 4
NOCACHE
NOCYCLE;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` varchar(10) NOT NULL,
  `id_pesanan` varchar(10) NOT NULL,
  `id_menu` varchar(5) NOT NULL,
  `jumlah` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `id_menu`, `jumlah`) VALUES
('D_001', 'PE_001', 'M_001', 1),
('D_002', 'PE_001', 'M_005', 1),
('D_003', 'PE_002', 'M_002', 1),
('D_004', 'PE_002', 'M_004', 1),
('D_005', 'PE_003', 'M_005', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` varchar(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `harga` int(12) NOT NULL,
  `persediaan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `jenis`, `harga`, `persediaan`) VALUES
('M_001', 'Pizza', 'Makanan', 120000, 10),
('M_002', 'Nasi Goreng', 'Makanan', 15000, 10),
('M_003', 'Cupcake', 'Makanan', 10000, 10),
('M_004', 'Jus Alpukat', 'Minuman', 10000, 10),
('M_005', 'Cappucino', 'Minuman', 15000, 10),
('M_006', 'El Milo', 'Minuman', 10000, 10),
('M_008', 'Teh Pucuk', 'Minuman', 5000, 10),
('M_009', 'Teh Tarik', 'Minuman', 7000, 10),
('M_010', 'Kebab', 'Makanan', 15000, 10),
('M_011', 'Hamburger', 'Makanan', 20000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `password`, `no_telepon`, `alamat`) VALUES
('P_001', 'Victor Chandra', 'victor', '081234567891', 'Jl. Pelita Raya'),
('P_002', 'Udin Fajri', 'udin', '081234567892', 'Jl. Dumai'),
('P_003', 'Nesya Anfasha Rosa', 'nesya', '081234567893', 'Jl. Sekolah'),
('P_004', 'Nasha Hikmatia', 'nasha', '081234567894', 'Jl. Bunga Raya'),
('P_005', 'Feren', 'feren', '081234567890', 'Jl. Merpati'),
('P_006', 'Biston', 'biston', '0816548255', 'Jl. Kuasa'),
('P_010', 'Petro', 'petro', '873551864', 'Jl. Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `id_pembeli` varchar(10) NOT NULL,
  `total` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pembeli`, `total`) VALUES
('PE_001', 'P_001', 135000),
('PE_002', 'P_002', 25000),
('PE_003', 'P_003', 15000);

-- --------------------------------------------------------
--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_det_pesanan` (`id_pesanan`),
  ADD KEY `fk_det_menu` (`id_menu`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `fk_pesanan_pembeli` (`id_pembeli`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD CONSTRAINT `fk_det_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `fk_det_pesanan` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
