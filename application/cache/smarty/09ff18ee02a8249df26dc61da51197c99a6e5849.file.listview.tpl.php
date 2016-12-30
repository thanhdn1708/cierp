<?php /* Smarty version Smarty-3.1.19, created on 2015-05-11 09:20:12
         compiled from "application/views/default_theme/layout/listview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167789167954f6b4210c8dd5-49571835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09ff18ee02a8249df26dc61da51197c99a6e5849' => 
    array (
      0 => 'application/views/default_theme/layout/listview.tpl',
      1 => 1431310789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167789167954f6b4210c8dd5-49571835',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b4211df042_74723253',
  'variables' => 
  array (
    'model' => 0,
    'action' => 0,
    'i' => 0,
    'pagination' => 0,
    'filter' => 0,
    'hearderlink' => 0,
    'input' => 0,
    'data' => 0,
    'j' => 0,
    'base_url' => 0,
    'moduleurl' => 0,
    'relatedInput' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b4211df042_74723253')) {function content_54f6b4211df042_74723253($_smarty_tpl) {?><section>
	<h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> <?php echo $_smarty_tpl->tpl_vars['model']->value->label;?>
</h3>
	<!-- Action Link left for table -->
	<ul id = "action_link" class="pagination pagination-md pull-left">
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value;?>

		<?php } ?>
	</ul>
	<!-- Pagination Link right for table -->
	<ul id = "pagination_link" class="pagination pagination-md pull-right">
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

	</ul>
</br></br></br></br>
<!-- Table  -->
<div class="panel panel-primary table-responsive">
	<div class="panel-heading">
		<label class="control-label"><?php echo $_smarty_tpl->tpl_vars['model']->value->label;?>
</label>
	</div>
	<table class="table table-hover table-striped">
		<!-- Head -->
		<thead>

			<!-- Header link -->
			<tr class="active">
				<th></th>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<th  id = "pagination_link"><?php echo $_smarty_tpl->tpl_vars['hearderlink']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</th>
				<?php } ?>
				<th></th>
			</tr>

			<!-- Input Filter -->
			<tr class="active">
				<th style="text-align:center;"> <input type="checkbox" id="checkall"> </th>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<th><?php echo $_smarty_tpl->tpl_vars['input']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</th>
				<?php } ?>
				<th style="width:100px;"> <a id="action_search" href="listview"><i class="glyphicon glyphicon glyphicon-search"></i> Search</a> </th>
			</tr>
		</thead>

		<!-- Body -->
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<tr id ="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
">

				<!-- checkbox for row -->
				<th style="text-align:center;"> <input type="checkbox" id="check<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"> </th>

				<!-- Data Table -->
				<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['j']->value==$_smarty_tpl->tpl_vars['model']->value->field) {?>
				<th><a class="field_label_editajax" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
editajax/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value->{$_smarty_tpl->tpl_vars['j']->value};?>
</a></th>
				<?php } else { ?>
				<th><?php echo $_smarty_tpl->tpl_vars['i']->value->{$_smarty_tpl->tpl_vars['j']->value};?>
</th>
				<?php }?>
				<?php } ?>

				<!-- Rows Action Link -->
				<th> 
					<span id ="row_action_<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" style="display:none;">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
detailview/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><i class="iiglyphicon glyphicon glyphicon-th-list alignMiddle"></i></a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
editview/<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
"><i class="iglyphicon glyphicon glyphicon-edit alignMiddle"></i></a>
                        <a href="#" data-toggle="modal" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value->id;?>
" data-target="#deleteModal"><i class="glyphicon glyphicon glyphicon-trash alignMiddle"></i></a>
					</span>
				</th>
			</tr>
			<?php } ?>				
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
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
:$( "input[name='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
']" ).val(),
		<?php } ?>
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
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
:$( "input[name='<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
']" ).val(),
				<?php } ?>
			},
			async: true,
			success: function(result){
			    var html = $('<div>' + result + '</div>');
				$("#page-content-wrapper").html(html.find('#page-content-wrapper').html());
				window.history.pushState({path:url},'',url);
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
			$('#action_rows_delete').attr('href','<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
delete/' + data_id);
		}
		// Delete of #action_link
		else $('#action_rows_delete').attr('href','<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['moduleurl']->value;?>
delete');
	});

	    // input Filter
	    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['relatedInput']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	    $("input[name='show_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").typeahead({
	    	source: <?php echo $_smarty_tpl->tpl_vars['i']->value['data'];?>
,
	    	onSelect: function (item)
	    	{
	    		$("input[name='<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val(item.value);
	    	}
	    }).change(function(){
	    	if ($("input[name='show_<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val() == '')
	    	{
	    		$("input[name='<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
']").val('');
	    	} 
	    });
	    <?php } ?>
})
</script><?php }} ?>
