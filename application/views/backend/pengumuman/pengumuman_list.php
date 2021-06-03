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
                    <h2><b>List Pengumuman</b></h2>
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
                <?php echo anchor(site_url('pengumuman/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>


            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('pengumuman/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
if ($q != '') {
    ?>
                                    <a href="<?php echo site_url('pengumuman'); ?>" class="btn btn-default">Reset</a>
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
		<th class="text-center">Judul</th>
		<th class="text-center">Isi Pengumuman</th>
		<th class="text-center">Deskripsi</th>
		<th class="text-center">Gambar</th>
		<th class="text-center hide">Created At</th>
		<th class="text-center hide">Created By</th>
		<th class="text-center hide">Updated At</th>
		<th class="text-center hide">Updated By</th>
		<th class="text-center hide">Isactive</th>
		<th class="text-center">PDF</th>
		<th class="text-center hide">Add 2</th>
		<th class="text-center">Hits Download</th>
		<th class="text-center">Action</th>
            </tr>
            </thead>
			<tbody><?php
foreach ($pengumuman_data as $pengumuman) {
    ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $pengumuman->judul ?></td>
			<td><?php echo $pengumuman->isi_pengumuman ?></td>
			<td><?php echo $pengumuman->deskripsi ?></td>
			<td>
                <?php if (file_exists("./assets/blogsekolah/pengumuman/$pengumuman->nama_file")) {?>
                <img src="<?=base_url()?>assets/blogsekolah/pengumuman/<?=$pengumuman->nama_file?>" class="img-thumbnail" style="width: 700px;">
            <?php } else {
        echo "";
    }?>
                </td>
			<td class="hide"><?php echo $pengumuman->created_at ?></td>
			<td class="hide"><?php echo $pengumuman->created_by ?></td>
			<td class="hide"><?php echo $pengumuman->updated_at ?></td>
			<td class="hide"><?php echo $pengumuman->updated_by ?></td>
			<td class="hide"><?php echo $pengumuman->isactive ?></td>
			<td class=""><?php echo $pengumuman->add_1 ?></td>
			<td class="hide"><?php echo $pengumuman->add_2 ?></td>
			<td><?php echo $pengumuman->hits_download ?></td>
			<td style="text-align:center" width="200px">
				<?php
echo anchor(site_url('pengumuman/read/' . $pengumuman->id_pengumuman), 'Read', 'class="text-navy"');
    echo ' | ';
    echo anchor(site_url('pengumuman/update/' . $pengumuman->id_pengumuman), 'Update', 'class="text-navy"');
    echo ' | ';
    echo anchor(site_url('pengumuman/delete/' . $pengumuman->id_pengumuman), 'Delete', 'class="text-navy" onclick="javascript: return confirm(\'Yakin hapus data?\')"');
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
		<?php echo anchor(site_url('pengumuman/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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