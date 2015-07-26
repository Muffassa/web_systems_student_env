<?php /* Smarty version 3.1.24, created on 2015-07-26 06:31:46
         compiled from "templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:115217686755b47ed2535348_49734298%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f74319cbfb368fe78251c3d685072654b320ef' => 
    array (
      0 => 'templates/nav.tpl',
      1 => 1437892274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115217686755b47ed2535348_49734298',
  'variables' => 
  array (
    'nav' => 0,
    'elements' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b47ed264f9a7_58028880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b47ed264f9a7_58028880')) {
function content_55b47ed264f9a7_58028880 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '115217686755b47ed2535348_49734298';
$_from = $_smarty_tpl->tpl_vars['nav']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['elements'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['elements']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elements']->value) {
$_smarty_tpl->tpl_vars['elements']->_loop = true;
$foreach_elements_Sav = $_smarty_tpl->tpl_vars['elements'];
?>
		<li class=""><a href='<?php echo $_smarty_tpl->tpl_vars['elements']->value['href'];?>
'><?php echo $_smarty_tpl->tpl_vars['elements']->value['link'];?>
</a></li>
<?php
$_smarty_tpl->tpl_vars['elements'] = $foreach_elements_Sav;
}
}
}
?>