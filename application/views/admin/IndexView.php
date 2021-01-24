<!--
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-15 15:01:26
 * @Last Modified by:   RizkiMufrizal
 * @Last Modified time: 2016-08-18 18:55:19
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

                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                                
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-success"  style="padding: 10px;">
                        <div class="inner">
                            <h4>Total Simpanan</h4>
                            <h3><?= number_format($simpanan,2,',','.')?></h3>

                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-primary"  style="padding: 10px;">
                        <div class="inner">
                            <h4>Saldo di Pinjam</h4>
                            <h3><?= number_format($pinjaman,2,',','.')?></h3>

                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <!-- small box -->
                    <div class="small-box bg-danger"  style="padding: 10px;">
                        <div class="inner">
                            <h4>Total Saldo</h4>
                            <h3><?= number_format($simpanan-$pinjaman,2,',','.')?></h3>

                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

            </div>
<hr>
            <div class="row">            
                <div class="jumbotron">
                    <div class="container">
                        <h1 class="text-center">Aplikasi Koperasi SMPN 2 Ngetos</h1>
                        <h2 class="text-center">Selamat Datang <?php echo $this->session->userdata('username'); ?></h2>          
                    </div>
                </div>
            </div>
    
</div>
        <?php $this->load->view('layout/JsLayout')?>
    </body>
</html>
