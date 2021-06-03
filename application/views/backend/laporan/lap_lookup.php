<!doctype html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>List Pemilik</b></h2>
                    <?php if ($this->session->userdata('message') != '') {?>
                    <div class="alert alert-success alert-dismissable">
                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                <?=$this->session->userdata('message')?> <a class="alert-link" href="#"></a>
                    </div>
                 <?php }?>
                </div>
                <div class="ibox-content">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-8">
               
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pemilik/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" value="<?php echo @$_GET['q']; ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success" onclick="lookup('<?php echo base_url()?>pemilik/lookup')" >Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Nik</th>
		<th class="text-center">Nama Pemilik</th>
		<th class="text-center">Jenis Kelamin</th>
		<th class="text-center">Tgl Lahir</th>
		<th class="text-center">Pendidikan</th>
		<th class="text-center">Status Kawin</th>
		<th class="text-center">No Hp</th>
		<th class="text-center">Kode Pos</th>
		<th class="text-center">Npwp</th>
		<th class="text-center">Nib</th>
		<th class="text-center">Alamat Dusun</th>
		<th class="text-center">Alamat Desa</th>
		<th class="text-center">Alamat Kec</th>
		<th class="text-center">Nama Badan Usaha</th>
		<th class="text-center">Nomor Ahu</th>
		<th class="text-center">Jenis Badan Usaha</th>
		<th class="text-center">Penanggungjawab Badan Usaha</th>
		<th class="text-center">Alamat Usaha Dusun</th>
		<th class="text-center">Alamat Usaha Desa</th>
		<th class="text-center">Alamat Usaha Kec</th>
		<th class="text-center">Status Identitas</th></tr>
            </thead>
			<tbody><?php
            foreach ($pemilik_data as $pemilik)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pemilik->nik ?></td>
			<td><?php echo $pemilik->nama_pemilik ?></td>
			<td><?php echo $pemilik->jenis_kelamin ?></td>
			<td><?php echo $pemilik->tgl_lahir ?></td>
			<td><?php echo $pemilik->pendidikan ?></td>
			<td><?php echo $pemilik->status_kawin ?></td>
			<td><?php echo $pemilik->no_hp ?></td>
			<td><?php echo $pemilik->kode_pos ?></td>
			<td><?php echo $pemilik->npwp ?></td>
			<td><?php echo $pemilik->nib ?></td>
			<td><?php echo $pemilik->alamat_dusun ?></td>
			<td><?php echo $pemilik->alamat_desa ?></td>
			<td><?php echo $pemilik->alamat_kec ?></td>
			<td><?php echo $pemilik->nama_badan_usaha ?></td>
			<td><?php echo $pemilik->nomor_ahu ?></td>
			<td><?php echo $pemilik->jenis_badan_usaha ?></td>
			<td><?php echo $pemilik->penanggungjawab_badan_usaha ?></td>
			<td><?php echo $pemilik->alamat_usaha_dusun ?></td>
			<td><?php echo $pemilik->alamat_usaha_desa ?></td>
			<td><?php echo $pemilik->alamat_usaha_kec ?></td>
			<td><?php echo $pemilik->status_identitas ?></td>
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
	    </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>