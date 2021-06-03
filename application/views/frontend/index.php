
			<!-- start banner Area -->
			<section class="banner-area relative" id="home"  style="background-image: url(<?=base_url()?>assets/blogsekolah/slider/<?=sf_slider('HEADER')?>);">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								<div class="lnr lnr-graduation-hat"></div><?=data_app()?>
							</h1>
							<p class="pt-10 pb-10">
								<?=data_app("OPD_ADDR")?>
							</p>
							<a href="#" class="primary-btn text-uppercase">Lihat Sambutan Kepala <?=data_app()?></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Sekilas Info</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Info selengkapnya mengenai <?=data_app()?>
									</p>
									<a href="#">Lihat selengkapnya</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Pengumuman</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Pengumuman terbaru di <?=data_app()?>
									</p>
									<a href="#">Lihat Pengumuman</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Berita Lainnya</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Berita lainnya yang ada di <?=data_app()?>
									</p>
									<a href="#">Lihat Berita</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End feature Area -->


			<!-- Start cta-one Area -->
			<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white"><?=data_app("SAMBUTAN_TITLE")?></h1>
							<p><img src="<?=base_url() . 'assets/blogsekolah/slider/' . sf_slider('KEPSEK')?>" class="img-thumbnail" width="500"/><p>
							<p><?=data_app("SAMBUTAN_BODY")?></p>
							<a class="primary-btn wh" href="#">selengkapnya</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End cta-one Area -->



			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
				<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Pengumuman</h1>
								<p>Pengumuman SMA Negeri 5 Magelang</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-review-carusel">
							<!-- //TAMPILKAN PENGUMUMAN DI SINI -->
							<?php
foreach ($pengumuman as $v) {?>



							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4><?=$v->judul?></h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p><?=$v->isi_pengumuman?></p>
							</div>
							<?php }
?>
						</div>
					</div>
				</div>
			</section>
			<!-- End review Area -->

			<!-- PRESTASI SISWA DAN GURU -->
			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								<?=data_app('APP_PENGHARGAAN_TITLE')?>
							</h1>
							<p>
								<?=data_app('APP_PENGHARGAAN_DESC')?>
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4><?=data_app('PENGHARGAAN_SISWA_TITLE')?></h4></a>
									<p>
										<?=data_app('PENGHARGAAN_SISWA_DESC')?>
									</p>
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4><?=data_app('PENGHARGAAN_PENGAJAR_TITLE')?></h4></a>
									<p>
										<?=data_app('PENGHARGAAN_PENGAJAR_DESC')?>
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30"><?=data_app('TERKAIT_PENGHARGAAN_TITLE')?></h4>
								<?=data_app('TERKAIT_PENGHARGAAN_DESC')?>
								<button class="primary-btn text-uppercase">Lihat Selengkapnya</button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- End search-course Area -->


			<!-- Start upcoming-event Area -->
			<<!-- section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events of our Institute</h1>
								<p>If you are a serious astronomy fanatic like a lot of us</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?=base_url()?>assets/vendor/education/img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="#"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!-- End upcoming-event Area -->


<!-- BERITA TERKINI -->
			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10"><?=data_app("BERITA_TITLE")?></h1>
								<p><?=data_app("BERITA_DESC")?></p>
								<p><form class="form-wrap" action="<?=base_url()?>frontend/list_berita">
								<button class="primary-btn text-uppercase">Lihat Selengkapnya >></button>
							</form></p>
							</div>
						</div>
					</div>
					<div class="row">
					<?php foreach (array_slice($berita, 0, 8) as $k => $v) {?>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="<?=base_url()?>assets/blogsekolah/berita/<?=$v->img != '' && file_exists('./assets/blogsekolah/berita/' . $v->img) ? $v->img : 'def_berita.png'?>" alt="">
							</div>
							<p class="meta"><?=$v->created_at?>  |  By <?=$v->created_by?></p>
							<a href="<?=base_url()?>frontend/single_berita/<?=$v->id_berita?>">
								<h5><?=$v->judul?></h5>
							</a>
							<p><?=substr($v->isi, 0, 200)?></p>
							<a href="<?=base_url()?>frontend/single_berita" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Selengkapnya</span><span class="lnr lnr-arrow-right"></span></a>
						</div>
				<?php }?>

					</div>
				</div>
			</section>
			<!-- End blog Area -->


			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Video terkait <?=data_app()?>?</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="<?=base_url()?>frontend/video">Selengkapnya</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End cta-two Area -->

			<!-- Start cta-two Area -->
			<section class="cta-two-area" style="background-color: #14ab2f;">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 cta-left">
							<div class="feature-block-five col-lg-4 col-md-6 col-sm-12">
                                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="mapouter"><div class="gmap_canvas"><iframe width="633" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Purworejo%20Central%20Park&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:633px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:633px;}</style></div>
                                        </div>
                                    </div>
						</div>
						<div class="col-lg-4 d-flex flex-column address-wrap" style="margin-left: 120px;">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5><?=data_app()?></h5>
									<p>
										<?=data_app('OPD_ADDR')?>
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5><?=data_app('APP_TELP')?></h5>
									<p>Senin - jumat pukul 08.00 s/d 14.00</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5><?=data_app('APP_EMAIL')?></h5>
									<p>Kirimkan masukan Anda disini</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- End cta-two Area -->

			<!-- start footer Area -->
