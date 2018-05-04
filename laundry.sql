-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 21, 2016 at 07:57 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `laundry`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `barang`
-- 

CREATE TABLE `barang` (
  `kode_barang` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nama_barang` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `stok` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `tgl_update_stok` date NOT NULL,
  PRIMARY KEY  (`kode_barang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `barang`
-- 

INSERT INTO `barang` VALUES (0x303031, 0x62756b75, 0x3131, '2016-02-02');
INSERT INTO `barang` VALUES (0x303032, 0x4b6970617320416e67696e, 0x31, '2012-01-01');

-- --------------------------------------------------------

-- 
-- Table structure for table `jenis_laundry`
-- 

CREATE TABLE `jenis_laundry` (
  `id_jenis` varchar(5) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_jenis`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `jenis_laundry`
-- 

INSERT INTO `jenis_laundry` VALUES ('121', 'dawdwa');

-- --------------------------------------------------------

-- 
-- Table structure for table `karyawan`
-- 

CREATE TABLE `karyawan` (
  `nik` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `nm_karyawan` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `alamat_karyawan` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `telp_karyawan` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `jenis_kelamin` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `karyawan`
-- 

INSERT INTO `karyawan` VALUES (0x3030303031, 0x61646d696e, 0x61646d696e, 0x2830383529373332353834343231, 0x4c616b692d4c616b69);
INSERT INTO `karyawan` VALUES (0x3030303032, 0x6665627269, 0x6a6c20616264756c206d757374616b696e, 0x303835373332353834343231, 0x4c616b692d4c616b69);
INSERT INTO `karyawan` VALUES (0x3030303033, 0x616e6173, 0x6b61, 0x303835373332353833313231, 0x4c616b692d4c616b69);
INSERT INTO `karyawan` VALUES (0x3030303035, 0x6665627269, 0x6a6c206d657270617469, 0x3039323132313132313132, 0x4c616b692d4c616b69);
INSERT INTO `karyawan` VALUES (0x303030303031, 0x6661, 0x6a6c206d657270617469, 0x303835373332353834343231, 0x4c616b692d4c616b69);

-- --------------------------------------------------------

-- 
-- Table structure for table `konsumen`
-- 

CREATE TABLE `konsumen` (
  `id_konsumen` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nama_konsumen` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `alamat_konsumen` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `tlp_konsumen` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id_konsumen`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `konsumen`
-- 

INSERT INTO `konsumen` VALUES (0x303131, 0x6665627269, 0x6a6c, 0x3038353733323834343231);
INSERT INTO `konsumen` VALUES (0x3132313231, 0x6164617764776164, 0x4a6c2061626469206e7567726168612c20626f6a6f6e65676f726f, 0x2830383529373332353834343231);
INSERT INTO `konsumen` VALUES (0x3030303031, 0x64696e69, 0x4a6c2061626469206e7567726168612c20626f6a6f6e65676f726f, 0x2830383529373332353834343231);
INSERT INTO `konsumen` VALUES (0x3731363238, 0x6e6761777572, 0x706f646f, 0x2831373229353337363132363235);

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `username` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `password` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `typeuser` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `nik` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (0x616461, 0x6b6572616e676b616e67, 0x6b6172796177616e, 0x3030303032);
INSERT INTO `login` VALUES (0x61646164, 0x6b6572616e676b616e67, 0x6b6172796177616e, 0x3030303035);
INSERT INTO `login` VALUES (0x616e6173, 0x6177646177647761, 0x6b6172796177616e, 0x3030303033);
INSERT INTO `login` VALUES (0x61646d696e, 0x61646d696e, 0x61646d696e, 0x3030303031);
INSERT INTO `login` VALUES (0x6661, 0x6b6572616e676b616e67, 0x6b6172796177616e, 0x303030303031);

-- --------------------------------------------------------

-- 
-- Table structure for table `pemakaian_barang`
-- 

CREATE TABLE `pemakaian_barang` (
  `id_keluar` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nik` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `kode_barang` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `jumlah` varchar(3) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id_keluar`),
  KEY `nik` (`nik`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `pemakaian_barang`
-- 

INSERT INTO `pemakaian_barang` VALUES (0x33343131, 0x303131, 0x303031, 0x3131);
INSERT INTO `pemakaian_barang` VALUES (0x31323131, 0x3132313131, 0x31323132, 0x3131);

-- --------------------------------------------------------

-- 
-- Table structure for table `pembelian`
-- 

CREATE TABLE `pembelian` (
  `no_pembelian` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nik` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `id_suplier` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `tgl_pembelian` date NOT NULL,
  `total_biaya` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`no_pembelian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `pembelian`
-- 

INSERT INTO `pembelian` VALUES (0x3132333133, 0x31323132, 0x313231, '2016-02-29', 0x31313131);

-- --------------------------------------------------------

-- 
-- Table structure for table `rincian_pembelian`
-- 

CREATE TABLE `rincian_pembelian` (
  `no_rincian` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `no_pembelian` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `kode_barang` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `jumlah` varchar(3) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`no_rincian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `rincian_pembelian`
-- 

INSERT INTO `rincian_pembelian` VALUES (0x31323331333132, 0x31313231, 0x3131, 0x3130);

-- --------------------------------------------------------

-- 
-- Table structure for table `rincian_transaksi`
-- 

CREATE TABLE `rincian_transaksi` (
  `id_rincian` varchar(10) NOT NULL,
  `no_transaksi` varchar(5) NOT NULL,
  `id_tarif` varchar(10) NOT NULL,
  `jumlah` varchar(3) NOT NULL,
  PRIMARY KEY  (`id_rincian`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `rincian_transaksi`
-- 

INSERT INTO `rincian_transaksi` VALUES ('123123111', '99199', '192919', '97');

-- --------------------------------------------------------

-- 
-- Table structure for table `suplier`
-- 

CREATE TABLE `suplier` (
  `id_suplier` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nama_suplier` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `alamat_suplier` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `tlp_suplier` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id_suplier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `suplier`
-- 

INSERT INTO `suplier` VALUES (0x3031313131, 0x616e746173617269, 0x4a6c204a61746920526f676f204e6f2035, 0x28303835293733323538343432);
INSERT INTO `suplier` VALUES (0x3132313331, 0x61647761647761646177, 0x64776164776164617764, 0x3132333838313137323337);
INSERT INTO `suplier` VALUES (0x3030303031, 0x64696e69, 0x4a6c204a61746920526f676f204e6f2035, 0x28303835293733323538343432);

-- --------------------------------------------------------

-- 
-- Table structure for table `tarif`
-- 

CREATE TABLE `tarif` (
  `id_tarif` varchar(10) character set utf8 collate utf8_bin NOT NULL,
  `id_jenis_laundry` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nama_pakaian` varchar(50) character set utf8 collate utf8_bin NOT NULL,
  `tarif` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`id_tarif`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `tarif`
-- 

INSERT INTO `tarif` VALUES (0x303132313231323130, 0x3031323132, 0x6b6161, 0x31323132);

-- --------------------------------------------------------

-- 
-- Table structure for table `transaksi`
-- 

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(6) character set utf8 collate utf8_bin NOT NULL,
  `kode_konsumen` varchar(5) character set utf8 collate utf8_bin NOT NULL,
  `nik` varchar(20) character set utf8 collate utf8_bin NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_ambil` date NOT NULL,
  `diskon` varchar(4) character set utf8 collate utf8_bin NOT NULL,
  PRIMARY KEY  (`no_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `transaksi`
-- 

INSERT INTO `transaksi` VALUES (0x31323131, 0x3031323132, 0x30313231313232, '2016-02-15', '2016-02-29', 0x3925);
INSERT INTO `transaksi` VALUES (0x313233313231, 0x313030, 0x32303032, '2000-00-01', '2002-02-04', 0x313025);
INSERT INTO `transaksi` VALUES (0x303030303031, 0x323030312f, 0x31323031323230, '2012-00-12', '1200-10-10', 0x313025);
