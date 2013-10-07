<?php
	require_once('./db_access.php');
	require_once('./function.php');

	$result = mysql_query('SELECT * FROM '.$info_table);
	
	//DB操作判定
	db_judge( $result );
	

	
?>