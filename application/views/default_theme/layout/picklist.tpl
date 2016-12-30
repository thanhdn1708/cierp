<section>
  <h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> {$model->label}</h3>
  <form class="form-horizontal" method="post" accept-charset="utf-8">
  <!-- Action Custom Link left for table -->
  <ul id = "action_custom_link" class="pagination pagination-xs pull-left btn-group">
    {foreach from=$actioncustom item=i}{$i}{/foreach} 
  </ul>
  <!-- Button Link right for table -->
  <ul id = "button_link" class="pagination pagination-xs pull-right btn-group">
    {foreach from=$button item=i}{$i}{/foreach}
  </ul>
</br></br></br></br>
  <div class="row">
    {foreach from=$relatedField item=i}
    <input id="result_relatedField_{$i->id}" type="hidden" name="result_relatedField_{$i->id}" value="">
    <table>
    <ul id="relatedField_{$i->id}" class="col-xs-12">
      <a href="#" class="btn btn-primary col-xs-10 a-relatedField">{$i->label}</a>
      <a href="{$base_url}admin/picklist_manager/editajax" name="picklistValue_editajax" class="btn btn-primary col-xs-2 a-relatedField"><i class="glyphicon glyphicon glyphicon-plus"></i></a>
      {foreach from=$picklistValue_{$i->id} item=j}
      <a href="{$base_url}admin/picklist_manager/editajax/{$j->id}" name="picklistValue_editajax" class="btn btn-default col-xs-12" id="picklistValue_{$j->id}">{$j->label}</a>
      {/foreach} 
    </ul>
  </table>
    {/foreach} 
  </div>
<!-- Button Link right for table -->
<ul id = "button_link" class="pagination pagination-xs pull-right btn-group">
  {foreach from=$button item=i}{$i}{/foreach}
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
   {foreach from=$relatedField item=i}
       $('#relatedField_{$i->id}').sortable({
        update: function(event, ui) {
         var result_field = $(this).sortable('toArray').toString();
         $('#result_relatedField_{$i->id}').val(result_field);
       },
       items: '> a:not(.a-relatedField)'
      });
   {/foreach}
    // Field Label Edit Ajax
  $("a[name=picklistValue_editajax]").click(function(){
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
