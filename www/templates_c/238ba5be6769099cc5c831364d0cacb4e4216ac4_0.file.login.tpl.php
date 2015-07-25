<?php /* Smarty version 3.1.24, created on 2015-07-25 13:30:17
         compiled from "templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52246256955b38f695640b0_44542102%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238ba5be6769099cc5c831364d0cacb4e4216ac4' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1437831001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52246256955b38f695640b0_44542102',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b38f695b0166_52756391',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b38f695b0166_52756391')) {
function content_55b38f695b0166_52756391 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '52246256955b38f695640b0_44542102';
?>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form><?php }
}
?>