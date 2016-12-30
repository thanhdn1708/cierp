<?php /* Smarty version Smarty-3.1.19, created on 2015-03-26 14:22:03
         compiled from "application/views/default_theme/layout/editview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20822524065513b39b509870-97870653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fe527a7b3697ea38243f68f2f666fe997a4d23a' => 
    array (
      0 => 'application/views/default_theme/layout/editview.tpl',
      1 => 1425493046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20822524065513b39b509870-97870653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
    'actioncustom' => 0,
    'i' => 0,
    'button' => 0,
    'validationError' => 0,
    'block' => 0,
    'j' => 0,
    'input' => 0,
    'base_url' => 0,
    'moduleurl' => 0,
    'relatedInput' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5513b39b64a3d8_95640497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5513b39b64a3d8_95640497')) {function content_5513b39b64a3d8_95640497($_smarty_tpl) {?><section>
  <h3 class="page-header"><a href="#" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> <?php echo $_smarty_tpl->tpl_vars['model']->value->label;?>
</h3>
  <form class="form-horizontal" method="post" accept-charset="utf-8">
  <!-- Action Custom Link left for table -->
  <ul id = "action_custom_link" class="pagination pagination-md pull-left btn-group">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actioncustom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?>
  </ul>
  <!-- Button Link right for table -->
  <ul id = "button_link" class="pagination pagination-md pull-right btn-group">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['button']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?>
  </ul>
</br></br></br></br>
<!-- Table  -->
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

      <!-- tbody tbody_towcols-->
      <tbody class="tbody_towcols">
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_'.($_smarty_tpl->tpl_vars['i']->value->id)]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>         
        <?php if ((1 & $_smarty_tpl->tpl_vars['j']->value->sequence)) {?>
        <tr>
          <?php }?>

          <!-- th Label -->
          <th class="active"  style="text-align:left; width:20%;">
            <label for="input_<?php echo $_smarty_tpl->tpl_vars['j']->value->fieldname;?>
" class="control-label"><?php echo $_smarty_tpl->tpl_vars['j']->value->label;?>
<?php if ($_smarty_tpl->tpl_vars['j']->value->mandatory==1) {?><em style="color:red;">*</em><?php }?></label>
          </th>

          <!-- th Input UI -->
          <th style="text-align:left; width:30%;">
            <?php echo $_smarty_tpl->tpl_vars['input']->value[$_smarty_tpl->tpl_vars['j']->value->id];?>

          </th>                 
          <?php if (!(1 & $_smarty_tpl->tpl_vars['j']->value->sequence)) {?>
        </tr>
        <?php }?>
        <?php } ?>
      </tbody>

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
" class="control-label "><?php echo $_smarty_tpl->tpl_vars['j']->value->label;?>
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
<!-- Button Link right for table --> 
<ul id = "button_link" class="pagination pagination-md pull-right btn-group">
  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['button']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?>
</ul> 
</form>
</section>

<!-- // Ajax -->
<script type="text/javascript">
$(document).ready(function(){
    //date time
      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_'.($_smarty_tpl->tpl_vars['i']->value->id)]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>  
        <?php if ($_smarty_tpl->tpl_vars['j']->value->ui==5) {?>
            $("div[name='input_<?php echo $_smarty_tpl->tpl_vars['j']->value->fieldname;?>
']").datetimepicker({
              format: 'YYYY-MM-DD'
            });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['j']->value->ui==6) {?>
            $("div[name='input_<?php echo $_smarty_tpl->tpl_vars['j']->value->fieldname;?>
']").datetimepicker({
              format: 'HH:mm:ss'
          });
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['j']->value->ui==9) {?>
            $("div[name='input_<?php echo $_smarty_tpl->tpl_vars['j']->value->fieldname;?>
']").datetimepicker({
              format: 'YYYY-MM-DD HH:mm:ss'
          });
        <?php }?>
        <?php } ?>
      <?php } ?>

  // Ajax post width
    $.ajax({
      type: "POST",
      url: '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
postwidth',
      data: {
        width:$(window).width(),
      },
        success: function(result){
          if (result=='onecols')
          {
            $(".tbody_onecols").removeAttr('css');
            $(".tbody_towcols").remove();
          }
            
          else if (result=='towcols')
          {
            $(".tbody_towcols").removeAttr('css');
            $(".tbody_onecols").remove();
          }
        }
    });

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
