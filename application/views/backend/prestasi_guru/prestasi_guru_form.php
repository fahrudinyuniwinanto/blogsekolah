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
                    <h2 style="margin-top:0px"><?php echo $button ?> Prestasi_guru </h2>
                </div>
        
        <form action="<?php echo $action; ?>" method="post">
        <div class="ibox-content">
        <div class="row">
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="varchar">Jenis Prestasi <?php echo form_error('jenis_prestasi') ?></label>
            <input type="text" class="form-control" name="jenis_prestasi" id="jenis_prestasi" placeholder="Jenis Prestasi" value="<?php echo $jenis_prestasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Guru <?php echo form_error('nama_guru') ?></label>
            <input type="text" class="form-control" name="nama_guru" id="nama_guru" placeholder="Nama Guru" value="<?php echo $nama_guru; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Prestasi <?php echo form_error('nama_prestasi') ?></label>
            <input type="text" class="form-control" name="nama_prestasi" id="nama_prestasi" placeholder="Nama Prestasi" value="<?php echo $nama_prestasi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Juara <?php echo form_error('juara') ?></label>
            <input type="text" class="form-control" name="juara" id="juara" placeholder="Juara" value="<?php echo $juara; ?>" />
        </div>
        </div>
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="varchar">Tahun Perolehan <?php echo form_error('tahun_perolehan') ?></label>
            <input type="text" class="form-control" name="tahun_perolehan" id="tahun_perolehan" placeholder="Tahun Perolehan" value="<?php echo $tahun_perolehan; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" readonly/>
        </div>
	    <div class="form-group">
            <label for="varchar">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" readonly/>
        </div>
	    <div class="form-group hide">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="varchar">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="int">Isactive <?php echo form_error('isactive') ?></label>
            <input type="text" class="form-control" name="isactive" id="isactive" placeholder="Isactive" value="<?php echo $isactive; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="add_1">Add 1 <?php echo form_error('add_1') ?></label>
            <textarea class="form-control" rows="3" name="add_1" id="add_1" placeholder="Add 1"><?php echo $add_1; ?></textarea>
        </div>
	    <div class="form-group hide">
            <label for="add_2">Add 2 <?php echo form_error('add_2') ?></label>
            <textarea class="form-control" rows="3" name="add_2" id="add_2" placeholder="Add 2"><?php echo $add_2; ?></textarea>
        </div>
	    <div class="form-group hide">
            <label for="note">Note <?php echo form_error('note') ?></label>
            <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
        </div>
	    <input type="hidden" name="id_prestasi" value="<?php echo $id_prestasi; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('prestasi_guru') ?>" class="btn btn-default">Cancel</a>
	</div>
    </div>
    </div>
            </form>
        </div>
        </div>
    </body>
</html>