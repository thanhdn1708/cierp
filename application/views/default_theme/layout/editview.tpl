<section>
  <h3 class="page-header"><a href="#" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> {$model->label}</h3>
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
  {if $validationError neq ''}
  <div class="alert alert-danger" id = 'validationError'>{$validationError}</div>
  {/if}
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
          <th class="active"  style="text-align:left; width:20%;">
            <label for="input_{$j->fieldname}" class="control-label">{$j->label}{if $j->mandatory eq 1}<em style="color:red;">*</em>{/if}</label>
          </th>

          <!-- th Input UI -->
          <th style="text-align:left; width:30%;">
            {$input.{$j->id}}
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
            <label for="input_{$j->fieldname}" class="control-label ">{$j->label}{if $j->mandatory eq 1}<em style="color:red;">*</em>{/if}</label>
          </th>

          <!-- th Input UI -->
          <th style="text-align:left; width:60%;">
            {$input.{$j->id}}
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
    //date time
      {foreach from=$block item=i}
        {foreach from=$field_{$i->id} item=j}  
        {if $j->ui eq 5}
            $("div[name='input_{$j->fieldname}']").datetimepicker({
              format: 'YYYY-MM-DD'
            });
        {/if}
        {if $j->ui eq 6}
            $("div[name='input_{$j->fieldname}']").datetimepicker({
              format: 'HH:mm:ss'
          });
        {/if}
        {if $j->ui eq 9}
            $("div[name='input_{$j->fieldname}']").datetimepicker({
              format: 'YYYY-MM-DD HH:mm:ss'
          });
        {/if}
        {/foreach}
      {/foreach}

  // Ajax post width
    $.ajax({
      type: "POST",
      url: '{$base_url}{$moduleurl}postwidth',
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
      {foreach from=$relatedInput item=i}
      $("input[name='input_{$i.name}']").typeahead({
        source: {$i.data},
        onSelect: function (item)
        {
          $("input[name='input_{$i.name}']").attr('disabled', true);
          $("input[name='inputhiden_{$i.name}']").val(item.value);
        }
      }).blur(function(){
        if ($("input[name='input_{$i.name}']").prop('disabled') == false) $("input[name='input_{$i.name}']").val('');
      });
      $("a[name='btn_{$i.name}']").click(function(){
        $("input[name='input_{$i.name}']").val('');
        $("input[name='inputhiden_{$i.name}']").val('');
        $("input[name='input_{$i.name}']").attr('disabled', false);
        return false;
      });
      {/foreach}
})
</script>