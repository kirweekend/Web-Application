<!DOCTYPE html>
<html>
  <?php include "layout/head.php"; ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../js/login_process.js"></script>  
  <body>
    <div class="page-wrap">
    <?php include "layout/nav.php" ?>
    <div class="container">
    <div class="signin-form">
      <div class="container">
        <form class="form-signin" method="post" action="pages/login_script.php" id="login-form">
              <h2 class="form-signin-heading">Log In to Apple system</h2><hr />
              <div id="error">
              </div>
              <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" id="email" autofocus />
        <span id="check-e"></span>
              </div>
              <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
              </div>
          <hr />
              <div class="form-group">
        <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
          <span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In
        </button> 
              </div>  
        </form>
      </div>
    </div>
    </div>
    </div>
    <?php $mysqli->close(); ?>
  </body>
</html>