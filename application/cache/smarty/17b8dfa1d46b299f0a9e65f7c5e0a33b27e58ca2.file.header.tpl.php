<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:12
         compiled from "application/views/default_theme/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199662121854f6b40ccf4c46-82236233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b8dfa1d46b299f0a9e65f7c5e0a33b27e58ca2' => 
    array (
      0 => 'application/views/default_theme/layout/header.tpl',
      1 => 1425492996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199662121854f6b40ccf4c46-82236233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_name' => 0,
    'csspath' => 0,
    'imgpath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b40cd044b8_24372626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b40cd044b8_24372626')) {function content_54f6b40cd044b8_24372626($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
/bootstrap.min.css" rel="stylesheet">
        <!-- Datetime CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
/bootstrap-datetimepicker.min.css" type="text/css" media="screen" rel="stylesheet">
    	<!-- Sidebar CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['csspath']->value;?>
/simple-sidebar.css" rel="stylesheet">
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/favicon.ico" type="image/gif">
</head><?php }} ?>
