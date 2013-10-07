<?php
	$db_connect = mysql_connect ('localhost', 'root', 'willands6');

	if( !$db_connect ){
		echo 'db接続できませんでした';
		die();
	}else{
		echo 'db接続OK';
	}
	
	mysql_select_db('willands_hp');
	
	$comment = "変数テスト";
	$link = "./aaa.html";

	$test_sql = 'INSERT INTO infomation (comment,link_url)VALUES("'.$comment.'","'.$link.'")';

	mysql_query($test_sql);

	$result = mysql_query('SELECT * FROM infomation');
	
	while($table_record = mysql_fetch_assoc($result)){
		echo $table_record["info_ID"]."<br>\n";
		echo $table_record["comment"]."<br>\n";
		echo $table_record["update_date"]."<br>\n";
		echo $table_record["link_url"]."<br>\n";
	}

	unset($test_sql);
	unset($table_record);
	
?>