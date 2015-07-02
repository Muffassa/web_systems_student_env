<?php /* Smarty version 3.1.24, created on 2015-07-02 07:36:21
         compiled from "/var/www/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8144410905594e9f5a5ad30_26540401%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84116f97f1af8711b6816e12bc15340aac0bd920' => 
    array (
      0 => '/var/www/template-1.tpl',
      1 => 1435822575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8144410905594e9f5a5ad30_26540401',
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5594e9f5b39949_51864371',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5594e9f5b39949_51864371')) {
function content_5594e9f5b39949_51864371 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8144410905594e9f5a5ad30_26540401';
?>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>
		<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

		<div><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>

	</body>
</html><?php }
}
?>