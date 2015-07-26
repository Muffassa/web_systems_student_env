<?php 

include_once 'index.php';

 function sign_out()
 	{	
 		session_destroy();
 		$tpl = new_template();
 		return $tpl->fetch('home.tpl');
 	}	

 	Router::get('^\/sign_out', 'sign_out');