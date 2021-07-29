<?php /* Template Name:  Template About*/ ?>
<?php get_header(); ?>
<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="/">Головна</a></li>
							<li class="active"><a href="#">Про Нас</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Start About-Area -->
			<div class="about-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="f-title text-center">
								<h3 class="title text-uppercase">Про Нас</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7 col-sm-12 col-xs-12">
							<div class="about-page-cntent">
								<h3>Детальніша інформація про СТО</h3>
								
								<blockquote>
									<p>Запчастини на автомобіль можуть знадобитися в самий невідповідний момент, що змушує водія витрачати багато часу і сил на пошуки необхідних змінних автозапчастин. Добре, якщо деталі на вашу модель автомобіля можна знайти легко в будь-якому магазині або авторинку, але що робити тим, хто є власником уживаної іномарки</p>
								</blockquote>
							</div>
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12">
							<div class="img-element">
								<img alt="banner1" src="<?php the_post_thumbnail_url('blogMainPage') ?>">
							</div>
						</div>
					</div>
					<p><?php the_content( ); ?></p>
				</div>
			</div>
			<!-- End About-Area -->
			<!-- Start Our-Team -->
			<div class="our-team">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="f-title text-center">
								<h3 class="title text-uppercase">Наша команда</h3>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<div class="item-team text-center">
								<div class="team-info">
									<div class="team-img">
										<img alt="Team" class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/about/1.jpg">
										<div class="mask">
											<div class="mask-inner">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<h4>Сергій</h4>
								<h5>Механік</h5>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="item-team text-center">
								<div class="team-info">
									<div class="team-img">
										<img alt="Team" class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/about/2.jpg">
										<div class="mask">
											<div class="mask-inner">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<h4>Юра</h4>
								<h5>Технік</h5>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="item-team text-center">
								<div class="team-info">
									<div class="team-img">
										<img alt="Team" class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/about/1.jpg">
										<div class="mask">
											<div class="mask-inner">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<h4>Вася</h4>
								<h5>Електрик</h5>
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="item-team text-center">
								<div class="team-info">
									<div class="team-img">
										<img alt="Team" class="img-responsive" src="<?php echo get_template_directory_uri();?>/assets/img/about/2.jpg">
										<div class="mask">
											<div class="mask-inner">
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
											</div>
										</div>
									</div>
								</div>
								<h4>Міша</h4>
								<h5>директор</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Our-Team -->
		</section>
<?php get_footer(); ?>