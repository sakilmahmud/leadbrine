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
        
            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                $connected_page = get_post_meta( get_the_ID(), 'connected_page', true );
                //  print_r($featured_img_url); die;

                $img_url = get_template_directory_uri()."/assets/images/resources/main-slider-two-img-1.png";

                if ( !empty($featured_img_url) ) {
                   /*< img src="print $featured_img['url']" width=”print $featured_img['width']" height="print $featured_img['height']" />*/
                   $img_url = $featured_img_url;

                }
                ?>
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/main-slider-two-bg.png);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="main-slider-two-img-1">
                            <img src="<?=$img_url;?>" alt="">
                        </div>
                        <div class="main-slider-two-shape-1"></div>
                        <!--div class="main-slider-two-shape-2"></div>
                        <div class="main-slider-two-shape-3"></div-->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="main-slider-two__content">
                                        <!--p><?=the_title()?></p-->
                                        <?=get_the_content()?>
                                        <a href="<?=the_permalink($connected_page)?>" class="thm-btn">Discover More</a>
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
                <?php
                    $args = array(  
                        'post_type' => 'services',
                        'post_status' => 'publish',
                        'posts_per_page' => 4, 
                        'orderby' => 'title',
                        'order' => 'ASC'
                    );
                
                    $loop = new WP_Query( $args ); 
                        
                    while ( $loop->have_posts() ) : $loop->the_post();
                        ?>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-two__single">
                                <div class="services-two__icon">
									<span class="icon-online-shopping"></span>
                                </div>
                                <h3 class="services-two__title"><a href="<?=the_permalink()?>"><?=the_title()?></a></h3>
                                <p class="services-two__text"><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
                                <a class="services-two__arrow" href="<?=the_permalink()?>"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                ?>

                </div>
            </div>
        </section>
        <!--Services Two End-->
		
        <!--Get To Know Two Start-->
        <?php
            $my_postid = 73;//This is page id or post id
            $content_post = get_post($my_postid);
            //echo "<pre>"; print_r($content_post); die;
            //$content = $content_post->post_content;
            //$content = apply_filters('the_content', $content);
            //$content = str_replace(']]>', ']]&gt;', $content);
            
            if(!empty($content_post)){
                $featured_img_url = get_the_post_thumbnail_url($my_postid,'full');
                
                $connected_page = get_post_meta( $my_postid, 'connected_page', true );
                $img_url = get_template_directory_uri()."/assets/images/resources/get-to-know-two-img.jpg";

                if ( !empty($featured_img_url) ) {
                   $img_url = $featured_img_url;
                }
                $title = $content_post->post_title;
                $content = $content_post->post_content;
                ?>
                <section class="get-to-know-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="get-to-know-two__left wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="2500ms">
                                    <div class="get-to-know-two__img-box">
                                        <div class="get-to-know-two__img">
                                            <img src="<?php echo $img_url;?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="get-to-know-two__right">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline"><?=$title?></span>
                                    </div>
                                    <p class="get-to-know-two__text"></p>
                                    <?=$content?>
                                    
                                    <a href="<?=the_permalink($connected_page)?>" class="get-to-know-two__btn thm-btn">Discover more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php 
            }
        ?>
        <!--Get To Know Two End-->

        <!--Qutiiz Ready Two-->
        <section class="qutiiz-ready-two">
            <div class="qutiiz-ready-two-bg-box">
                <div class="qutiiz-ready-two-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%" style="background-image: url(assets/images/backgrounds/qutiiz-ready-two-bg.jpg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="qutiiz-ready-two__inner">
                            <h2 class="qutiiz-ready-two__title">Leadbrine is a ready to protect <br> your businesses</h2>
                            <a href="<?=the_permalink(16)?>" class="qutiiz-ready-two__btn thm-btn">Discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Qutiiz Ready End-->

        <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="container">
            <?php
                $my_postid = 75;
                $content_post = get_post($my_postid);
                if(!empty($content_post)){
                    $featured_img_url = get_the_post_thumbnail_url($my_postid,'full');
                    
                    $connected_page = get_post_meta( $my_postid, 'connected_page', true );
                    $youtube_video = get_post_meta( $my_postid, 'youtube_video', true );
                    $img_url = get_template_directory_uri()."/assets/images/resources/why-choose-two-bg.png";

                    if ( !empty($featured_img_url) ) {
                        $img_url = $featured_img_url;
                    }
                    $title = $content_post->post_title;
                    $content = $content_post->post_content;
                    ?>
                    <div class="why-choose-two__top">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="why-choose-two__top-left">
                                    <div class="why-choose-two__top-img">
                                        <img src="<?php echo $img_url;?>" alt="">
                                        <?php
                                            if($youtube_video !=""){ ?>
                                                <div class="why-choose-two__video-link">
                                                    <a href="<?=$youtube_video?>" class="video-popup">
                                                        <div class="why-choose-two__video-icon">
                                                            <span class="icon-play-button"></span>
                                                            <i class="ripple"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                                <?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="why-choose-two__right">
                                    <div class="section-title text-left">
                                        <span class="section-title__tagline"><?=$title?></span>
                                    </div>
                                    
                                    <?=$content?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            ?>
                <div class="why-choose-two__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Why Choose Two Signle-->
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-suitcase"></span>
                                </div>
                                <div class="why-choose-two__content">
                                    <h4 class="why-choose-two__content-text">business planning <br> strategies</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--Why Choose Two Signle-->
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-lamp"></span>
                                </div>
                                <div class="why-choose-two__content">
                                    <h4 class="why-choose-two__content-text">Skilled & Professional <br> Team Members
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <!--Why Choose Two Signle-->
                            <div class="why-choose-two__single">
                                <div class="why-choose-two__icon">
                                    <span class="icon-darts"></span>
                                </div>
                                <div class="why-choose-two__content">
                                    <h4 class="why-choose-two__content-text">Enjoy the people you <br> work with</h4>
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
                            <?php
                                $args = array(  
                                    'post_type' => 'projects',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 8, 
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                );
                            
                                $loop = new WP_Query( $args ); 
                                    
                                while ( $loop->have_posts() ) : $loop->the_post();

                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
                                    $img_url = get_template_directory_uri()."/assets/images/resources/project-two-img-1.jpg";
                    
                                    if ( !empty($featured_img_url) ) {
                                        $img_url = $featured_img_url;
                                    }
                                    ?>
                                    <div class="project-two__single">
                                        <div class="project-two__img">
                                            <img src="<?php echo $img_url;?>" alt="">
                                            <div class="project-two__hover">
                                                <h3 class="project-two__title"><a href="<?=the_permalink()?>"><?=the_title()?></a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Project Two End-->

        <!--Counter Two Start-->
        <section class="counter-two">
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
                                        <h3 class="odometer" data-count="150">00</h3>+
                                        <p class="counter-two__text">Projects Completed</p>
                                    </li>
                                    <li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="counter-two__icon">
                                            <span class="icon-recommend"></span>
                                        </div>
                                        <h3 class="odometer" data-count="50">00</h3>
                                        <p class="counter-two__text">Satisfied Clients</p>
                                    </li>
                                    <li class="counter-two__single wow fadeInUp" data-wow-delay="100ms">
                                        <div class="counter-two__icon">
                                            <span class="icon-consulting"></span>
                                        </div>
                                        <h3 class="odometer" data-count="15">00</h3>
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

        <!--Blog Two End-->
        <section class="blog-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">our blog posts</span>
                    <h2 class="section-title__title">News & Articles</h2>
                </div>
                <div class="row">
                    <?php
                        $args = array(  
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 5, 
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                    
                        $loop = new WP_Query( $args ); 
                            
                        while ( $loop->have_posts() ) : $loop->the_post();

                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'');
                            $img_url = get_template_directory_uri()."/assets/images/blog/blog-one-img-1.jpg";
            
                            if ( !empty($featured_img_url) ) {
                                $img_url = $featured_img_url;
                            }
                            $post_date = get_the_date( 'l F j, Y' );
                            
                            $categories = get_the_category();

                            if ( ! empty( $categories ) ) {
                                $blog_cat = esc_html( $categories[0]->name );	
                            }
                            ?>
                            <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                <!--Blog One Start-->
                                <div class="blog-one__single">
                                    <div class="blog-one__img">
                                        <img src="<?php echo $img_url;?>" alt="">
                                        <a href="<?=the_permalink()?>">
                                            <span class="blog-one__plus"></span>
                                        </a>
                                        <div class="blog-one__date">
                                            <p><?=$post_date?></p>
                                        </div>
                                    </div>
                                    <div class="blog-one__content">
                                        <ul class="list-unstyled blog-one__meta">
                                            <li><a href="<?=the_permalink()?>"><i class="far fa-folder-open"></i> <?=$blog_cat?></a></li>
                                        </ul>
                                        <h3 class="blog-one__title">
                                            <a href="<?=the_permalink()?>"><?=the_title()?></a>
                                        </h3>
                                        <div class="blog-one__person">
                                            <div class="blog-one__person-img">
                                                <img src="<?php echo get_template_directory_uri()."/assets/images/blog/blog-one-person-img-1.jpg";?>" alt="">
                                            </div>
                                            <div class="blog-one__person-content">
                                                <p>by <?=get_the_author_meta('display_name')?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    ?>
                    
                </div>
            </div>
        </section>
        <!--Blog Two End-->

        <!--We Care Start-->
        <section class="we-care">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="we-care__inner">
                            <div class="we-care__img">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/we-care-img.jpg" alt="">
                            </div>
                            <div class="we-care__content">
                                <h3 class="we-care__title">We Care About Business Growths</h3>
                                <p class="we-care__text">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--We Care End-->

        <!--Google Map Start-->
        <section class="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7186857847523!2d88.4229287144303!3d22.364248546223116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a026d8dd417753b%3A0xe28ec5f661a5c08!2sLeadBrine!5e0!3m2!1sen!2sin!4v1671800892253!5m2!1sen!2sin" class="google-map__one" allowfullscreen></iframe>
        </section>
        <!--Google Map End-->

        <!--Contact One Start-->
        <section class="contact-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="contact-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Get in touch with us</span>
                            </div>
                            <?php
                                $my_postid = 88;
                                $content_post = get_post($my_postid);
                                if(!empty($content_post)){
                                    $title = $content_post->post_title;
                                    $content = $content_post->post_content;
                                    echo $content;
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="contact-one__right wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <?=do_shortcode('[contact-form-7 id="90" title="Contacts" html_class="contact-one__right-form"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

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
                        
                            $loop = new WP_Query( $args ); 
                                
                            while ( $loop->have_posts() ) : $loop->the_post();

                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'');
                                
                                if ( empty($featured_img_url) ) {
                                    continue;
                                }
                                ?>
                                
                                <div class="swiper-slide">
                                    <img src="<?php echo $featured_img_url;?>" title="<?=the_title()?>" alt="<?=the_title()?>">
                                </div><!-- /.swiper-slide -->
                                
                                <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->
<?php
	get_footer();
?>