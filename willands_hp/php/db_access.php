<?php
	require_once('./db_pass.php');
	require_once('./function.php');


	//DB操作関連変数
	$db_connect = mysql_connect( $host, $user, $pass );
	$db_select = mysql_select_db( $db );
	
	//DB操作判定
	db_judge( $db_connect );
	db_judge( $db_select );
	
?>