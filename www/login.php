<?php
	include_once 'Router.php';
	include_once 'index.php';

	function login(){
		$login = new_template();
		return $login->fetch('login.tpl');
	}

	function login_submit(){
		if (file_exists ("users/".$_POST['email'].".txt")){
			$info = file_get_contents("users/".$_POST['email'].".txt");
			$_CURRENT_USER = unserialize($info);
			if($_CURRENT_USER['password'] == $_POST['password']){
				session_start();
				$_SESSION['email'] = $_POST['email'];
				return home();
			}
			else {
				return login();
			}
		}
		else{
				return login();
			}  
	}

	Router::get('^\/login', 'login');
	Router::post('^\/login', 'login_submit');