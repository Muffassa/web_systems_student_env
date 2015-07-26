<?php
	include_once 'Router.php';
	include_once 'index.php';
	include_once 'database_connect.php';
	include_once 'user_is_exist.php';

	function login($error = ''){
		$login = new_template();
		$login->assign('error', $error);
		return $login->fetch('login.tpl');
	}

	function login_submit()
	{
		$mysqli = database_connect();
		if(!user_is_exist($_POST['email'])){
			return login('Пользователя с таким email нет');
		}
		$current_user_email = $_POST['email'];

		$result = $mysqli->query("SELECT * FROM Users WHERE email LIKE '$current_user_email'");
		$rows = $resut->fetch_assoc();

		if($_POST['password'] != $rows['password'])
		{
			return login('неверно введен пароль');
		}
		else {
			$_SESSION['user_is_entered'] = true;
			$_SESSION['login'] = $rows['login'];
			return home();
		}


	
	}

	Router::get('^\/login', 'login');
	Router::post('^\/login', 'login_submit');