<?php

	require "dist/components/php/constants.php";

	$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
		if(!$connection){
			die("Can't access database". mysql_error());
		}

		$db_select = mysql_select_db(DB_NAME, $connection);
		if(!$db_select){
			die("Can't select Database". mysql_error());
		}
 ?>