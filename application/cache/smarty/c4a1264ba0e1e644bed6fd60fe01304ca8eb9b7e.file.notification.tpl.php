<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:33
         compiled from "application/views/default_theme/layout/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202210146054f6b4211ecd85-48300170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a1264ba0e1e644bed6fd60fe01304ca8eb9b7e' => 
    array (
      0 => 'application/views/default_theme/layout/notification.tpl',
      1 => 1424293676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202210146054f6b4211ecd85-48300170',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b4211eeb98_79126932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b4211eeb98_79126932')) {function content_54f6b4211eeb98_79126932($_smarty_tpl) {?><!-- Modal Notification-->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="color:red;">Notification</h4>
            </div>
      <div class="modal-body" id="notificationModal_body">
      </div>
      <div class="modal-footer">
        <button id="notificationModal_submit" type="button" class="btn btn-danger" data-dismiss="modal">Yes</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal --><?php }} ?>
