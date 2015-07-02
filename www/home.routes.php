<?php
require_once 'smarty/libs/Smarty.class.php';
require_once 'Router.php';

function home(){
	$smarty = new_template();
	$title = 'Заголовок';
	$author = 'Автор'
	$smarty->assign()
	return  "Home page";
}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>