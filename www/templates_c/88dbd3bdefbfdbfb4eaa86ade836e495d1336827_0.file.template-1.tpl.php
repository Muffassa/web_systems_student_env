<?php /* Smarty version 3.1.24, created on 2015-07-03 07:58:46
         compiled from "templates/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1236212419559640b6bdfca4_40461344%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88dbd3bdefbfdbfb4eaa86ade836e495d1336827' => 
    array (
      0 => 'templates/template-1.tpl',
      1 => 1435910324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236212419559640b6bdfca4_40461344',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_559640b6c60444_05004660',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559640b6c60444_05004660')) {
function content_559640b6c60444_05004660 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1236212419559640b6bdfca4_40461344';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="/thao.min.css">
    <link rel="stylesheet" type="text/css" href="/thao.css">
    <link rel="stylesheet" type="text/css" href="/style.css">
    <meta charset= "utf-8">
</head>
<body>
    <div id="page">
        <div class="header">
            <h1>Header</h1>
        </div>

        <div class="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <div class="navigation">
            <a class="btn-white flat" href = "/">Home</a>
            <a class="btn-white flat" href = "/login">Вход</a>
            <a class="btn-white flat" href = "/reg">Регистрация</a>
        </div>
        <div class="footer">Footer</div>
    </div>
</body>
</html><?php }
}
?>