<?php /* Smarty version 3.1.24, created on 2015-07-26 05:48:14
         compiled from "templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:144523249755b4749ec31493_39061761%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f033db12aa85aee245c4d315629696792af06f48' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1437889665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144523249755b4749ec31493_39061761',
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b4749ed070a2_43143961',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b4749ed070a2_43143961')) {
function content_55b4749ed070a2_43143961 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '144523249755b4749ec31493_39061761';
?>
<div class="jumbotron">
  <h1>Hello <?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div><?php }
}
?>