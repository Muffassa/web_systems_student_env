<?php

function add(){
	echo "Add new user";
}

function user($id, $id2) {
	echo "user $id + $id2";
}



Router::get('^\/user\/add$', 'add');
Router::get('^\/user\/(\d+)\/(\d+)', 'user');
?>