<?php

function reg(){
	$reg = new_template();
	return $reg->fetch('reg.tpl');
}

Router::get('^\/reg$', 'reg');
?>