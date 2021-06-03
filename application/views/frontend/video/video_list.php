

			<!-- Start course-details Area -->
			<section class="course-details-area pt-120">
				<div class="container">
					<div class="row" style="margin-bottom: 40px;">
						<div class="col-lg-8 left-contents">
							<div class="main-image">

							   <iframe width="700" height="450" src="<?=$last_video->link?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>

						</div>
						<div class="col-lg-4 right-contents" style="height: 400px; overflow-y: scroll;">
							<ul>
								<?php foreach ($data_video as $k => $v) {?>
								<li>
									<a class="justify-content-between d-flex" href="#">
										<p><?=$v->judul?></p>
										<span class="or"><i class="fa fa-play"></i></span>
									</a>
										<i style="font-size: 12px;"><?=$v->note?></i>
										<i style="font-size: 12px;"><?=$v->link?></i>
								</li>
								<?php }?>
							</ul>
							<!-- <a href="#" class="primary-btn text-uppercase">Enroll the course</a> -->
						</div>
					</div>
				</div>
			</section>