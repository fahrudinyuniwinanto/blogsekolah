<?php echo sf_header(data_app("FRONT_PRES_SEKOLAH_TITLE"),data_app('FRONT_PRES_SEKOLAH_DESC'));?>
<section class="upcoming-event-area section-gap" style="margin: -80px;">
				<div class="container">
					<div class="row">
						<table class="table table-bordered table-hover table-condensed" style="margin-bottom: 10px">
            <thead class="thead-light">
            <tr>
                <th class="text-center">No</th>
		<th class="text-center">Jenis Prestasi</th>
		<th class="text-center">Nama Prestasi</th>
		<th class="text-center">Juara</th>
		<th class="text-center">Tahun Perolehan</th>
            </tr>
            </thead>
			<tbody><?php
			$start=0;
            foreach ($data_prestasi_sekolah as $prestasi_sekolah)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $prestasi_sekolah->jenis_prestasi ?></td>
			<td><?php echo $prestasi_sekolah->nama_prestasi ?></td>
			<td><?php echo $prestasi_sekolah->juara ?></td>
			<td><?php echo $prestasi_sekolah->tahun_perolehan ?></td>
			
		</tr>
                
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</section>
       