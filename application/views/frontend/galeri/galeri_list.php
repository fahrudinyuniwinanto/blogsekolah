<?php echo sf_header(data_app(), data_app()); ?>
			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						<?php foreach ($data_galeri as $key => $galeri) {?>
						<div class="col-lg-4"><?=$galeri->judul?> ~ <i><?=$galeri->deskripsi?></i>
							<a href="<?=base_url()?>assets/blogsekolah/galeri/<?=$galeri->gambar == '' ? 'def_galeri.png' : $galeri->gambar?>" class="<?=base_url()?>assets/blogsekolah/galeri/<?=$galeri->gambar == '' ? 'def_galeri.png' : $galeri->gambar?>">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg"></div>
									<div class="relative">
										<img class="<?=base_url()?>assets/vendor/education/img-fluid" src="<?=base_url()?>assets/blogsekolah/galeri/<?=$galeri->gambar == '' ? 'def_galeri.png' : $galeri->gambar?>" alt="">
									</div>
								</div>
							</a>
						</div>
						<?php }?>
					</div>
				</div>
			</section>