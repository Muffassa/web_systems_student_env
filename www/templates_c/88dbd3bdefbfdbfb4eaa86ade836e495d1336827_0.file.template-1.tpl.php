<?php /* Smarty version 3.1.24, created on 2015-07-25 10:02:12
         compiled from "templates/template-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:207548216155b35ea46bda03_14830024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88dbd3bdefbfdbfb4eaa86ade836e495d1336827' => 
    array (
      0 => 'templates/template-1.tpl',
      1 => 1437818529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207548216155b35ea46bda03_14830024',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b35ea4770e26_99431256',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b35ea4770e26_99431256')) {
function content_55b35ea4770e26_99431256 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '207548216155b35ea46bda03_14830024';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset= "utf-8">
</head>
<body>
        
        
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Title</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
        
</body>
</html><?php }
}
?>