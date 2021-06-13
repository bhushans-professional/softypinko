<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

//Custom Post Type - Section Type Taxonomy
add_action( 'init', 'create_section_type_taxonomy', 0 );
function create_section_type_taxonomy() {
	$labels = array(
		'name' => _x( 'Section Types', 'taxonomy general name' ),
		'singular_name' => _x( 'Section Type', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Section Type' ),
		'all_items' => __( 'All Section Types' ),
		'parent_item' => __( 'Parent Section Type' ),
		'parent_item_colon' => __( 'Parent Section Type:' ),
		'edit_item' => __( 'Edit Section Type' ), 
		'update_item' => __( 'Update Section Type' ),
		'add_new_item' => __( 'Add New Section Type' ),
		'new_item_name' => __( 'New Section Type Name' ),
		'menu_name' => __( 'Section Type' ),
	);
	register_taxonomy(
		'section_type',
		array('section','card'),
		array(
			'hierarchical' => true,
			'labels' => $labels,
			'show_ui' => true,
			'show_admin_column' => true,
			'query_var' => true,
			'rewrite' => false,
		)
	);
}


// Custom Post Type - Section
add_action( 'init', 'custom_post_type_section' );
function custom_post_type_section() {

    $labels = array( 
        'name' => _x( 'Sections', 'section' ),
        'singular_name' => _x( 'Section', 'section' ),
        'add_new' => _x( 'Add New', 'section' ),
        'add_new_item' => _x( 'Add New Section', 'section' ),
        'edit_item' => _x( 'Edit Section', 'section' ),
        'new_item' => _x( 'New Section', 'section' ),
        'view_item' => _x( 'View Section', 'section' ),
        'search_items' => _x( 'Search Section', 'section' ),
        'not_found' => _x( 'No Section found', 'section' ),
        'not_found_in_trash' => _x( 'No Section found in Trash', 'section' ),
        'parent_item_colon' => _x( 'Parent Section:', 'section' ),
        'menu_name' => _x( 'Sections', 'section' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array( 'section_type' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
		'show_in_rest' => false,
        'rewrite' => array( 'slug' => 'section', 'hierarchical' => false, 'with_front' => false, 'feeds' => true, 'pages' => true ),
        'capability_type' => 'post'
    );
	//flush_rewrite_rules();
    register_post_type( 'section', $args );
}



// Custom Post Type - Card Details
add_action( 'init', 'custom_card_details' );
function custom_card_details() {

    $labels = array( 
        'name' => _x( 'Cards', 'card' ),
        'singular_name' => _x( 'Card', 'card' ),
        'add_new' => _x( 'Add New', 'card' ),
        'add_new_item' => _x( 'Add New Card', 'card' ),
        'edit_item' => _x( 'Edit Card', 'card' ),
        'new_item' => _x( 'New Card', 'card' ),
        'view_item' => _x( 'View Card', 'card' ),
        'search_items' => _x( 'Search Card', 'card' ),
        'not_found' => _x( 'No Card found', 'card' ),
        'not_found_in_trash' => _x( 'No Card found in Trash', 'card' ),
        'parent_item_colon' => _x( 'Parent Card:', 'card' ),
        'menu_name' => _x( 'Cards', 'card' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'thumbnail'),
        'taxonomies' => array( 'section_type'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
		'show_in_rest' => false,
        'rewrite' => array( 'slug' => 'card', 'hierarchical' => false, 'with_front' => false, 'feeds' => true, 'pages' => true ),
        'capability_type' => 'post'
    );
	//flush_rewrite_rules();
    register_post_type( 'card', $args );
}



function xxxx_add_edit_form_multipart_encoding() {
    echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'xxxx_add_edit_form_multipart_encoding');

/** Custom Fields for Card Details **/
$prefix = 'custom_card_';
$custom_card_info_fields = array(
	array(
        'label'=> 'Image',
        'desc'  => '',
        'id'    => 'xxxx_image',
        'type'  => 'file'
    ),
	array(
        'label'=> 'Title',
        'desc'  => '',
        'id'    => $prefix.'title',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Price',
        'desc'  => '',
        'id'    => $prefix.'price',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Price Period',
        'desc'  => '',
        'id'    => $prefix.'price_period',
        'type'  => 'text'
    ),
	array(
        'label'=> 'Link/Button Title',
        'desc'  => '',
        'id'    => $prefix.'button_title',
        'type'  => 'text'
	),
    array(
        'label'=> 'Link/Button URL',
        'desc'  => '',
        'id'    => $prefix.'button_url',
        'type'  => 'text'
	),
	array(
        'label'=> 'Description',
        'desc'  => '',
        'id'    => $prefix.'description',
        'type'  => 'textarea_editor'
    )
);


function card_detail_box($post) {

	global $custom_card_info_fields, $post;
	echo '<input type="hidden" name="custom_card_info_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	echo '<table class="form-table">';
	foreach ($custom_card_info_fields as $field) {
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr><th><label for="'.$field['id'].'">'.$field['label'].'</label></th><td>';
		switch($field['type']) {
            case 'file':
				echo '<input type="file" name="xxxx_image" id="xxxx_image" /><br />';
                $status_message = get_post_meta($post->ID,'_xxxx_attached_image_upload_feedback', true);
                if($status_message) {
                    echo '<div class="upload_status_message">';
                        echo $status_message;
                    echo '</div>';
                }
                echo '<input type="hidden" name="xxxx_manual_save_flag" value="true" />';
                $existing_image_id = get_post_meta($post->ID,'_xxxx_attached_image', true);
                if(is_numeric($existing_image_id)) {
                    echo '<div>';
                        $arr_existing_image = wp_get_attachment_image_src($existing_image_id, 'large');
                        $existing_image_url = $arr_existing_image[0];
                        echo '<p><img src="' . $existing_image_url . '" width="100" height="100"/></p>';
                    echo '</div>';
                }
                break;
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea_editor':
				wp_editor( $meta, $field['id'] );
				echo "<br><br>";
				break;
		}
		echo '</td></tr>';
	}
    echo '</table>';

}



function save_card_info_meta($post_id) {
	global $custom_card_info_fields;
	if (!wp_verify_nonce($_POST['custom_card_info_box_nonce'], basename(__FILE__))) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	foreach ($custom_card_info_fields as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
add_action('save_post', 'save_card_info_meta');


function xxxx_setup_meta_boxes() {
    add_meta_box('xxxx_image_box', 'Card Details', 'card_detail_box', 'card', 'normal', 'high');
}
add_action('admin_init','xxxx_setup_meta_boxes');


function xxxx_update_post($post_id, $post) {
    $post_type = $post->post_type;
    if($post_id && isset($_POST['xxxx_manual_save_flag'])) { 
        switch($post_type) {
            case 'card':
                if(isset($_FILES['xxxx_image']) && ($_FILES['xxxx_image']['size'] > 0)) {
                    $arr_file_type = wp_check_filetype(basename($_FILES['xxxx_image']['name']));
                    $uploaded_file_type = $arr_file_type['type'];
                    $allowed_file_types = array('image/jpg','image/jpeg','image/gif','image/png');
                    if(in_array($uploaded_file_type, $allowed_file_types)) {
                        $upload_overrides = array( 'test_form' => false ); 
                        $uploaded_file = wp_handle_upload($_FILES['xxxx_image'], $upload_overrides);
                        if(isset($uploaded_file['file'])) {
                            $file_name_and_location = $uploaded_file['file'];
                            $file_title_for_media_library = 'your title here';
                            $attachment = array(
                                'post_mime_type' => $uploaded_file_type,
                                'post_title' => 'Uploaded image ' . addslashes($file_title_for_media_library),
                                'post_content' => '',
                                'post_status' => 'inherit'
                            );
                            $attach_id = wp_insert_attachment( $attachment, $file_name_and_location );
                            require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                            $attach_data = wp_generate_attachment_metadata( $attach_id, $file_name_and_location );
                            wp_update_attachment_metadata($attach_id,  $attach_data);
                            $existing_uploaded_image = (int) get_post_meta($post_id,'_xxxx_attached_image', true);
                            if(is_numeric($existing_uploaded_image)) {
                                wp_delete_attachment($existing_uploaded_image);
                            }
                            update_post_meta($post_id,'_xxxx_attached_image',$attach_id);
                            $upload_feedback = false;
                        } else { 
                            $upload_feedback = 'There was a problem with your upload.';
                            update_post_meta($post_id,'_xxxx_attached_image',$attach_id);
                        }
                    } else { 
                        $upload_feedback = 'Please upload only image files (jpg, gif or png).';
                        update_post_meta($post_id,'_xxxx_attached_image',$attach_id);
                    }
                } else { 
                    $upload_feedback = false;
                }
                update_post_meta($post_id,'_xxxx_attached_image_upload_feedback',$upload_feedback);
            break;
            default:
        } 
    	return;
	} 
    return;
}
add_action('save_post','xxxx_update_post',1,2);



// Custom Post Type - Blog Details
add_action( 'init', 'custom_blog_details' );
function custom_blog_details() {

    $labels = array( 
        'name' => _x( 'Blogs', 'blog' ),
        'singular_name' => _x( 'Blog', 'blog' ),
        'add_new' => _x( 'Add New', 'blog' ),
        'add_new_item' => _x( 'Add New Blog', 'blog' ),
        'edit_item' => _x( 'Edit Blog', 'blog' ),
        'new_item' => _x( 'New Blog', 'blog' ),
        'view_item' => _x( 'View Blog', 'blog' ),
        'search_items' => _x( 'Search Blog', 'blog' ),
        'not_found' => _x( 'No Blog found', 'blog' ),
        'not_found_in_trash' => _x( 'No Blog found in Trash', 'blog' ),
        'parent_item_colon' => _x( 'Parent Card:', 'blog' ),
        'menu_name' => _x( 'Blogs', 'blog' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
		'show_in_rest' => true,
        'rewrite' => array( 'slug' => 'blog', 'hierarchical' => false, 'with_front' => false, 'feeds' => true, 'pages' => true ),
        'capability_type' => 'page'
    );
	//flush_rewrite_rules();
    register_post_type( 'blog', $args );
}


/** Custom Fields for Card Details **/
$prefix = 'custom_blog_';
$custom_blog_info_fields = array(
	array(
        'label'=> 'Link/Button Title',
        'desc'  => '',
        'id'    => $prefix.'button_title',
        'type'  => 'text'
	),
    array(
        'label'=> 'Link/Button URL',
        'desc'  => '',
        'id'    => $prefix.'button_url',
        'type'  => 'text'
	)
);


function blog_detail_box($post) {

	global $custom_blog_info_fields, $post;
	echo '<input type="hidden" name="custom_blog_info_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
	echo '<table class="form-table">';
	foreach ($custom_blog_info_fields as $field) {
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr><th><label for="'.$field['id'].'">'.$field['label'].'</label></th><td>';
		switch($field['type']) {
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" /><br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea_editor':
				wp_editor( $meta, $field['id'] );
				echo "<br><br>";
				break;
		}
		echo '</td></tr>';
	}
    echo '</table>';

}



function save_blog_info_meta($post_id) {
	global $custom_blog_info_fields;
	if (!wp_verify_nonce($_POST['custom_blog_info_box_nonce'], basename(__FILE__))) return $post_id;
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return $post_id;
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}
	foreach ($custom_blog_info_fields as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	}
}
add_action('save_post', 'save_blog_info_meta');


function blog_setup_meta_boxes() {
    add_meta_box('blog_box', 'Blog Details', 'blog_detail_box', 'blog', 'normal', 'high');
}
add_action('admin_init','blog_setup_meta_boxes');

?>