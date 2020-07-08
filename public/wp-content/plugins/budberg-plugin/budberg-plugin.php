<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              manisha_plugin
 * @since             1.0.0
 * @package           Budberg_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       budberg
 * Plugin URI:        budberg-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            manisha
 * Author URI:        manisha_plugin
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       budberg-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BUDBERG_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-budberg-plugin-activator.php
 */
function activate_budberg_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-budberg-plugin-activator.php';
	Budberg_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-budberg-plugin-deactivator.php
 */
function deactivate_budberg_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-budberg-plugin-deactivator.php';
	Budberg_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_budberg_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_budberg_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-budberg-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_budberg_plugin() {

	$plugin = new Budberg_Plugin();
	$plugin->run();

}
run_budberg_plugin();

function wporg_custom_post_type() {
    register_post_type('Podcast_post',
        array(
            'labels'      => array(
                'name'          => __('Podcast_post', 'textdomain'),
                'singular_name' => __('Podcast', 'textdomain'),
            ),
                'public'      => true,
				'has_archive' => true,
				'show_in_nav_menus' => true,
				'taxonomies' => array( 'category', 'post_tag' ),
				'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        )
    );
}
add_action('init', 'wporg_custom_post_type');


/* final */


function register_podcast_post_type() {
    $args = array(
        'labels'    => array(
            'name'               => __( 'Podcasts', 'mt-destination' ),
            'singular_name'      => __( 'Podcast', 'mt-destination' ),
            'menu_name'          => __( 'Podcasts', 'mt-destination' ),
            'name_admin_bar'     => __( 'Destination', 'mt-destination' ),
            'add_new'            => __( 'Add New', 'mt-destination' ),
            'add_new_item'       => __( 'Add New Podcast', 'mt-destination' ),
            'new_item'           => __( 'New Podcast', 'mt-destination' ),
            'edit_item'          => __( 'Edit Podcast', 'mt-destination' ),
            'view_item'          => __( 'View Podcast', 'mt-destination' ),
            'all_items'          => __( 'All Podcasts', 'mt-destination' ),
            'search_items'       => __( 'Search Podcasts', 'mt-destination' ),
            'parent_item_colon'  => __( 'Parent Podcasts:', 'mt-destination' ),
            'not_found'          => __( 'No Podcasts found.', 'mt-destination' ),
            'not_found_in_trash' => __( 'No Podcasts found in Trash.', 'mt-destination' )
        ),
        'query_var'              => 'mt_destinations',
        'rewrite'                => array(
            'slug'               => 'Podcasts/%destination_category%',
            'with_front'         => false
        ),
        'public'                 => true,  // If you don't want it to make public, make it false
        'publicly_queryable'     => true,  // you should be able to query it
        'show_ui'                => true,  // you should be able to edit it in wp-admin
        'has_archive'            => true,    //true,
        'menu_position'          => 51,
        'supports'               => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );
    flush_rewrite_rules();

    register_post_type('mt_destinations', $args);
}
add_action( 'init', 'register_podcast_post_type' );

/* register taxonomy */

function wporg_register_taxonomy_podcast()
{
    $labels = [
        'name'              => _x('Podcast_category', 'taxonomy general name'),
'singular_name'     => _x('Podcast_category', 'taxonomy singular name'),
'search_items'      => __('Search Podcast'),
'all_items'         => __('All Podcast'),
'parent_item'       => __('Parent Podcast'),
'parent_item_colon' => __('Parent Podcast:'),
'edit_item'         => __('Edit Podcast'),
'update_item'       => __('Update Podcast'),
'add_new_item'      => __('Add New Podcast'),
'new_item_name'     => __('New Podcast Name'),
'menu_name'         => __('Podcast'),
];
$args = [
'hierarchical'      => true, // make it hierarchical (like categories)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true,
'rewrite'           => ['slug' => 'course'],
];
register_taxonomy('course', 'mt_destinations', $args);
}
add_action('init', 'wporg_register_taxonomy_podcast');
