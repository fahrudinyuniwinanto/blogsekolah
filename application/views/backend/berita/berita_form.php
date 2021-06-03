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
                    <h2 style="margin-top:0px"><?php echo $button ?> Berita </h2>
                </div>
        
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="ibox-content">
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="isi">Isi <?php echo form_error('isi') ?></label>
            <textarea class="form-control" rows="3" name="isi" id="isi" placeholder="Isi"><?php echo $isi; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="varchar">Deskripsi <?php echo form_error('deskripsi') ?></label>
            <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi" value="<?php echo $deskripsi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Img <?php echo form_error('img') ?></label>
            <!-- <input type="text" class="form-control" name="img" id="img" placeholder="Img" value="<?php echo $img; ?>
            " /> -->
            <input type="file" id="img" name="img" class="form-control" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Isactive <?php echo form_error('isactive') ?></label>
            <input type="text" class="form-control" name="isactive" id="isactive" placeholder="Isactive" value="<?php echo $isactive; ?>" />
        </div>
	    <div class="form-group">
            <label for="add_1">Add 1 <?php echo form_error('add_1') ?></label>
            <textarea class="form-control" rows="3" name="add_1" id="add_1" placeholder="Add 1"><?php echo $add_1; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="add_2">Add 2 <?php echo form_error('add_2') ?></label>
            <textarea class="form-control" rows="3" name="add_2" id="add_2" placeholder="Add 2"><?php echo $add_2; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="note">Note <?php echo form_error('note') ?></label>
            <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
        </div>
	    <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('berita') ?>" class="btn btn-default">Cancel</a>
	</div>
            </form>
        </div>
        </div>
    </body>
</html>