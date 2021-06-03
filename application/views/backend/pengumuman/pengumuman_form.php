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
                    <h2 style="margin-top:0px"><?php echo $button ?> Pengumuman </h2>
                </div>

        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="ibox-content">
        <div class="row">
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="int">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Isi Pengumuman <?php echo form_error('isi_pengumuman') ?></label>
            <input type="text" class="form-control" name="isi_pengumuman" id="isi_pengumuman" placeholder="Isi Pengumuman" value="<?php echo $isi_pengumuman; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">File Image <?php echo form_error('nama_file') ?></label>
            <input type="file" name="nama_file" id="nama_file" class="form-control" accept="image/*" >
        </div>
        <div class="form-group">
            <label for="int">File PDF <?php echo form_error('add_1') ?></label>
            <input type="file" name="add_1" id="add_1" class="form-control" accept="application/pdf, application/msword" />
        </div>
        </div>
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="int">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" readonly/>
        </div>
	    <div class="form-group">
            <label for="int">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>"  readonly/>
        </div>
	    <div class="form-group hide">
            <label for="int">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="int">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="int">Isactive <?php echo form_error('isactive') ?></label>
            <input type="text" class="form-control" name="isactive" id="isactive" placeholder="Isactive" value="<?php echo $isactive; ?>" />
        </div>

	    <div class="form-group hide">
            <label for="int">Add 2 <?php echo form_error('add_2') ?></label>
            <input type="text" class="form-control" name="add_2" id="add_2" placeholder="Add 2" value="<?php echo $add_2; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Hits Download <?php echo form_error('hits_download') ?></label>
            <input type="text" class="form-control" name="hits_download" id="hits_download" placeholder="Hits Download" value="<?php echo $hits_download; ?>" readonly/>
        </div>
	    <input type="hidden" name="id_pengumuman" value="<?php echo $id_pengumuman; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('pengumuman') ?>" class="btn btn-default">Cancel</a>
	</div>
    </div>
    </div>
            </form>
        </div>
        </div>
    </body>
</html>