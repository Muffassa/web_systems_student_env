<?php /* Smarty version 3.1.24, created on 2015-07-03 08:55:17
         compiled from "/var/www/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:91062509455964df5dfc224_94577539%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '205d437c139c86d5cb99b2d360ca1570d46d903c' => 
    array (
      0 => '/var/www/login.tpl',
      1 => 1435913618,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91062509455964df5dfc224_94577539',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55964df5ea9793_62491776',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55964df5ea9793_62491776')) {
function content_55964df5ea9793_62491776 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '91062509455964df5dfc224_94577539';
echo $_smarty_tpl->tpl_vars['error']->value;?>

<form class="stylized pure" action ="/login" method = "post">
    <fieldset>
        <input class="text-center" type="email" placeholder="Your Email!" name = "email">
        <input class="text-center" type="password" placeholder="Your Password!" name = "password">
        <input type="submit" value ="Send"/>
    </fieldset>
</form><?php }
}
?>