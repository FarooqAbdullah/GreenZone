<?php
/**
 * GreenZone functions and definitions
 * @package Webace Technology
 * @subpackage GreenZone
 */

 /********************************
    Theme Includes
********************************/
function theme_includes() {
	require("admin/cmb2/init.php");
    require("admin/theme_options.php");
    require("admin/custom_fields/customfields.php");
}
add_action('init', 'theme_includes');

/**************************
Theme Support
 **************************/
function theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
}
add_action('init', 'theme_support');
 
/********************************
	Theme Styles and Scripts
 ********************************/
function theme_styles() {
    
	// Register Style Sheets
    wp_register_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '', '');
	wp_register_style( 'theme-metallic', get_template_directory_uri().'/css/metallic.css', array('bootstrap'), '', '');
    wp_register_style( 'theme-style', get_template_directory_uri().'/css/style.css', array('bootstrap','theme-metallic'), '', '');
	
    // Enqueue Style Sheets
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('theme-style');
    wp_enqueue_style('theme-metallic');
}

function theme_scripts() {
    
	// Register Scripts
    wp_register_script('jquery', get_template_directory_uri().'/js/jquery-1.11.3.min.js', array(), '', true);
    wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script('datepicker', get_template_directory_uri().'/js/zebra_datepicker.js', array('jquery'), '', true);
    wp_register_script('theme-javascript', get_template_directory_uri().'/js/query.js', array('jquery', 'bootstrap','datepicker'), '', true);
    
	// Enqueue Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('datepicker');
    wp_enqueue_script('theme-javascript');
}

function theme_styles_scripts() {
    theme_styles();
    theme_scripts();
}
add_action( 'wp_enqueue_scripts', 'theme_styles_scripts');


/********************************
	Admin Styles and Scripts
 ********************************/

