<section>
	<h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> {$model->label}</h3>
	<!-- Action Link left for table -->
	<ul id = "action_link" class="pagination pagination-md pull-left">
		{foreach from=$action item=i}
		{$i}
		{/foreach}
	</ul>
	<!-- Pagination Link right for table -->
	<ul id = "pagination_link" class="pagination pagination-md pull-right">
		{$pagination}
	</ul>
</br></br></br></br>
<!-- Table  -->
<div class="panel panel-primary table-responsive">
	<div class="panel-heading">
		<label class="control-label">{$model->label}</label>
	</div>
	<table class="table table-hover table-striped">
		<!-- Head -->
		<thead>

			<!-- Header link -->
			<tr class="active">
				<th></th>
				{foreach from=$filter item=i}
				<th  id = "pagination_link">{$hearderlink.$i}</th>
				{/foreach}
				<th></th>
			</tr>

			<!-- Input Filter -->
			<tr class="active">
				<th style="text-align:center;"> <input type="checkbox" id="checkall"> </th>
				{foreach from=$filter item=i}
				<th>{$input.$i}</th>
				{/foreach}
				<th style="width:100px;"> <a id="action_search" href="listview"><i class="glyphicon glyphicon glyphicon-search"></i> Search</a> </th>
			</tr>
		</thead>

		<!-- Body -->
		<tbody>
			{foreach from=$data item=i}
			<tr id ="{$i->id}">

				<!-- checkbox for row -->
				<th style="text-align:center;"> <input type="checkbox" id="check{$i->id}"> </th>

				<!-- Data Table -->
				{foreach from=$filter item=j}
				{if $j eq $model->field}
				<th><a class="field_label_editajax" href="{$base_url}{$moduleurl}editajax/{$i->id}">{$i->$j}</a></th>
				{else}
				<th>{$i->$j}</th>
				{/if}
				{/foreach}

				<!-- Rows Action Link -->
				<th> 
					<span id ="row_action_{$i->id}" style="display:none;">
						<a href="{$base_url}{$moduleurl}detailview/{$i->id}"><i class="iiglyphicon glyphicon glyphicon-th-list alignMiddle"></i></a>
						<a href="{$base_url}{$moduleurl}editview/{$i->id}"><i class="iglyphicon glyphicon glyphicon-edit alignMiddle"></i></a>
                        <a href="#" data-toggle="modal" data-id="{$i->id}" data-target="#deleteModal"><i class="glyphicon glyphicon glyphicon-trash alignMiddle"></i></a>
					</span>
				</th>
			</tr>
			{/foreach}				
		</tbody>
	</table>
</div>
</section>

<!-- Modal Delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="color:red;">Warning</h4>
            </div>
			<div class="modal-body">
				Do you want delete record?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
				<a id ="action_rows_delete" href="#" class="btn btn-danger">Yes</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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

