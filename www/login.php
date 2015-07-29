<?php
	include_once 'Router.php';
	include_once 'index.php';
	include_once 'DataBase.php';

	function login($error = ''){
		$login = new_template();
		$login->assign('error', $error);
		return $login->fetch('login.tpl');
	}

	function login_submit()
	{
		$user = new DataBase('Users');
		if(!$user->is_exist($_POST['email'])){
			return login('Пользователя с таким email нет');
		}
		
		$rows = $user->info($_POST['email']);

		if($_POST['password'] != $rows['password'])
		{
			return login('Неверно введен пароль');
		}
		else {
			$_SESSION['user_is_entered'] = true;
			$_SESSION['login'] = $rows['login'];
			return home();
		}


	
	}

	Router::get('^\/login', 'login');
	Router::post('^\/login', 'login_submit');