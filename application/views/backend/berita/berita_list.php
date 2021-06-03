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
                    <h2><b>List Berita</b></h2>
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
                <?php echo anchor(site_url('berita/create'), 'Create', 'class="btn btn-primary"'); ?>
            </div>


            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('berita/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
if ($q != '') {
    ?>
                                    <a href="<?php echo site_url('berita'); ?>" class="btn btn-default">Reset</a>
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
		<th class="text-center">Isi</th>
		<th class="text-center">Deskripsi</th>
		<th class="text-center">Gambar</th>
		<th class="text-center">Action</th>
            </tr>
            </thead>
			<tbody><?php
foreach ($berita_data as $berita) {
    ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $berita->judul ?></td>
			<td><?php echo $berita->isi ?></td>
			<td><?php echo $berita->deskripsi ?></td>
			<td><?php echo $berita->img ?></td>
			<td style="text-align:center" width="200px">
				<?php
echo anchor(site_url('berita/read/' . $berita->id_berita), 'Read', 'class="text-navy"');
    echo ' | ';
    echo anchor(site_url('berita/update/' . $berita->id_berita), 'Update', 'class="text-navy"');
    echo ' | ';
    echo anchor(site_url('berita/delete/' . $berita->id_berita), 'Delete', 'class="text-navy" onclick="javascript: return confirm(\'Yakin hapus data?\')"');
    echo ' | ';
    echo anchor(site_url('berita/pdf/' . $berita->id_berita), 'Export PDF', 'class="text-navy"');
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
		<?php echo anchor(site_url('berita/excel'), 'Excel', 'class="btn btn-primary"'); ?>
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