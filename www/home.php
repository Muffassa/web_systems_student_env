<?php
require_once 'smarty/libs/Smarty.class.php';
require_once 'Router.php';


function home(){
	$home = new_template();
	return $home->fetch('home.tpl');

}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>