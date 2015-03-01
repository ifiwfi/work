<?php
/*
Plugin Name: Notify 
Description: With this plugin, you can notify a group of users about the publishing of a new post
Author: Irfan Ahmed
Email: irfan.ahmed5123@yahoo.com
Version: 1.0
*/

add_action('publish_post', 'notify');

function notify(){

	$subscribers_list = get_subscribers_list();

	foreach($subscribers_list as $subscriber){
		
		// Just for the sake of demo. That the things are really happening behind the scene.
		// You should remove or comment this code snippet and uncomment the wp_mail function to send mails.
		echo $subscriber->email_address;
		echo '<br><br>';
		echo get_message();
		echo '<br><br>';

		//wp_mail( $subscriber->email_address, 'A new post published', get_message() );
	}
	die;
}

function get_subscribers_list(){
			
	global $wpdb;
	$table_name = $wpdb->prefix.'subscribers_list';
	return $wpdb->get_results('SELECT email_address FROM '.$table_name.' ');
}

function get_message(){
	
	global $post;
	//print_r($post);die;
	$message_header = 'Hi dear user, checkout this newly published post </br>';
	$message_body = get_post_permalink($post->ID);
	$message_footer = 'Thank you </br>';
	
	$final_message = $message_header.$message_body.$message_footer;
	return $final_message;
}
?>