function theme_admin_styles () {
	
	// Register Style Sheets
	wp_register_style( 'admin-bootstrap', get_template_directory_uri().'/admin/css/bootstrap.min.css', array(), '', '');
	wp_register_style( 'admin-theme-style', get_template_directory_uri().'/admin/css/admin_theme.css', array('admin-bootstrap'), '', '');

	// Enqueue Style Sheets
	wp_enqueue_style('admin-bootstrap');
	wp_enqueue_style('admin-theme-style');
}
function theme_admin_scripts() {
    
	// Register Scripts
    wp_register_script('admin-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true);
    wp_register_script('admin-calender', get_template_directory_uri().'/js/zebra_datepicker.js', array('jquery'), '', true);
    wp_register_script('admin-javascript', get_template_directory_uri().'/admin/js/theme_admin.js', array('jquery', 'admin-calender'), '', true);
    
	// Enqueue Scripts
	wp_enqueue_script('admin-bootstrap');
	wp_enqueue_script('admin-calender');
    wp_enqueue_script('admin-javascript');
}

function admin_styles_scripts($hook_suffix) {
	if($hook_suffix == 'toplevel_page_greenzone') {
		theme_admin_styles();
		theme_admin_scripts();
	}
}
add_action( 'admin_enqueue_scripts', 'admin_styles_scripts');


/********************************
	Register Nav Menu
 ********************************/
 function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');


/********************************
	Register New User
 ********************************/
 function _green_register_new_user() {
	if($_POST) {
		if(array_key_exists('action', $_POST) && $_POST['action'] == 'register') {
			
			$user_name = $_POST['first_name'].'_'.$_POST['last_name'];
			$user_email = $_POST['register_email'];
			$user_password = $_POST['register_password'];
			$user_id = username_exists( $user_name );
			if ( !$user_id and email_exists($user_email) == false ) {
				// $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
				$user_id = wp_create_user( $user_name, $user_password, $user_email );
				$message = "Your account has been created.";
				wp_mail( $user_email, "Registration", $message);
			} else {
				$random_password = __('User already exists.');
			}
			echo "<script>alert('Your account has been created.')</script>";
			echo '<META HTTP-EQUIV="refresh" content="0;URL='.get_permalink(get_the_ID()).'?rg=success">';
            exit();
		}
		if(array_key_exists('action', $_POST) && $_POST['action'] == '_login_ac') {
			
			$user_email = $_POST['_email_login'];
			$user_password = $_POST['_password_login'];
			$user = get_user_by( 'email', $user_email );
			if ( isset( $user->user_login, $user ) ) {
				$username = $user->user_login;
			}
			$user_remember = $_POST['_password_login'];
			
			if(is_admin()) {
				return;
			}
			$creds = array();
			$creds['user_login'] = (isset($username) ? $username : "");
			$creds['user_password'] = (isset($user_password) ? $user_password : "");
			if($user_remember == 'on') {
				$creds['remember'] = true;
			}
			else {
				$creds['remember'] = false;
			}
			$user = wp_signon( $creds, false );
			if ( is_wp_error($user) ) {
				$error = $user->get_error_message();
				?>
				<script>
					alert('error');
				</script>
				<?php
				echo '<META HTTP-EQUIV="refresh" content="0;URL='.get_permalink(get_the_ID()).'">';
				exit();
			}
			elseif( !is_wp_error($user) ) {
				?>
				<script>
					alert("singed in");
				</script>
				<?php
			   echo '<META HTTP-EQUIV="refresh" content="0;URL='.get_permalink(get_the_ID()).'">';
			   exit();
			}
		}
	}
}
add_action('init', '_green_register_new_user');

/*********************************************************************************************
                    Function to show login pop up by default.
*********************************************************************************************/

function _default_login() {
	if($_GET['rg'] == 'success') {
		?>
		<script>
			jQuery(document).ready(
				function($) {
					$('#login').modal('show');
				}
			);
		</script>
		<?php
	}
		?>
		<script>
			jQuery(document).ready(
				function($) {
					$('#menu-main_navigation').find('> li._logout').find('a').attr('href', "<?php echo wp_logout_url(get_permalink(get_the_ID())); ?>");
				}
			);
		</script>
		<style>
			<?php 
			if(is_user_logged_in()) {
				?>
				#bs-example-navbar-collapse-1 ul.nav li._login {
					display:none;
				}
				#bs-example-navbar-collapse-1 ul.nav li._logout {
					display:block;
				}
				<?php
			}
			else {
				?>
				#bs-example-navbar-collapse-1 ul.nav li._login {
					display:block;
				}
				#bs-example-navbar-collapse-1 ul.nav li._logout {
					display:none;
				}
				<?php
			}
			?>
		</style>
		<?php
}
add_action('wp_footer', '_default_login');

/*********************************************************************************************
                    Function to remove admin bar when Student logged in.
*********************************************************************************************/

function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');

/*********************************************************************************************
                      Function to restrict Student to access admin panel.
*********************************************************************************************/

function restrict_admin() {

    if (  !current_user_can( 'manage_options' ) ) {
        wp_redirect( site_url() );
        exit;
    }
}
add_action( 'admin_init', 'restrict_admin', 1 );

/********************************
		Slider Post
 ********************************/
