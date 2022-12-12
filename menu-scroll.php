<?php
/**
 * Plugin Name: Menu Scroll
 * Description: This plugin support scroll of contact
 * Version: 1.0
 * Author: Plife
 * Author URI: https://plife.se
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt */


function test() {
    echo "im in";
}

add_action("test_hook","test");

function menu_scroll_enqueue_script() {
    wp_enqueue_script( 'my_menu_scroll', plugin_dir_url( __FILE__ ) . 'assets/menu-scroll.js',array('jquery'),1.1,true );
}
add_action('wp_enqueue_scripts', 'menu_scroll_enqueue_script');
