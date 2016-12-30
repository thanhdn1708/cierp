<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:26:59
         compiled from "application/views/default_theme/content/cierpblog/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194754210254f6b3c328d663-08867340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82fc1b029c897c46d670eebb535b7b19ad14fc42' => 
    array (
      0 => 'application/views/default_theme/content/cierpblog/layout.tpl',
      1 => 1425056746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194754210254f6b3c328d663-08867340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jspath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b3c39e47d8_74414628',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b3c39e47d8_74414628')) {function content_54f6b3c39e47d8_74414628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['con_theme']->value)."/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <body>
  	 <!-- jQuery -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/clean-blog.min.js"></script>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['con_theme']->value)."/".((string)$_smarty_tpl->tpl_vars['subview']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['con_theme']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
