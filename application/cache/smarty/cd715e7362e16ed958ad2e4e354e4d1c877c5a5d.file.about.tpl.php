<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:27:21
         compiled from "application/views/default_theme//content/cierpblog/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105572360754f6b3d90fbaa4-80601332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd715e7362e16ed958ad2e4e354e4d1c877c5a5d' => 
    array (
      0 => 'application/views/default_theme//content/cierpblog/about.tpl',
      1 => 1425483286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105572360754f6b3d90fbaa4-80601332',
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
  'unifunc' => 'content_54f6b3d9122382_04155436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b3d9122382_04155436')) {function content_54f6b3d9122382_04155436($_smarty_tpl) {?>    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</h1>
                        <hr class="small">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

            </div>
        </div>
    </div>

    <hr>
<?php }} ?>