function _slider_post() {
    $labels = array(
        'name'               => _x( 'Slider Posts', 'post type general name' ),
        'singular_name'      => _x( 'Slider Post', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New Slider Post' ),
        'edit_item'          => __( 'Edit Slider Post' ),
        'new_item'           => __( 'New Slider Post' ),
        'all_items'          => __( 'All Slider Posts' ),
        'view_item'          => __( 'View Slider Post' ),
        'search_items'       => __( 'Search Slider Posts' ),
        'not_found'          => __( 'No Slider Post found' ),
        'not_found_in_trash' => __( 'No Slider Post found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Home Slider'
    );
    $args = array(

        'labels'        => $labels,
        'description'   => 'This is the description for Slider posts.',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    );
	register_post_type( 'slider_zone', $args );
}
add_action( 'init', '_slider_post' );

/********************************
		Register Sidebar Portion
 ********************************/

function _green_register_sidebars(){

    // For Left Column 
    register_sidebar(array(
		'id' => 'green-zone-footer-1',
		'name' => __('Footer Left Column', 'greenzone'),
		'description' => __('sidebar for Footer left Column')
    ));
	
	// For Right Column 
    register_sidebar(array(
		'id' => 'green-zone-footer-2',
		'name' => __('Footer Right Column', 'greenzone'),
		'description' => __('sidebar for Footer Right Column')
    ));
}
add_action('widgets_init','_green_register_sidebars');


/********************************
		Sidebar Portion
 ********************************/

add_action( 'widgets_init', 'column_widget');
function column_widget() {
    register_widget( 'column_widget_info' );
}

class column_widget_info extends WP_Widget {

	// This section wil give info about widget
	function column_widget_info () {		
			
        $this->WP_Widget(
			'column_widget_info',
			'Theme Column', 
			array('title' => 'Theme Column Widget', 'description'=> 'This section will display the footer column heading description and buttons') 
		);        
	}

	// Designing the form widget, which will be displayed in the admin dashboard widget location.
	public function form( $instance ) {

        if ( isset( $instance[ 'title' ]) && isset ($instance[ 'description' ]) && isset($instance[ 'button_text' ]) && isset($instance[ 'button_url' ]) ) {
            $title =  $instance[ 'title' ];
            $description = $instance[ 'description' ];
            $button_text = $instance[ 'button_text' ];
            $button_url = $instance[ 'button_url' ];
        }
        else {
            $title = __( '' );
            $description = __( '' );
            $button_text = __( '');
            $button_url = __( '');
        }
		?>
        <p>Title : <input name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title );?>" /></p>

        <p>Description :<p>
		<p><textarea class="widefat" rows="7" cols="20" name="<?php echo $this->get_field_name( 'description' ); ?>" id="<?php echo $this->get_field_id( 'description' ); ?>" ><?php echo trim( $description ); ?></textarea></p>

        <p>Button Text : <input name="<?php echo $this->get_field_name( 'button_text' ); ?>" type="text" value="<?php echo esc_attr( $button_text ); ?>" /></p>

        <p>Button Url or Page Name: <input name="<?php echo $this->get_field_name( 'button_url' ); ?>" type="text" value="<?php echo esc_attr( $button_url ); ?>" /></p>
		<?php

    }

	// update the new values in database
    function update($new_instance, $old_instance) {

        $instance = $old_instance;

        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? htmlentities( $new_instance['description'] ) : '';

        $instance['button_text'] = ( ! empty( $new_instance['button_text'] ) ) ? strip_tags( $new_instance['button_text'] ) : '';

        $instance['button_url'] = ( ! empty( $new_instance['button_url'] ) ) ? strip_tags( $new_instance['button_url'] ) : '';

        return $instance;

    }

	// Display the stored widget information in webpage.
	function widget($args, $instance) {

        extract($args);

       // Widget starts to print information
        $title = apply_filters( 'widget_title', $instance['title'] );

        $description = empty( $instance['description'] ) ? '' : $instance['description'];

        $button_text = empty( $instance['button_text'] ) ? '' : $instance['button_text'];

        $button_url = empty( $instance['button_url'] ) ? '' : $instance['button_url'];

        // start content
        $return = '<div class="row">';
		if(isset($title) && !empty($title)) {
			$return .= '<h3>'.$title.'</h3>';
		}
		if(isset($description) && !empty($description)) {
			$content = html_entity_decode($description);
			$return .= '<p>'.$content.'</p>';
		}
		$return .= '</div>';
		$return .= '<div class="row">';
		if(isset($button_url) && !empty($button_url)) {
			if(strpos($button_url,'.com') === false) {
				$button_url = get_permalink(get_page_by_path($button_url));
			} 
		}
		else {
			$button_url = '#';
		}
		if( isset($button_text) && !empty($button_text) ) {
			$return .= '<p><a href="'.$button_url.'" class="_chat btn btn-default">'.$button_text.'</a></p>';
		}
		$return .= '</div>';
			  
		echo $return;
    }
}