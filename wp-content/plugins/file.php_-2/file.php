<?php
/**
* Plugin Name: Very First Plugin
* Plugin URI: http://ojarandkarl.ikt.khk.ee/wordpress/
* Description: This is my first WordPress Plugin
* Author: Karl Ojarand
* Author URI: http://ojarandkarl.ikt.khk.ee/wordpress/
* Version: 1.0
**/

function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );