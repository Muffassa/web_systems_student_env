<?php /* Smarty version 3.1.24, created on 2015-07-02 08:10:47
         compiled from "/var/www/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4899353275594f207c15f04_82829509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84116f97f1af8711b6816e12bc15340aac0bd920' => 
    array (
      0 => '/var/www/template-1.tpl',
      1 => 1435824644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4899353275594f207c15f04_82829509',
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5594f207cc3348_89266084',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5594f207cc3348_89266084')) {
function content_5594f207cc3348_89266084 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4899353275594f207c15f04_82829509';
?>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset= "utf-8">
	</head>
	<body>
		<div id = "head">
			<p class="paragraph">Параграф 1</p>
		</div>	
		<div id = "navigation"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
		<div id = "content">Content</div>
		<div id = "footer">Footer</div>

	</body>
</html><?php }
}
?>