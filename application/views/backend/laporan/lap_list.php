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
                    <h2><b>Laporan Pemilik dan usaha</b></h2>
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
                <?php echo anchor(site_url('pemilik/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pemilik/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('pemilik'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px; font-size: 12px;">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Status Usaha</th>
		<th class="text-center">Nik</th>
		<th class="text-center">Nama Pemilik</th>
        <th class="text-center">Nama Usaha</th>
        <th class="text-center">Jenis Usaha</th>
        <?php if($this->session->userdata('level')!=4){?>
        <th class="text-center">Tahun Berdiri</th>
        <th class="text-center">Action</th>
        <?php } ?>
            </tr>
            </thead>
			<tbody><?php
            foreach ($pemilik_data as $pemilik)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><strong><?php echo $pemilik->status_identitas==1?"Perorangan":"Badan Usaha" ?></strong></td>
			<td><?php echo $pemilik->nik ?></td>
			<td><?php echo $pemilik->nama_pemilik ?></td>
            <td><?php echo $pemilik->nama_usaha ?></td>
            <td><?php echo $pemilik->jenis_usaha ?></td>
            <td><?php echo substr($pemilik->tahun,0,4) ?></td>
            <td><?php 
                if(is_allow('R_'.ucwords($this->router->fetch_class()))): 
                echo anchor(site_url('Pemilik/lap_read/'.$pemilik->id_pemilik),'Selengkapnya','class="text-navy"'); 
                endif;
                echo ' | '; 
                if(is_allow('P_'.ucwords($this->router->fetch_class()))): 
                echo anchor(site_url('Pemilik/laporan'),'Print','class="text-navy"'); 
            endif;
            ?>
                
            </td>
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('pemilik/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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