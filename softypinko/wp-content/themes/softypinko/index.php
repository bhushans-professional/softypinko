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

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "home-section")) );
                            $loop = new WP_Query( $args );
                            global $post;
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $meta = get_post_meta($post->ID);
                        ?>
                            <?php echo $post->post_content;?> 
                        <?php
                            endwhile;
                        ?>
                        <a href="#features" class="main-button-slider"><?php echo $meta['homepage-button-text'][0]; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <?php $args = array('post_type' => 'card', 'posts_per_page' => 10, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "home-section")) );
                            $loop = new WP_Query( $args );
                            global $post;
                            while ( $loop->have_posts() ) : $loop->the_post();
                            $meta = get_post_meta($post->ID);
                            $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
                            if(is_numeric($existing_image_id)) {
                                    $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
                                    $existing_image_url = $arr_existing_image[0];
                            }
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <div class="icon">
                                    <i><img src="<?php echo $existing_image_url; ?>" alt="" width="50" height="50"></i>
                                </div>
                                <h5 class="features-title"><?php echo $meta['custom_card_title'][0]; ?></h5>
                                <p><?php echo $meta['custom_card_description'][0]; ?></p>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        ?>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <?php $args = array('post_type' => 'card', 'posts_per_page' => 5, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "about-section")) );
        $loop = new WP_Query( $args );
        global $post;
        $flag = "odd";
        while ( $loop->have_posts() ) : $loop->the_post();
        $meta = get_post_meta($post->ID);
        $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
        if(is_numeric($existing_image_id)) {
            $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
            $existing_image_url = $arr_existing_image[0];
        }
    ?>
    <?php if($flag == "odd"){ $flag = "even"; ?>
        <section class="section padding-top-70 padding-bottom-0" id="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <img src="<?php echo $existing_image_url; ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                        <div class="left-heading">
                            <h2 class="section-title"><?php echo $meta['custom_card_title'][0]; ?></h2>
                        </div>
                        <div class="left-text">
                            <p><?php echo $meta['custom_card_description'][0]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
            </div>
        </section>
    <?php }else{ $flag = "odd"; ?>
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                        <div class="left-heading">
                            <h2 class="section-title"><?php echo $meta['custom_card_title'][0]; ?></h2>
                        </div>
                        <div class="left-text">
                            <p><?php echo $meta['custom_card_description'][0]; ?></p>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="<?php echo $existing_image_url; ?>" class="rounded img-fluid d-block mx-auto" alt="App">
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php
        endwhile;
    ?>

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "work-process-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="row" style="margin-bottom: 40px;">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <?php echo $post->post_content; ?> 
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                
                <!-- ***** Mini Box Start ***** -->
                
                <div class="row">
                    <?php $args = array('post_type' => 'card', 'posts_per_page' => 10, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "work-process-section")) );
                        $loop = new WP_Query( $args );
                        global $post;
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $meta = get_post_meta($post->ID);
                        $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
                        if(is_numeric($existing_image_id)) {
                                $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
                                $existing_image_url = $arr_existing_image[0];
                        }
                    ?>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" style="margin: auto;">
                        <a href="#" class="mini-box">
                            <i><img src="<?php echo $existing_image_url; ?>" alt=""></i>
                            <strong><?php echo $meta['custom_card_title'][0]; ?></strong>
                            <span><?php echo $meta['custom_card_description'][0]; ?></span>
                        </a>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "testimonials-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
               
                <div class="col-lg-12">
                    <div class="center-heading">
                        <?php echo $post->post_content; ?> 
                    </div>
                </div>
               
                <?php
                    endwhile;
                ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <?php $args = array('post_type' => 'card', 'posts_per_page' => 10, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "testimonials-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $meta = get_post_meta($post->ID);
                    $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
                    if(is_numeric($existing_image_id)) {
                            $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
                            $existing_image_url = $arr_existing_image[0];
                    }
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="<?php echo $existing_image_url; ?>" alt=""></i>
                            <p><?php echo $meta['custom_card_description'][0]; ?></p>
                            <div class="user-image">
                                <img src="<?php the_post_thumbnail(); ?>" width="60" height="60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name"><?php echo $meta['custom_card_title'][0]; ?></h3>
                                <span><?php echo $meta['custom_card_button_title'][0]; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** Pricing Plans Start ***** -->
    <section class="section colored" id="pricing-plans">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "pricing-tables-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-lg-12">
                    <div class="center-heading">
                        <?php echo $post->post_content; ?> 
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Pricing Item Start ***** -->
                <?php $args = array('post_type' => 'card', 'posts_per_page' => 10, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "pricing-tables-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $meta = get_post_meta($post->ID);
                    $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
                    if(is_numeric($existing_image_id)) {
                            $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
                            $existing_image_url = $arr_existing_image[0];
                    }
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="pricing-item">
                        <div class="pricing-header">
                            <h3 class="pricing-title"><?php echo $meta['custom_card_title'][0]; ?></h3>
                        </div>
                        <div class="pricing-body">
                            <div class="price-wrapper">
                                <span class="price"><?php echo $meta['custom_card_price'][0]; ?></span>
                                <span class="period">monthly</span>
                            </div>
                            <?php echo $meta['custom_card_description'][0]; ?>
                        </div>
                        <div class="pricing-footer">
                            <a href="<?php echo $meta['custom_card_button_url'][0]; ?>" class="main-button"><?php echo $meta['custom_card_button_title'][0]; ?></a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
                <!-- ***** Pricing Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plans End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "counter-section")) );
                        $loop = new WP_Query( $args );
                        global $post;
                        while ( $loop->have_posts() ) : $loop->the_post();
                            $meta = get_post_meta($post->ID);
                    ?>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong><?php echo $meta['project-counter'][0]; ?></strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-top">
                            <strong><?php echo $meta['happy-clients-counter'][0]; ?></strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item decoration-bottom">
                            <strong><?php echo $meta['award-wins-counter'][0]; ?></strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="count-item">
                            <strong><?php echo $meta['countries-counter'][0]; ?></strong>
                            <span>Countries</span>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   

    <!-- ***** Blog Start ***** -->
    <section class="section" id="blog">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "blog-entries-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-lg-12">
                    <div class="center-heading">
                        <?php echo $post->post_content; ?> 
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <?php $args = array('post_type' => 'blog', 'posts_per_page' => 10, 'order' => 'ASC', 'post_status' => 'publish');
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $meta = get_post_meta($post->ID);
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-post-thumb">
                        <div class="img">
                             <?php // the_post_thumbnail(); ?>
                            <img alt="" src=" <?php echo get_the_post_thumbnail_url(); ?>" />
                        </div>
                        <div class="blog-content">
                            <h3>
                                <a href="<?php echo $meta['custom_blog_button_url'][0]; ?>" target="blank"><?php the_title(); ?></a>
                            </h3>
                            <div class="text">
                                <?php echo $post->post_excerpt; ?> 
                            </div>
                            <a href="<?php echo $meta['custom_blog_button_url'][0]; ?>" target="blank" class="main-button">Read More</a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <?php $args = array('post_type' => 'section', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "contact-us-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                <div class="col-lg-12">
                    <div class="center-heading">
                        <?php echo $post->post_content; ?> 
                    </div>
                </div>
                <?php
                    endwhile;
                ?>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <?php $args = array('post_type' => 'card', 'posts_per_page' => 1, 'order' => 'ASC', 'post_status' => 'publish', 'tax_query' => array(array('taxonomy' => 'section_type', 'field' => 'slug', 'terms' => "contact-us-section")) );
                    $loop = new WP_Query( $args );
                    global $post;
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $meta = get_post_meta($post->ID);
                ?>
                <!-- ***** Contact Text Start ***** -->
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30"><?php echo $meta['custom_card_title'][0]; ?></h5>
                    <div class="contact-text">
                         <?php echo $meta['custom_card_description'][0]; ?>
                    </div>
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="<?php echo $meta['custom_card_button_url'][0]; ?>" method="get">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button"><?php echo $meta['custom_card_button_title'][0]; ?></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    

<?php
get_footer();
?>
