<?php

	//db接続判定用
	function db_judge( $a ){
		if( !$a ){
			header("location: http://localhost/willands_hp/html/contribution_error.html");
			die();
		}
	}

?>