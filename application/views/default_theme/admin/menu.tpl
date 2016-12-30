<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{$base_url}" target="_blank">{$site_name}</a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
       {$mainmenu}
    </ul>
    <ul class="nav navbar-nav navbar-right" style="margin-right:10px;">
      <li><a href="#" data-toggle="dropdown" aria-expanded="false"><i class="glyphicon glyphicon-user"></i><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li>{$link.user}</li>
          <li>{$link.setting}</li>
          <li class="divider"></li>
          <li>{$link.logout}</li>
        </ul>
      </li>
    </ul>
  </div>
</nav>