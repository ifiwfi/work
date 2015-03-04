<?php
	include('header.php');

	function get_page_contents($page_name){
		$con = mysql_connect('localhost', 'root', '');
		if(!$con)
			die(mysql_error());
		mysql_select_db('cms', $con);
		$result = mysql_query('SELECT page_contents FROM pages WHERE page_name = "'.$page_name.'"', $con);
		if( $result = mysql_fetch_array($result) )
			return $result['page_contents'];
		else
			return 'Oops, the page can\'t be found';
	}
	
	$uri = explode('/', $_SERVER['REQUEST_URI']);
	$page_name = $uri[2];
	echo get_page_contents($page_name);

	include('footer.php');
?>