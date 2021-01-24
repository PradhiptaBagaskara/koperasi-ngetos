<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-16 13:11:14
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-08-18 21:54:17
 */
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman Admin</title>
        <?php $this->load->view('layout/CssLayout')?>
    </head>
    <body>

        <?php $this->load->view('layout/HeaderLayout')?>

        <div id="page-wrapper">

            <div class="row">
            <p></p>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/admin/">Home</a></li>
                    <li>Data Anggota</li>
                </ol>
                <div class="col-lg-12">

                    <h1 class="page-header">Data Anggota</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">


                    <a href="<?php echo base_url(); ?>/admin/AnggotaController/tambahAnggota">
                        <button type="button" class="btn btn-primary">
                            Tambah Anggota
                        </button>
                    </a>

                    <p></p>

                    <table id="dataPembiayaan" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID Anggota</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Setoran Awal</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($record as $s) {?>
                                <tr>
                                    <td><?php echo $s->id_anggota; ?></td>
                                    <td><?php echo $s->nama; ?></td>
                                    <td><?php echo $s->rembug; ?></td>
                                    <td class="text-right"><?php echo number_format($s->setoran_awal, 0, ',', '.'); ?></td>
                                    <td><?php if ($s->status == 1) {echo "AKTIF";} else {echo "TIDAK AKTIF";}?></td>
                                    <td class="text-center">
                                        <?php if ($s->status == 1) {?>
                                            <a href="<?php echo base_url(); ?>/admin/AnggotaController/DetailAnggota/<?php echo $s->id_anggota; ?>">
                                            <button type="button" class="btn btn-default">
                                                Detail
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>/admin/SimpananAnggotaController/index/<?php echo $s->id_anggota; ?>">
                                            <button type="button" class="btn btn-primary">
                                                Simpanan Anggota
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>/admin/PembiayaanController/index/<?php echo $s->id_anggota; ?>">
                                            <button type="button" class="btn btn-success">
                                            Pinjaman
                                            </button>
                                        </a>
                                        <!-- <a href="<?php echo base_url(); ?>/admin/PeminjamanInstanController/index/<?php echo $s->id_anggota; ?>">
                                            <button type="button" class="btn btn-warning">
                                                Pinjaman Instan
                                            </button>
                                        </a> -->
                                        <?php } else {?>
                                            <button type="button" class="btn btn-default" disabled>
                                                Detail
                                            </button>
                                            <button type="button" class="btn btn-primary" disabled>
                                                Simpanan Anggota
                                            </button>
                                            <button type="button" class="btn btn-success" disabled>
                                                Pembiayaan
                                            </button>
                                            <button type="button" class="btn btn-warning" disabled>
                                                Pinjaman Instan
                                            </button>
                                        <?php }?>

                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#dataPembiayaan').DataTable();
            });
        </script>
    </body>
</html>
