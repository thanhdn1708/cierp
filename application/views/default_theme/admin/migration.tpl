<div id="wrapper">
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		{include file="$theme/$sidebar.tpl"}
	</div>
	<!-- /#sidebar-wrapper -->
	<!-- Page Content -->
	<div id="page-content-wrapper">
		{include file="$theme/$menu.tpl"}
		<section>
			<h3 class="page-header"><a href="#menu-toggle" class="glyphicon glyphicon-chevron-right" id="menu-toggle"></a> Migration</h3>
			<div class="row">
				<form  class="form-horizontal" role="form" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for="version" class="col-sm-2 control-label">Version</label>
						<div class="col-sm-6">
							{$version}
						</div>
					</div>
					<div class="form-group">
						<label for="enable" class="col-sm-2 control-label">Enable</label>
						<div class="col-sm-6">
						   {$enable}
						 </div>
					</div>
					<div class="form-group">
						<button type="submit" class="col-md-offset-7 btn btn btn-primary">
							Submit
						</button>
					</div>					
				</form>

			</div>
		</section>
	</div>
	<!-- /#page-content-wrapper -->
</div>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});
</script>

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