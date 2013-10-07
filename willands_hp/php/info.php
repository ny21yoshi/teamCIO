<?php
	require_once('./db_output.php');

	echo '<?xml version="1.0" encoding="UTF-8"?>'."\n";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>HP新着情報出力画面（テスト）</title>
	</head>

	<body>
		<h1>新着情報管理画面</h1>
		<dl>
			<?php
				while($table_record = mysql_fetch_assoc($result)){
					echo '<dt>'.$table_record['update_date']."</dt>\n";
					if ($table_record['link_url'] == NULL){
						echo '<dd>'.$table_record['comment']."</dd>\n";
						
					}else{
						echo '<dd><a href="'.$table_record['link_url'].'">'.$table_record['comment']."</a></dd>\n";
					}
				}
			?>
		</dl>
	</body>
</html>