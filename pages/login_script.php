<?php
   var_dump($_POST);
   session_start();

   require_once "../config/connection.php";
   $db = connection::get_instance();
   $mysqli = $db->get_connection();
   $mysqli->query("set names utf8");
   $statement = $mysqli->prepare("SELECT * FROM kirill_shop_user WHERE email = ? AND password = PASSWORD(?)");
   $statement->bind_param("ss",
    $_POST["email"],
    $_POST["password"]);
   $statement->execute();
   $results = $statement->get_result();
   $row = $results->fetch_assoc();

  if($row) {
    header("Location: ../index.php");
    $_SESSION["user"] = $row["id"];
    }
    if ($row["admin"] == 1) {
      $_SESSION["admin"] = $row["admin"];
    }
  

   else {
    echo "Email / password combination incorrect";
  }
   


?>
