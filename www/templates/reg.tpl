<form class="form-horizontal" action ='/reg' method ='post'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name = 'email' type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name = 'password' type="text" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm password</label>
    <div class="col-sm-10">
      <input name = 'confirnation_of_password' type="text" class="form-control" placeholder="Confirm password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign up</button>
    </div>
  </div>
  <p class="error">{$error}</p>
</form>