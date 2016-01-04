<?php
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class Myprefix_Admin {
    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'greenzone';
    /**
     * Options page metabox id
     * @var string
     */
    private $metabox_id_general = 'greenzone_metabox_general';
    private $metabox_id_header = 'greenzone_metabox_header';
    private $metabox_id_footer = 'greenzone_metabox_footer';
    /**
     * Options Page title
     * @var string
     */
    protected $title = '';
    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';
    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Green Zone Options', $this->key );
    }
    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
        add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
    }
    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }
    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
        // Include CMB CSS in the head to avoid FOUT
        add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
    }
    /**
     * Admin page markup. Mostly handled by CMB2
     * @since  0.1.0
     */
    public function admin_page_display() {
        ?>
        <div class="wrap cmb2-options-page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs _theme_otion_tabs" role="tablist">
                    <li role="presentation"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
                    <li role="presentation"><a href="#header" aria-controls="header" role="tab" data-toggle="tab">Header</a></li>
                    <li role="presentation"><a href="#footer" aria-controls="footer" role="tab" data-toggle="tab">Footer</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content _theme_options">
                    <div role="tabpanel" class="tab-pane" id="general">
                        <?php cmb2_metabox_form( $this->metabox_id_general, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="header">
                        <?php  cmb2_metabox_form( $this->metabox_id_header, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="footer">
                        <?php  cmb2_metabox_form( $this->metabox_id_footer, $this->key, array( 'cmb_styles' => false ) ); ?>
                    </div>
                </div>

            </div>
        </div>
    <?php
    }
    /**
     * Add the options metabox to the array of metaboxes
     * @since  0.1.0
     */
    function add_options_page_metabox() {
        
		// General Portion Object
		$cmb_general = new_cmb2_box( array(
            'id'      => $this->metabox_id_general,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ));
		
		// Header Portion Object
        $cmb_header = new_cmb2_box( array(
            'id'      => $this->metabox_id_header,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ));
		
		// Footer Portion Object
        $cmb_footer = new_cmb2_box( array(
            'id'      => $this->metabox_id_footer,
            'hookup'  => false,
            'show_on' => array(
                // These are important, don't remove
                'key'   => 'options-page',
                'value' => array( $this->key, )
            ),
        ));
		
        // Set our CMB2 fields
        $cmb_general->add_field( array(
            'name' => __( 'Upload Site Logo', 'greenzone' ),
            'desc' => __( 'Upload your site Logo', 'greenzone' ),
            'id'   => 'greenzone-main-logo',
            'type' => 'file',
            'default' => '',
        ));
		
		$cmb_general->add_field( array(
            'name' => __( 'Upload pop-up Logo', 'greenzone' ),
            'desc' => __( 'Upload your register pop-up Logo', 'greenzone' ),
            'id'   => 'greenzone-pop-up-logo',
            'type' => 'file',
            'default' => '',
        ));
		
		$cmb_general->add_field( array(
            'name' => __( "Upload Sell Ticket's Image", 'greenzone' ),
            'desc' => __( "Upload sell ticket's image", 'greenzone' ),
            'id'   => 'greenzone-sell-tickets-image',
            'type' => 'file',
            'default' => '',
        ));
		
		$cmb_general->add_field( array(
            'name' => __( "Sell Ticket's Title", 'greenzone' ),
            'desc' => __( "Sell ticket's title", 'greenzone' ),
            'id'   => 'greenzone-sell-tickets-title',
            'type' => 'text',
            'default' => '',
        ));
		
		$cmb_general->add_field( array(
            'name' => __( "Sell Ticket's Button Text", 'greenzone' ),
            'desc' => __( "Sell ticket's button text", 'greenzone' ),
            'id'   => 'greenzone-sell-tickets-button-text',
            'type' => 'text',
            'default' => '',
        ));
		
		$cmb_general->add_field( array(
            'name' => __( "Sell Ticket's Button Url", 'greenzone' ),
            'desc' => __( "Sell ticket's button url", 'greenzone' ),
            'id'   => 'greenzone-sell-tickets-button-url',
            'type' => 'text',
            'default' => '',
        ));
        
        // Set our CMB2 fields
        $cmb_header->add_field( array(
             'name' => __( 'Upload Logo', 'greenzone' ),
             'desc' => __( 'Upload your site Header Logo', 'greenzone' ),
             'id'   => 'greenzone-header-logo',
             'type' => 'file',
             'default' => '',
        ));
        
        // Set our CMB2 fields
        $cmb_footer->add_field( array(
            'name' => __( 'Upload Footer Logo', 'greenzone' ),
             'desc' => __( 'Upload your footer Logo', 'greenzone' ),
             'id'   => 'greenzone-footer-header-logo',
             'type' => 'file',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'US and Canda Toll Free Number', 'greenzone' ),
             'desc' => __( 'Write your toll free number', 'greenzone' ),
             'id'   => 'greenzone-footer-toll-free-number',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Url for facebook', 'greenzone' ),
             'desc' => __( 'facebook url', 'greenzone' ),
             'id'   => 'greenzone-footer-facebook',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Url for gmail', 'greenzone' ),
             'desc' => __( 'gmail url', 'greenzone' ),
             'id'   => 'greenzone-footer-gmail',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Url for twitter', 'greenzone' ),
             'desc' => __( 'Twitter url', 'greenzone' ),
             'id'   => 'greenzone-footer-twitter',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Url for youtube', 'greenzone' ),
             'desc' => __( 'Youtube url', 'greenzone' ),
             'id'   => 'greenzone-footer-youtube',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Url for pinterest', 'greenzone' ),
             'desc' => __( 'Pinterest url', 'greenzone' ),
             'id'   => 'greenzone-footer-pinterest',
             'type' => 'text',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Weekdays Start Timing', 'greenzone' ),
             'desc' => __( 'Weekdays Start Timing', 'greenzone' ),
             'id'   => 'greenzone-footer-weekdays-start-timing',
             'type' => 'text_time',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Weekdays End Timing', 'greenzone' ),
             'desc' => __( 'Weekdays End Timing', 'greenzone' ),
             'id'   => 'greenzone-footer-weekdays-end-timing',
             'type' => 'text_time',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Weekends Start Timing', 'greenzone' ),
             'desc' => __( 'Weekdends Start Timing', 'greenzone' ),
             'id'   => 'greenzone-footer-weekends-start-timing',
             'type' => 'text_time',
             'default' => '',
        ));
		
		$cmb_footer->add_field( array(
            'name' => __( 'Weekends End Timing', 'greenzone' ),
             'desc' => __( 'Weekdends End Timing', 'greenzone' ),
             'id'   => 'greenzone-footer-weekends-end-timing',
             'type' => 'text_time',
             'default' => '',
        ));
    }
    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {
        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }
        throw new Exception( 'Invalid property: ' . $field );
    }
}
/**
 * Helper function to get/return the Myprefix_Admin object
 * @since  0.1.0
 * @return Myprefix_Admin object
 */
function myprefix_admin() {
    static $object = null;
    if ( is_null( $object ) ) {
        $object = new Myprefix_Admin();
        $object->hooks();
    }
    return $object;
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function myprefix_get_option( $key = '' ) {
    return cmb2_get_option( myprefix_admin()->key, $key );
}
// Get it started
myprefix_admin();