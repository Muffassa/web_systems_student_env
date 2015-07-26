<?php
	include_once 'Router.php';
	include_once 'index.php';

	function login($error){
		$login = new_template();
		$login->assign('error', $error);
		return $login->fetch('login.tpl');
	}

	function login_submit(){
	if (file_exists ("users/".$_POST['email'].".txt"))
			{
				$info = file_get_contents("users/".$_POST['email'].".txt");
				$_CURRENT_USER = unserialize($info);
				if($_CURRENT_USER['password'] == $_POST['password'])
				{
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['user_is_entered'] = true;
					return home();
				}
				else 
				{
					$error ='Неверно введен логин или пароль';
					return login($error);
				}
			}
		else{
					return login();
			}  
		}

	Router::get('^\/login', 'login');
	Router::post('^\/login', 'login_submit');