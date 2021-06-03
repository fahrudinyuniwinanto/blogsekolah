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
                    <h2><b>List Video</b></h2>
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
                <?php echo anchor(site_url('video/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            
            
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('video/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('video'); ?>" class="btn btn-default">Reset</a>
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
		<th class="text-center">Link</th>
		<th class="text-center">Judul</th>
		<th class="text-center">Kategori</th>
		<th class="text-center">Note</th>
		<th class="text-center">Add 1</th>
		<th class="text-center">Add 2</th>
		<th class="text-center">Created At</th>
		<th class="text-center">Created By</th>
		<th class="text-center">Updated At</th>
		<th class="text-center">Updated By</th>
		<th class="text-center">Isactive</th>
		<th class="text-center">Hits</th>
		<th class="text-center">Action</th>
            </tr>
            </thead>
			<tbody><?php
            foreach ($video_data as $video)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $video->link ?></td>
			<td><?php echo $video->judul ?></td>
			<td><?php echo $video->kategori ?></td>
			<td><?php echo $video->note ?></td>
			<td><?php echo $video->add_1 ?></td>
			<td><?php echo $video->add_2 ?></td>
			<td><?php echo $video->created_at ?></td>
			<td><?php echo $video->created_by ?></td>
			<td><?php echo $video->updated_at ?></td>
			<td><?php echo $video->updated_by ?></td>
			<td><?php echo $video->isactive ?></td>
			<td><?php echo $video->hits ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('video/read/'.$video->id_video),'Read','class="text-navy"'); 
				echo ' | '; 
				echo anchor(site_url('video/update/'.$video->id_video),'Update','class="text-navy"'); 
				echo ' | '; 
				echo anchor(site_url('video/delete/'.$video->id_video),'Delete','class="text-navy" onclick="javascript: return confirm(\'Yakin hapus data?\')"'); 
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
		<?php echo anchor(site_url('video/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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