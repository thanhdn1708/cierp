<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:29
         compiled from "application/views/default_theme/layout/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16181462854f6b41d910868-86178829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33deeb1bccfc7d5cdfcd57754be5db032bc92d5d' => 
    array (
      0 => 'application/views/default_theme/layout/sidebar.tpl',
      1 => 1424927520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16181462854f6b41d910868-86178829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebarmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b41d915b01_83169929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b41d915b01_83169929')) {function content_54f6b41d915b01_83169929($_smarty_tpl) {?><ul class="sidebar-nav" style="padding-bottom: 50px;">
    <li class="sidebar-brand">
        <a href="#">
            Start Bootstrap
        </a>
    </li>
    <?php echo $_smarty_tpl->tpl_vars['sidebarmenu']->value;?>

</ul><?php }} ?>
