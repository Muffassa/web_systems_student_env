<?php

function add(){
	$add = new_template();
	return $add->fetch('add.tpl');
}

function user($id) {
	$user = new_template();
	$user->assign('id', $id);
	return $user->fetch('userid.tpl');
}



Router::get('^\/user\/add$', 'add');
Router::get('^\/user\/(\d+)', 'user');
?>