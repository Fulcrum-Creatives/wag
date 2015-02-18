<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div>

<!--End Main Content wrapper-->

<div class="clear"></div>



<!--Start Footer Area-->

<div class="footer_wrapper">
<div class="color-bar">
</div>

<div class="footer-cont">
<div class="footer-logos">
 <div class="footer-link-1"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/eho.png" alt="footer-logo" /></a></div>

        <div class="footer-link-1"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/realtor.png" alt="footer-logo" /></a>
        </div></div>
<div class="footer-widgets">

<div class="footer-address first">
	<?php if ( ! dynamic_sidebar( 'footer-add-1' ) ) : ?>
<?php endif; ?>
</div>
<div class="footer-address">
	<?php if ( ! dynamic_sidebar( 'footer-add-2' ) ) : ?>
<?php endif; ?>
</div>


</div> <!-- /footer-widgets -->
</div> 
</div> <!-- /footer_wrapper -->

<!--End Footer Area-->






<?php wp_footer(); ?>

</body>
</html>