<?php 

add_action('cmb2_init', 'green_zone_meta_boxes');

function green_zone_meta_boxes() {
	$prefix = '_green_zone_';
	
	 $about_us = new_cmb2_box( array(
        'id'            => 'featued_element',
        'title'         => __( 'Featured Element', 'cmb2' ),
        'object_types'  => array( 'page', ), // Post type
		'show_on' => array( 'key' => 'page-template', 'value' => array('about-us.php') ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'closed'     => true, // Keep the metabox closed by default
    ) );
	
	$team_member = $about_us->add_field( array(
        'id'          => 'greenzone-team-member',
        'type'        => 'group',
        'description' => __( 'Add Multiple Team Members', 'cmb' ),
        'options'     => array(
            'group_title'   => __( 'Team Member {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Team Member', 'cmb' ),
            'remove_button' => __( 'Remove Tea Member', 'cmb' ),
            'sortable'      => true,
			'closed'     => true, // Keep the metabox closed by default			
        ),
    ) );
    
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $about_us->add_group_field( $team_member, array(
        'name' => 'Member Name',
        'id'   => '_team_member_name',
        'type' => 'text',
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array('about-us.php')),
        // 'repeatable' => true // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $about_us->add_group_field( $team_member, array(
        'name' => 'Member Designation',
        'id'   => '_team_member_designation',
        'type' => 'text',
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array('about-us.php')),
        // 'repeatable' => true // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
	
	// Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $about_us->add_group_field( $team_member, array(
        'name' => 'Member Image',
        'id'   => '_team_member_image',
        'type' => 'file',
        'object_types'  => array( 'page', ), // Post type
        'show_on' => array( 'key' => 'page-template', 'value' => array('about-us.php')),
        // 'repeatable' => true // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}