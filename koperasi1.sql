-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- membuang struktur untuk table koperasi_syariah.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` char(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- membuang struktur untuk table koperasi_syariah.tb_anggota

CREATE TABLE IF NOT EXISTS `tb_anggota` (
  `id_anggota` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_pendaftaran` date NOT NULL,
  `telepon` char(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(6) NOT NULL,
  `rembug` varchar(50) NOT NULL,
  `setoran_awal` decimal(10,0) NOT NULL,
  `alamat` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id_login` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_anggota`),
  KEY `username` (`username`),
  CONSTRAINT `tb_anggota_ibfk_1` FOREIGN KEY (`username`) REFERENCES `tb_user` (`username`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- membuang struktur untuk table koperasi_syariah.tb_simpanan_anggota
CREATE TABLE IF NOT EXISTS `tb_simpanan_anggota` (
  `id_simpanan_anggota` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `simpanan_pokok` decimal(10,0) NOT NULL DEFAULT '0',
  `simpanan_sukarela` decimal(10,0) NOT NULL DEFAULT '0',
  `simpanan_hari_raya` decimal(10,0) NOT NULL DEFAULT '0',
  `simpanan_wajib` decimal(10,0) NOT NULL DEFAULT '0',
  `simpanan_pendidikan` decimal(10,0) NOT NULL DEFAULT '0',
  `pengambilan` decimal(10,0) NOT NULL DEFAULT '0',
  `saldo` decimal(10,0) NOT NULL DEFAULT '0',
  `id_anggota` varchar(50) NOT NULL,
  PRIMARY KEY (`id_simpanan_anggota`),
  KEY `id_anggota` (`id_anggota`),
  CONSTRAINT `tb_simpanan_anggota_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- membuang struktur untuk table koperasi_syariah.tb_pembiayaan
CREATE TABLE IF NOT EXISTS `tb_pembiayaan` (
  `id_pembiayaan` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `pembiayaan` decimal(10,0) NOT NULL,
  `biaya_administrasi` decimal(10,0) NOT NULL,
  `jenis_pembiayaan` text,
  `margin` int(11) NOT NULL,
  `total_pembiayaan` decimal(10,0) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_anggota` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembiayaan`),
  KEY `id_anggota` (`id_anggota`),
  CONSTRAINT `tb_pembiayaan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- membuang struktur untuk table koperasi_syariah.tb_angsuran_pembiayaan
CREATE TABLE IF NOT EXISTS `tb_angsuran_pembiayaan` (
  `id_angsuran_pembiayaan` varchar(50) NOT NULL,
  `tanggal_pembayaran_angsuran` date NOT NULL,
  `bagi_hasil_koperasi` decimal(10,0) NOT NULL,
  `bagi_hasil_anggota` decimal(10,0) NOT NULL,
  `pembayaran_angsuran` decimal(10,0) NOT NULL,
  `sisa_angsuran` decimal(10,0) NOT NULL,
  `id_pembiayaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_angsuran_pembiayaan`),
  KEY `id_pembiayaan` (`id_pembiayaan`),
  CONSTRAINT `tb_angsuran_pembiayaan_ibfk_1` FOREIGN KEY (`id_pembiayaan`) REFERENCES `tb_pembiayaan` (`id_pembiayaan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- membuang struktur untuk table koperasi_syariah.tb_peminjaman_instan
CREATE TABLE IF NOT EXISTS `tb_peminjaman_instan` (
  `id_peminjaman_instan` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `pinjaman` decimal(10,0) NOT NULL,
  `total_pinjaman` decimal(10,0) NOT NULL,
  `bagi_hasil` decimal(10,0) NOT NULL,
  `biaya_administrasi` decimal(10,0) NOT NULL,
  `keterangan` char(15) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `id_anggota` varchar(50) NOT NULL,
  PRIMARY KEY (`id_peminjaman_instan`),
  KEY `id_anggota` (`id_anggota`),
  CONSTRAINT `tb_peminjaman_instan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `tb_anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- membuang struktur untuk table koperasi_syariah.tb_biaya_operasional
CREATE TABLE IF NOT EXISTS `tb_biaya_operasional` (
  `id_biaya_operasional` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `jenis_beban` char(29) NOT NULL,
  `keterangan` text NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_biaya_operasional`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- membuang struktur untuk table koperasi_syariah.tb_biaya_asset
CREATE TABLE IF NOT EXISTS `tb_biaya_asset` (
  `id_biaya_asset` varchar(50) NOT NULL,
  `kode_inventaris` varchar(50) NOT NULL,
  `sumber` char(9) NOT NULL,
  `keterangan` text NOT NULL,
  `biaya` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id_biaya_asset`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Membuang data untuk tabel koperasi_syariah.tb_biaya_asset: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_biaya_asset` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_biaya_asset` ENABLE KEYS */;

INSERT INTO `tb_user` (`username`, `password`, `role`) VALUES
	('admin', '$2a$08$AVV.TwtUxEWRa4COP.mx4uqnh7473hG7Jk9l3y/O.lGxP0pOzXRk2', 'ROLE_ADMIN');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;


