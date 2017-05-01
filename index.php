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
          <h2>Our Mobile Production</h2>
        </div>
      </div>
    </div>
  </div>

  <div id="dg">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-4">
          <div class="tilt">
          <a href="#"><img src="assets/img/p01.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
          <a href="#"><img src="assets/img/p03.png" alt=""></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="tilt">
          <a href="#"><img src="assets/img/p02.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
    <ul>
        <?php
             $results = $mysqli->query("SELECT id,name,description,price FROM kirill_shop_product;");

      while ($row = $results->fetch_assoc()) {
            ?>
            <li>
              <a href="pages/description.php?id=<?=$row['id']?>">
          <?=$row["name"]?></a>
        <?=$row["description"] ?>
              <?=$row["price"]?> EUR
            </li>
      <?php } ?>
    </ul>
  <?php include "layout/footer.php" ?>
</body>
</html>
