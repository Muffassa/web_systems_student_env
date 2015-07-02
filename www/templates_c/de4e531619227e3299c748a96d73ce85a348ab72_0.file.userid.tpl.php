<?php /* Smarty version 3.1.24, created on 2015-07-02 11:02:14
         compiled from "templates/userid.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13234669855951a36655171_63563463%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de4e531619227e3299c748a96d73ce85a348ab72' => 
    array (
      0 => 'templates/userid.tpl',
      1 => 1435830786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13234669855951a36655171_63563463',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55951a366d2610_28079712',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55951a366d2610_28079712')) {
function content_55951a366d2610_28079712 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13234669855951a36655171_63563463';
?>
User <?php echo $_smarty_tpl->tpl_vars['id']->value;

}
}
?>