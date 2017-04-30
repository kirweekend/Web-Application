<!DOCTYPE html>
<html>
  <?php include "layout/head.php"; ?>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
  <body>
    <div class="page-wrap">
      <?php include "layout/nav.php"; ?>

      <div class="container">
    <div class="changepwd-form">
      <div class="container">
        <form class="form-changepwd" method="post" id="form-changepwd" action="pages/pwdsubmit.php">
              <h2 class="form-pwd-heading">Change Password</h2><hr />
              <div class="form-group">
        <input type="password" class="form-control" placeholder="Old Password" name="oldpassword" id="oldpassword" required autofocus/>
              </div>
              <div class="form-group">
        <input type="password" class="form-control" placeholder="New Password" name="newpassword" id="newpassword" required/>
              </div>
          <hr />
              <div class="form-group">
        <button type="submit" class="btn btn-default" name="btn-pwd" id="btn-pwd">
          <span class="glyphicon glyphicon-send"></span> &nbsp; Submit
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