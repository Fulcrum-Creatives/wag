<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<div class="sidebar-wrapper fnt16">
   <div class="sidebar-menu">
   
   <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	<div class="clear"></div>
	
    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

    <!--<div class="commercial-area">
      <p><b>Commercial &amp; Residential<br />
        Rental Properties<br />
        Now Available in:</b> Downtown,<br />
        Bexley, Grandview Heights,<br />
        German Village, Victorian <br />
        Village, Harrison West </p>
    </div>-->

     <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	
  </div>
</div>
<!--End sidebar wrapper--> 


	