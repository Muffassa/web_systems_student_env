<?php 


	class DataBase {

		private static $database_name;
		private static $mysqli;

		public function __construct($database_name = '')
	{
		$hostname_connect = 'localhost';
		$database_conntect = 'webdb';
		$username_connect = 'root';
		$password_connect = 'root';
		$this->database_name = $database_name;

		$this->mysqli = new mysqli(
			$hostname_connect,
			$username_connect,
			$password_connect,
			$database_conntect
			);



		@mysql_query("set_character_set_client='utf8'");
		@mysql_query("set_character_set_results='utf8'");
		@mysql_query("set collation_connection='utf8_unicode_ci'");
	}


	public function add($login='', $email='', $password=''){
		$this->mysqli->query("INSERT INTO $this->database_name (login, email, password) VALUES ('$login', '$email', '$password')");
		var_dump($this); 
	}

	public function is_exist($email= ''){
		$result = $this->mysqli->query("SELECT * FROM $this->database_name WHERE email LIKE '$email' "); 
		$num_rows = mysqli_num_rows($result);
		if($num_rows == false) {
			return false;
		}
		else return true;
	}

	public function info($email){
		$result = $this->mysqli->query("SELECT * FROM Users WHERE email LIKE '$email'");
		$row = $result->fetch_assoc();
		return $row;

	}

	}