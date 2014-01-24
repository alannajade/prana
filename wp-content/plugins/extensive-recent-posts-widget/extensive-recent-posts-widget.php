<?php
/*
Plugin Name: Extensive Recent Posts Widget
Plugin URI: http://circlewaves.com/products/plugins/extensive-recent-posts-widget/
Description: Recent posts widget with fully customizable layout and advanced options.
Version: 1.1.0
Author: Circlewaves
Author URI: http://circlewaves.com
Author Email: info@circlewaves.com
Text Domain: cw-erpv-locale
Domain Path: /lang/
Network: false
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Copyright 2013 CircleWaves (info@circlewaves.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class Extensive_Recent_Posts_Widget extends WP_Widget {

	/*--------------------------------------------------*/
	/* Constructor
	/*--------------------------------------------------*/

	/**
	 * Specifies the classname and description, instantiates the widget,
	 * loads localization files, and includes necessary stylesheets and JavaScript.
	 */
	public function __construct() {

		// load plugin text domain
		add_action( 'init', array( $this, 'widget_textdomain' ) );

		// Hooks fired when the Widget is activated and deactivated
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );


		parent::__construct(
			'cw-erpv-id',
			__( 'Extensive Recent Posts Widget', 'cw-erpv-locale' ),
			array(
				'classname'		=>	'cw-erpv-class',
				'description'	=>	__( 'Recent posts widget with fully customizable layout and advanced options.', 'cw-erpv-locale' )
			)
		);

		// Register admin styles and scripts
		add_action( 'admin_print_styles', array( $this, 'register_admin_styles' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'register_admin_scripts' ) );

		// Register site styles and scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_scripts' ) );

	} // end constructor

