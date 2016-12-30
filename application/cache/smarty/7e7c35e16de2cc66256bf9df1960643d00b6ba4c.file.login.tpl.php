<?php /* Smarty version Smarty-3.1.19, created on 2015-03-04 14:28:12
         compiled from "application/views/default_theme/user/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155682371754f6b40cd09a43-09345764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e7c35e16de2cc66256bf9df1960643d00b6ba4c' => 
    array (
      0 => 'application/views/default_theme/user/login.tpl',
      1 => 1424054242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155682371754f6b40cd09a43-09345764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'validationError' => 0,
    'formUser' => 0,
    'formPass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54f6b40cd18de5_46625491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6b40cd18de5_46625491')) {function content_54f6b40cd18de5_46625491($_smarty_tpl) {?><!-- Login Style -->
<style>
body {
  padding-top: 15px;
  font-size: 12px
}
.main {
  max-width: 320px;
  margin: 0 auto;
}
.login-or {
  position: relative;
  font-size: 18px;
  color: #aaa;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.span-or {
  display: block;
  position: absolute;
  left: 50%;
  top: -2px;
  margin-left: -25px;
  background-color: #fff;
  width: 50px;
  text-align: center;
}
.hr-or {
  background-color: #cdcdcd;
  height: 1px;
  margin-top: 0px !important;
  margin-bottom: 0px !important;
}
h3 {
  text-align: center;
  line-height: 300%;
}
</style>
<div class="container">
  <div class="row">

    <div class="main">

      <h3>Please Log In, or <a href="signup">Sign Up</a></h3>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
          <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <form role="form" action="login" method="post" accept-charset="utf-8">
        <label for="validationError" style="color: red;"><?php echo $_smarty_tpl->tpl_vars['validationError']->value;?>
</label>
        <div class="form-group">
          <label for="inputUsernameEmail">Username</label>
          <?php echo $_smarty_tpl->tpl_vars['formUser']->value;?>

        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          <?php echo $_smarty_tpl->tpl_vars['formPass']->value;?>

        </div>
        <div class="form-group">
          <a class="pull-right" href="#">Forgot password?</a>
          <label>
            <input type="checkbox">
            Remember me </label>
          </div>
          <button type="submit" class="btn btn btn-primary">
            Log In
          </button>
        </form>

      </div>

    </div>
  </div><?php }} ?>
