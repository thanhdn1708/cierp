<?php /* Smarty version Smarty-3.1.19, created on 2015-08-26 19:00:39
         compiled from "application/views/default_theme/layout/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50199810354f6b421091441-46755633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ab9ef565d5ba7788959bf6b58ec3a296c0230f1' => 
    array (
      0 => 'application/views/default_theme/layout/index.tpl',
      1 => 1435284601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50199810354f6b421091441-46755633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b4210b97d6_30099212',
  'variables' => 
  array (
    'imgpath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b4210b97d6_30099212')) {function content_54f6b4210b97d6_30099212($_smarty_tpl) {?><div class="waitingAjax"></div>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['sidebar']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <!-- /#sidebar-wrapper -->
	<!-- Page Content -->
    <div id="page-content-wrapper">
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['view']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['notification']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
    <!-- /#page-content-wrapper -->
</div>
    <!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});
</script>

<!-- Padding with footer -->
<style type="text/css">
section { 
    padding-bottom: 100px;
}
.waitingAjax {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('<?php echo $_smarty_tpl->tpl_vars['imgpath']->value;?>
/preload.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .waitingAjax {
    display: block;
}
</style><?php }} ?>
