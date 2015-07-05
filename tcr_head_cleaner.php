<?php
	/*
	Plugin Name: TCR head cleaner
	Description: Remove a bunch of junk from the wp header
	Version: 1.0.0
	Plugin URI: http://thecellarroom.uk
	Author: The Cellar Room Limited
	Author URI: http://www.thecellarroom.uk
	Copyright (c) 2013 The Cellar Room Limited
	*/

	defined( 'ABSPATH' ) or die();

	/*************************************************************************/

	if ( ! class_exists( 'tcr_head_cleaner' ) ) :

		class tcr_head_cleaner {

			function __construct() {

				remove_action('init' ,'wp_admin_bar_init');
				remove_action('wp_head' ,'feed_links',2);
				remove_action('wp_head' ,'feed_links_extra',3);
				remove_action('wp_head' ,'rsd_link');
				remove_action('wp_head' ,'wlwmanifest_link');
				remove_action('wp_head' ,'index_rel_link');
				remove_action('wp_head' ,'parent_post_rel_link',10,0);
				remove_action('wp_head' ,'start_post_rel_link',10,0);
				remove_action('wp_head' ,'adjacent_posts_rel_link_wp_head',10,0);
				remove_action('wp_head' ,'wp_generator');
			}




		}
		new tcr_head_cleaner;

	endif;