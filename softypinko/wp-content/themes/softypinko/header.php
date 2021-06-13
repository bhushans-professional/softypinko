<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        <title>Softy Pinko - By BSPinko</title>

        <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="<?php echo ASSETS_URL; ?>css/templatemo-softy-pinko.css">

    </head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

	<!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

	 <!-- ***** Header Area Start ***** -->
	 <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <?php
                        $logo = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $logo , 'full' );
                        ?>
                        <a href="http://localhost/softypinko/" class="logo">
                                <div class="site-logo"><span class="custom-logo-link"><img width="160" height="30" src="<?php echo  $image[0];?>" class="custom-logo" alt=""></span></div>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'primary',
                                    'items_wrap'      => '<ul id="primary-menu-list" class="nav">%3$s</ul>',
                                    'fallback_cb'     => false,
                                )
                            );
                        ?>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

