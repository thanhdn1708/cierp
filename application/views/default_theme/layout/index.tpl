<div class="waitingAjax"></div>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
    {include file="$theme/$sidebar.tpl"}
    </div>
    <!-- /#sidebar-wrapper -->
	<!-- Page Content -->
    <div id="page-content-wrapper">
    {include file="$theme/$menu.tpl"}
	{include file="$theme/$view.tpl"}
    {include file="$theme/$notification.tpl"}
	</div>
    <!-- /#page-content-wrapper -->
</div>
    <!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});
</script>

<!-- Padding with footer -->
<style type="text/css">
section { 
    padding-bottom: 100px;
}
.waitingAjax {
    display:    none;
    position:   fixed;
    z-index:    1000;
    top:        0;
    left:       0;
    height:     100%;
    width:      100%;
    background: rgba( 255, 255, 255, .8 ) 
                url('{$imgpath}/preload.gif') 
                50% 50% 
                no-repeat;
}

/* When the body has the loading class, we turn
   the scrollbar off with overflow:hidden */
body.loading {
    overflow: hidden;   
}

/* Anytime the body has the loading class, our
   modal element will be visible */
body.loading .waitingAjax {
    display: block;
}
</style>