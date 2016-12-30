<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:26:59
         compiled from "application/views/default_theme//content/cierpblog/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71871319054f6b3c39ede29-39720521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92ee7f98efdf74d1a71b3e72e95fd5abfb25e57' => 
    array (
      0 => 'application/views/default_theme//content/cierpblog/header.tpl',
      1 => 1425485678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71871319054f6b3c39ede29-39720521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'csspath' => 0,
    'imgpath' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b3c3a0ef81_02381541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b3c3a0ef81_02381541')) {function content_54f6b3c3a0ef81_02381541($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icon -->
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/favicon.ico" type="image/gif">

</head>

 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['page']->value->alias;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
about-us">About</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
category/codeigniter">Codeigniter</a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
contact-me">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav><?php }} ?>
