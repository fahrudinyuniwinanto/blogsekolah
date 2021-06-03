<!doctype html>
<!--Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode-->
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2><b>List Prestasi_guru</b></h2>
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
                <?php echo anchor(site_url('prestasi_guru/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('prestasi_guru/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('prestasi_guru'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Jenis Prestasi</th>
		<th class="text-center">Nama Guru</th>
		<th class="text-center">Nama Prestasi</th>
		<th class="text-center">Juara</th>
		<th class="text-center">Tahun Perolehan</th>
		<th class="text-center">Created At</th>
		<th class="text-center">Created By</th>
		<th class="text-center">Action</th>
            </tr>
            </thead>
			<tbody><?php
            foreach ($prestasi_guru_data as $prestasi_guru)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $prestasi_guru->jenis_prestasi ?></td>
			<td><?php echo $prestasi_guru->nama_guru ?></td>
			<td><?php echo $prestasi_guru->nama_prestasi ?></td>
			<td><?php echo $prestasi_guru->juara ?></td>
			<td><?php echo $prestasi_guru->tahun_perolehan ?></td>
			<td><?php echo $prestasi_guru->created_at ?></td>
			<td><?php echo $prestasi_guru->created_by ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('prestasi_guru/read/'.$prestasi_guru->id_prestasi),'Read','class="text-navy"'); 
				echo ' | '; 
				echo anchor(site_url('prestasi_guru/update/'.$prestasi_guru->id_prestasi),'Update','class="text-navy"'); 
				echo ' | '; 
				echo anchor(site_url('prestasi_guru/delete/'.$prestasi_guru->id_prestasi),'Delete','class="text-navy" onclick="javascript: return confirm(\'Yakin hapus data?\')"'); 
				?>
			</td>
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('prestasi_guru/excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
    </body>
</html>