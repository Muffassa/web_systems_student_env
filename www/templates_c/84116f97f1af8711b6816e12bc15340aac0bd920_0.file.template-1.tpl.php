<?php /* Smarty version 3.1.24, created on 2015-07-02 09:36:42
         compiled from "/var/www/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5947596105595062a9c5e86_09629796%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84116f97f1af8711b6816e12bc15340aac0bd920' => 
    array (
      0 => '/var/www/template-1.tpl',
      1 => 1435829606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5947596105595062a9c5e86_09629796',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5595062a9fb625_82759323',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5595062a9fb625_82759323')) {
function content_5595062a9fb625_82759323 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5947596105595062a9c5e86_09629796';
?>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset= "utf-8">
	</head>
	<body>
		<div id = "head">Head</div>	
		<div id = "navigation">Navigation</div>
		<div id = "content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
		<div id = "footer">Footer</div>

	</body>
</html><?php }
}
?>