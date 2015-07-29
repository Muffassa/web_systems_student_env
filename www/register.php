<?php

include_once 'Router.php';
include_once 'DataBase.php';

function reg($error = ''){
	$reg = new_template();
	$reg->assign('error', $error);
	return $reg->fetch('reg.tpl');
}

function register_submit(){
	if($_POST['password'] == $_POST['confirmation_of_password']){
		$user = new DataBase('Users');
		$user->add($_POST['login'], $_POST['email'], $_POST['password']);
		return login();


	}
	else{
		$reg = new_template();
		return reg("Пароли не совпадают");
	}
}


Router::post('^\/reg', 'register_submit');
Router::get('^\/reg', 'reg');
?>