<?php

function home(){
	echo "ETO HOME!";
}


Router::get('^\/$', 'home');
Router::get('^\/home$', 'home');
?>