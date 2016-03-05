<?php

function location_init() {
	register_post_type( 'location', array(
		'labels'            => array(
			'name'                => __( 'Locations', 'api' ),
			'singular_name'       => __( 'Location', 'api' ),
			'all_items'           => __( 'All Locations', 'api' ),
			'new_item'            => __( 'New location', 'api' ),
			'add_new'             => __( 'Add New', 'api' ),
			'add_new_item'        => __( 'Add New location', 'api' ),
			'edit_item'           => __( 'Edit location', 'api' ),
			'view_item'           => __( 'View location', 'api' ),
			'search_items'        => __( 'Search locations', 'api' ),
			'not_found'           => __( 'No locations found', 'api' ),
			'not_found_in_trash'  => __( 'No locations found in trash', 'api' ),
			'parent_item_colon'   => __( 'Parent location', 'api' ),
			'menu_name'           => __( 'Locations', 'api' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-post',
		'show_in_rest'         => true,
	) );

}
add_action( 'init', 'location_init' );

function location_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['location'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Location updated. <a target="_blank" href="%s">View location</a>', 'api'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'api'),
		3 => __('Custom field deleted.', 'api'),
		4 => __('Location updated.', 'api'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Location restored to revision from %s', 'api'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Location published. <a href="%s">View location</a>', 'api'), esc_url( $permalink ) ),
		7 => __('Location saved.', 'api'),
		8 => sprintf( __('Location submitted. <a target="_blank" href="%s">Preview location</a>', 'api'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Location scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview location</a>', 'api'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Location draft updated. <a target="_blank" href="%s">Preview location</a>', 'api'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'location_updated_messages' );
