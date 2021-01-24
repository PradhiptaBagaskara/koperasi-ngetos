<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-17 11:53:52
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-08-18 21:54:38
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
                    <li><a href="<?php echo base_url(); ?>/admin/AnggotaController/index">Data Anggota</a></li>
                    <li><a href="<?php echo base_url(); ?>/admin/PembiayaanController/index/<?php echo $this->uri->segment(5); ?>">Pembiayaan</a></li>
                    <li>Data Angsuran Pembiayaan</li>
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Data Angsuran Pembiayaan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <a href="<?php echo base_url(); ?>/admin/AngsuranPembiayaanController/tambahAngsuranPembiayaan/<?php echo $this->uri->segment(4); ?>/<?php echo $this->uri->segment(5); ?>">
                        <button type="button" class="btn btn-primary">
                            Tambah Angsuran Pembiayaan
                        </button>
                    </a>

                    <p></p>

                    <table id="dataAngsuranPembiayaan" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Tanggal Pembayaran Angsuran</th>
                                <th class="text-center">Pembayaran Angsuran</th>
                                <th class="text-center">Sisa Angsuran</th>
                                <th class="text-center">Bagi Hasil Koperasi</th>
                                <th class="text-center">Bagi Hasil Anggota</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($record as $s) {?>
                                <tr>
                                    <td><?php echo $s->tanggal_pembayaran_angsuran; ?></td>
                                    <td class="text-right"><?php echo number_format($s->pembayaran_angsuran, 0, ',', '.'); ?></td>
                                    <td class="text-right"><?php echo number_format($s->sisa_angsuran, 0, ',', '.'); ?></td>
                                    <td class="text-right"><?php echo number_format($s->bagi_hasil_koperasi, 0, ',', '.'); ?></td>
                                    <td class="text-right"><?php echo number_format($s->bagi_hasil_anggota, 0, ',', '.'); ?></td>
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
                $('#dataAngsuranPembiayaan').DataTable();
            });
        </script>
    </body>
</html>