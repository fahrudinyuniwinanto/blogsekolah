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
                    <h2><b>List Slider</b></h2>
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
                <form action="<?php echo site_url('slider/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" id="q" value="<?php echo @$_GET['q']; ?>">
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-success" onclick="lookup('<?php echo base_url()?>slider/lookup')" >Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Gambar</th>
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
		<th class="text-center">Hits</th></tr>
            </thead>
			<tbody><?php
            foreach ($slider_data as $slider)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $slider->gambar ?></td>
			<td><?php echo $slider->judul ?></td>
			<td><?php echo $slider->kategori ?></td>
			<td><?php echo $slider->note ?></td>
			<td><?php echo $slider->add_1 ?></td>
			<td><?php echo $slider->add_2 ?></td>
			<td><?php echo $slider->created_at ?></td>
			<td><?php echo $slider->created_by ?></td>
			<td><?php echo $slider->updated_at ?></td>
			<td><?php echo $slider->updated_by ?></td>
			<td><?php echo $slider->isactive ?></td>
			<td><?php echo $slider->hits ?></td>
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