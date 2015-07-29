<?php /* Smarty version 3.1.24, created on 2015-07-26 16:52:03
         compiled from "templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110730258455b51033478205_31518994%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238ba5be6769099cc5c831364d0cacb4e4216ac4' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1437928671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110730258455b51033478205_31518994',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b51033522e52_75575788',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b51033522e52_75575788')) {
function content_55b51033522e52_75575788 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110730258455b51033478205_31518994';
?>

<form action = '/login' method='post' class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input  name = 'email' type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name = 'password' type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
  <p class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</form><?php }
}
?>