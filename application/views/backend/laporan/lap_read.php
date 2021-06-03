<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="col-lg-8">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h2 style="margin-top:0px">Data Lengkap <?=$nama_pemilik?></h2>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content">
        
        <table class="table">
        	<tr class="info"><td colspan="2"><strong><h3>Data Pemilik Usaha</h3></strong></td></tr>
	    <tr><td>NIK</td><td><?php echo $nik; ?></td></tr>
	    <tr><td>Nama Pemilik</td><td><?php echo $nama_pemilik; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin=="M"?"Laki-laki":($jenis_kelamin=="F"?"Perempuan":"-") ?></td></tr>
	    <tr><td>Tgl Lahir</td><td><?php echo tanggal_indo($tgl_lahir); ?></td></tr>
	    <tr><td>Pendidikan</td><td><?php echo $pendidikan==1?"SD":($pendidikan==2?"SMP":(($pendidikan==3?"SMA":(($pendidikan==4?"D3":(($pendidikan==5?"S1":(($pendidikan==6?"S2":(($pendidikan==7?"S3":(($pendidikan==8?"Tidak tamat SD":(($pendidikan==9?"PGA":"Lainnya"))))))))))))))) ?></td></tr>
	    <tr><td>Status Kawin</td><td><?php echo $status_kawin==1?"Lajang":($status_kawin==2?"Menikah":($status_kawin==3?"Cerai hidup":($status_kawin==4?"Cerai mati":""))) ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Kode Pos</td><td><?php echo $kode_pos; ?></td></tr>
	    <tr><td>NPWP</td><td><?php echo $npwp; ?></td></tr>
	    <tr><td>NIB</td><td><?php echo $nib; ?></td></tr>
	    <tr><td>Alamat Dusun</td><td><?php echo $alamat_dusun; ?></td></tr>
	    <tr><td>Alamat Desa</td><td><?php echo $alamat_desa; ?></td></tr>
	    <tr><td>Alamat Kec</td><td><?php echo $alamat_kec; ?></td></tr>
	    <tr class="info"><td colspan="2"><strong><h3>Data Usaha</h3></strong></td></tr>

	    <tr><td>Nama Badan Usaha</td><td><?php echo $nama_badan_usaha; ?></td></tr>
        	<tr><td>Status Usaha</td><td><strong><?php echo $status_identitas==1?"Perorangan":"Badan Usaha"; ?></strong></td></tr>
	    <tr><td>Nomor AHU</td><td><?php echo $nomor_ahu; ?></td></tr>
	    <tr><td>Jenis Badan Usaha</td><td><?php echo $jenis_badan_usaha; ?></td></tr>
	    <tr><td>Penanggung Jawab Badan Usaha</td><td><?php echo $penanggungjawab_badan_usaha; ?></td></tr>
	    <tr><td>Alamat Usaha Dusun</td><td><?php echo $alamat_usaha_dusun; ?></td></tr>
	    <tr><td>Alamat Usaha Desa</td><td><?php echo $alamat_usaha_desa; ?></td></tr>
	    <tr><td>Alamat Usaha Kec</td><td><?php echo $alamat_usaha_kec; ?></td></tr>
	    
        	<tr><td>Nama Pemilik</td><td><?php echo anchor(site_url('pemilik/read/'.$id_pemilik),$nama_pemilik,'class="btn btn-info" target="_blank" title="Lihat detil data '.$nama_pemilik.'"'); ?></td></tr>
	    <tr><td>Nama Usaha</td><td><?php echo $nama_usaha; ?></td></tr>
	    <tr><td>Jenis Usaha</td><td><?php echo $jenis_usaha; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Pendirian</td><td><?php echo $pendirian; ?></td></tr>
	    <tr><td>Alasan Pendirian</td><td><?php echo $alasan_pendirian; ?></td></tr>
	    <tr><td>Jml Tenaga Kerja</td><td><?php echo $jml_tenaga_kerja; ?> Orang</td></tr>
	    <tr><td>Status Tenaga Kerja</td><td><?php echo $status_tenaga_kerja; ?></td></tr>
	    <tr><td>Gaji Tenaga Kerja</td><td><?php echo format_rupiah($gaji_tenaga_kerja); ?></td></tr>
	    <tr><td>Omset</td><td><?php echo format_rupiah($omset); ?></td></tr>
	    <tr><td>Tahun Omset</td><td><?php echo $tahun_omset; ?></td></tr>
	    <tr><td>Periode Omset</td><td><?php echo $periode_omset==1?"Mingguan":($periode_omset==2?"Bulanan":($periode_omset==3?"Tahunan":"-")) ?></td></tr>
	    <tr><td>Daerah Pemasaran</td><td><?php echo @$this->Kategori_model->get_by_id($daerah_pemasaran)->cat_name; ?></td></tr>
	    <tr><td>Alasan Daerah Pemasaran</td><td><?php echo @$this->Kategori_model->get_by_id($alasan_daerah_pemasaran)->cat_name; ?></td></tr>
	    <tr><td>Keunggulan</td><td><?php echo @$this->Kategori_model->get_by_id($keunggulan)->cat_name; ?></td></tr>
	    <tr><td>Alasan Keunggulan</td><td><?php echo @$alasan_keunggulan; ?></td></tr>
	    <tr><td>Media Pemasaran</td><td><?php echo @$this->Kategori_model->get_by_id($media_pemasaran)->cat_name; ?></td></tr>
	    <tr><td>Alasan Media Pemasaran</td><td><?php echo @$alasan_media_pemasaran; ?></td></tr>
	    <tr><td>Prospek</td><td><?php echo @$this->Kategori_model->get_by_id($prospek)->cat_name; ?></td></tr>
	    <tr><td>Alasan Prospek</td><td><?php echo @$alasan_prospek; ?></td></tr>
	    <tr><td>Bahanbaku</td><td><?php echo @$this->Kategori_model->get_by_id($bahanbaku)->cat_name;?></td></tr>
	    <tr><td>Alasan Bahan Baku</td><td><?php echo @$alasan_bahan_baku; ?></td></tr>
	    <tr><td>Jml Modal Awal</td><td><?php echo format_rupiah($jml_modal_awal); ?></td></tr>
	    <tr><td>Sumber Modal Awal</td><td><?php echo @$this->Kategori_model->get_by_id($sumber_modal_awal)->cat_name; ?></td></tr>
	    <tr><td>Alasan Modal Awal</td><td><?php echo @$alasan_modal_awal; ?></td></tr>
	    <tr><td>Nominal Modal Awal</td><td><?php echo format_rupiah($nominal_modal_awal); ?></td></tr>
	    <tr><td>Jml Modal Saat Ini</td><td><?php echo format_rupiah($jml_modal_saat_ini); ?></td></tr>
	    <tr><td>Sumber Modal Saat Ini</td><td><?php echo @$this->Kategori_model->get_by_id($sumber_modal_saat_ini)->cat_name; ?></td></tr>
	    <tr><td>Alasan Modal Saat Ini</td><td><?php echo @$alasan_modal_saat_ini; ?></td></tr>
	    <tr><td>Presentase Modal Saat Ini</td><td><?php echo @$presentase_modal_saat_ini; ?>%</td></tr>
	    <tr><td>Keuntungan</td><td><?php echo @$this->Kategori_model->get_by_id($keuntungan)->cat_name; ?></td></tr>
	    <tr><td>Hki</td><td><?php echo @$this->Kategori_model->get_by_id($hki)->cat_name; ?></td></tr>
	    <tr><td>Hambatan</td><td><?php echo @$this->Kategori_model->get_by_id($hambatan)->cat_name;?></td></tr>
	    <tr><td>Alasan Hambatan</td><td><?php echo @$alasan_hambatan; ?></td></tr>
	    <tr><td>Faktor Pendukung</td><td><?php echo @$this->Kategori_model->get_by_id($faktor_pendukung)->cat_name; ?></td></tr>
	    <tr><td>Keuntungan Wajar</td><td><?php echo @$this->Kategori_model->get_by_id($keuntungan_wajar)->cat_name; ?></td></tr>
	    <tr><td>Jenis Usaha Layak</td><td><?php echo @$this->Kategori_model->get_by_id($jenis_usaha_layak)->cat_name; ?></td></tr>
	    <tr><td>Pandangan Investor</td><td><?php echo @$this->Kategori_model->get_by_id($pandangan_investor)->cat_name; ?></td></tr>
	    <tr><td>Alasan Pandangan Investor</td><td><?php echo @$alasan_pandangan_investor; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pemilik') ?>" class="btn btn-info">Cancel</a></td></tr>
	</table>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>