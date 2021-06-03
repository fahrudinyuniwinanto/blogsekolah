<?php
// echo is_allow("M_PERSTASI_SEKOLAH");
// echo "sdf".is_logged();die();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=data_app()?></title>

    <link href="<?=base_url()?>assets/vendor/inspinia/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">
       <link href="<?=base_url()?>assets/vendor/sweetalert/css/sweetalert.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="<?=base_url()?>assets/vendor/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Morris -->
    <link href="<?=base_url()?>assets/vendor/inspinia/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
 <!-- <link rel="stylesheet" href="<?=base_url()?>assets/vendor/datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet"> -->

    <link href="<?=base_url()?>assets/vendor/datepicker/css/datepicker3.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/inspinia/css/animate.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/inspinia/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/vendor/radiocheck/radiocheck.css" rel="stylesheet">
<script src="<?=base_url()?>assets/vendor/inspinia/js/jquery-2.1.1.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/bootstrap.min.js"></script>
    <style>
  html { height: 100% !important; }
  body { height: 100% !important; padding-bottom: 30px; }
  .footer { position: fixed; left: 0; right: 0; bottom: 0; }
   .table-condensed{
  font-size: 13px;
}
</style>
</head>
<?php
$CI = &get_instance();
lookup();
//panggil sf_helper
// $CI->load->model('Upload_risalah_model');
// $jml_upload_risalah      = $CI->Upload_risalah_model->total_rows();
// Penarikan jumlah data untuk syarat

?>
<body>
    <div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                        <?php if ($this->session->userdata('foto') != '' && file_exists(FCPATH . "assets/foto_users/" . $this->session->userdata('foto'))) { //die('a');?>
                            <img alt="image" class="img-circle" src="<?=base_url()?>assets/foto_users/<?=$this->session->userdata('foto')?>" style="width: 45px;" />
                        <?php } else { //die('b');?>
                            <img alt="image" class="img-circle" src="<?=base_url()?>assets/foto_users/a4.jpg" style="width: 45px;" />
                        <?php }?>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?=$this->session->userdata('fullname')?></strong>
                             </span> <span class="text-muted text-xs block">Tentang <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#"><?=$this->session->userdata('email')?></a></li>
                            <li><a href="#"><?=$this->session->userdata('telp')?></a></li>
                            <li class="divider"></li>
                            <li><a href="<?=base_url()?>auth/logout">Keluar</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        ER+
                    </div>
                </li>

                <li><a href="<?=base_url()?>backend" ><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span><span class="label label-primary pull-right"></span></a></li>

                <li class="">
                    <a href="index.html"><i class="fa fa-list"></i> <span class="nav-label">Master</span> <span class="fa arrow"></span></a>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_SLIDER')): ?>
                        <li><a href="<?=base_url()?>slider"><i class="fa fa-image"></i> Slider</a></li>
                <?php endif;?>
                    </ul>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_PENGUMUMAN')): ?>
                        <li><a href="<?=base_url()?>pengumuman"><i class="fa fa-bell"></i> Pengumuman</a></li>
                <?php endif;?>
                    </ul>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_BERITA')): ?>
                        <li><a href="<?=base_url()?>berita"><i class="fa fa-globe"></i> Berita</a></li>
                <?php endif;?>
                    </ul>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_GALERI')): ?>
                        <li><a href="<?=base_url()?>galeri"><i class="fa fa-image"></i> Galeri</a></li>
                <?php endif;?>
                    </ul>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_PTK')): ?>
                        <li><a href="<?=base_url()?>ptk"><i class="fa fa-user"></i> PTK</a></li>
                <?php endif;?>
                </ul>
                   <ul class="nav nav-second-level">
                    <?php if (is_allow('M_SISWA')): ?>
                        <li><a href="<?=base_url()?>ptk"><i class="fa fa-users"></i> Siswa</a></li>
                <?php endif;?>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li class="<?=!is_allow('M_PRESTASI_SEKOLAH') ? 'hide' : ''?>"><a href="<?=base_url()?>prestasi_sekolah"><i class="fa fa-university"></i> Prestasi Sekolah</a></li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li class="<?=!is_allow('M_PRESTASI_GURU') ? 'hide' : ''?>"><a href="<?=base_url()?>prestasi_guru"><i class="fa fa-users"></i> Prestasi Guru</a></li>
                    </ul>
                    <ul class="nav nav-second-level">
                        <li class="<?=!is_allow('M_PRESTASI_SISWA') ? 'hide' : ''?>"><a href="<?=base_url()?>prestasi_siswa"><i class="fa fa-users"></i> Prestasi Siswa</a></li>
                    </ul>
                </li>
                <?php if (is_allow('M_LAPORAN')): ?>
                <li class="">
                    <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Laporan</span> <span class="fa arrow"></span></a>

                </li>
                <?php endif;?>

                <?php if (is_allow('M_PENGGUNA')): ?>
                <li class="">
                    <a href="<?=base_url()?>pegawai"><i class="fa fa-users"></i> <span class="nav-label">Pegawai</span></a>

                </li>
                <?php endif;?>
                <li class="">
                    <?php if (is_allow('M_USERS')): ?>
                    <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Pengguna</span> <span class="fa arrow"></span></a>
                <?php endif;?>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=base_url()?>users">Users</a></li>
                        <li><a href="<?=base_url()?>user_group">User Group</a></li>
                        <li><a href="<?=base_url()?>user_access">User Access</a></li>
                        <li><a href="<?=base_url()?>master_access">Master Access</a></li>
                    </ul>
                </li>
                <li class="">
                    <?php if (is_allow('M_SY_CONFIG')): ?>
                    <a href="index.html"><i class="fa fa-wrench"></i> <span class="nav-label">Sistem</span> <span class="fa arrow"></span></a>
                <?php endif;?>
                <?php //die($this->db->last_query());  ?>
                    <ul class="nav nav-second-level">
                        <li><a href="<?=base_url()?>sy_config">Konfigurasi</a></li>
                        <li><a href="<?=base_url()?>kategori">Kategori</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Cari ..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message"><?=data_app('APP_NAME')?>, <?=data_app('OPD_NAME')?></span>
                </li>

                <li>
                    <a href="<?=base_url() . 'auth/logout'?>">
                        <i class="fa fa-sign-out"></i> Keluar
                    </a>
                </li>
            </ul>

        </nav>
        </div>


        <div class="wrapper wrapper-content">
        <div class="table-responsive">
        <?php $this->load->view($content);?>
        </div>
        </div>

        </div>
        <div class="footer" style="position: fixed;">
            <div class="pull-right">
                <?=data_app('RIGHT_FOOTER');?>
            </div>
            <div>
                <?=data_app('LEFT_FOOTER');?>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->

    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/flot/curvedLines.js"></script>

    <!-- Peity -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?=base_url()?>assets/vendor/sweetalert/js/sweetalert.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Sparkline -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/chartJs/Chart.min.js"></script>
    <script src="<?=base_url()?>assets/vendor/inspinia/js/plugins/toastr/toastr.min.js"></script>
    <script src="<?=base_url()?>assets/js/sf.js"></script>

    <script>
        $(document).ready(function() {

        // $('input.timepicker').timepicker({ timeFormat: 'h:mm'});
        $('input.datepicker').datepicker({ dateFormat: 'yy/mm/dd'});
        // $('input.datepicker-ym').datepicker({ dateFormat: 'mm/yy'});


        });

    </script>
</body>
</html>
