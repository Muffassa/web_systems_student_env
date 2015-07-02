<?php /* Smarty version 3.1.24, created on 2015-07-02 10:44:46
         compiled from "templates/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:419015275595161eb17b72_98168568%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87b8b9c1707f7da3cce61621cff8dac176bd2a7' => 
    array (
      0 => 'templates/reg.tpl',
      1 => 1435833876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '419015275595161eb17b72_98168568',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5595161eb73d16_69941718',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5595161eb73d16_69941718')) {
function content_5595161eb73d16_69941718 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '419015275595161eb17b72_98168568';
?>
<form class="stylized stacked">
    <fieldset>
        <input class="text-center" type="email" placeholder="Your Email!">
        <input class="text-center" type="password" placeholder="Your Password!">
        <button class="btn-white flat" type="button">Send!</button>
    </fieldset>
</form><?php }
}
?>