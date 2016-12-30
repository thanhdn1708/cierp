<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:12
         compiled from "application/views/default_theme/layout/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120797658354f6b40ccbeff9-93069285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '601f83315a74c52350876238dd7efddd5b5c7843' => 
    array (
      0 => 'application/views/default_theme/layout/layout.tpl',
      1 => 1425493598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120797658354f6b40ccbeff9-93069285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jspath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b40cced1e6_92766993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b40cced1e6_92766993')) {function content_54f6b40cced1e6_92766993($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['header']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <body>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/jquery.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/jquery-ui.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/moment.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/bootstrap.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/bootstrap-typeahead.min.js"></script>
    <script src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/bootstrap-datetimepicker.min.js"></script>
    <!-- TinyMCE -->
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['jspath']->value;?>
/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
			editor_selector : "mceEditor",
			editor_deselector : "mceNoEditor",
			theme : "advanced",
			plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
	
			// Theme options
			theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
			theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
			theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
		});
	</script>
	<!-- /TinyMCE -->
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['subview']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['theme']->value)."/".((string)$_smarty_tpl->tpl_vars['footer']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
