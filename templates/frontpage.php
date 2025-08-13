<?php
/*
Template Name: Homepage
*/
get_header();
?>
<div class="stricky-header stricked-menu main-menu main-menu-two">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->
<!--Main Slider Start-->
<section class="main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false,
    "effect": "fade",
    "autoplay": {
        "delay": 5000
    }}'>
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'home_banner',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                $connected_page = get_post_meta(get_the_ID(), 'connected_page', true);
                //  print_r($featured_img_url); die;

                $img_url = get_template_directory_uri() . "/assets/images/resources/main-slider-two-img-1.png";

                if (!empty($featured_img_url)) {
                    /*< img src="print $featured_img['url']" width=”print $featured_img['width']" height="print $featured_img['height']" />*/
                    $img_url = $featured_img_url;
                }
            ?>
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/main-slider-two-bg.png);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="main-slider-two-img-1">
                        <img src="<?= $img_url; ?>" alt="">
                    </div>
                    <div class="main-slider-two-shape-1"></div>
                    <!--div class="main-slider-two-shape-2"></div>
                        <div class="main-slider-two-shape-3"></div-->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="main-slider-two__content">
                                    <h1 class="display-4 mb-3">Web Development & Digital Marketing Company in India</h1>
                                    <p class="mb-5">From websites to mobile apps and marketing campaigns, Leadbrine delivers solutions that drive results.</p>
                                    <a href="#" class="thm-btn">Get a Free Quote</a>
                                    <a href="#" class="thm-btn">See Our Work</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

                the_excerpt();
            endwhile;

            ?>

        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
    </div>
</section>
<!--Main Slider End-->

<!--Services Two Start-->
<section class="services-two">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Web Design</a></h3>
                    <p class="services-two__text">We create stunning, user-friendly websites that convert visitors into customers.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Web Development</a></h3>
                    <p class="services-two__text">We build robust, scalable, and secure web applications tailored to your business needs.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Web App Development</a></h3>
                    <p class="services-two__text">We deliver custom web applications that streamline your business processes.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Mobile App Development</a></h3>
                    <p class="services-two__text">We create intuitive and high-performing mobile apps for both iOS and Android platforms.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Digital Marketing</a></h3>
                    <p class="services-two__text">We help you reach your target audience and grow your business with our digital marketing strategies.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="services-two__single">
                    <div class="services-two__icon">
                        <span class="icon-online-shopping"></span>
                    </div>
                    <h3 class="services-two__title"><a href="#">Graphic Design</a></h3>
                    <p class="services-two__text">We provide creative and professional graphic design services to elevate your brand identity.</p>
                    <a class="services-two__arrow" href="#"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Two End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h2 class="cta-one__title">Ready to grow your business online? Let’s build something amazing.</h2>
                    </div>
                    <div class="cta-one__right">
                        <a href="#" class="thm-btn cta-one__btn">Get a Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<!--Why Choose Two Start-->
<section class="why-choose-two">
    <div class="container">
        <div class="why-choose-two__top">
            <div class="row">
                <div class="col-xl-6">
                    <div class="why-choose-two__top-left">
                        <div class="why-choose-two__top-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/about-page-img.jpg" alt="About Leadbrine">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-choose-two__right">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Why Choose Us</span>
                            <h2 class="section-title__title">End-to-End Solutions for Your Digital Needs</h2>
                        </div>
                        <p class="why-choose-two__right-text">From initial design concepts to development, deployment, and ongoing marketing, we provide a comprehensive suite of services to bring your digital vision to life. Our integrated approach ensures seamless execution and consistent quality across all stages of your project.</p>
                        <div class="why-choose-two__bottom">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                                    <!--Why Choose Two Signle-->
                                    <div class="why-choose-two__single">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-suitcase"></span>
                                        </div>
                                        <div class="why-choose-two__content">
                                            <h4 class="why-choose-two__content-text">Affordable & Transparent Pricing</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="200ms">
                                    <!--Why Choose Two Signle-->
                                    <div class="why-choose-two__single">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-lamp"></span>
                                        </div>
                                        <div class="why-choose-two__content">
                                            <h4 class="why-choose-two__content-text">Proven Results</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="300ms">
                                    <!--Why Choose Two Signle-->
                                    <div class="why-choose-two__single">
                                        <div class="why-choose-two__icon">
                                            <span class="icon-darts"></span>
                                        </div>
                                        <div class="why-choose-two__content">
                                            <h4 class="why-choose-two__content-text">Support & Maintenance</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Why Choose Two End-->

<!--Project Two Start-->
<section class="project-two">
    <div class="project-two__container">
        <div class="section-title text-center">
            <span class="section-title__tagline">recent projects</span>
            <h2 class="section-title__title">work showcase</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="project-two__carousel owl-theme owl-carousel">
                    <div class="project-two__single">
                        <div class="project-two__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-showcase/home-showcase-1-1.jpg" alt="Project One">
                            <div class="project-two__hover">
                                <h3 class="project-two__title"><a href="#">Project One</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-showcase/home-showcase-1-2.jpg" alt="Project Two">
                            <div class="project-two__hover">
                                <h3 class="project-two__title"><a href="#">Project Two</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-showcase/home-showcase-1-3.jpg" alt="Project Three">
                            <div class="project-two__hover">
                                <h3 class="project-two__title"><a href="#">Project Three</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-showcase/home-showcase-1-4.jpg" alt="Project Four">
                            <div class="project-two__hover">
                                <h3 class="project-two__title"><a href="#">Project Four</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Project Two End-->

