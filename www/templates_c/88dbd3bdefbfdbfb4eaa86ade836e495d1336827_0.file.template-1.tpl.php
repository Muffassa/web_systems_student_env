<?php /* Smarty version 3.1.24, created on 2015-07-02 11:05:04
         compiled from "templates/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:111247555055951ae0e8e0d3_09146594%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88dbd3bdefbfdbfb4eaa86ade836e495d1336827' => 
    array (
      0 => 'templates/template-1.tpl',
      1 => 1435835102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111247555055951ae0e8e0d3_09146594',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55951ae0f001a2_93208639',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55951ae0f001a2_93208639')) {
function content_55951ae0f001a2_93208639 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '111247555055951ae0e8e0d3_09146594';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" type="text/css" href="/thao.min.css">
    <link rel="stylesheet" type="text/css" href="/thao.css">
    <meta charset= "utf-8">
</head>
<body>
   	
       	
   		
		<div class= "span1" class = "column1-5"><ul class="stylized center pills">
    <li class="active first"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li class="parent last"><a href="#">Social Networks<i class="sub"></i></a>
        <ul class="submenu">
            <li class="active"><a href="#">Google+</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
        </ul>
    </li>
</ul>
</div>
        <div class = "span2" class = "column1-2" style ="float: left">
            <div class="nav-wrapper">
    <input type="checkbox" id="nav-checkbox" class="nav-checkbox">
    <div class="nav collapse rounded fixed-top">
        <ul class="center stylized pills transparent" id="mainnav">
            <li class="capitalize first"><a href="#">Thao Framework</a></li>
            <li class="capitalize"><a href="#">Get started</a></li>
            <li class="capitalize active"><a href="#">Components</a></li>
        </ul>
        <label for="nav-checkbox" class="nav-handle"></label>
    </div>
</div></div>
		<div class= "span2" class = "column3-5"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
		<div class = "span3" class = "column1-5" >Footer</div>
</body>
</html><?php }
}
?>