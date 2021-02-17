<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );

// REGISTER custom post type for TEQ HR HANDBOOK
function custom_post_type_employee_handbook() {

	$labels = array(
		'name'                => _x( 'employeehandbook', 'Post Type General Name', 'FoundationPress-master' ),
		'singular_name'       => _x( 'employeehandbook', 'Post Type Singular Name', 'FoundationPress-master' ),
		'menu_name'           => __( 'Employee Handbook', 'FoundationPress-master' ),
		'parent_item_colon'   => __( 'Parent employeehandbook', 'FoundationPress-master' ),
		'all_items'           => __( 'All employeehandbook', 'FoundationPress-master' ),
		'view_item'           => __( 'View employeehandbook', 'FoundationPress-master' ),
		'add_new_item'        => __( 'Add New employeehandbook', 'FoundationPress-master' ),
		'add_new'             => __( 'Add New', 'FoundationPress-master' ),
		'edit_item'           => __( 'Edit employeehandbook', 'FoundationPress-master' ),
		'update_item'         => __( 'Update employeehandbook', 'FoundationPress-master' ),
		'search_items'        => __( 'Search employeehandbook', 'FoundationPress-master' ),
		'not_found'           => __( 'Not Found', 'FoundationPress-master' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'FoundationPress-master' ),
	);
// Set other options for Custom Post Type
	$args = array(
		'label'               => __( 'employeehandbook', 'FoundationPress-master' ),
		'description'         => __( 'employeehandbook', 'FoundationPress-master' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'custom-fields', 'revisions' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical'        => false,
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
    'menu_icon'           => 'dashicons-book-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
    'taxonomies'          => array('post_tag')
	);
	// Registering your Custom Post Type
	register_post_type( 'employeehandbook', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/
add_action( 'init', 'custom_post_type_employee_handbook', 0 );

/**
 * REGISTER SALES ASSISTANCE CUSTOM POST TYPE
 */
 function custom_post_type_sales_assistance() {

 	$labels = array(
 		'name'                => _x( 'salesassistance', 'Post Type General Name', 'FoundationPress-master' ),
 		'singular_name'       => _x( 'salesassistance', 'Post Type Singular Name', 'FoundationPress-master' ),
 		'menu_name'           => __( 'Sales Assistance', 'FoundationPress-master' ),
 		'parent_item_colon'   => __( 'Parent sales assistance', 'FoundationPress-master' ),
 		'all_items'           => __( 'All sales assistance', 'FoundationPress-master' ),
 		'view_item'           => __( 'View', 'FoundationPress-master' ),
 		'add_new_item'        => __( 'Add New sales assistance', 'FoundationPress-master' ),
 		'add_new'             => __( 'Add New', 'sales assistance' ),
 		'edit_item'           => __( 'Edit sales assistance', 'FoundationPress-master' ),
 		'update_item'         => __( 'Update sales assistance', 'FoundationPress-master' ),
 		'search_items'        => __( 'Search sales assistance', 'FoundationPress-master' ),
 		'not_found'           => __( 'Not Found', 'FoundationPress-master' ),
 		'not_found_in_trash'  => __( 'Not found in Trash', 'FoundationPress-master' ),
 	);
 // Set other options for Custom Post Type
 	$args = array(
 		'label'               => __( 'salesassistance', 'FoundationPress-master' ),
 		'description'         => __( 'salesassistance', 'FoundationPress-master' ),
 		'labels'              => $labels,
 		// Features this CPT supports in Post Editor
 		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),
 		/* A hierarchical CPT is like Pages and can have
 		* Parent and child items. A non-hierarchical CPT
 		* is like Posts.
 		*/
 		'hierarchical'        => false,
 		'public'              => false,
 		'show_ui'             => true,
 		'show_in_menu'        => true,
 		'show_in_nav_menus'   => true,
 		'show_in_admin_bar'   => true,
 		'menu_position'       => 10,
    'menu_icon'           => 'dashicons-chart-bar',
 		'can_export'          => true,
 		'has_archive'         => true,
 		'exclude_from_search' => false,
 		'publicly_queryable'  => true,
		'show_in_rest' 				=> true,
 		'capability_type'     => 'post',
		'taxonomies'  => array( 'category' ),
		'register_meta_box_cb' => 'wpt_add_sales_assistance_metaboxes',
 	);
 	// Registering your Custom Post Type
 	register_post_type( 'salesassistance', $args );
 }
 add_action( 'init', 'custom_post_type_sales_assistance', 0 );

 function wpt_add_sales_assistance_metaboxes() {
 	add_meta_box(
 		'wpt_url_link',
 		'URL Link',
 		'wpt_url_link',
 		'salesassistance',
 		'side',
 		'default'
 	);
	add_meta_box(
 		'wpt_url_type',
 		'URL Type',
 		'wpt_url_type',
 		'salesassistance',
 		'side',
 		'default'
 	);
	add_meta_box(
 		'wpt_expiration',
 		'Expiration Date',
 		'wpt_expiration',
 		'salesassistance',
 		'side',
 		'default'
 	);
 }
 /**
 * Output the HTML for the metabox.
 */
function wpt_url_link() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$location = get_post_meta( $post->ID, 'location', true );
	// Output the field
	echo '<p><input type="text" name="location" value="' . esc_textarea( $location )  . '" class="widefat"></p>';
}
function wpt_url_type() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$typeLocation = get_post_meta( $post->ID, 'location_type', true );
	// Output the field
	echo '<p><small> <strong>*Please Note only values: Video, Sharepoint or Web will be accepted.</strong> If left blank the default will be null.</small></p><p><input type="text" name="location_type" value="' . esc_textarea( $typeLocation )  . '" class="widefat"></p>';
}
function wpt_expiration() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$expireLocation = get_post_meta( $post->ID, 'location_expire', true );
	// Output the field
	echo '<p><input type="date" name="location_expire" value="' . esc_textarea( $expireLocation )  . '" class="widefat"></p>';
}

