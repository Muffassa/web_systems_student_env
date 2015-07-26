<?php 

include_once 'index.php';

 function sign_out()
 	{	
 		session_start();
 		unset($_SESSION);
 		session_destroy();
 		return home();
 	}	

 	Router::get('^\/sign_out', 'sign_out');