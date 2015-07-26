<?php /* Smarty version 3.1.24, created on 2015-07-26 06:29:20
         compiled from "templates/main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:180115224755b47e406b3229_92388267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee2a9d5876622d3a69623a5f651b59f3babcc064' => 
    array (
      0 => 'templates/main.tpl',
      1 => 1437892156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180115224755b47e406b3229_92388267',
  'variables' => 
  array (
    'nav' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_55b47e407b5856_55161105',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55b47e407b5856_55161105')) {
function content_55b47e407b5856_55161105 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '180115224755b47e406b3229_92388267';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body>
        <div class="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Title</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php echo $_smarty_tpl->tpl_vars['nav']->value;?>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

            <nav class="content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</nav>
            
                
            <!-- jQuery -->
            <?php echo '<script'; ?>
 src="//code.jquery.com/jquery.js"><?php echo '</script'; ?>
>
            <!-- Bootstrap JavaScript -->
            <?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.js"><?php echo '</script'; ?>
>
        </div>
    </body>
</html><?php }
}
?>