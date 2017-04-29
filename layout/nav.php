<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Apple</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (array_key_exists("user", $_SESSION)){
          $id = $_SESSION["user"];
          $result = $mysqli->query("SELECT first_name FROM kirill_shop_user WHERE id= $id");
          $name = $result->fetch_assoc();
         ?>

        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="pages/cart.php">Cart</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <?php echo $name["first_name"]; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../pages/changepassword.php">Change Password</a></li>
            <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
          </ul>

          <?php if (array_key_exists("admin", $_SESSION)){?>
            <li><a href="pages/addproduct.php">Add Product</a></li>
            <?php
           } ?>
            <li role="separator" class="divider"></li>
            <li><a href="pages/logout.php">Logout</a></li>
          </ul>
        </li>
        <?php
      } else {?>
        <li><a href="#">About</a></li>
        <li><a href="pages/login.php">Login</a></li>
        <li><a href="pages/register.php">Register</a></li>
      <?php
    }
    ?>
      </ul>
    </div>
  </div>
</div>
