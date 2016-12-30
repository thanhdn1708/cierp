  <form id="editAjaxForm" class="form-horizontal" action='editajax' method="post" accept-charset="utf-8">
    <input id="submitAjax" type="hidden" name="submitAjax" value="false">
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

      <!-- tbody tbody_onecols-->
      <tbody class="tbody_onecols">
        {foreach from=$field_{$i->id} item=j}   
        <tr>
          <!-- th Label -->
          <th class="active" style="text-align:left; width:40%;">
            <label for="input_{$j->fieldname}" class="control-label">{$j->label}{if $j->mandatory eq 1}<em style="color:red;">*</em>{/if}</label>
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
</form>
<!-- // Ajax -->
<script type="text/javascript">
$(document).ready(function(){
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