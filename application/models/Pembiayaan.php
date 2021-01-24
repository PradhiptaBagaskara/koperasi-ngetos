<?php

/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-15 12:56:42
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-18 22:29:32
 */

class Pembiayaan extends CI_Model
{
    //Untuk Ambil Data Pembiayaan
    public function ambilPembiayaan($idAnggota)
    {
        $this->db->where('id_anggota', $idAnggota);
        return $this->db->get('tb_pembiayaan')->result();
    }

    //Untuk Simpan Pembiayaan
    public function simpanPembiayaan($data)
    {
        $this->db->insert('tb_pembiayaan', $data);
    }

    public function ambilPembiayaanTerbaru($idAnggota)
    {
        $this->db->order_by('tanggal_peminjaman', 'DESC');
        $this->db->where('id_anggota', $idAnggota);
        return $this->db->get('tb_pembiayaan')->result();
    }

    public function ambilPembiayaanTerbaruBerdasarkanIdPembiayaan($idPembiayaan)
    {
        $this->db->order_by('tanggal_peminjaman', 'DESC');
        $this->db->where('id_pembiayaan', $idPembiayaan);
        return $this->db->get('tb_pembiayaan')->result();
    }

    public function updatePembiayaan($idPembiayaan)
    {
        $this->db->set('status', '1');
        $this->db->where('id_pembiayaan', $idPembiayaan);
        $this->db->update('tb_pembiayaan', $pembiayaan);
    }

    /**
     * ambil semua data pembiayaan
     * @param string $value [description]
     */
    public function ambilSemuaPembiayaan()
    {
        return $this->db->get('tb_pembiayaan')->result();
    }

    
    public function getPinjamanAngsuran()
    {
        $this->db->select('*');
        $this->db->from('tb_pembiayaan pinjaman');
        $this->db->join('tb_angsuran_pembiayaan angsuran', 'angsuran.id_pembiayaan=pinjaman.id_pembiayaan', 'left');
        $this->db->join('tb_anggota anggota', 'anggota.id_anggota=pinjaman.id_anggota', 'left');
        return $this->db->get()->result();
    }
    public function getAktifPinjaman()
    {
        $this->db->select('sum(sisa_angsuran) total, sum(biaya_administrasi) admin');
        $this->db->from('tb_pembiayaan pinjaman');
        $this->db->join('tb_angsuran_pembiayaan angsuran', 'angsuran.id_pembiayaan=pinjaman.id_pembiayaan', 'left');
        $this->db->join('tb_anggota anggota', 'anggota.id_anggota=pinjaman.id_anggota', 'left');
        // return $this->db->get()->row();
        $val =  $this->db->get()->row();

        try {
            $data = $val->total - $val->admin;
        } catch (\Throwable $th) {
            $data = $val->total;
        }
        if ($data < 0){
            return 0;
        }
        return $data;
    }

    /**
     * ambil pembiayaan berdasarkan dua tanggal
     * @param  [type] $tanggalAwal  [description]
     * @param  [type] $tanggalAkhir [description]
     * @return [type]               [description]
     */
    public function ambilPembiayaanBerdasarkanDuaTanggal($tanggalAwal, $tanggalAkhir)
    {
        return $this->db->query("SELECT pembiayaan, biaya_administrasi, margin FROM tb_pembiayaan WHERE tanggal_peminjaman BETWEEN " . "'" . $tanggalAwal . "' AND '" . $tanggalAkhir . "'")->result();
    }

}
