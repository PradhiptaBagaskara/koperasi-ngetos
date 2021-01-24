<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-15 14:41:25
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-18 22:50:38
 */
-->

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Koperasi SMPN 2 Ngetos</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('username'); ?>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="<?php echo base_url(); ?>/UserController/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    <!-- /input-group -->
                </li>

                <?php if ($this->session->userdata('role') == 'ROLE_ADMIN') {?>
                <li>
                    <a href="<?php echo base_url(); ?>/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/UserController/index"><i class="fa fa-user-secret fa-fw"></i> Data User</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/admin/AnggotaController/index"><i class="fa fa-users fa-fw"></i> Data Anggota</a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url(); ?>/admin/BiayaOperasionalController/index"><i class="fa fa-money fa-fw"></i> Data Biaya Operasional</a>
                </li> -->
                <li>
                    <a href="<?php echo base_url(); ?>/admin/BiayaAssetController/index"><i class="fa fa-credit-card fa-fw"></i> Data Biaya Asset</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/admin/LaporanController/index"><i class="fa fa-file-pdf-o fa-fw"></i> Laporan</a>
                </li>
                <?php } else {?>
                <li>
                    <a href="<?php echo base_url(); ?>/user/IndexController/index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/admin/SimpananAnggotaController/indexUser"><i class="fa fa-money fa-fw"></i> Data Simpanan Anggota</a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>/admin/PembiayaanController/indexUser"><i class="fa fa-credit-card fa-fw"></i> Data Peminjaman</a>
                </li>
                <!-- <li>
                    <a href="<?php echo base_url(); ?>/admin/PeminjamanInstanController/indexUser"><i class="fa fa-credit-card-alt fa-fw"></i> Data Peminjaman Instan</a>
                </li> -->
                <li>
                    <a href="<?php echo base_url(); ?>/admin/AnggotaController/Profile"><i class="fa fa-male fa-fw"></i> Profile</a>
                </li>
                <?php }?>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
