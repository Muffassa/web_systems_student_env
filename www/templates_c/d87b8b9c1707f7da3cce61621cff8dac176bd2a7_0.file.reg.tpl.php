<?php /* Smarty version 3.1.24, created on 2015-07-03 08:38:12
         compiled from "templates/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1550420739559649f4cab552_05342901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87b8b9c1707f7da3cce61621cff8dac176bd2a7' => 
    array (
      0 => 'templates/reg.tpl',
      1 => 1435911684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1550420739559649f4cab552_05342901',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_559649f4d3a5b5_93494389',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559649f4d3a5b5_93494389')) {
function content_559649f4d3a5b5_93494389 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1550420739559649f4cab552_05342901';
?>
<form class="stylized stacked" action ="/reg" method = "post">
    <fieldset>
        <input class="text-center" type="email" placeholder="Your Email!" name="email">
        <input class="text-center" type="password" placeholder="Your Password!" name = "password">
        <input class="text-center" type="password" placeholder="Confirm your Password!" name = "submit password">
        <input type="submit" value ="Send"/>
    </fieldset>
</form><?php }
}
?>