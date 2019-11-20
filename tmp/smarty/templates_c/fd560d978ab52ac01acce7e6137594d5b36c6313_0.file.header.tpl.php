<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-25 19:44:28
  from "C:\xampp\htdocs\musicCloud\views\default\header.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a66d0caea704_46805371',
  'file_dependency' => 
  array (
    'fd560d978ab52ac01acce7e6137594d5b36c6313' => 
    array (
      0 => 'C:\\xampp\\htdocs\\musicCloud\\views\\default\\header.tpl',
      1 => 1453747467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
  ),
),false)) {
function content_56a66d0caea704_46805371 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/Musicicon.png">

    <title>Music-cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/style.css" rel="stylesheet">
</head>

<body>
<div id="bg_layer" class="register"></div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Music-Cloud</a>
        </div>
        <div class="navbar-collapse collapse">
            <form class="navbar-form navbar-right" role="form" id="rghid">
                <div class="form-group">
                    <input type="text" name="emailUser" id="emailUser" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwdUser" id="pwdUser" placeholder="Password" class="form-control">
                </div>
                <button type="button" class="btn btn-success" onclick="login();">Sign in</button>
                <button id="togMy" type="button" class="btn btn-primary">Register</button>
            </form>
            <?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div><!--/.navbar-collapse -->
    </div>
</div><?php }
}
