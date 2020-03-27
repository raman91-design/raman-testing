<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

/*========================Popup Settings===============================*/

	$options[] = array(
		'name' => __('Header', 'options_check'),
		'type' => 'heading');
	
     $options[] = array(
		'name' => __('Top-header text', 'options_check'),
		'desc' => __('Please enter button text', 'options_check'),
		'id' => 'top-header-text',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Site logo', 'options_check'),
		'desc' => __('Upload a file( png, ico, jpg, gif or bmp ) from your computer', 'options_check'),
		'id' => 'site_logo',
		'type' => 'upload');

	$options[] = array(
		'name' => __('mobile logo', 'options_check'),
		'desc' => __('Upload a file( png, ico, jpg, gif or bmp ) from your computer', 'options_check'),
		'id' => 'mobile_logo',
		'type' => 'upload');
	

$options[] = array(
		'name' => __('Footer', 'options_check'),
		'type' => 'heading');

$options[] = array(
		'name' => __('footer logo', 'options_check'),
		'desc' => __('Upload a file( png, ico, jpg, gif or bmp ) from your computer', 'options_check'),
		'id' => 'footer_logo',
		'type' => 'upload');

$options[] = array(
		'name' => __('copyright Text', 'options_check'),
		'desc' => __('Please enter button text', 'options_check'),
		'id' => 'copyright-text',
		'type' => 'text');
	
     $options[] = array(
		'name' => __('footer social links', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Facebook link', 'options_check'),
		'desc' => __('Please enter cost of plan', 'options_check'),
		'id' => 'facebook-link',
		'type' => 'text');

	$options[] = array(
		'name' => __('Instagram link', 'options_check'),
		'desc' => __('Please enter cost of plan', 'options_check'),
		'id' => 'instagram-link',
		'type' => 'text');

	$options[] = array(
		'name' => __('Pininterest link', 'options_check'),
		'desc' => __('Please enter cost of plan', 'options_check'),
		'id' => 'pininterest-link',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter link', 'options_check'),
		'desc' => __('Please enter cost of plan', 'options_check'),
		'id' => 'twitter-link',
		'type' => 'text');

	
	

	
	


	

	
    
	
		
	


		

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress,wplink' )
	);

	/* $options[] = array(
		'name' => __('Default Text Editor', 'options_check'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'media_buttons' => true
	);

	$options[] = array(
		'name' => __('Additional Text Editor', 'options_check'),
		'desc' => sprintf( __( 'This editor includes media button.', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor_media',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
 */
	return $options;
}
