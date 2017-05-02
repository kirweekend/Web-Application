<!DOCTYPE html>
<html>
  <?php
    include "layout/head.php";
    $statement = $mysqli->prepare("SELECT * FROM kirill_shop_product  WHERE id = ?");
    $statement->bind_param("i", $_GET["id"]);
    $statement->execute();
    $results = $statement->get_result();
    $row = $results->fetch_assoc();
  ?>
  <body>
    <div class="page-wrap">
      <?php include "layout/nav.php"; ?>
      <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1><?=$row["name"]?></h1>
          <h2><?=$row["description"];?></h2>
        </div>
      </div>
    </div>
  </div>
        <div id="dg">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-4">
          <div class="tilt">
          <a href="#"><img src="assets/img/<?=$row['image']?>" class="description-image" alt="products"></a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <form method="post" action="cart.php">
    <input type="hidden" name="id" value="<?=$_GET["id"];?>" aria-label="select quantity"/>
    <select name="quantity">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
    </select>
    <button type="submit" class="class="btn btn-link">Add to cart</button>
    
  </form>
        </div>
      </div>
    </div>
    <?php include "layout/footer.php" ?>
  </body>
</html>