<!DOCTYPE html>
<html lang="en">
<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header();
?>

<div class="container" style="margin-top:150px; width=90%;">
<?php

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content/content-single' );

endwhile; // End of the loop.
?>
</div>

<?php 
get_footer();
?>
    