<?php
	require_once('./db_access.php');
	require_once('./function.php');
	
	$comment = $_POST['comment'];
	$link = $_POST['link_url'];

	$in_query = 'INSERT INTO '.$info_table.'(comment,link_url) VALUES("'.$comment.'","'.$link.'")';
	$insert = mysql_query( $in_query );
	
	//DB操作判定
	db_judge( $insert );

	

	
?>