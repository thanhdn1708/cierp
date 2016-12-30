<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:29
         compiled from "application/views/default_theme/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35571278154f6b41d91a9f7-23998491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4addc4fbe3e10039d02e2cc8df1c593329b7dc27' => 
    array (
      0 => 'application/views/default_theme/admin/menu.tpl',
      1 => 1425488122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35571278154f6b41d91a9f7-23998491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'site_name' => 0,
    'mainmenu' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b41d92f953_04175911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b41d92f953_04175911')) {function content_54f6b41d92f953_04175911($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
       <?php echo $_smarty_tpl->tpl_vars['mainmenu']->value;?>

    </ul>
    <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
      <li><a href="#" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><?php echo $_smarty_tpl->tpl_vars['link']->value['user'];?>
</li>
          <li><?php echo $_smarty_tpl->tpl_vars['link']->value['setting'];?>
</li>
          <li class="divider"></li>
          <li><?php echo $_smarty_tpl->tpl_vars['link']->value['logout'];?>
</li>
        </ul>
      </li>
    </ul>
  </div>
</nav><?php }} ?>
