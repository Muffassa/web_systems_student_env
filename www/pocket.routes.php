<?php

function add(){
	$add = new_template();
	return $add->fetch('add.tpl');
}

function user($id) {
	$userid = new_template();
	$userid->assign('id', $id);
	return $userid->fetch('userid.tpl');
}



Router::get('^\/user\/add$', 'add');
Router::get('^\/user\/(\d+)', 'user');
?>