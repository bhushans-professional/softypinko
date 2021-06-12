<?php
/*
  Plugin Name: BSPinko Social Links Widget
  Plugin URI: http://localhost/softypinko/wp-content/plugins/socialicons/social-icons.php
  Description: Links to Social Media
  Author: Bhushan Salunke
  Author URI: http://localhost/softypinko/
*/

class Social_Profile extends WP_Widget { 

    function __construct() {
        parent::__construct(
                'Social_Profile',
                __('Social Links', 'translation_domain'), // Name
                array('description' => __('Links to Social Media', 'translation_domain'),)
        );
    }

    public function form($instance) {
        isset($instance['title']) ? $title = $instance['title'] : null;
        empty($instance['title']) ? $title = 'Social Links' : null;
 
        isset($instance['facebook']) ? $facebook = $instance['facebook'] : null;
        isset($instance['twitter']) ? $twitter = $instance['twitter'] : null;
        isset($instance['google']) ? $google = $instance['google'] : null; 
        isset($instance['linkedin']) ? $linkedin = $instance['linkedin'] : null;
        ?>
 
        <p>
            <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo esc_attr($facebook); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('google'); ?>"><?php _e('Google+:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" type="text" value="<?php echo esc_attr($google); ?>">
        </p>
 
        <p>
            <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo esc_attr($linkedin); ?>">
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
        $instance['facebook'] = (!empty($new_instance['facebook']) ) ? strip_tags($new_instance['facebook']) : '';
        $instance['twitter'] = (!empty($new_instance['twitter']) ) ? strip_tags($new_instance['twitter']) : '';
        $instance['google'] = (!empty($new_instance['google']) ) ? strip_tags($new_instance['google']) : '';
        $instance['linkedin'] = (!empty($new_instance['linkedin']) ) ? strip_tags($new_instance['linkedin']) : '';
 
        return $instance;
    }

    public function widget($args, $instance) {
 
        $title = apply_filters('widget_title', $instance['title']);
        $facebook = $instance['facebook'];
        $twitter = $instance['twitter'];
        $google = $instance['google'];
        $linkedin = $instance['linkedin'];
 
        // social profile link
        $facebook_profile = '<li><a href="' . $facebook . '"><i class="fa fa-facebook"></i></a></li>';
        $twitter_profile = '<li><a href="' . $twitter . '"><i class="fa fa-twitter"></i></a></li>';
        $google_profile = '<li><a href="' . $google . '"><i class="fa fa-google-plus"></i></a></li>';
        $linkedin_profile = '<li><a href="' . $linkedin . '"><i class="fa fa-linkedin"></i></a></li>';
 
        echo $args['before_widget'];
        /* if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        } */
 
       
        echo '<div class="row">';
        echo '<div class="col-lg-12 col-md-12 col-sm-12">';
        echo '<ul class="social">';
        echo (!empty($facebook) ) ? $facebook_profile : null;
        echo (!empty($twitter) ) ? $twitter_profile : null;
        echo (!empty($google) ) ? $google_profile : null;
        echo (!empty($linkedin) ) ? $linkedin_profile : null;
        echo '</ul>';
        echo '</div>';
        echo '</div>';
       
        echo $args['after_widget'];
    }

 }

// register Social_Profile widget
function register_social_profile() {
    register_widget('Social_Profile');
}
 
add_action('widgets_init', 'register_social_profile');