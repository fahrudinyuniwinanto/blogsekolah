<?php echo sf_header(data_app(),data_app());?>
<section class="contact-page-area section-gap" style="margin-top: -600px;">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
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
						<div class="col-lg-7">
							<div class="main-image">
								<img class="img-fluid img-thumbnail" src="<?=base_url()?>assets/blogsekolah/hubungi_kami/def_hubungi_kami.png" alt="">
							</div>	
						</div>
					</div>
				</div>	
			</section>