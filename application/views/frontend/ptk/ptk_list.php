<?php echo sf_header(data_app("FRONT_PTK_TITLE"),data_app('FRONT_PTK_DESC'));?>
<section class="upcoming-event-area section-gap" style="margin: -60px 80px 80px 80px;">
				<div class="container">
					<div class="row">
						<table class="table table-bordered table-hover table-condensed">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Fullname</th>
		<th class="text-center">Nip</th>
		<th class="text-center">Nik</th>
		<th class="text-center">Email</th>
		<th class="text-center">Jabatan</th>
		<th class="text-center">Foto</th>
		<th class="text-center">Nomor Telp</th>
            </tr>
            </thead>
			<tbody><?php
			$start=0;
            foreach ($data_ptk as $ptk)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $ptk->fullname ?></td>
			<td><?php echo $ptk->nip ?></td>
			<td><?php echo $ptk->nik ?></td>
			<td><?php echo $ptk->email ?></td>
			<td><?php echo $ptk->jabatan ?></td>
			<td><img class="img-thumbnail" src="<?php echo $ptk->foto==""||$ptk->foto==null||!file_exists('./assets/blogsekolah/ptk/'.$ptk->foto)?base_url()."assets/blogsekolah/ptk/def_ptk.png":$ptk->foto ?>" style="width:100px;"/></td>
			<td><?php echo $ptk->nomor_telp ?></td>
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</section>
       