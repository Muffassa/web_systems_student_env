<?php

include_once 'Router.php';

function reg($error){
	$reg = new_template();
	$reg->assign('error', $error);
	return $reg->fetch('reg.tpl');
}

function register_submit(){
	if($_POST['password'] == $_POST['confirnation_of_password']){
		$information = serialize($_POST);
		file_put_contents("users/".$_POST['email'].".txt", $information ,FILE_APPEND | LOCK_EX );
		return home();


	}
	else{
		$reg = new_template();
		$error = "Пароли не совпадают";
		return reg($error);
	}
}


Router::post('^\/reg', 'register_submit');
Router::get('^\/reg', 'reg');
?>