<div class="container" style="margin-top: 200px;">
<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid img-thumbnail" src="<?=base_url()?>assets/blogsekolah/berita/<?=$single_berita->img == '' ? 'def_berita.png' : $single_berita->img?>" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1><?=$single_berita->judul?></h1>
							<p><?=$single_berita->isi?>
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>