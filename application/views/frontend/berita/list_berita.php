<?php echo sf_header("Berita Terkini", "Berita terkait SMA Negeri 5 Kota Magelang"); ?>
<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row">
					<?php foreach ($data_berita as $k => $v) {?>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?=base_url()?>assets/blogsekolah/berita/<?=$v->img != '' && file_exists('./assets/blogsekolah/berita/' . $v->img) ? $v->img : 'def_berita.png'?>" alt="">
							</div>
							<p class="meta"><?=$v->created_at?>  |  By <?=$v->created_by?></p>
							<a href="<?=base_url()?>frontend/single_berita/<?=$v->id_berita?>">
								<h5><?=$v->judul?></h5>
							</a>
							<p><?=substr($v->isi, 0, 200)?></p>
							<a href="<?=base_url()?>frontend/single_berita/<?=$v->id_berita?>" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Selengkapnya</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
				<?php }?>

					</div>
				</div>
			</section>