//for widget
private function strstr_array( $haystack, $needle ) {
	if ( !is_array( $needle ) ) {
		return false;
	}
	foreach ( $needle as $element ) {

		if (strstr($haystack,$element) ) {
			return true;
		}
	}
}	
	
	
	/*--------------------------------------------------*/
	/* Widget API Functions
	/*--------------------------------------------------*/

	/**
	 * Outputs the content of the widget.
	 *
	 * @param	array	args		The array of form elements
	 * @param	array	instance	The current instance of the widget
	 */
	public function widget( $args, $instance ) {

		extract( $args, EXTR_SKIP );

		echo $before_widget;

		// TODO:	Here is where you manipulate your widget's values based on their input fields
		$title=apply_filters('cw_erpv_title',(isset($instance['title'])&&($instance['title']))?$instance['title']:'');
		$category=apply_filters('cw_erpv_category',(isset($instance['category'])&&($instance['category']))?$instance['category']:'');
		$order_field=apply_filters('cw_erpv_order_field',(isset($instance['order_field'])&&($instance['order_field']))?$instance['order_field']:'');
		$order_type=apply_filters('cw_erpv_order_type',(isset($instance['order_type'])&&($instance['order_type']))?$instance['order_type']:'');
		$post_count=apply_filters('cw_erpv_post_count',(isset($instance['post_count'])&&($instance['post_count']))?(int)$instance['post_count']:'4');
		$post_offset=apply_filters('cw_erpv_post_offset',(isset($instance['post_offset'])&&($instance['post_offset']))?(int)$instance['post_offset']:'0');
		$show_post_title=apply_filters('cw_erpv_show_post_title',(isset($instance['show_post_title'])&&($instance['show_post_title']))?1:0);
		$show_post_date=apply_filters('cw_erpv_show_post_date',(isset($instance['show_post_date'])&&($instance['show_post_date']))?1:0);
		$post_date_format=apply_filters('cw_erpv_post_date_format',(isset($instance['post_date_format'])&&($instance['post_date_format']))?$instance['post_date_format']:'F j, Y g:i a');
		$show_post_thumbnail=apply_filters('cw_erpv_show_post_thumbnail',(isset($instance['show_post_thumbnail'])&&($instance['show_post_thumbnail']))?1:0);
		$post_thumbnail_width=apply_filters('cw_erpv_post_thumbnail_width',(isset($instance['post_thumbnail_width'])&&($instance['post_thumbnail_width']))?(int)$instance['post_thumbnail_width']:'50');
		$post_thumbnail_height=apply_filters('cw_erpv_post_thumbnail_height',(isset($instance['post_thumbnail_height'])&&($instance['post_thumbnail_height']))?(int)$instance['post_thumbnail_height']:'50');
		$show_post_author=apply_filters('cw_erpv_show_post_author',(isset($instance['show_post_author'])&&($instance['show_post_author']))?1:0);
		$show_post_excerpt=apply_filters('cw_erpv_show_post_excerpt',(isset($instance['show_post_excerpt'])&&($instance['show_post_excerpt']))?1:0);
		$post_excerpt_size=apply_filters('cw_erpv_post_excerpt_size',(isset($instance['post_excerpt_size'])&&($instance['post_excerpt_size']))?$instance['post_excerpt_size']:'10');
		$post_excerpt_link=apply_filters('cw_erpv_post_excerpt_link',(isset($instance['post_excerpt_link'])&&($instance['post_excerpt_link']))?$instance['post_excerpt_link']:'more>>');
		$show_post_comments_count=apply_filters('cw_erpv_show_post_comments_count',(isset($instance['show_post_comments_count'])&&($instance['show_post_comments_count']))?1:0);
		$show_post_tags=apply_filters('cw_erpv_show_post_tags',(isset($instance['show_post_tags'])&&($instance['show_post_tags']))?1:0);
		$post_layout=apply_filters('cw_erpv_post_layout',(isset($instance['post_layout'])&&($instance['post_layout']))?$instance['post_layout']:"[TITLE] \n[DATE] [AUTHOR] \n[EXCERPT] \n[COMMENT-COUNT] \n[TAGS]");		

		include( plugin_dir_path( __FILE__ ) . '/views/widget.php' );

		echo $after_widget;

	} // end widget

	/**
	 * Processes the widget's options to be saved.
	 *
	 * @param	array	new_instance	The previous instance of values before the update.
	 * @param	array	old_instance	The new instance of values to be generated via the update.
	 */
	public function update( $new_instance, $old_instance ) {

		$new_instance['post_layout']=(isset($new_instance['post_layout'])&&!empty($new_instance['post_layout']))?$new_instance['post_layout']:"[TITLE] \n[DATE] [AUTHOR] \n[EXCERPT] \n[COMMENT-COUNT] \n[TAGS]";
		
		return $new_instance;

	} // end widget

	/**
	 * Generates the administration form for the widget.
	 *
	 * @param	array	instance	The array of keys and values for the widget.
	 */
	public function form( $instance ) {

    	
		$instance = wp_parse_args(
			(array) $instance
		);

		
		$title=isset($instance['title'])?$instance['title']:'';
		$category=isset($instance['category'])?$instance['category']:'';
		$order_field=isset($instance['order_field'])?$instance['order_field']:'';
		$order_type=isset($instance['order_type'])?$instance['order_type']:'';
		$post_count=isset($instance['post_count'])?(int)$instance['post_count']:'4';
		$post_offset=isset($instance['post_offset'])?(int)$instance['post_offset']:'0';
		$show_post_title=isset($instance['show_post_title'])?1:0;
		$show_post_date=isset($instance['show_post_date'])?1:0;
		$post_date_format=isset($instance['post_date_format'])?$instance['post_date_format']:'F j, Y g:i a';
		$show_post_thumbnail=isset($instance['show_post_thumbnail'])?1:0;
		$post_thumbnail_width=isset($instance['post_thumbnail_width'])?(int)$instance['post_thumbnail_width']:'50';
		$post_thumbnail_height=isset($instance['post_thumbnail_height'])?(int)$instance['post_thumbnail_height']:'50';
		$show_post_author=isset($instance['show_post_author'])?1:0;
		$show_post_excerpt=isset($instance['show_post_excerpt'])?1:0;
		$post_excerpt_size=isset($instance['post_excerpt_size'])?$instance['post_excerpt_size']:'10';
		$post_excerpt_link=isset($instance['post_excerpt_link'])?$instance['post_excerpt_link']:'more>>';
		$show_post_comments_count=isset($instance['show_post_comments_count'])?1:0;
		$show_post_tags=isset($instance['show_post_tags'])?1:0;
		$post_layout=isset($instance['post_layout'])?$instance['post_layout']:"[TITLE] \n[DATE] [AUTHOR] \n[EXCERPT] \n[COMMENT-COUNT] \n[TAGS]";
		

		// Display the admin form
		include( plugin_dir_path(__FILE__) . '/views/admin.php' );

	} // end form

	/*--------------------------------------------------*/
	/* Public Functions
	/*--------------------------------------------------*/

	/**
	 * Loads the Widget's text domain for localization and translation.
	 */
	public function widget_textdomain() {

		load_plugin_textdomain( 'cw-erpv-locale', false, plugin_dir_path( __FILE__ ) . '/lang/' );

	} // end widget_textdomain

	/**
	 * Fired when the plugin is activated.
	 *
	 * @param		boolean	$network_wide	True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog.
	 */
	public function activate( $network_wide ) {
		// TODO define activation functionality here
	} // end activate

	/**
	 * Fired when the plugin is deactivated.
	 *
	 * @param	boolean	$network_wide	True if WPMU superadmin uses "Network Activate" action, false if WPMU is disabled or plugin is activated on an individual blog
	 */
	public function deactivate( $network_wide ) {
		// TODO define deactivation functionality here
	} // end deactivate

	/**
	 * Registers and enqueues admin-specific styles.
	 */
	public function register_admin_styles() {

		// TODO:	Change 'cw-erpv' to the name of your plugin
		wp_enqueue_style( 'cw-erpv-admin-styles', plugins_url( 'extensive-recent-posts-widget/css/admin.css' ) );

	} // end register_admin_styles

	/**
	 * Registers and enqueues admin-specific JavaScript.
	 */
	public function register_admin_scripts() {

		// TODO:	Change 'cw-erpv' to the name of your plugin
		wp_enqueue_script( 'cw-erpv-admin-script', plugins_url( 'extensive-recent-posts-widget/js/admin.js' ), array('jquery') );

	} // end register_admin_scripts

	/**
	 * Registers and enqueues widget-specific styles.
	 */
	public function register_widget_styles() {

		// TODO:	Change 'cw-erpv' to the name of your plugin
		wp_enqueue_style( 'cw-erpv-widget-styles', plugins_url( 'extensive-recent-posts-widget/css/widget.css' ) );

	} // end register_widget_styles

	/**
	 * Registers and enqueues widget-specific scripts.
	 */
	public function register_widget_scripts() {

		// TODO:	Change 'cw-erpv' to the name of your plugin
		wp_enqueue_script( 'cw-erpv-script', plugins_url( 'extensive-recent-posts-widget/js/widget.js' ), array('jquery') );

	} // end register_widget_scripts

} // end class

add_action( 'widgets_init', create_function( '', 'register_widget("Extensive_Recent_Posts_Widget");' ) );
