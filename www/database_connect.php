<?php	
	function database_connect()
	{
		$hostname_connect = 'localhost';
		$database_conntect = 'webdb';
		$username_connect = 'root';
		$password_connect = 'root';

		$mysqli = new mysqli(
			$hostname_connect,
			$username_connect,
			$password_connect,
			$database_conntect
			);



		@mysql_query("set_character_set_client='utf8'");
		@mysql_query("set_character_set_results='utf8'");
		@mysql_query("set collation_connection='utf8_unicode_ci'");

		return $mysqli;
	}
