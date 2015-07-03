<?php /* Smarty version 3.1.24, created on 2015-07-03 09:06:16
         compiled from "templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:66188291355965088aa16e4_95706119%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f033db12aa85aee245c4d315629696792af06f48' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1435914221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66188291355965088aa16e4_95706119',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55965088b4cd77_55516454',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55965088b4cd77_55516454')) {
function content_55965088b4cd77_55516454 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '66188291355965088aa16e4_95706119';
?>
Hello <?php echo $_smarty_tpl->tpl_vars['email']->value;

}
}
?>