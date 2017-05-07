<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<body>
  <?php include "layout/nav.php"; ?>
  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Apple is awesome!</h1>
          <h2>Our Production</h2>
        </div>
      </div>
    </div>
  </div>
        <?php
             $results = $mysqli->query("SELECT id,name,description,price,image FROM kirill_shop_product;");

      while ($row = $results->fetch_assoc()) {
            ?>
            <div id="dg">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-4">
          <div class="tilt">
          <div align="center">
            <a href="description.php?id=<?=$row['id']?>"><img src="assets/img/<?=$row['image']?>" class="img-responsive" alt="products"></a>
          </div>
          
          </div>
        </div>
        <h3><?=$row["name"]?></a></h3>
        <h4><?=$row["price"]?> EUR</h4>
        </div>
        </div>
        </div>
      <?php } ?>
  

    
    <?php include "layout/footer.php" ?>
</body>
</html>