<?php 
  session_start();
   require_once "../config/connection.php";
   $db = connection::get_instance();
   $mysqli = $db->get_connection();
   $mysqli->query("set names utf8");
      
     if (array_key_exists("user", $_SESSION)){
     $statement = $mysqli->prepare(
      "UPDATE kirill_shop_user SET password=PASSWORD(?) WHERE id=? AND password=PASSWORD(?)"); 
      $statement->bind_param("sss", $_POST["newpassword"],
      $_SESSION["user"],
      $_POST["oldpassword"]);
      $statement->execute();
      
      if ($statement->affected_rows==1){
      echo "Succesfully changed your password";
      } else {
      echo "Incorrect Password entered";
      }
      } else {
      echo "Please log in or register first";
      }
      ?>
