<?php	
include_once 'database_connect.php';
	function add_db_user($login='', $email='', $password=''){
		$mysqli = database_connect();
		$mysqli->query("INSERT INTO Users (login, email, password) VALUES ('$login', '$email', '$password')");
	}
