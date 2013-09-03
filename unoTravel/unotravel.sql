/*
Navicat MySQL Data Transfer

Source Server         : localhost xampp
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : unotravel

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-07-04 16:19:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `uno_bandara`
-- ----------------------------
DROP TABLE IF EXISTS `uno_bandara`;
CREATE TABLE `uno_bandara` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(75) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of uno_bandara
-- ----------------------------
INSERT INTO `uno_bandara` VALUES ('BDJ', 'Bandar Udara Internasional Syamsuddin Noor, Banjarmasin');
INSERT INTO `uno_bandara` VALUES ('BDO', 'Bandar Udara Internasional Husein Sastranegara, Bandung');
INSERT INTO `uno_bandara` VALUES ('BEJ', 'Bandar Udara Internasional Kalimarau, Berau');
INSERT INTO `uno_bandara` VALUES ('BPN', 'Bandar Udara Internasional Sepinggan, Balikpapan');
INSERT INTO `uno_bandara` VALUES ('BTH', 'Bandar Udara Internasional Hang Nadim, Batam');
INSERT INTO `uno_bandara` VALUES ('BTJ', 'Bandar Udara Internasional Sultan Iskandar Muda, Banda Aceh');
INSERT INTO `uno_bandara` VALUES ('BTW', 'Bandar Udara Bersujud, Batulicin');
INSERT INTO `uno_bandara` VALUES ('BWW', 'Bandar Udara Blimbingsari, Banyuwangi');
INSERT INTO `uno_bandara` VALUES ('BXT', 'Bandar Udara Bontang, Bontang');
INSERT INTO `uno_bandara` VALUES ('BYQ', 'Bandar Udara Bunyu, Bulungan');
INSERT INTO `uno_bandara` VALUES ('CGK', 'Banda Udara Internasional Soekarno-Hatta, Tangerang');
INSERT INTO `uno_bandara` VALUES ('DJB', 'Bandar Udara Sultan Thaha, Jambi');
INSERT INTO `uno_bandara` VALUES ('DPS', 'Bandar Udara Internasional Ngurah Rai, Denpasar');
INSERT INTO `uno_bandara` VALUES ('DTD', 'Bandar Udara Datah Dawai, Kutai Barat');
INSERT INTO `uno_bandara` VALUES ('JOG', 'Bandar Udara Internasional Adi Sucipto, Yogyakarta');
INSERT INTO `uno_bandara` VALUES ('KBU', 'Bandar Udara Stagen, Kotabaru');
INSERT INTO `uno_bandara` VALUES ('KMU', 'Bandar Udara Internasional Kuala Namu, Medan');
INSERT INTO `uno_bandara` VALUES ('KOE', 'Bandar Udara El Tari, Kupang, Nusa Tenggara Timur');
INSERT INTO `uno_bandara` VALUES ('KTG', 'Bandar Udara Rahadi Oesman, Ketapang');
INSERT INTO `uno_bandara` VALUES ('LOP', 'Bandar Udara Internasional Lombok, Lombok Tengah');
INSERT INTO `uno_bandara` VALUES ('MDC', 'Bandar Udara Internasional Sam Ratulangi, Manado');
INSERT INTO `uno_bandara` VALUES ('MES', 'Bandar Udara International Polonia, Medan');
INSERT INTO `uno_bandara` VALUES ('MLG', 'Bandar Udara Abdul Rachman saleh, Malang');
INSERT INTO `uno_bandara` VALUES ('MLK', 'Bandar Udara Melalan, Kutai Barat');
INSERT INTO `uno_bandara` VALUES ('MLN', 'Bandar Udara R.A. Bessing, Malinau');
INSERT INTO `uno_bandara` VALUES ('MTW', 'Bandar Udara Beringin, Muara Teweh');
INSERT INTO `uno_bandara` VALUES ('NNX', 'Bandar Udara Nunukan, Nunukan');
INSERT INTO `uno_bandara` VALUES ('NPO', 'Bandar Udara Nanga Pinoh, Melawi');
INSERT INTO `uno_bandara` VALUES ('PDG', 'Bandar Udara Internasional Minangkabau, Kota Padang');
INSERT INTO `uno_bandara` VALUES ('PGK', 'Bandar Udara Depati Amir, Pangkal Pinang');
INSERT INTO `uno_bandara` VALUES ('PKN', 'Bandar Udara Iskandar, Pangkalan Bun');
INSERT INTO `uno_bandara` VALUES ('PKU', 'Bandar Udara Internasional Sultan Syarif Kasim II, Pekanbaru');
INSERT INTO `uno_bandara` VALUES ('PKY', 'Bandar Udara Tjilik Riwut, Palangka Raya');
INSERT INTO `uno_bandara` VALUES ('PLM', 'Bandar Udara Sultan Mahmud Badaruddin II, Palembang ');
INSERT INTO `uno_bandara` VALUES ('PLW', 'Bandar Udara Mutiara, Palu');
INSERT INTO `uno_bandara` VALUES ('PNK', 'Bandar Udara Internasional Supadio. Pontianak');
INSERT INTO `uno_bandara` VALUES ('PSU', 'Bandar Udara Pangsuma, Putussibau');
INSERT INTO `uno_bandara` VALUES ('SGQ', 'Bandar Udara Sangkimah, Kutai Timur');
INSERT INTO `uno_bandara` VALUES ('SMQ', 'Bandar Udara H. Asan, Sampit');
INSERT INTO `uno_bandara` VALUES ('SOC', 'Bandar Udara Internasional Adisumarno, Solo');
INSERT INTO `uno_bandara` VALUES ('SQG', 'Bandar Udara Susilo, Sintang');
INSERT INTO `uno_bandara` VALUES ('SRG', 'Bandar Udara Internasional Achmad Yani, Semarang');
INSERT INTO `uno_bandara` VALUES ('SRI', 'Bandar Udara Temindung, Samarinda');
INSERT INTO `uno_bandara` VALUES ('SUB', 'Bandar Udara International Juanda, Surabaya');
INSERT INTO `uno_bandara` VALUES ('TBM', 'Bandar Udara Tumbang Samba, Katingan');
INSERT INTO `uno_bandara` VALUES ('TJG', 'Bandar Udara Warukin, Tanjung');
INSERT INTO `uno_bandara` VALUES ('TJS', 'Bandar Udara Tanjung Harapan, Bulungan');
INSERT INTO `uno_bandara` VALUES ('TKG', 'Bandar Udara Radin Inten II, Bandar Lampung');
INSERT INTO `uno_bandara` VALUES ('TNJ', 'Bandar Udara Internasional Raja Haji Fisabilillah, Tanjung Pinang');
INSERT INTO `uno_bandara` VALUES ('TRJ', 'Bandar Udara Internasional Juwata, Tarakan');
INSERT INTO `uno_bandara` VALUES ('TSX', 'Bandar Udara Tanjung Satan, Kutai Kartanegara');
INSERT INTO `uno_bandara` VALUES ('UPG', 'Bandar Udara Internasional Sultan Hasanuddin, Makassar');

-- ----------------------------
-- Table structure for `uno_kelas`
-- ----------------------------
DROP TABLE IF EXISTS `uno_kelas`;
CREATE TABLE `uno_kelas` (
  `kode` varchar(3) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of uno_kelas
-- ----------------------------
INSERT INTO `uno_kelas` VALUES ('001', 'ECONOMY');
INSERT INTO `uno_kelas` VALUES ('002', 'BUSINESS');

-- ----------------------------
-- Table structure for `uno_maskapai`
-- ----------------------------
DROP TABLE IF EXISTS `uno_maskapai`;
CREATE TABLE `uno_maskapai` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of uno_maskapai
-- ----------------------------
INSERT INTO `uno_maskapai` VALUES ('00001', 'Garuda');
INSERT INTO `uno_maskapai` VALUES ('00002', 'Merpati');
INSERT INTO `uno_maskapai` VALUES ('00003', 'Citilink');
INSERT INTO `uno_maskapai` VALUES ('00004', 'Lion');
INSERT INTO `uno_maskapai` VALUES ('00005', 'Airasia');
INSERT INTO `uno_maskapai` VALUES ('00006', 'Sriwijaya Air');
INSERT INTO `uno_maskapai` VALUES ('00007', 'Express Air');
INSERT INTO `uno_maskapai` VALUES ('00008', 'Sky Aviation');
INSERT INTO `uno_maskapai` VALUES ('00009', 'Kal Star');
INSERT INTO `uno_maskapai` VALUES ('00010', 'Transnusa');

-- ----------------------------
-- Table structure for `uno_user`
-- ----------------------------
DROP TABLE IF EXISTS `uno_user`;
CREATE TABLE `uno_user` (
  `user` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses` varchar(25) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of uno_user
-- ----------------------------
INSERT INTO `uno_user` VALUES ('', '', '');
INSERT INTO `uno_user` VALUES ('admin', 'ÛÂðÏ€pã‘6S\\¢îA', 'admin');
INSERT INTO `uno_user` VALUES ('pegawai1', 'ž“‡Ê°¾ m^ùýŽe', 'loket');
INSERT INTO `uno_user` VALUES ('pegawai2', 'ž“‡Ê°¾ m^ùýŽe', 'loket');
INSERT INTO `uno_user` VALUES ('petugas1', 'ž“‡Ê°¾ m^ùýŽe', 'petugas');
