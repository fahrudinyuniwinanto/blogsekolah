<?php echo sf_header(data_app("FRONT_SISWA_TITLE"),data_app('FRONT_SISWA_DESC'));?>
			<!-- End banner Area -->	

			<!-- Start course-details Area -->
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row" style="margin-bottom: 40px;">
						<div class="col-lg-8 left-contents">
							<div class="main-image">
								<img class="img-fluid" src="<?=base_url()?>assets/blogsekolah/pengumuman/def_pengumuman.png" alt="">
							</div>
							
						</div>
						<div class="col-lg-4 right-contents">
							<ul>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p ><strong>Siswa Tahun Ajaran <?=intval(date("Y")-1)." / ".date("Y")?></strong></p> 
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Siswa laki-laki</p> 
										<span class=""><?=data_app('JML_SISWA_LAKI')?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Siswa Perempuan </p>
										<span><?=data_app('JML_SISWA_PEREMPUAN')?></span>
									</a>
								</li>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p>Total </p>
										<span class="or"><?=@intval(data_app('JML_SISWA_LAKI')+data_app('JML_SISWA_PEREMPUAN'))?></span>
									</a>
								</li>
							</ul>
							<a href="<?=base_url()?>frontend/prestasi_siswa" class="primary-btn text-uppercase">Lihat Prestasi Siswa</a>
						</div>
					</div>
				</div>	
			</section>