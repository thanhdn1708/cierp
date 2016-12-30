<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:27:28
         compiled from "application/views/default_theme//content/cierpblog/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83398420254f6b3e09850e8-39522007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ecd22bab94eee8b02cbd51656592ee0d8915b9f' => 
    array (
      0 => 'application/views/default_theme//content/cierpblog/article.tpl',
      1 => 1425483268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83398420254f6b3e09850e8-39522007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'imgpath' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b3e09ac4c5_63674251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b3e09ac4c5_63674251')) {function content_54f6b3e09ac4c5_63674251($_smarty_tpl) {?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/post-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                        <span class="meta">Posted by <a href="#">Start Bootstrap </a><?php echo $_smarty_tpl->tpl_vars['page']->value->publishdate;?>
</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

                </div>
            </div>
        </div>
    </article>

    <hr>
<?php }} ?>
