<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:26:59
         compiled from "application/views/default_theme//content/cierpblog/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76260752154f6b3c3a14bf5-25451188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a0123db5a9e8e5c0816c4f48e0ca41cd546d1da' => 
    array (
      0 => 'application/views/default_theme//content/cierpblog/index.tpl',
      1 => 1425487716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76260752154f6b3c3a14bf5-25451188',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgpath' => 0,
    'page' => 0,
    'articlelist' => 0,
    'base_url' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b3c3a56be3_04826497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b3c3a56be3_04826497')) {function content_54f6b3c3a56be3_04826497($_smarty_tpl) {?>       <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                        <hr class="small">
                        <span class="subheading"><?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>
</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articlelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
article/<?php echo $_smarty_tpl->tpl_vars['i']->value->url;?>
">
                        <h2 class="post-title">
                            <?php echo $_smarty_tpl->tpl_vars['i']->value->title;?>

                        </h2>
                    </a>
                    <p class="post-meta">Posted <?php echo $_smarty_tpl->tpl_vars['i']->value->publishdate;?>
</p>
                    <?php } ?>
                </div>
                <hr>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div><?php }} ?>
