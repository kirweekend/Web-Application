<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple reseller</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/font-awesome.css">
  <link rel="stylesheet" href="../css/main.css">
  <?php
  session_start();
  if (!array_key_exists("cart", $_SESSION)) {
      $_SESSION["cart"] = array();
  }
  require_once "../config/connection.php";
  $db = connection::get_instance();
  $mysqli = $db->get_connection();
  $mysqli->query("set names utf8");
  ?>
</head>
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>  
  <script type="text/javascript" src="../js/login_process.js"></script>  
  <body>
    <div class="page-wrap">
    <?php include "../layout/nav.php" ?>
    <div class="container">
    <div class="signin-form">
      <div class="container">
        <form class="form-signin" method="post" id="login-form">
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
    <?php include "../layout/footer.php" ?>
  </body>
</html>