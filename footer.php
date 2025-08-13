<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>
<!--Site Footer Start-->
<footer class="site-footer">
	<?php /*
	  <div class="site-footer__top">
		  <div class="container">
			  <div class="site-footer__top-inner">
				  <div class="site-footer__top-left">
					  <div class="site-footer__top-logo">
						  <a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo_white.png" alt=""></a>
					  </div>
					  <?php /*<div class="site-footer__top-title-box">
						  <h3 class="site-footer__top-title">Let's work together just drop me a line - <a href="mailto:support@leadbrine.com">support@leadbrine.com</a></h3>
					  </div>
				  </div>
				  <div class="site-footer__top-right">
					  <div class="site-footer__top-right-social">
						  <a href="https://twitter.com/leadbrine" target="_blank"><i class="fab fa-twitter"></i></a>
						  <a href="https://www.facebook.com/leadbrine" target="_blank"><i class="fab fa-facebook"></i></a>
						  <a href="https://www.linkedin.com/company/leadbrine" target="_blank"><i class="fab fa-linkedin"></i></a>
						  <a href="https://www.instagram.com/leadbrine" target="_blank"><i class="fab fa-pinterest-p"></i></a>
						  <a href="https://www.instagram.com/leadbrine" target="_blank"><i class="fab fa-instagram"></i></a>
						  <a href="https://leadbrine.quora.com/" target="_blank"><i class="fab fa-quara"></i></a>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>*/?>
	<div class="site-footer__middle">
		<div class="site-footer-shape"
			style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape.png)">
		</div>
		<div class="container">
			<div class="site-footer__middle-inner">
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">

						<div class="site-footer__top-logo">
							<a href="<?php echo home_url() ?>"><img
									src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png"
									alt=""></a>
						</div>
						<div class="footer-widget__column footer-widget__about">
							<ul class="footer-widget__about-contact list-unstyled">
								<li>
									<div class="icon">
										<i class="fas fa-phone-square-alt"></i>
									</div>
									<div class="text">
										<a href="tel:+916289480788">+91 62894 80788</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="text">
										<a href="mailto:support@leadbrine.com">support@leadbrine.com</a>
									</div>
								</li>
								<li>
									<div class="icon">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="text">
										<p>Quazi Nibas North Khodar Bazar, Baruipur, Kolkata, West Bengal 700144</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
						<div class="footer-widget__column footer-widget__links clearfix">
							<h3 class="footer-widget__title">Links</h3>
							<ul class="footer-widget__links-list list-unstyled clearfix">
								<li><a href="about.html">About Us</a></li>
								<li><a href="about.html">Our Mission</a></li>
								<li><a href="team.html">Meet the Team</a></li>
								<li><a href="project.html">Our Projects</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
						<div class="footer-widget__column footer-widget__explore clearfix">
							<h3 class="footer-widget__title">Explore</h3>
							<ul class="footer-widget__explore-list list-unstyled clearfix">
								<li><a href="services.html">What We Offer</a></li>
								<li><a href="about.html">Our Story</a></li>
								<li><a href="blog.html">Latest News</a></li>
								<li><a href="about.html">Help Center</a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
						<div class="footer-widget__column footer-widget__newsletter">
							<div class="site-footer__top-right-social">
								<a href="https://twitter.com/leadbrine" target="_blank"><i
										class="fab fa-twitter"></i></a>
								<a href="https://www.facebook.com/leadbrine" target="_blank"><i
										class="fab fa-facebook"></i></a>
								<a href="https://www.linkedin.com/company/leadbrine" target="_blank"><i
										class="fab fa-linkedin"></i></a>
								<a href="https://www.instagram.com/leadbrine" target="_blank"><i
										class="fab fa-pinterest-p"></i></a>
								<a href="https://www.instagram.com/leadbrine" target="_blank"><i
										class="fab fa-instagram"></i></a>
								<a href="https://leadbrine.quora.com/" target="_blank"><i class="fab fa-quora"></i></a>
							</div>
							<h3 class="footer-widget__title">Newsletter</h3>
							<form class="footer-widget__newsletter-form">
								<div class="footer-widget__newsletter-input-box">
									<input type="email" placeholder="Email address" name="email">
									<button type="submit" class="footer-widget__newsletter-btn"><i
											class="far fa-paper-plane"></i></button>
								</div>
							</form>
							<div class="footer-widget__newsletter-bottom">
								<div class="footer-widget__newsletter-bottom-icon">
									<i class="fa fa-check"></i>
								</div>
								<div class="footer-widget__newsletter-bottom-text">
									<p>I agree to all your terms and policies</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-footer__bottom">
				<div class="row">
					<div class="col-xl-12">
						<div class="site-footer__bottom-inner">
							<div class="site-footer__bottom-left">
								<p class="site-footer__bottom-text">© Copyrights, 2022 <a
										href="<?php echo home_url(); ?>">LeadBrine</a></p>
							</div>
							<div class="site-footer__bottom-right">
								<ul class="list-unstyled site-footer__bottom-menu">
									<li><a href="about.html">Terms & Conditions</a></li>
									<li><a href="about.html">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
	<div class="mobile-nav__overlay mobile-nav__toggler"></div>
	<!-- /.mobile-nav__overlay -->
	<div class="mobile-nav__content">
		<span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

		<div class="logo-box">
			<a href="index.html" aria-label="logo image"><img
					src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" width="155"
					alt="" /></a>
		</div>
		<!-- /.logo-box -->
		<div class="mobile-nav__container"></div>
		<!-- /.mobile-nav__container -->

		<ul class="mobile-nav__contact list-unstyled">
			<li>
				<i class="fa fa-envelope"></i>
				<a href="mailto:support@leadbrine.com">support@leadbrine.com</a>
			</li>
			<li>
				<i class="fa fa-phone-alt"></i>
				<a href="tel:666-888-0000">666 888 0000</a>
			</li>
		</ul><!-- /.mobile-nav__contact -->
		<div class="mobile-nav__top">
			<div class="mobile-nav__social">
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-facebook-square"></a>
				<a href="#" class="fab fa-pinterest-p"></a>
				<a href="#" class="fab fa-instagram"></a>
			</div><!-- /.mobile-nav__social -->
		</div><!-- /.mobile-nav__top -->



	</div>
	<!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->

<div class="search-popup">
	<div class="search-popup__overlay search-toggler"></div>
	<!-- /.search-popup__overlay -->
	<div class="search-popup__content">
		<form action="#">
			<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
			<input type="text" id="search" placeholder="Search Here..." />
			<button type="submit" aria-label="search submit" class="thm-btn">
				<i class="icon-magnifying-glass"></i>
			</button>
		</form>
	</div>
	<!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jarallax/jarallax.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/odometer/odometer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/swiper/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/wow/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/isotope/isotope.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/countdown/countdown.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/vegas/vegas.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/vendors/timepicker/timePicker.js"></script>
<!-- template js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/qutiiz.js"></script>

<?php wp_footer(); ?>

</body>

</html>