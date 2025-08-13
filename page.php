<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<div class="stricky-header stricked-menu main-menu">
	<div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->

<!--Page Header Start-->
<section class="page-header">
	<div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg.jpg)"></div>
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
<section class="about-page">
	<div class="container">
		<div class="row">
			<h1 class="mb-3"><?=get_the_title();?></h1>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					the_content();

				endwhile; // End the loop.
			?>
		</div>
	</div>
</section>
<?php
get_footer();
