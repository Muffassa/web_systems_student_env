<?php

function add(){
	echo "Add new user";
}

function user($id) {
	echo "user $id";
}



Router::get('^\/user\/add$', 'add');
Router::get('^\/user\/(\d+)', 'user');
?>