<?php
include_once 'Router.php';
include_once 'navigation.php';


session_start();

function new_template(){
    $smarty = new Smarty(); 
	$smarty->template_dir = 'templates';
	$smarty->compile_dir = 'templates_c';
	$smarty->config_dir = 'configs';
	$smarty->cache_dir = 'cache';
	return $smarty;
}


$content = Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
	$smarty = new_template();
	$nav = nav();
	$smarty->assign('nav',$nav);
	$smarty->assign('content', $content);
	$smarty->display('main.tpl');



?>