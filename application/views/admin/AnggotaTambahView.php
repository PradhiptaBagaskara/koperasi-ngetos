<!--
/**
 * @Author: Aviv Arifian D
 * @Date:   2016-08-16 15:26:41
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-19 18:56:52
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
                    <li>Tambah Anggota</li>
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Data Anggota</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <?php if ($this->session->flashdata('pesan') != null) {?>
                        <div id="error" style="text-align: center" class="alert alert-danger">
                            <a href="" class="close" data-dismiss="alert"> &times; </a>
                            <strong>Error</strong><p></p> <?php echo $this->session->flashdata('pesan'); ?>
                        </div>
                    <?php }?>

                    <form method="post" action="<?php echo base_url(); ?>/admin/AnggotaController/simpanAnggota">

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input name="nama" type="text" class="form-control" id="password" placeholder="masukkan nama anda" required>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" class="form-control" id="password" placeholder="masukkan tempat lahir anda" required>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tanggal Lahir</label>
                            <input id="datetimepicker" name="tanggal_lahir" type="text" class="form-control" id="password" placeholder="masukkan tanggal lahir anda" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select type="text" name="jenis_kelamin" class="form-control required">
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input name="telepon" type="number" class="form-control" id="password" placeholder="masukan nomer telepon anda" required>
                        </div>

                        <div class="form-group">
                            <label for="rembug">Jabatan</label>
                            <select type="text" name="rembug" class="form-control required">
                                <option value="TU">TU</option>
                                <option value="Guru">Guru</option>
                                <option value="Staff">Staff</option>
                                <option value="Kepala">Kepala</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="setoran_awal">Setoran Awal</label>
                            <input name="setoran_awal" type="text" class="form-control angka" id="password" placeholder="masukkan setoran awal anda" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" type="text" class="form-control" id="password" placeholder="masukkan alamat anda" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="username" type="text" class="form-control" id="password" placeholder="masukkan password anda" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" type="password" class="form-control" id="password" placeholder="masukkan password anda" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select type="text" name="status" class="form-control required">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $hash; ?>" />
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="<?php echo base_url(); ?>/admin/AnggotaController/index">
                            <button type="button" class="btn btn-warning">Batal</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>
        <script type="text/javascript">
            jQuery('#datetimepicker').datetimepicker({
                timepicker: false,
                mask: true,
                format: 'd/m/Y'
            });
        </script>
    </body>
</html>
