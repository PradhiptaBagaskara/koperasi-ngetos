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
        <title>Laporan Peminjaman Koperasi SMPN 2 Ngetos</title>
        <?php $this->load->view('layout/CssLayout')?>
    </head>
    <body>

        <?php $this->load->view('layout/HeaderLayout')?>

        <div id="page-wrapper">

            <div class="row">
            <p></p>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/admin/">Home</a></li>
                    <li>Laporan Peminjaman </li>
                </ol>
                <div class="col-lg-12">

                    <h1 class="page-header">Data Peminjaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                <h4>Download laporan</h4>


                    <table id="dataPembiayaan" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Anggota</th>
                                <th class="text-center">Jumlah Pinjaman</th>
                                <th class="text-center">Sisa Angsuran</th>
                                <th class="text-center">Tanggal Peminjaman</th>
                                <th class="text-center">Tanggal Jatuh Tempo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $s) {?>
                                <tr>
                                    <td><?php echo $s->nama; ?></td>
                                    <td>Rp. <?php echo number_format($s->total_pembiayaan, 0, ',', '.')?></td>
                                    <td><?php echo $s->sisa_angsuran ? $s->sisa_angsuran : '-'; ?></td>
                                    <td><?php echo date_format(date_create($s->tanggal_peminjaman), 'd-m-Y'); ?></td>
                                    <td><?php echo $s->tanggal_jatuh_tempo; ?></td>

                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>


 
        <script type="text/javascript">
            $(document).ready(function () {
                $('#dataPembiayaan').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        // 'copyHtml5',
                        'excelHtml5',
                        // 'csvHtml5',
                        'pdfHtml5'
                    ]
                });
            });
        </script>
    </body>
</html>
