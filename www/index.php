<?php
include_once 'Router.php';



function new_template(){
    $smarty = new Smarty(); 
	$smarty->template_dir = 'templates';
	$smarty->compile_dir = 'templates_c';
	$smarty->config_dir = 'configs';
	$smarty->cache_dir = 'cache';
	return $smarty;
}


function navigation(){

} 


$content = Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
	$smarty = new_template();
	$smarty->assign('content', $content);
	$smarty->display('template-1.tpl');



?>