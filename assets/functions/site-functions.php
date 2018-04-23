<?php
	
	//Page Slug Body Class
	function add_slug_body_class( $classes ) {
		global $post;
		if ( isset( $post ) ) {
			$classes[] = $post->post_name;
		}
			return $classes;
		}
	add_filter( 'body_class', 'add_slug_body_class' );
	
	//ACF Options
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Resource Links',
			'menu_title'	=> 'Resource Links',
			'menu_slug' 	=> 'resource-links',
			'capability'	=> 'edit_posts',
			'redirect'		=> false,
			'icon_url' 		=> 'dashicons-admin-links',
			'position' 		=> 75
		));
		
	}
	add_action('acf/render_field_settings/type=text', 'add_readonly_and_disabled_to_text_field');
	  function add_readonly_and_disabled_to_text_field($field) {
	    acf_render_field_setting( $field, array(
	      'label'      => __('Read Only?','acf'),
	      'instructions'  => '',
	      'type'      => 'radio',
	      'name'      => 'readonly',
	      'choices'    => array(
	        0        => __("No",'acf'),
	        1        => __("Yes",'acf'),
	      ),
	      'layout'  =>  'horizontal',
	    ));
	    acf_render_field_setting( $field, array(
	      'label'      => __('Disabled?','acf'),
	      'instructions'  => '',
	      'type'      => 'radio',
	      'name'      => 'disabled',
	      'choices'    => array(
	        0        => __("No",'acf'),
	        1        => __("Yes",'acf'),
	      ),
	      'layout'  =>  'horizontal',
	    ));
	  }
	  
	/*function invoice_update_totalprice($post_id) {
		$flex_row = have_rows( get_the_ID(), 'services_flex' );
		$flex_layout = get_row_layout( get_the_ID(),'services_fc');
		if($flex_layout)
	    	$total = get_sub_field( get_the_ID(), 'hourly_rate_range_fc') * get_sub_field( get_the_ID(), 'hours_number_fc');
			$value = $total;
			$field_name = get_sub_field( get_the_ID(), 'line_total_number_fc');
	    update_field($field_name, $value, $post_id);
	}
	add_action('save_post', 'invoice_update_totalprice');*/
	add_filter( 'gform_field_value_invoice_amount', 'gf_filter_amount' );
	function gf_filter_amount() {
		global $running_total;
		return esc_attr( number_format( $running_total, 2 ) );
	}
	
	add_filter( 'gform_field_value_client_name', 'gf_filter_client_name' );
	function gf_filter_client_name() {
		return esc_attr( get_field( 'invoice_client_name' ) );
	}


	add_action('admin_enqueue_scripts','wptuts53021_load_admin_script');
	function wptuts53021_load_admin_script( $hook ){
    wp_enqueue_script( 
        'wptuts53021_script', //unique handle
        get_template_directory_uri().'/assets/js/admin-scripts.js', //location
        array('jquery')  //dependencies
     );
}