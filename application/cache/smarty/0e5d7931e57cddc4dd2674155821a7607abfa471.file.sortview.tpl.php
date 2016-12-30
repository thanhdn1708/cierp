<?php /* Smarty version Smarty-3.1.19, created on 2015-03-27 10:14:12
         compiled from "application/views/default_theme/layout/sortview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7747945595514cb044da104-68022444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e5d7931e57cddc4dd2674155821a7607abfa471' => 
    array (
      0 => 'application/views/default_theme/layout/sortview.tpl',
      1 => 1424931092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7747945595514cb044da104-68022444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'model' => 0,
    'actioncustom' => 0,
    'i' => 0,
    'button' => 0,
    'block' => 0,
    'base_url' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5514cb04e20d08_75691794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5514cb04e20d08_75691794')) {function content_5514cb04e20d08_75691794($_smarty_tpl) {?><section>
  <h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> <?php echo $_smarty_tpl->tpl_vars['model']->value->label;?>
</h3>
  <form class="form-horizontal" method="post" accept-charset="utf-8">
    <input id="result_block" type="hidden" name="result_block" value="">
  <!-- Action Custom Link left for table -->
  <ul id = "action_custom_link" class="pagination pagination-xs pull-left btn-group">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actioncustom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?> 
  </ul>
  <!-- Button Link right for table -->
  <ul id = "button_link" class="pagination pagination-xs pull-right btn-group">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['button']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?>
  </ul>
</br></br></br></br>
  <div id="block" class="row">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    <input id="result_field_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" type="hidden" name="result_field_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" value="">
    <table>
    <ul id="block_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" class="col-xs-12">
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/block_manager/editajax/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" name="block_label_editajax" class="btn btn-primary col-xs-10 a-block"><?php echo $_smarty_tpl->tpl_vars['i']->value->label;?>
</a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/field_manager/newajax/<?php echo $_smarty_tpl->tpl_vars['model']->value->name;?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" name="field_label_editajax" class="btn btn-primary col-xs-2 a-block"><i class="glyphicon glyphicon glyphicon-plus"></i></a>
      <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field_'.($_smarty_tpl->tpl_vars['i']->value->id)]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/field_manager/editajax/<?php echo $_smarty_tpl->tpl_vars['j']->value->id;?>
" name="field_label_editajax" class="btn btn-default col-xs-6" id="field_<?php echo $_smarty_tpl->tpl_vars['j']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value->label;?>
</a>
      <?php } ?> 
    </ul>
  </table>
    <?php } ?> 
  </div>
<!-- Button Link right for table -->
<ul id = "button_link" class="pagination pagination-xs pull-right btn-group">
  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['button']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php } ?>
</ul>
</form>
</section>

<!-- Modal Edit Ajax-->
<div class="modal fade" id="editAjaxModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="color:red;">Edit Ajax</h4>
            </div>
      <div class="modal-body" id="editAjaxModal_body">
        
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a id ="editAjaxModal_submit" href="#" class="btn btn btn-primary">Save</a>
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
</style>

<script>
$(function() {
       $('#block').sortable({
        update: function(event, ui) {
         var result_block = $(this).sortable('toArray').toString();
          $('#result_block').val(result_block);
       }
      });

   <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
       $('#block_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
').sortable({
        update: function(event, ui) {
         var result_field = $(this).sortable('toArray').toString();
         $('#result_field_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
').val(result_field);
       },
       items: '> a:not(.a-block)'
      });
   <?php } ?>
    // Field Label Edit Ajax
  $("a[name=field_label_editajax],a[name=block_label_editajax]").click(function(){
    $('#editAjaxModal').modal('toggle');
    var url = $(this).attr("href");
    $("#submitAjax").val('true');
    $.ajax({
      type: "POST",
      url: url,
      success: function(result){
        $("#editAjaxModal_body").html(result);
    // Thêm id cho link submit modal
    $('#editAjaxModal_submit').attr('href',url);
      }
    })
    return false;
  }); 

  // Modal submit
  $("#editAjaxModal_submit").click(function(){
    var url = $(this).attr("href");
    $("#submitAjax").val('true');
    $.ajax({
      type: "POST",
      url: url,
      data:$("#editAjaxForm").serialize(),
      success: function(result){
        //$('#editAjaxModal').modal('toggle');
        if (result === 'done')
        {
          $("#editAjaxModal").modal('toggle');
          $('#notificationModal_body').html('Save successfull!');
          $('#notificationModal').modal('toggle');
          $("#notificationModal_submit ").click(function(){
              location.reload();
            }); 
        }
        else $("#editAjaxModal_body").html(result);
      }
    })
    return false;
    });
  });
</script>
<?php }} ?>
