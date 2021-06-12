<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
    
	<!-- ***** Footer Start ***** -->
	<footer>
        <div class="container">
            <?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="<?php echo ASSETS_URL; ?>/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="<?php echo ASSETS_URL; ?>/js/popper.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="<?php echo ASSETS_URL; ?>/js/scrollreveal.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/waypoints.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/jquery.counterup.min.js"></script>
    <script src="<?php echo ASSETS_URL; ?>/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="<?php echo ASSETS_URL; ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
