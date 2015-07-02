<?php
require_once 'smarty/libs/Smarty.class.php';
require_once 'Router.php';

function home(){
	$smarty = new Smarty(); 

	$smarty->template_dir = 'templates';
	$smarty->compile_dir = 'templates_c';
	$smarty->config_dir = 'configs';
	$smarty->cache_dir = 'cache';

	$title = 'Example title';
	$author = 'Author';
	$text = 'Home Page';
	$smarty->assign('title', $title);
	$smarty->assign('author', $author);
	$smarty->assign('text', $text);

	$smarty->display('template-1.tpl');

}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>