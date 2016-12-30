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
      <tbody class="tbody_towcols">
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
      <tbody class="tbody_onecols">
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

<!-- // Ajax -->
<script type="text/javascript">
$(document).ready(function(){
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