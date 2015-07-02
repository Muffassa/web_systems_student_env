<?php /* Smarty version 3.1.24, created on 2015-07-02 09:54:48
         compiled from "/var/www/userid.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53799489855950a6869c0a2_29848642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d217b4de2ca5f322f569b87984ea474a62bf8bb' => 
    array (
      0 => '/var/www/userid.tpl',
      1 => 1435830786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53799489855950a6869c0a2_29848642',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55950a687331f5_60088574',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55950a687331f5_60088574')) {
function content_55950a687331f5_60088574 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53799489855950a6869c0a2_29848642';
?>
User <?php echo $_smarty_tpl->tpl_vars['id']->value;

}
}
?>