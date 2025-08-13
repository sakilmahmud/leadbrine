<?php
/*
Template Name: About
*/
get_header();
?>
<div class="stricky-header stricked-menu main-menu">
	<div class="sticky-header__content"></div>
</div>

<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg.jpg)">
	</div>
	<div class="page-header-border"></div>
	<div class="page-header-border page-header-border-two"></div>
	<div class="page-header-border page-header-border-three"></div>
	<div class="page-header-border page-header-border-four"></div>
	<div class="page-header-border page-header-border-five"></div>
	<div class="page-header-border page-header-border-six"></div>

	<div class="page-header-shape-1"></div>
	<div class="page-header-shape-2"></div>
	<div class="page-header-shape-3"></div>

	<div class="container">
		<div class="page-header__inner">
			<h2><?=get_the_title();?></h2>
		</div>
	</div>
</section>
<!--Page Header End-->
<section class="about-page">
	<div class="container">
		<div class="row">
			<h1 class="mb-3"><?=get_the_title();?></h1>
			<div class="col-xl-6">
				<div class="about-page__left">
					<div class="about-page__img">
						<img src="<?php echo get_template_directory_uri();?>/assets/images/resources/about-page-img.jpg" alt="">
					</div>
					<div class="about-page__founded">
						<h5>Founded <br> in 2022</h5>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<div class="about-page__right">
					<div class="section-title text-left">
						<h1 class="section-title__tagline"><?=get_the_title();?></h1>
						<h2 class="section-title__title">get to know about Leadbrine agency solutions</h2>
					</div>
					<?php
						// Start the Loop.
						while ( have_posts() ) : the_post();

							the_content();

						endwhile; // End the loop.
					?>
					<div class="about-page__points-box">
						<ul class="list-unstyled about-page__points">
							<li>
								<div class="icon">
									<span class="icon-draw-check-mark"></span>
								</div>
								<div class="text">
									<p>Develop a vision statement</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-draw-check-mark"></span>
								</div>
								<div class="text">
									<p>Grow your customer base</p>
								</div>
							</li>
						</ul>
						<ul class="list-unstyled about-page__points about-page__points-two">
							<li>
								<div class="icon">
									<span class="icon-draw-check-mark"></span>
								</div>
								<div class="text">
									<p>Increase your monthly sales</p>
								</div>
							</li>
							<li>
								<div class="icon">
									<span class="icon-draw-check-mark"></span>
								</div>
								<div class="text">
									<p>Beat your competition</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--About Page End-->
<section class="counter-two about-page-counter-two">
	<div class="container">
		<div class="counter-two__inner wow fadeInUp" data-wow-delay="100ms" data-wow-duration="2500ms">
			<div class="counter-two-shape1"></div>
			<div class="counter-two-shape2"></div>
			<div class="counter-two-shape3"></div>
			<div class="row">
				<div class="col-xl-4">
					<div class="counter-two__left">
						<h2 class="counter-two__title">Let’s Start Your <br> Project with <br> Leadbrine</h2>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="counter-two__right">
						<ul class="list-unstyled counter-two__list">
							<li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
								<div class="counter-two__icon">
									<span class="icon-checking"></span>
								</div>
								<h3 class="odometer" data-count="6420">00</h3>
								<p class="counter-two__text">Projects Completed</p>
							</li>
							<li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
								<div class="counter-two__icon">
									<span class="icon-recommend"></span>
								</div>
								<h3 class="odometer" data-count="9280">00</h3>
								<p class="counter-two__text">Satisfied Clients</p>
							</li>
							<li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
								<div class="counter-two__icon">
									<span class="icon-consulting"></span>
								</div>
								<h3 class="odometer" data-count="380">00</h3>
								<p class="counter-two__text">Expert Teams</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Counter Two End-->

<!--Leadbrine Ready Two-->
<section class="qutiiz-ready-two">
	<div class="qutiiz-ready-two-bg-box">
		<div class="qutiiz-ready-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
			style="background-image: url(assets/images/backgrounds/qutiiz-ready-two-bg.jpg)"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="qutiiz-ready-two__inner">
					<h2 class="qutiiz-ready-two__title">Leadbrine is a ready to protect <br> your businesses</h2>
					<a href="about.html" class="qutiiz-ready-two__btn thm-btn">Discover more</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Leadbrine Ready End-->

<!--Team One Start-->

<!--Team One End-->

<!--Testimonial Two Start-->
<section class="testimonial-two clearfix">
	<div class="testimonial-two-map"
		style="background-image: url(assets/images/shapes/testimonial-two-map.png)"></div>
	<div class="container">
		<div class="section-title text-center">
			<span class="section-title__tagline">customer feedbacks</span>
			<h2 class="section-title__title">what they’re talking</h2>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="testimonial-two__carousel owl-theme owl-carousel">
					<!--Testimonial One Single-->
					<div class="testimonial-one__single">
						<p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consect
							notted
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="testimonial-one__client-info">
							<div class="testimonial-one__client-img">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-client-img-1.jpg" alt="">
								<div class="testimonial-one__quote">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-quote.png" alt="">
								</div>
							</div>
							<div class="testimonial-one__client-details">
								<h4 class="testimonial-one__client-name">Kevin Martin</h4>
								<p class="testimonial-one__client-title">customer</p>
							</div>
						</div>
					</div>
					<!--Testimonial One Single-->
					<div class="testimonial-one__single">
						<p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consect
							notted
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="testimonial-one__client-info">
							<div class="testimonial-one__client-img">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-client-img-2.jpg" alt="">
								<div class="testimonial-one__quote">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-quote.png" alt="">
								</div>
							</div>
							<div class="testimonial-one__client-details">
								<h4 class="testimonial-one__client-name">chsritine eve</h4>
								<p class="testimonial-one__client-title">customer</p>
							</div>
						</div>
					</div>
					<!--Testimonial One Single-->
					<div class="testimonial-one__single">
						<p class="testimonial-one__text">Lorem ipsum is simply free text dolor sit amet, consect
							notted
							adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<div class="testimonial-one__client-info">
							<div class="testimonial-one__client-img">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-client-img-3.jpg" alt="">
								<div class="testimonial-one__quote">
									<img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-one-quote.png" alt="">
								</div>
							</div>
							<div class="testimonial-one__client-details">
								<h4 class="testimonial-one__client-name">john smith</h4>
								<p class="testimonial-one__client-title">customer</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Testimonial Two End-->
<?php get_footer(); ?>