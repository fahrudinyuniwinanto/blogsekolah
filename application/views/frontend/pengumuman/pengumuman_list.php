<?php echo sf_header(data_app(),data_app());?>
<section class="popular-courses-area section-gap courses-page">
				<div class="container">
										
					<div class="row">
						<?php foreach ($data_pengumuman as $k => $pengumuman) { ?>
						<div class="single-popular-carusel col-lg-3 col-md-6">
							<div class="thumb-wrap relative">
								<div class="thumb relative">
									<div class="overlay overlay-bg"></div>	
									<img class="img-fluid" src="<?=base_url()?>assets/blogsekolah/pengumuman/<?=$pengumuman->nama_file!=''?$pengumuman->nama_file:'def_pengumuman.png'?>" alt="">
								</div>
								<div class="meta d-flex justify-content-between">
									<p><span class="lnr lnr-users"></span> <?=tanggal_indo(date_format(date_create($pengumuman->created_at),"Y-m-d"))?> </p>
									<h4><i class="fa fa-download"></i> <?=$pengumuman->hits_download?> kali</h4>
								</div>									
							</div>
							<div class="details">
									<h4>
										<?=$pengumuman->judul?>
									</h4>
								<p><a class="btn btn-success btn-sm" href="#">Download</a></p>
								<p><?=$pengumuman->isi_pengumuman?></p>
							</div>
						</div>
					<?php } ?>
							</div>	
						
				</div>	
			</section>