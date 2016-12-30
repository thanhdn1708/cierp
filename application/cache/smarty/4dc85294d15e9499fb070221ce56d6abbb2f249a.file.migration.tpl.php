<?php /* Smarty version Smarty-3.1.19, created on 2015-03-13 22:59:51
         compiled from "application/views/default_theme/admin/migration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53890494955030977d05144-90694936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dc85294d15e9499fb070221ce56d6abbb2f249a' => 
    array (
      0 => 'application/views/default_theme/admin/migration.tpl',
      1 => 1424968778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53890494955030977d05144-90694936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'enable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5503097802ab56_48167657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5503097802ab56_48167657')) {function content_5503097802ab56_48167657($_smarty_tpl) {?><div id="wrapper">
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['sidebar']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<!-- /#sidebar-wrapper -->
	<!-- Page Content -->
	<div id="page-content-wrapper">
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['menu']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<section>
			<h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> Migration</h3>
			<div class="row">
				<form  class="form-horizontal" role="form" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for="version" class="col-sm-2 control-label">Version</label>
						<div class="col-sm-6">
							<?php echo $_smarty_tpl->tpl_vars['version']->value;?>

						</div>
					</div>
					<div class="form-group">
						<label for="enable" class="col-sm-2 control-label">Enable</label>
						<div class="col-sm-6">
						   <?php echo $_smarty_tpl->tpl_vars['enable']->value;?>

						 </div>
					</div>
					<div class="form-group">
						<button type="submit" class="col-md-offset-7 btn btn btn-primary">
							Submit
						</button>
					</div>					
				</form>

			</div>
		</section>
	</div>
	<!-- /#page-content-wrapper -->
</div>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>

<!-- Padding with footer -->
<style type="text/css">
#wrapper {
	padding-left: 200px;
}

#wrapper.toggled {
	padding-left: 0px;
}

#sidebar-wrapper {
	width: 200px;
}

#wrapper.toggled #sidebar-wrapper {
	width: 0px;
}
</style><?php }} ?>
