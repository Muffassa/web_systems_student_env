<?php /* Smarty version 3.1.24, created on 2015-07-26 16:10:44
         compiled from "templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:182860202755b50684124cf0_95330491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f033db12aa85aee245c4d315629696792af06f48' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1437926990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182860202755b50684124cf0_95330491',
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b506841f2878_01839384',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b506841f2878_01839384')) {
function content_55b506841f2878_01839384 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '182860202755b50684124cf0_95330491';
?>
<div class="jumbotron">
  <h1>Hello <?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</h1>
  <p>...</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div><?php }
}
?>