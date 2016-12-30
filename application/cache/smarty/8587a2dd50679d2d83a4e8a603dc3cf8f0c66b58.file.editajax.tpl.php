<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:41
         compiled from "application/views/default_theme/layout/editajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117159102354f6b429582c98-99189202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8587a2dd50679d2d83a4e8a603dc3cf8f0c66b58' => 
    array (
      0 => 'application/views/default_theme/layout/editajax.tpl',
      1 => 1424620478,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117159102354f6b429582c98-99189202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validationError' => 0,
    'block' => 0,
    'i' => 0,
    'j' => 0,
    'input' => 0,
    'relatedInput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b4296187d2_00271508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b4296187d2_00271508')) {function content_54f6b4296187d2_00271508($_smarty_tpl) {?>  <form id="editAjaxForm" class="form-horizontal" action='editajax' method="post" accept-charset="utf-8">
    <input id="submitAjax" type="hidden" name="submitAjax" value="false">
  <?php if ($_smarty_tpl->tpl_vars['validationError']->value!='') {?>
  <div class="alert alert-danger" id = 'validationError'><?php echo $_smarty_tpl->tpl_vars['validationError']->value;?>
</div>
  <?php }?>
  <div class="panel panel-primary table-responsive">
    <!-- List Of Blocks -->
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    <table class="table table-hover">

      <!-- thead -->
      <div class="panel-heading">
        <label for="block_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="control-label"><?php echo $_smarty_tpl->tpl_vars['i']->value->label;?>
</label>
      </div>

      <!-- tbody tbody_onecols-->
      <tbody class="tbody_onecols">
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_'.($_smarty_tpl->tpl_vars['i']->value->id)]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>   
        <tr>
          <!-- th Label -->
          <th class="active" style="text-align:left; width:40%;">
            <label for="input_<?php echo $_smarty_tpl->tpl_vars['j']->value->fieldname;?>
" class="control-label"><?php echo $_smarty_tpl->tpl_vars['j']->value->label;?>
<?php if ($_smarty_tpl->tpl_vars['j']->value->mandatory==1) {?><em style="color:red;">*</em><?php }?></label>
          </th>

          <!-- th Input UI -->
          <th style="text-align:left; width:60%;">
            <?php echo $_smarty_tpl->tpl_vars['input']->value[$_smarty_tpl->tpl_vars['j']->value->id];?>

          </th>                 
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </br>
  <?php } ?>
</div>
</form>
<!-- // Ajax -->
<script type="text/javascript">
$(document).ready(function(){
    // Related 
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relatedInput']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
      $("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").typeahead({
        source: <?php echo $_smarty_tpl->tpl_vars['i']->value['data'];?>
,
        onSelect: function (item)
        {
          $("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").attr('disabled', true);
          $("input[name='inputhiden_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val(item.value);
        }
      }).blur(function(){
        if ($("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").prop('disabled') == false) $("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val('');
      });
      $("a[name='btn_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").click(function(){
        $("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val('');
        $("input[name='inputhiden_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val('');
        $("input[name='input_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").attr('disabled', false);
        return false;
      });
      <?php } ?>
})
</script><?php }} ?>
