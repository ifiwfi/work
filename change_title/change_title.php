<?php
/*
Plugin Name: Change Post Title 
Description: With this plugin, you can change the titles of the post
Author: Irfan Ahmed
Email: irfan.ahmed5123@yahoo.com
Version: 1.0
*/

add_filter('the_title', 'add_text_to_post_title');

function add_text_to_post_title($title){
	return $title. ' "Added when rendered"';
}

?>