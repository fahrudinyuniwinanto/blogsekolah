<!doctype html>
<!--Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode-->
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h2 style="margin-top:0px">Pengumuman Read</h2>
            <div class="ibox-tools">
            </div>
        </div>
        <div class="ibox-content">
        
        <table class="table">
	    <tr><td>Judul</td><td><?php echo $judul; ?></td></tr>
	    <tr><td>Isi Pengumuman</td><td><?php echo $isi_pengumuman; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Nama File</td><td><?php echo $nama_file; ?></td></tr>
	    <tr><td>Created At</td><td><?php echo $created_at; ?></td></tr>
	    <tr><td>Created By</td><td><?php echo $created_by; ?></td></tr>
	    <tr><td>Updated At</td><td><?php echo $updated_at; ?></td></tr>
	    <tr><td>Updated By</td><td><?php echo $updated_by; ?></td></tr>
	    <tr><td>Isactive</td><td><?php echo $isactive; ?></td></tr>
	    <tr><td>Add 1</td><td><?php echo $add_1; ?></td></tr>
	    <tr><td>Add 2</td><td><?php echo $add_2; ?></td></tr>
	    <tr><td>Hits Download</td><td><?php echo $hits_download; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengumuman') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>