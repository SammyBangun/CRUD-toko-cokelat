-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_toko_cokelat
CREATE DATABASE IF NOT EXISTS `db_toko_cokelat` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_toko_cokelat`;

-- Dumping structure for table db_toko_cokelat.tbpasokan
CREATE TABLE IF NOT EXISTS `tbpasokan` (
  `id_pasokan` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_pemasok` char(5) DEFAULT NULL,
  `id_produk` char(5) DEFAULT NULL,
  `pasokan` int(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id_pasokan`),
  KEY `FK_tbpasokan_tbpemasok` (`id_pemasok`),
  KEY `FK_tbpemasok_tbproduk` (`id_produk`),
  CONSTRAINT `FK_tbpasokan_tbpemasok` FOREIGN KEY (`id_pemasok`) REFERENCES `tbpemasok` (`id_pemasok`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tbpemasok_tbproduk` FOREIGN KEY (`id_produk`) REFERENCES `tbproduk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.tbpelanggan
CREATE TABLE IF NOT EXISTS `tbpelanggan` (
  `id_pelanggan` char(5) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.tbpemasok
CREATE TABLE IF NOT EXISTS `tbpemasok` (
  `id_pemasok` char(5) NOT NULL,
  `nama_pemasok` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_pemasok`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.tbpenjualan
CREATE TABLE IF NOT EXISTS `tbpenjualan` (
  `id_transaksi` char(5) NOT NULL DEFAULT '0',
  `tanggal` date NOT NULL,
  `id_pelanggan` char(5) DEFAULT NULL,
  `total` int(10) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `FK_tbpenjualan_tbpelanggan` (`id_pelanggan`),
  CONSTRAINT `FK_tbpenjualan_tbpelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbpelanggan` (`id_pelanggan`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.tbpenjualan_dtl
CREATE TABLE IF NOT EXISTS `tbpenjualan_dtl` (
  `id` int(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `id_transaksi` char(5) DEFAULT NULL,
  `id_produk` char(5) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `kuantitas` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbpenjualan_dtl_tbproduk` (`id_produk`),
  KEY `FK_tbpenjualan_dtl_tbpenjualan` (`id_transaksi`),
  CONSTRAINT `FK_tbpenjualan_dtl_tbpenjualan` FOREIGN KEY (`id_transaksi`) REFERENCES `tbpenjualan` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_tbpenjualan_dtl_tbproduk` FOREIGN KEY (`id_produk`) REFERENCES `tbproduk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.tbproduk
CREATE TABLE IF NOT EXISTS `tbproduk` (
  `id_produk` char(5) NOT NULL DEFAULT '',
  `nama_produk` varchar(30) DEFAULT NULL,
  `jenis_cokelat` varchar(30) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

-- Dumping structure for table db_toko_cokelat.users
CREATE TABLE IF NOT EXISTS `users` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
