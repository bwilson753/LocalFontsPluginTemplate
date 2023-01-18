<?php
/**
 * Plugin Name:       Add Local Fonts
 * Plugin URI:        https://bigbobnetwork.com/
 * Description:       Loads fonts locally.
 * Version:           0.1
 * Requires at least: 5.9
 * Requires PHP:      7.4
 * Author:            Bob Wilson
 * Author URI:        https://bigbobnetwork.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

function big_bob_add_font_scripts() {
    wp_enqueue_style( 'bb-add-fonts', plugin_dir_url( __FILE__ ) . '/bb-add-fonts.css?v=0.1', array() );
}
add_action( 'wp_enqueue_scripts', 'big_bob_add_font_scripts' );