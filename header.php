<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />


<!-- Slider Stuff -->

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/nivo-slider.css" type="text/css" media="screen" />



<!-- End Slider Stuff -->




<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/0b10ae47-13ca-4139-ab8c-25133dfb2632.css"/>



<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<script type="text/javascript">
jQuery(document).ready(function ($) {
    $(window).load(function () {
        $('#slider').nivoSlider({
            effect: 'fade',
            randomStart: true
        });
    });
});
</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>

<div class="top-menu-wrapper">
    <div class="top-menu">
        <ul>
        	
            <li>Wagenbrenner Company:</li>
            <li><a href="http://wagenbrennerco.com/" class="green">Brokerage</a></li>
            <li><a href="http://wagmgmt.com/" class="orange">Management</a></li>
            <li><a href="http://www.wagdev.com/" target="_blank" class="dev">Wagenbrenner Development</a></li>
            <li><a href=" http://www.grantcommonscolumbus.com" target="_blank" class="dev">Grant Commons</a></li>
        	<!-- <li><a href="http://www.grantcommonscolumbus.com" target="_blank" class="neutral">Grant Commons</a></li> -->
            <?php 
            $theme = wp_get_theme();
            
            if ($theme == 'Wagman') { ?>
	           <li class="facebook-ico"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook-ico.png" alt="facebook" /></a></li>  
            <?php } elseif ($theme == 'Wagrage') { ?>
	           <li class="facebook-ico"><a href="https://www.facebook.com/pages/The-Wagenbrenner-Company/68279665962"><img src="<?php bloginfo('template_url'); ?>/images/facebook-ico.png" alt="facebook" /></a></li>  
           <?php  } else { }; ?> 
            
           
        </ul>
    </div>
</div>

<!--End Top Menu Area-->

<!--Start Slider Area-->
<div style="background:#000000">
<div class="slider-area">
	<div class="logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt=""></a></div>
	
<?php include 'slider.php'; ?>
	

</div>
</div>
<div class="slider-bottom-border">
	<div class="bar-1"></div>
	<div class="bar-color"></div>
	<div class="bar-3"></div>
	<div class="bar-shadow"></div>
</div>

<!--End Slider Area-->

<!--Start Main Content wrapper-->

	<div id="main">