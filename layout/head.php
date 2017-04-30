<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Apple reseller</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/main.css">
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
