<!-- Login Style -->
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

      <h3><a href="#">Sign Up</a></h3>
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

      <form role="form" method="post" accept-charset="utf-8">
        <label for="validationError" style="color: red;">{$validationError}</label>
        <div class="form-group">
          <label for="inputUsername">Username</label>
          {$formUser}
        </div>
        <div class="form-group">
          <label for="inputName">Name</label>
          {$formName}
        </div>
        <div class="form-group">
          <label for="inputPassword">Password</label>
          {$formPass}
        </div>
        <div class="form-group">
          <label for="inputRePassword">Confirm Password</label>
          {$formRePass}
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          {$formEmail}
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn btn-primary">
            Sign Up!
          </button>
          <a href="login" class="btn btn btn-danger">
            Cancel
          </a>
        </form>

      </div>

    </div>
  </div>