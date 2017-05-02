<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Apple</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
        if (array_key_exists("user", $_SESSION)){
          $id = $_SESSION["user"];
          $result = $mysqli->query("SELECT first_name FROM kirill_shop_user WHERE id= $id");
          $name = $result->fetch_assoc();
         ?>

        <li><a href="products.php">Products</a></li>
        <li><a href="cart.php">Cart</a></li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $name["first_name"]; ?> <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="changepassword.php">Change Password</a></li>
          </li>

          <?php if (array_key_exists("admin", $_SESSION)){?>
            <li><a href="addproduct.php">Add Product</a></li>
            <?php
           } ?>
            <li role="separator" class="divider"></li>
            <li><a href="pages/logout.php">Logout</a></li>
          </ul>
        </li>
        <?php
      } else {?>
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php
    }
    ?>
      </ul>
    </div>
  </div>
</div>
