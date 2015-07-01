<?php

function home(){
	echo "This is home!";
}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>