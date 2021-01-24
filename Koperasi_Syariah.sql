/*
* @Author: Rizki Mufrizal
* @Date:   2016-08-14 13:18:07
* @Last Modified by:   RizkiMufrizal
* @Last Modified time: 2016-08-18 14:26:40
*/

-- CREATE DATABASE koperasi_syariah;
-- USE koperasi_syariah;

CREATE TABLE tb_user(
  username VARCHAR(50) NOT NULL PRIMARY KEY,
  password VARCHAR(100) NOT NULL,
  role CHAR(11) NOT NULL
)ENGINE=INNODB;

CREATE TABLE tb_anggota(
  id_anggota VARCHAR(50) NOT NULL PRIMARY KEY,
  id INTEGER NOT NULL,
  nama VARCHAR(50) NOT NULL,
  tanggal_pendaftaran DATE NOT NULL,
  telepon CHAR(15) NOT NULL,
  tempat_lahir VARCHAR(50) NOT NULL,
  tanggal_lahir DATE NOT NULL,
  jenis_kelamin CHAR(6) NOT NULL,
  rembug VARCHAR(50) NOT NULL,
  setoran_awal DECIMAL NOT NULL,
  alamat TEXT NOT NULL,
  status TINYINT NOT NULL,
  username VARCHAR(50),
  FOREIGN KEY(username) REFERENCES tb_user(username)
    ON DELETE SET NULL
    ON UPDATE SET NULL
)ENGINE=INNODB;

CREATE TABLE tb_simpanan_anggota(
  id_simpanan_anggota VARCHAR(50) NOT NULL PRIMARY KEY,
  tanggal_transaksi DATE NOT NULL,
  simpanan_pokok DECIMAL NOT NULL,
  simpanan_sukarela DECIMAL NOT NULL,
  simpanan_hari_raya DECIMAL NOT NULL,
  simpanan_wajib DECIMAL NOT NULL,
  simpanan_pendidikan DECIMAL NOT NULL,
  pengambilan DECIMAL NOT NULL,
  saldo DECIMAL NOT NULL,
  id_anggota VARCHAR(50) NOT NULL,
  FOREIGN KEY(id_anggota) REFERENCES tb_anggota(id_anggota)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_pembiayaan(
  id_pembiayaan VARCHAR(50) NOT NULL PRIMARY KEY,
  tanggal_peminjaman DATE NOT NULL,
  tanggal_jatuh_tempo DATE NOT NULL,
  pembiayaan DECIMAL NOT NULL,
  biaya_administrasi DECIMAL NOT NULL,
  jenis_pembiayaan TEXT NULL,
  margin INT NOT NULL,
  total_pembiayaan DECIMAL NOT NULL,
  status TINYINT NOT NULL,
  id_anggota VARCHAR(50) NOT NULL,
  FOREIGN KEY(id_anggota) REFERENCES tb_anggota(id_anggota)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_angsuran_pembiayaan(
  id_angsuran_pembiayaan VARCHAR(50) NOT NULL PRIMARY KEY,
  tanggal_pembayaran_angsuran DATE NOT NULL,
  bagi_hasil_koperasi DECIMAL NOT NULL,
  bagi_hasil_anggota DECIMAL NOT NULL,
  pembayaran_angsuran DECIMAL NOT NULL,
  sisa_angsuran DECIMAL NOT NULL,
  id_pembiayaan VARCHAR(50) NOT NULL,
  FOREIGN KEY(id_pembiayaan) REFERENCES tb_pembiayaan(id_pembiayaan)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_peminjaman_instan(
  id_peminjaman_instan VARCHAR(50) NOT NULL PRIMARY KEY,
  tanggal_peminjaman DATE NOT NULL,
  tanggal_jatuh_tempo DATE NOT NULL,
  tanggal_pengembalian DATE DEFAULT NULL,
  pinjaman DECIMAL NOT NULL,
  total_pinjaman DECIMAL NOT NULL,
  bagi_hasil DECIMAL NOT NULL,
  biaya_administrasi DECIMAL NOT NULL,
  keterangan CHAR(15) NOT NULL,
  status TINYINT NOT NULL,
  id_anggota VARCHAR(50) NOT NULL,
  FOREIGN KEY(id_anggota) REFERENCES tb_anggota(id_anggota)
    ON DELETE CASCADE
  ON UPDATE CASCADE
)ENGINE=INNODB;

CREATE TABLE tb_biaya_operasional(
  id_biaya_operasional VARCHAR(50) NOT NULL PRIMARY KEY,
  tanggal_transaksi DATE NOT NULL,
  jenis_beban char(29) NOT NULL,
  keterangan TEXT NOT NULL,
  biaya DECIMAL NOT NULL
)ENGINE=INNODB;

CREATE TABLE tb_biaya_asset(
  id_biaya_asset VARCHAR(50) NOT NULL PRIMARY KEY,
  kode_inventaris VARCHAR(50) NOT NULL,
  sumber CHAR(9) NOT NULL,
  keterangan TEXT NOT NULL,
  biaya DECIMAL NOT NULL
)ENGINE=INNODB;

INSERT INTO tb_user(username, password, role) VALUES('admin', '$2a$06$VOi.SX2lF4UE3IvAivHHYO9eqyyiPnaLu4RDN3DNYpvZG3Jk3q.NS', 'ROLE_ADMIN');
-- INSERT INTO tb_user(username, password, role) VALUES('rizki', '$2a$06$R2pJcbx6GZGb5LAhu70NEeXFY6sq3Hr3qB7X3QmV/sPFXVHZh8Rfi', 'ROLE_ADMIN');
-- INSERT INTO tb_user(username, password, role) VALUES('aviv', '$2a$06$3g.WbSq91a7ZwDOurjW.ouqZhAhiScz2i11RCucP1M6tAVhAkZrea', 'ROLE_ADMIN');
-- INSERT INTO tb_user(username, password, role) VALUES('adhib', '$2a$06$.VHVnYEwaJbD0WdLYmp0UObydHoQQM3ge46YG/dDEqp3hcP/gjepq', 'ROLE_ADMIN');
