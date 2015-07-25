<?php /* Smarty version 3.1.24, created on 2015-07-25 08:39:52
         compiled from "templates/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:39540494855b34b58bb3c80_13313075%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87b8b9c1707f7da3cce61621cff8dac176bd2a7' => 
    array (
      0 => 'templates/reg.tpl',
      1 => 1437812457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39540494855b34b58bb3c80_13313075',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b34b58c81964_15605724',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b34b58c81964_15605724')) {
function content_55b34b58c81964_15605724 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '39540494855b34b58bb3c80_13313075';
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