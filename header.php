<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Leadbrine is a leading web development and digital marketing company in India. We offer a wide range of services including web design, web development, mobile app development, and digital marketing.">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/qutiiz-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/qutiiz-icons-two/style.css">
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/qutiiz.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/qutiiz-responsive.css" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "Leadbrine",
            "image": "<?php echo get_template_directory_uri(); ?>/assets/images/logo.png",
            "@id": "",
            "url": "<?php echo home_url(); ?>",
            "telephone": "+91 70440 26420",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "2nd Floor, The Nest, Khasmallik,Baruipur, opposite to Khas Mallick Jame Masjid, Jogibattala, Baruipur, Kolkata",
                "addressLocality": "Kolkata",
                "postalCode": "700145",
                "addressRegion": "WB",
                "addressCountry": "IN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 22.3768577,
                "longitude": 88.4235565
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens": "09:00",
                "closes": "17:00"
            },
            "sameAs": [
                "https://www.facebook.com/leadbrine/",
                "https://twitter.com/leadbrine",
                "https://www.instagram.com/leadbrine/",
                "https://www.linkedin.com/company/leadbrine/"
            ]
        }
    </script>
</head>

<body>
    <!--div-- class="preloader">
        <img class="preloader__image" width="60" src="<?php echo get_template_directory_uri(); ?>/assets/images/loader.png" alt="" />
    </!--div-->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header-two clearfix">
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper__left">
                        <div class="main-menu-wrapper__logo">
                            <a href="<?php echo home_url(); ?>"><img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.png" alt=""
                                    style="margin-top: -15px !important;"></a>
                        </div>
                        <div class="main-menu-wrapper__main-menu">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <?php
                            $arg = array(
                                'menu_class' => 'main-menu__list',
                                'container' => 'ul',
                                'container_class' => 'main-menu__list'
                            );
                            wp_nav_menu($arg);
                            ?>
                        </div>
                    </div>
                    <div class="main-menu-wrapper__right">
                        <div class="main-menu-wrapper__search-box">
                            <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-wrapper__call">
                            <div class="main-menu-wrapper__call-icon">
                                <span class="icon-chatting"></span>
                            </div>
                            <div class="main-menu-wrapper__call-number">
                                <p>Call Anytime</p>
                                <h5><a href="tel:+917044026420">+91 70440 26420</a></h5>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__quote-btn" style="margin-left: 20px;">
                            <a href="#" class="thm-btn">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>