<!--Testimonial Two Start-->
<section class="testimonial-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Our Testimonials</span>
            <h2 class="section-title__title">What They're Talking About</h2>
        </div>
        <div class="testimonial-two__carousel owl-theme owl-carousel">
            <div class="testimonial-two__single">
                <div class="testimonial-two__content">
                    <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-2-1.jpg" alt="Kevin Martin">
                        </div>
                        <div class="testimonial-two__client-details">
                            <h4 class="testimonial-two__client-name">Kevin Martin</h4>
                            <p class="testimonial-two__client-title">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-two__single">
                <div class="testimonial-two__content">
                    <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-2-2.jpg" alt="Christine Eve">
                        </div>
                        <div class="testimonial-two__client-details">
                            <h4 class="testimonial-two__client-name">Christine Eve</h4>
                            <p class="testimonial-two__client-title">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-two__single">
                <div class="testimonial-two__content">
                    <p class="testimonial-two__text">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="testimonial-two__client-info">
                        <div class="testimonial-two__client-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/testimonial-2-3.jpg" alt="John Doe">
                        </div>
                        <div class="testimonial-two__client-details">
                            <h4 class="testimonial-two__client-name">John Doe</h4>
                            <p class="testimonial-two__client-title">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Testimonial Two End-->

<!--Process Overview Start-->
<section class="process-overview">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">Process Overview</span>
            <h2 class="section-title__title">Our Working Process</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="process-overview__inner">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="process-overview__single">
                                <div class="process-overview__icon">
                                    <span class="icon-discovery"></span>
                                    <div class="process-overview__count"></div>
                                </div>
                                <h3 class="process-overview__title">Discovery</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="process-overview__single">
                                <div class="process-overview__icon">
                                    <span class="icon-design"></span>
                                    <div class="process-overview__count"></div>
                                </div>
                                <h3 class="process-overview__title">Design</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="process-overview__single">
                                <div class="process-overview__icon">
                                    <span class="icon-development"></span>
                                    <div class="process-overview__count"></div>
                                </div>
                                <h3 class="process-overview__title">Development</h3>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="process-overview__single">
                                <div class="process-overview__icon">
                                    <span class="icon-launch"></span>
                                    <div class="process-overview__count"></div>
                                </div>
                                <h3 class="process-overview__title">Launch</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Process Overview End-->

<!--CTA One Start-->
<section class="cta-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cta-one__inner">
                    <div class="cta-one__left">
                        <h2 class="cta-one__title">Ready to grow your business online? Let’s build something amazing.</h2>
                    </div>
                    <div class="cta-one__right">
                        <a href="#" class="thm-btn cta-one__btn">Get a Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--CTA One End-->

<!--Blog Two Start-->
<section class="blog-two">
    <div class="container">
        <div class="section-title text-center">
            <span class="section-title__tagline">our blog posts</span>
            <h2 class="section-title__title">News & Articles</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                <!--Blog One Start-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-one-img-1.jpg" alt="Blog post about responsive websites">
                        <a href="#">
                            <span class="blog-one__plus"></span>
                        </a>
                        <div class="blog-one__date">
                            <p>13 Aug, 2025</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-folder-open"></i> Web Development</a></li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="#">Why Every Business Needs a Responsive Website</a>
                        </h3>
                        <div class="blog-one__person">
                            <div class="blog-one__person-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-one-person-img-1.jpg" alt="Admin">
                            </div>
                            <div class="blog-one__person-content">
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                <!--Blog One Start-->
                <div class="blog-one__single">
                    <div class="blog-one__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-one-img-2.jpg" alt="Blog post about SEO">
                        <a href="#">
                            <span class="blog-one__plus"></span>
                        </a>
                        <div class="blog-one__date">
                            <p>13 Aug, 2025</p>
                        </div>
                    </div>
                    <div class="blog-one__content">
                        <ul class="list-unstyled blog-one__meta">
                            <li><a href="#"><i class="far fa-folder-open"></i> SEO</a></li>
                        </ul>
                        <h3 class="blog-one__title">
                            <a href="#">How SEO Can Boost Your Revenue</a>
                        </h3>
                        <div class="blog-one__person">
                            <div class="blog-one__person-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-one-person-img-1.jpg" alt="Admin">
                            </div>
                            <div class="blog-one__person-content">
                                <p>by Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!--We Care End-->

<!--Brand One Start-->
<section class="brand-one brand-two">
    <div class="container">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'sponsors',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $loop = new WP_Query($args);

                while ($loop->have_posts()) : $loop->the_post();

                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), '');

                    if (empty($featured_img_url)) {
                        continue;
                    }
                ?>

                    <div class="swiper-slide">
                        <img src="<?php echo $featured_img_url; ?>" title="<?= the_title() ?>" alt="<?= the_title() ?>">
                    </div><!-- /.swiper-slide -->

                <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</section>
<!--Blog Two End-->

<?php
get_footer();
?>