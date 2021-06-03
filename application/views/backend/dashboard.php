<?php
$CI = &get_instance();
lookup();

// $jml_router    = $CI->db->count_all('router');
// $jml_alat    = $CI->db->count_all('alat');
// $jml_ap    = $CI->db->count_all('ap');
// $jml_ip    = $CI->db->count_all('ip');
$jml_logs             = $CI->db->count_all('siswa');
$jml_lokasi           = $CI->db->count_all('ptk');
$jml_ptk              = $CI->db->count_all('ptk');
$jml_siswa            = $CI->db->count_all('siswa');
$jml_pengumuman       = $CI->db->count_all('pengumuman');
$jml_galeri           = $CI->db->count_all('galeri');
$jml_berita           = $CI->db->count_all('berita');
$jml_prestasi_guru    = $CI->db->count_all('prestasi_guru');
$jml_prestasi_sekolah = $CI->db->count_all('prestasi_sekolah');
$jml_prestasi_siswa   = $CI->db->count_all('prestasi_siswa');

// $jml_kegiatan_verified = $CI->db->where('note',1)->from('lokasi')->count_all_results();
// //persen kegiatan
// $kegiatan_persen = intval($jml_kegiatan_verified/$jml_kegiatan);
// $kegiatan_persen = number_format((float)$jml_kegiatan_verified/$jml_kegiatan, 2, '.', '');

?>

<div class="wrapper wrapper-content animated fadeInRight">



        <div class="col-md-12">
            <div class="col-lg-4">
                <div class="widget style1 navy-bg" onclick="window.location.href='<?=base_url()?>monitoring_jar'" style="cursor: pointer;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Total Siswa <?=$jml_siswa?><br>
                                Total PTK <?=$jml_ptk?></span>
                            <h2 class="font-bold">Siswa&PTK</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget style1 yellow-bg" onclick="swal('Coming soon!','','warning')" style="cursor: pointer;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-trophy fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Total Prestasi Guru <?=$jml_prestasi_guru?><br>
                                Total Prestasi Sekolah <?=$jml_prestasi_sekolah?></span>
                            <h2 class="font-bold">Prestasi</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget style1 lazur-bg" onclick="swal('Coming soon!','','warning')" style="cursor: pointer;">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-university fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Total Pengumuman <?=$jml_pengumuman?><br>
                                Total Berita <?=$jml_berita?></span>
                            <h2 class="font-bold">Informasi</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="widget-head-color-box blue-bg p-lg text-center">
                            <div class="m-b-md">
                            <h1 class="font-bold no-margins">
                                <?=data_app("APP_NAME")?>
                            </h1>
                                <h3><?=data_app("OPD_NAME")?></h3>
                            </div>
                            <!-- <img src="<?=base_url()?>assets/img/software.png" class="img-circle circle-border m-b-md" alt="profile" style="width:50px;"> -->
                            <div>
                                <span><?=data_app("APP_DESC")?></span>
                            </div>
                        </div>
                        <div class="widget-text-box">
                            <h4 class="media-heading"><?=data_app("OPD_ADDR")?></h4>
                            <p><?=data_app("VISI_MISI")?></p>
                            <div class="text-right">
                                <a class="btn btn-xs btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-twitter"></i> Twitter</a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-instagram"></i> Instagram</a>
                                <a class="btn btn-xs btn-primary"><i class="fa fa-whatsapp"></i> Whatsapp</a>
                            </div>
                        </div>
        </div>
        <div class="col-lg-6">
            <div class="table table-responsive">
            <table class="table table-hover"  style="font-size: 18px;">
                <tr class="success">
                    <th colspan='2' align='ceter'>DATA <?=data_app()?></th>
                </tr>
                <tr>
                    <td>Siswa</td>
                    <td><code><?=$jml_siswa?> Siswa</code></td>
                </tr>
                <tr>
                    <td>PTK</td>
                    <td><code><?=$jml_ptk?> PTK</code></td>
                </tr>
                <tr>
                    <td>Pengumuman</td>
                    <td><code><?=$jml_pengumuman?> Pengumuman</code></td>
                </tr>
                <tr>
                    <td>Berita</td>
                    <td><code><?=$jml_berita?> Berita</code></td>
                </tr>
                <tr>
                    <td>Galeri</td>
                    <td><code><?=$jml_galeri?> Galeri</code></td>
                </tr>
                <tr>
                    <td>Prestasi Guru</td>
                    <td><code><?=$jml_prestasi_guru?> Prestasi</code></td>
                </tr>
                <tr>
                    <td>Prestasi Sekolah</td>
                    <td><code><?=$jml_prestasi_sekolah?> Prestasi</code></td>
                </tr>
                <tr>
                    <td>Prestasi Siswa</td>
                    <td><code><?=$jml_prestasi_siswa?> Prestasi</code></td>
                </tr>
            </table>
        </div>
        </div>
        </div>
