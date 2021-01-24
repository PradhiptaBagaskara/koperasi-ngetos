<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-17 09:49:57
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-19 14:41:06
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
                    <li><a href="<?php echo base_url(); ?>/admin/PembiayaanController/index/<?php echo $this->uri->segment(4); ?>">Pembiayaan</a></li>
                    <li>Tambah Peminjaman</li>
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Peminjaman</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="<?php echo base_url(); ?>/admin/PembiayaanController/simpanPembiayaan/<?php echo $this->uri->segment(4); ?>">

                        <div class="form-group">
                            <label for="datetimepicker1">Tanggal Peminjaman</label>
                            <input id="datetimepicker1" name="tanggal_peminjaman" class="form-control" placeholder="masukkan Tanggal Peminjaman anda" required>
                        </div>

                        <div class="form-group">
                            <label for="datetimepicker2">Tanggal Jatuh Tempo</label>
                            <input id="datetimepicker2" name="tanggal_jatuh_tempo" class="form-control" placeholder="masukkan Tanggal Jatuh Tempo anda" required>
                        </div>

                        <div class="form-group">
                            <label for="pembiayaan">Peminjaman</label>
                            <input type="text" id="pembiayaan" name="pembiayaan" class="form-control angka" placeholder="masukkan Pembiayaan anda" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_pembiayaan">Catatan</label>
                            <textarea  class="form-control" name="jenis_pembiayaan" id="jenis_pembiayaan" cols="30" rows="10" placeholder="Catatan"></textarea>
                        </div>

                        <div id="margin1" class="form-group">
                            <label for="margin">Margin</label>
                            <input type="number" id="margin" name="margin" class="form-control" value="0" placeholder="masukkan Margin anda" required>
                        </div>

                        <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $hash; ?>" />
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo base_url(); ?>/admin/PembiayaanController/index/<?php echo $this->uri->segment(4); ?>">
                            <button type="button" class="btn btn-warning">Batal</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>
        <script type="text/javascript">
            jQuery('#datetimepicker1').datetimepicker({
                timepicker: false,
                mask: true,
                format: 'd/m/Y'
            });
            jQuery('#datetimepicker2').datetimepicker({
                timepicker: false,
                mask: true,
                format: 'd/m/Y'
            });
            // $(document).ready(function(){
            //     $('#margin1').hide();
            //     $('#jenis_pembiayaan').change(function () {
            //         var val = $('#jenis_pembiayaan').val();
            //         if(val == 'Murobaah') {
            //             $('#margin1').show();
            //         } else if(val == 'Ijarah') {
            //             $('#margin1').show();
            //         } else {
            //             $('#margin1').hide();
            //         }
            //     });
            // });
        </script>
    </body>
</html>