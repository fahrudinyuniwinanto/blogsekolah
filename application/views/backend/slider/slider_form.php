<!doctype html>
<!--Subscribe Youtube Channel Peternak Kode on https://youtube.com/c/peternakkode-->
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2 style="margin-top:0px"><?php echo $button ?> Slider </h2>
                </div>

        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
        <div class="ibox-content">
	    <div class="form-group">
            <label for="varchar">Gambar <?php echo form_error('gambar') ?></label>
            <!-- <input type="text" class="form-control" name="gambar" id="gambar" placeholder="Gambar" value="<?php echo $gambar; ?>" /> -->
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
	    <div class="form-group">
            <label for="varchar">Judul <?php echo form_error('judul') ?></label>
            <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="<?php echo $judul; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Kategori <?php echo form_error('kategori') ?></label>
            <?=form_dropdown("kategori", get_data_kategori("SLIDER"), $kategori, "class='form-control'");?>
        </div>
	    <div class="form-group hide">
            <label for="note">Note <?php echo form_error('note') ?></label>
            <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
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
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="varchar">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" />
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
	    <div class="form-group">
            <label for="int">Hits <?php echo form_error('hits') ?></label>
            <input type="text" class="form-control" name="hits" id="hits" placeholder="Hits" value="<?php echo $hits; ?>" />
        </div>
	    <input type="hidden" name="id_slider" value="<?php echo $id_slider; ?>" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('slider') ?>" class="btn btn-default">Cancel</a>
	</div>
            </form>
        </div>
        </div>
    </body>
</html>