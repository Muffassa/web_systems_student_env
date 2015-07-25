<?php /* Smarty version 3.1.24, created on 2015-07-25 13:34:52
         compiled from "templates/reg.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:84170603855b3907c3310b4_27246815%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87b8b9c1707f7da3cce61621cff8dac176bd2a7' => 
    array (
      0 => 'templates/reg.tpl',
      1 => 1437831290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84170603855b3907c3310b4_27246815',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b3907c370542_83557655',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b3907c370542_83557655')) {
function content_55b3907c370542_83557655 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '84170603855b3907c3310b4_27246815';
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
      <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm password</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Confirm password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign up</button>
    </div>
  </div>
</form><?php }
}
?>