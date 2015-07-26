<?php
require_once 'smarty/libs/Smarty.class.php';
require_once 'Router.php';


function home(){
	$home = new_template();
	if($_SESSION['user_is_entered'])
		{
			$home->assign('email', $_SESSION['email']);
		}
	return $home->fetch('home.tpl');

}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>