/**
 * Save the metabox data
 */
function wpt_save_location( $post_id, $post ) {
	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.
	if ( ! isset( $_POST['location'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// Now that we're authenticated, time to save the data.
	// This sanitizes the data from the field and saves it into an array $events_meta.
	$events_meta['location'] = esc_textarea( $_POST['location'] );
	// Cycle through the $events_meta array.
	foreach ( $events_meta as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
	$events_type['location_type'] = esc_textarea( $_POST['location_type'] );
	// Cycle through the $events_meta array.
	foreach ( $events_type as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
	$events_expire['location_expire'] = esc_textarea( $_POST['location_expire'] );
	// Cycle through the $events_meta array.
	foreach ( $events_expire as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
}
add_action( 'save_post', 'wpt_save_location', 1, 2 );

/**
 * REGISTER CAMPAIGN CUSTOM POST TYPE
 */
 function custom_post_type_campaign() {

 	$labels = array(
 		'name'                => _x( 'campaign', 'Post Type General Name', 'FoundationPress-master' ),
 		'singular_name'       => _x( 'campaign', 'Post Type Singular Name', 'FoundationPress-master' ),
 		'menu_name'           => __( 'Campaigns', 'FoundationPress-master' ),
 		'parent_item_colon'   => __( 'Parent campaign', 'FoundationPress-master' ),
 		'all_items'           => __( 'All campaigns', 'FoundationPress-master' ),
 		'view_item'           => __( 'View', 'FoundationPress-master' ),
 		'add_new_item'        => __( 'Add New campaign', 'FoundationPress-master' ),
 		'add_new'             => __( 'Add New', 'campaign' ),
 		'edit_item'           => __( 'Edit campaign', 'FoundationPress-master' ),
 		'update_item'         => __( 'Update campaign', 'FoundationPress-master' ),
 		'search_items'        => __( 'Search campaign', 'FoundationPress-master' ),
 		'not_found'           => __( 'Not Found', 'FoundationPress-master' ),
 		'not_found_in_trash'  => __( 'Not found in Trash', 'FoundationPress-master' ),
 	);
 	$args = array(
 		'label'               => __( 'campaign', 'FoundationPress-master' ),
 		'description'         => __( 'campaign', 'FoundationPress-master' ),
 		'labels'              => $labels,
 		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),
 		'hierarchical'        => false,
 		'public'              => false,
 		'show_ui'             => true,
 		'show_in_menu'        => true,
 		'show_in_nav_menus'   => true,
 		'show_in_admin_bar'   => true,
 		'menu_position'       => 10,
    'menu_icon'           => 'dashicons-chart-pie',
 		'can_export'          => true,
 		'has_archive'         => true,
 		'exclude_from_search' => false,
 		'publicly_queryable'  => true,
 		'capability_type'     => 'post',
		'register_meta_box_cb' => 'wpt_add_campaign_metaboxes',
 	);
 	register_post_type( 'campaign', $args );
 }
 add_action( 'init', 'custom_post_type_campaign', 0 );

 function wpt_add_campaign_metaboxes() {
 	add_meta_box(
 		'wpt_campaign_date',
 		'Campaign Date',
 		'wpt_campaign_date',
 		'campaign',
 		'side',
 		'default'
 	);
	add_meta_box(
 		'wpt_campaign_market',
 		'Campaign Market',
 		'wpt_campaign_market',
 		'campaign',
 		'side',
 		'default'
 	);
 }
 /**
 * Output the HTML for the metabox.
 */
function wpt_campaign_date() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$date = get_post_meta( $post->ID, 'date', true );
	// Output the field
	echo '<p><input type="text" name="date" value="' . esc_textarea( $date )  . '" class="widefat"></p>';
}
function wpt_campaign_market() {
	global $post;
	// Nonce field to validate form request came from current site
	wp_nonce_field( basename( __FILE__ ), 'event_fields' );
	// Get the location data if it's already been entered
	$market = get_post_meta( $post->ID, 'market', true );
	// Output the field
	echo '<p><small> <strong>*Please describe all target markets</small></p><p><input type="text" name="market" value="' . esc_textarea( $market )  . '" class="widefat"></p>';
}

function wpt_save_campaign( $post_id, $post ) {
	// Return if the user doesn't have edit permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}
	// Verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times.
	if ( ! isset( $_POST['date'] ) || ! wp_verify_nonce( $_POST['event_fields'], basename(__FILE__) ) ) {
		return $post_id;
	}
	// Now that we're authenticated, time to save the data.
	// This sanitizes the data from the field and saves it into an array $events_meta.
	$events_date['date'] = esc_textarea( $_POST['date'] );
	// Cycle through the $events_meta array.
	foreach ( $events_date as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
	$events_market['market'] = esc_textarea( $_POST['market'] );
	// Cycle through the $events_meta array.
	foreach ( $events_market as $key => $value ) :
		// Don't store custom data twice
		if ( 'revision' === $post->post_type ) {
			return;
		}
		if ( get_post_meta( $post_id, $key, false ) ) {
			// If the custom field already has a value, update it.
			update_post_meta( $post_id, $key, $value );
		} else {
			// If the custom field doesn't have a value, add it.
			add_post_meta( $post_id, $key, $value);
		}
		if ( ! $value ) {
			// Delete the meta key if there's no value
			delete_post_meta( $post_id, $key );
		}
	endforeach;
}
add_action( 'save_post', 'wpt_save_campaign', 1, 2 );

/**
	* DISABLE TOOLBAR FOR ALL USERS EXCEPT ADMIN
	*/
	add_action('after_setup_theme', 'remove_admin_bar');
	function remove_admin_bar() {
		if ( ! current_user_can('administrator') && ! is_admin() ) {
			show_admin_bar(false);
		}
	}
	
/**
 * Login Page Edits.
 *
 */

function my_login_logo() { ?>
    <style type="text/css">
		body.login {
			background-color: #3c4852;
		}
		body.login div#login form#loginform {
			background-color: #4b5760;
		}
        #login h1 a, .login h1 a {
						width: 300px;
            background-image: url('<?php echo get_template_directory_uri();?>/images/teq-intranet.svg');
						background-size: 250px;
        }
		body.login div#login form#loginform p label {
			color: #0075c9;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
