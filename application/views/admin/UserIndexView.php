<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-16 01:41:30
 * @Last Modified by:   adhibarfan
 * @Last Modified time: 2016-08-18 21:56:54
 */
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Halaman User</title>
        <?php $this->load->view('layout/CssLayout')?>
    </head>
    <body>

        <?php $this->load->view('layout/HeaderLayout')?>

        <div id="page-wrapper">
            <div class="row">
            <p></p>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>/admin/">Home</a></li>
                    <li>Data User</li>
                </ol>
                <div class="col-lg-12">
                    <h1 class="page-header">Data User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">

                    <a href="<?php echo base_url(); ?>/UserController/tambahUser">
                        <button type="button" class="btn btn-primary">
                            Tambah Admin
                        </button>
                    </a>

                    <p></p>

                    <table id="dataUser" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Username</th>
                                <!-- <th class="text-center">Role</th> -->
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $s) {?>
                                <tr>
                                    <td><?php echo $s->username; ?></td>
                                    <!-- <td><?php echo $s->role; ?></td> -->
                                    <td class="text-center">
                                        <a href="<?php echo base_url(); ?>/UserController/editUser/<?php echo $s->username; ?>">
                                            <button type="button" class="btn btn-success">
                                                Edit
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url(); ?>/UserController/hapusUser/<?php echo $s->username; ?>"">
                                            <button type="button" class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </a>
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
                $('#dataUser').DataTable();
            });
        </script>
    </body>
</html>
