<?php /* Smarty version 3.1.24, created on 2015-07-25 08:38:21
         compiled from "templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:119497854855b34afd72d7e5_40083247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f033db12aa85aee245c4d315629696792af06f48' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1437812457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119497854855b34afd72d7e5_40083247',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b34afd851404_60483210',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b34afd851404_60483210')) {
function content_55b34afd851404_60483210 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '119497854855b34afd72d7e5_40083247';
?>
Hello <?php echo $_smarty_tpl->tpl_vars['email']->value;

}
}
?>