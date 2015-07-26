<?php /* Smarty version 3.1.24, created on 2015-07-26 15:37:22
         compiled from "templates/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:161044160855b4feb24d29c8_88594841%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87b8b9c1707f7da3cce61621cff8dac176bd2a7' => 
    array (
      0 => 'templates/reg.tpl',
      1 => 1437925030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161044160855b4feb24d29c8_88594841',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b4feb25c7776_05467472',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b4feb25c7776_05467472')) {
function content_55b4feb25c7776_05467472 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '161044160855b4feb24d29c8_88594841';
?>
<form class="form-horizontal" action ='/reg' method ='post'>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input name = 'login' type="text" class="form-control" id="inputEmail3" placeholder="Login">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name = 'email' type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name = 'password' type="text" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm password</label>
    <div class="col-sm-10">
      <input name = 'confirnation_of_password' type="text" class="form-control" placeholder="Confirm password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign up</button>
    </div>
  </div>
  <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</form><?php }
}
?>