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
                    <h2 style="margin-top:0px"><?php echo $button ?> Ptk </h2>
                </div>
        
        <form action="<?php echo $action; ?>" method="post">
        <div class="ibox-content">
        <div class="row">
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="varchar">Fullname <?php echo form_error('fullname') ?></label>
            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" value="<?php echo $fullname; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nip <?php echo form_error('nip') ?></label>
            <input type="text" class="form-control" name="nip" id="nip" placeholder="Nip" value="<?php echo $nip; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nik <?php echo form_error('nik') ?></label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Nik" value="<?php echo $nik; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
        </div>
        <div class="col-lg-6">
	    <div class="form-group">
            <label for="varchar">Jabatan <?php echo form_error('jabatan') ?></label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto <?php echo form_error('foto') ?></label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>
	    <div class="form-group">
            <label for="varchar">Nomor Telp <?php echo form_error('nomor_telp') ?></label>
            <input type="text" class="form-control" name="nomor_telp" id="nomor_telp" placeholder="Nomor Telp" value="<?php echo $nomor_telp; ?>" />
        </div>
	    <div class="form-group hide">
            <label for="note">Note <?php echo form_error('note') ?></label>
            <textarea class="form-control" rows="3" name="note" id="note" placeholder="Note"><?php echo $note; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Created By <?php echo form_error('created_by') ?></label>
            <input type="text" class="form-control" name="created_by" id="created_by" placeholder="Created By" value="<?php echo $created_by; ?>" readonly/>
        </div>
	    <div class="form-group hide">
            <label for="int">Updated By <?php echo form_error('updated_by') ?></label>
            <input type="text" class="form-control" name="updated_by" id="updated_by" placeholder="Updated By" value="<?php echo $updated_by; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Created At <?php echo form_error('created_at') ?></label>
            <input type="text" class="form-control" name="created_at" id="created_at" placeholder="Created At" value="<?php echo $created_at; ?>" readonly/>
        </div>
	    <div class="form-group hide">
            <label for="datetime">Updated At <?php echo form_error('updated_at') ?></label>
            <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="Updated At" value="<?php echo $updated_at; ?>" />
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
            <label for="int">Isactive <?php echo form_error('isactive') ?></label>
            <input type="text" class="form-control" name="isactive" id="isactive" placeholder="Isactive" value="<?php echo $isactive; ?>" />
        </div>
	    <input type="hidden" name="id_ptk" value="<?php echo $id_ptk; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('ptk') ?>" class="btn btn-default">Cancel</a>
	</div>
    </div>
    </div>
            </form>
        </div>
        </div>
    </body>
</html>