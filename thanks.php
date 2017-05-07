 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple reseller</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/thx.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
  <?php
  session_start();
  if (!array_key_exists("cart", $_SESSION)) {
      $_SESSION["cart"] = array();
  }
  require_once "config/connection.php";
  $db = connection::get_instance();
  $mysqli = $db->get_connection();
  $mysqli->query("set names utf8");
  ?>
</head>
<body>
<?php
if (array_key_exists("user", $_SESSION)){
          $id = $_SESSION["user"];
          $result = $mysqli->query("SELECT first_name FROM kirill_shop_user WHERE id= $id");
          $name = $result->fetch_assoc();}
         ?>
<div class="intro-header">
        <div class="container">
 <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Thank you,<?php echo $name["first_name"]; ?></h1>
                        <h2>For shopping with us</h2>
                        <hr class="intro-divider">
                        <h3><a href="index.php">Go to main page</a></h3>
                    </div>
                </div>
            </div>
            </div>
        <!-- /.container -->

    </div>

    <?php $mysqli->close(); ?>
    </body>
</html>
   