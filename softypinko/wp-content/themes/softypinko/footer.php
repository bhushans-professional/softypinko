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
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2020 Softy Pinko Company - Design: TemplateMo</p>
                </div>
            </div>
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
