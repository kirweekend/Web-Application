<?php
  session_start();
    require_once "../config/connection.php";
    $db = connection::get_instance();
    $mysqli = $db->get_connection();
    $mysqli->query("set names utf8");

    $statement = $mysqli->prepare(
      "INSERT INTO `kirill_shop_product` (
        `name`,
        `description`,
        `price`, 
        `image`
        )
      VALUES (?, ?, ?, ?)");

    $statement->bind_param("ssss",
      
      $_POST["name"],
      $_POST["description"],
      $_POST["price"],
      $_POST["image"]);

    if($statement->execute()) {
      echo "Successfully added ". $_POST["name"]." to products";
      header("Location: ../products.php");
    } else {
      die("Execute failed: (" . $statement->errno . ") " . $statement->error);
    }
   
?>