<script>
function loadFilterData(url)
{
	// Ajax search link
	$.post(url,
	{
		{foreach from=$filter item=i}
		{$i}:$( "input[name='{$i}']" ).val(),
		{/foreach}
	},
	function(data,status){
	    var html = $('<div>' + data + '</div>');
		$("#page-content-wrapper").html(html.find('#page-content-wrapper').html());
	});
}
$(document).ready(function(){
	// Ajax pagination link
	$("#pagination_link li a,#pagination_link a").click(function(){
		var url = $(this).attr("href");
		$.ajax({
			type: "POST",
			url: url,
			data: {
				{foreach from=$filter item=i}
				{$i}:$( "input[name='{$i}']" ).val(),
				{/foreach}
			},
			async: true,
			success: function(result){
			    var html = $('<div>' + result + '</div>');
				$("#page-content-wrapper").html(html.find('#page-content-wrapper').html());
				{literal}window.history.pushState({path:url},'',url);{/literal}
			}
		})
		return false;
	});

	// Ajax action link
	$("#action_link a,#action_rows_delete,#action_search").click(function(){
		var url = $(this).attr("href");
		var datas = [];
		// Set Action
		if (url.indexOf("new") !== -1)
		{
			//New
			$(this).attr("href",url.split("new")[0] + "editview");
		}

		// Set Action
		if (url.indexOf("listview") !== -1)
		{
			//listview
			loadFilterData(url);
			return false;
		}

		if (url.indexOf("editajax") !== -1)
		{
			//Edit
			$(':checkbox').each(function() {
				if (this.checked == true) 
					datas.push(this.id.split("check")[1]); 
			});
			// remove undefined of Data
			datas = datas.filter(function(n){ return n != undefined }); 
			if (datas.length != 1)
			{
				//confirm("Please chose one rows be edit!");
				$('#notificationModal_body').html('Please chose one rows be edit!');
				$('#notificationModal').modal('toggle');
				return false;
			} 
			$('#editAjaxModal').modal('toggle');
			$.ajax({
				type: "POST",
				url: url + "/" + datas[0],
				data: {
				},
				async: true,
				success: function(result){
					$("#editAjaxModal_body").html(result);
					// Thêm id cho link submit modal
					$('#editAjaxModal_submit').attr('href',url + "/" + datas[0]);
				}
			})
			return false;
		}

		if (url.indexOf("delete") !== -1)
		{
			// Delete of #action_link
			// If is #action_link then check be select rows
			if (url.indexOf("delete/") == -1)
			{
				$(':checkbox').each(function() {
					if (this.checked == true) 
						datas.push(this.id.split("check")[1]); 
				});
				// remove undefined of Data
				datas = datas.filter(function(n){ return n != undefined }); 
				if (datas.length == 0)
				{
					//confirm("Please chose rows be delete!");
					$('#notificationModal_body').html('Please chose rows be delete!');
					$('#notificationModal').modal('toggle');
					return false;
				} 
			}
			$.ajax({
				type: "POST",
				url: url,
				data: {
					ids:datas,
				},
				async: true,
				success: function(result){
				    var html = $('<div>' + result + '</div>');
					$("#page-content-wrapper").html(html.find('#page-content-wrapper').html());
				}
			})
			return false;
		}		
	});		

	// Field Label Edit Ajax
  $(".field_label_editajax").click(function(){
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
          		loadFilterData($(location).attr('href'));
           	}); 
        }
        else $("#editAjaxModal_body").html(result);
      }
    })
    return false;
  }); 

	// Ajax checkbox all
    $('#checkall').click(function(event) {  //on click 
        if(this.checked) { // check select status
            $(':checkbox').each(function() {
            	this.checked = true;            
            });
        }else{
            $(':checkbox').each(function() { 
            	this.checked = false;                    
            });         
        }
    });

	// Show Action Rows for hover
	$('table tbody tr').hover(function() { 
		$('#row_action_'+$(this).attr('id')).css('display','inline');  
	}, function() {  
		$('#row_action_'+$(this).attr('id')).css('display','none');  
	});  

	// Delete prassing Data Id
	$('a[data-toggle=modal], button[data-toggle=modal]').click(function () {
		var data_id = '';
		if (typeof $(this).data('id') !== 'undefined') {
			data_id = $(this).data('id');
			// Delete of #action_rows_delete ->rows
			$('#action_rows_delete').attr('href','{$base_url}{$moduleurl}delete/' + data_id);
		}
		// Delete of #action_link
		else $('#action_rows_delete').attr('href','{$base_url}{$moduleurl}delete');
	});

	    // input Filter
	    {foreach from=$relatedInput item=i}
	    $("input[name='show_{$i.name}']").typeahead({
	    	source: {$i.data},
	    	onSelect: function (item)
	    	{
	    		$("input[name='{$i.name}']").val(item.value);
	    	}
	    }).change(function(){
	    	if ($("input[name='show_{$i.name}']").val() == '')
	    	{
	    		$("input[name='{$i.name}']").val('');
	    	} 
	    });
	    {/foreach}
})
</script>