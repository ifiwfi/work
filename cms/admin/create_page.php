<?php
	if(isset($_POST['page_name'])){
		$con = mysql_connect('localhost', 'root', '');
		if(!$con)
			die(mysql_error());
		mysql_select_db('cms', $con);
		$result = mysql_query('INSERT INTO pages ( page_name, page_contents ) VALUES ("'.$_POST["page_name"].'", "'.$_POST["page_contents"].'") ', $con);
		if($result)
			echo 'Contents added';
		else
			echo 'Failed to add';
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CMS</title>
	</head>

	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div>Enter page name:</div> <div><input type="text" name="page_name"></div>
			<div>Enter page contents:</div> <div><textarea name="page_contents" style="width: 165px;height: 100px;"></textarea></div>
			<div><input type="submit" value="Submit"></div>
		</form>
	</body>
</html>