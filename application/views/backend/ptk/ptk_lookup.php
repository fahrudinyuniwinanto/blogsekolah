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
                    <h2><b>List Ptk</b></h2>
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
                <form action="<?php echo site_url('ptk/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" value="<?php echo @$_GET['q']; ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success" onclick="lookup('<?php echo base_url()?>ptk/lookup')" >Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Fullname</th>
		<th class="text-center">Nip</th>
		<th class="text-center">Nik</th>
		<th class="text-center">Email</th>
		<th class="text-center">Jabatan</th>
		<th class="text-center">Foto</th>
		<th class="text-center">Nomor Telp</th>
		<th class="text-center">Note</th>
		<th class="text-center">Created By</th>
		<th class="text-center">Updated By</th>
		<th class="text-center">Created At</th>
		<th class="text-center">Updated At</th>
		<th class="text-center">Add 1</th>
		<th class="text-center">Add 2</th>
		<th class="text-center">Isactive</th></tr>
            </thead>
			<tbody><?php
            foreach ($ptk_data as $ptk)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $ptk->fullname ?></td>
			<td><?php echo $ptk->nip ?></td>
			<td><?php echo $ptk->nik ?></td>
			<td><?php echo $ptk->email ?></td>
			<td><?php echo $ptk->jabatan ?></td>
			<td><?php echo $ptk->foto ?></td>
			<td><?php echo $ptk->nomor_telp ?></td>
			<td><?php echo $ptk->note ?></td>
			<td><?php echo $ptk->created_by ?></td>
			<td><?php echo $ptk->updated_by ?></td>
			<td><?php echo $ptk->created_at ?></td>
			<td><?php echo $ptk->updated_at ?></td>
			<td><?php echo $ptk->add_1 ?></td>
			<td><?php echo $ptk->add_2 ?></td>
			<td><?php echo $ptk->isactive ?></td>
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