<?php  
  session_start();
  if (!array_key_exists("cart", $_SESSION)) {
      $_SESSION["cart"] = array();
  }
  require_once "../config/connection.php";
  $db = connection::get_instance();
  $mysqli = $db->get_connection();
  $mysqli->query("set names utf8");
   
   $statement = $mysqli->prepare(
    "INSERT INTO `kirill_shop_user` (
          `email`,
          `password`,
          `first_name`,
          `last_name`,
          `phone`,
          `dob`,
          `salutation`,
          `country`,
          `address`)
      VALUES (?, PASSWORD(?), ?, ?, ?, ?, ?, ?, ?)");
      $statement->bind_param("sssssssss",
        $_POST["email"],
        $_POST["password"],
        $_POST["first_name"],
        $_POST["last_name"],
        $_POST["phone"],
        $_POST["dob"],
        $_POST["salutation"],
        $_POST["country"],
        $_POST["address"]);
    if ($statement->execute()) {
    echo "Registration was successful! <a href=\"../index.php\">Back to main page</a>";
      header("Location: ../index.php");
    } else {
        if ($statement->errno == 1062) {
          echo "This e-mail is already registered";
    } else {
       die("Execute failed: (" .
           $statement->errno . ") " . $statement->error);
    }
}
?>