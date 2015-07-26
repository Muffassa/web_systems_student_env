<?php
include_once 'database_connect.php';
	function user_is_exist($email= ''){
		$mysqli = database_connect();
		$result = $mysqli->query("SELECT * FROM `Users` WHERE `email` LIKE '$email' "); 
		$num_rows = mysql_num_rows($result);
		if($num_rows == false) {
			return false;
		}
		else return true;
	}