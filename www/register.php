<?php

include_once 'Router.php';

function reg(){
	$reg = new_template();
	$reg->assign('error', $_SESSION['error']);
	return $reg->fetch('reg.tpl');
}

function register_submit(){
	if($_POST['password'] == $_POST['submit_password']){
		$information = serialize($_POST);
		file_put_contents("users/".$_POST['email'].".txt", $information ,FILE_APPEND | LOCK_EX );
		return home();


	}
	else{
		return reg();
	}
}


Router::post('^\/reg', 'register_submit');
Router::get('^\/reg', 'reg');
?>