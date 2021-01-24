<!--/**
 * @Author: Adhib Arfan<adhib.arfan@gmail.com>
 * @Date:   2016-08-18 13:09:13
 * @Last Modified by:   Aviv Arifian D
 * @Last Modified time: 2016-08-18 22:04:50
 */-->

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
                <li><a href="<?php echo base_url(); ?>/user/IndexController/">Home</a></li>
                <li>Profile</li>
            </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Anggota</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php foreach ($record as $r) {?>
                <div class="row">
                    <div class="col-lg-12">

                        <form method="post" action="<?php echo base_url(); ?>/admin/AnggotaController/UpdateAnggota">

                            <div class="form-group">
                                <label for="name">ID Anggota</label>
                                <input name="id_anggota1" type="text" class="form-control" value="<?php echo $r->id_anggota; ?>" disabled>
                                <input type="hidden" name="id_anggota" value="<?php echo $r->id_anggota; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input name="nama" type="text" class="form-control" value="<?php echo $r->nama; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control" value="<?php echo $r->tempat_lahir; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="text" class="form-control" value="<?php echo $r->tanggal_lahir; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select type="text" name="jenis_kelamin" class="form-control required" value="<?php echo $r->jenis_kelamin; ?>" disabled>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input name="telepon" type="number" class="form-control" value="<?php echo $r->telepon; ?>" disabled >
                            </div>
                            <div class="form-group">
                                <label for="rembug">Jabatan</label>
                                <select type="text" name="rembug1" class="form-control required" value="<?php echo $r->rembug; ?>" disabled>
                                <option value="TU">TU</option>
                                <option value="Guru">Guru</option>
                                <option value="Staff">Staff</option>
                                <option value="Kepala">Kepala</option>
                                </select>
                                <input type="hidden" name="rembug" value="<?php echo $r->rembug; ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" class="form-control" value="<?php echo $r->alamat; ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username1" type="text" class="form-control" value="<?php echo $r->username; ?>" disabled>
                                <input type="hidden" name="username" value="<?php echo $r->username; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select type="text" name="status1" class="form-control required" value="<?php echo $r->status; ?>" disabled>
                                    <option value="Aktif">Aktif</option>
                                    <option value="TidakAktif">Tidak Aktif</option>
                                </select>
                                <input type="hidden" name="status" value="<?php echo $r->status; ?>"/>
                            </div>
                            <p></p>
                            <input type="hidden" name="<?php echo $name; ?>" value="<?php echo $hash; ?>" />
                        <?php }?>

                        <a href="<?php echo base_url(); ?>/user/IndexController/index">
                            <button type="button" class="btn btn-warning">Close</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <?php $this->load->view('layout/JsLayout')?>

    </body>
</html>

