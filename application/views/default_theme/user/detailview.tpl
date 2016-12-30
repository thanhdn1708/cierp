<section>
  <h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> {$model->label}</h3>
  <form class="form-horizontal" method="post" accept-charset="utf-8">
  <!-- Action Custom Link left for table -->
  <ul id = "action_custom_link" class="pagination pagination-md pull-left btn-group">
    {foreach from=$actioncustom item=i}{$i}{/foreach}
  </ul>
  <!-- Button Link right for table -->
  <ul id = "button_link" class="pagination pagination-md pull-right btn-group">
    {foreach from=$button item=i}{$i}{/foreach}
  </ul>
</br></br></br></br>
<!-- Table  -->
  <div class="panel panel-primary table-responsive">
    <!-- List Of Blocks -->
    {foreach from=$block item=i}
    <table class="table table-hover">

      <!-- thead -->
      <div class="panel-heading">
        <label for="block_{$i->id}" class="control-label">{$i->label}</label>
      </div>

       <!-- tbody tbody_towcols-->
      <tbody class="tbody_towcols" style"display:none;">
        {foreach from=$field_{$i->id} item=j}
          {if $j->sequence is odd}
          <tr>         
          {/if}

          <!-- th Label -->
          <th class="active" style="text-align:left; width:20%;">
            <label class="control-label ">{$j->label}{if $j->mandatory eq 1}<em style="color:red;">*</em>{/if}</label>
          </th>

          <!-- th Label data -->
          <th style="text-align:left; width:30%;">
            <label class="control-label"><small>{$record->{$j->fieldname}}</small></label>
          </th>                 
          {if $j->sequence is even}
          </tr>
          {/if}
        {/foreach}
      </tbody>

      <!-- tbody tbody_onecols-->
      <tbody class="tbody_onecols" style"display:none;">
        {foreach from=$field_{$i->id} item=j}
          <tr>         
          <!-- th Label -->
          <th class="active" style="text-align:left; width:40%;">
            <label class="control-label ">{$j->label}{if $j->mandatory eq 1}<em style="color:red;">*</em>{/if}</label>
          </th>

          <!-- th Label data -->
          <th style="text-align:left; width:60%;">
            <label class="control-label"><small>{$record->{$j->fieldname}}</small></label>
          </th>                 
          </tr>
        {/foreach}
      </tbody>
    </table>
  </br>
  {/foreach}
</div>
<!-- Button Link right for table -->
<ul id = "button_link" class="pagination pagination-md pull-right btn-group">
  {foreach from=$button item=i}{$i}{/foreach}
</ul>
</form>
</section>

<!-- Modal Change Password-->
<div class="modal fade" id="changepassModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Change Password</h4>
      </div>
      <div class="modal-body" id="changepassModal_body">
        <form role="form"  method="post" accept-charset="utf-8">
          <label id="validationError" style="color: red;"></label>
          <div class="form-group">
            <label>Password</label>
            {$formPass}
          </div>
          <div class="form-group">
            <label>New Password</label>
            {$formNewPass}
          </div>
          <div class="form-group">
            <label>Confirm Password</label>
            {$formRePass}
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <a id ="modal_changepassword_submit" href="{$base_url}user/index/changepassword/{$record->id}" class="btn btn btn-primary">Submit</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script type="text/javascript">
$(document).ready(function(){
  // Action change password
  $("#action_changepassword").click(function(){
    // Set Validate to default
    $("#validationError").html('');
  }); 

  // Modal link
  $("#modal_changepassword_submit").click(function(){
    var url = $(this).attr("href");
    $.ajax({
      type: "POST",
      url: url,
      data: {
        password:$( "input[name='password']" ).val(),
        newpassword:$( "input[name='newpassword']" ).val(),
        repassword:$( "input[name='repassword']" ).val(),
      },
      success: function(result){
        if (result === 'done')
        {
          $( "input[name*='password']" ).val('');
          $("#changepassModal").modal('toggle');
          $('#notificationModal_body').html('Password change successfull!');
          $('#notificationModal').modal('toggle');
        }
        else $("#validationError").html(result);
      }
    })
    return false;
  }); 

  // Ajax post width
    $.ajax({
      type: "POST",
      url: '{$base_url}{$moduleurl}/postwidth',
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
})
</script>