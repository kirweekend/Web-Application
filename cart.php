<!DOCTYPE html>
<html>
  <?php include "layout/head.php"; ?> 
  <body>
    <div class="page-wrap">
      <?php include "layout/nav.php"; ?>
      <div class="container" id="cart-products">
  <div id="error"></div>
        <?php
          if (isset($_POST["id"])){
            $product_id = intval($_POST["id"]);
            if (array_key_exists($product_id, $_SESSION["cart"])) {
              if ($_POST["quantity"] == "0"){
          unset($_SESSION["cart"][$product_id]);
        } else {
                $_SESSION["cart"][$product_id] += intval($_POST["quantity"]);

          if ($_SESSION["cart"][$product_id] == 0){
                  unset($_SESSION["cart"][$product_id]);
                }
              }
            } else {
               $_SESSION["cart"][$product_id] = intval($_POST["quantity"]);
            }
    }


    $results = $mysqli->query("SELECT * FROM kirill_shop_product;");
    $results or die("Database query failed" . $mysqli->error);
    $total = 0; 
          while($row = $results->fetch_assoc()) {
      $product_id = $row['id'];
      if(array_key_exists($product_id, $_SESSION["cart"])){
            $count = intval($_SESSION["cart"][$product_id]);
  
        if($count < 1){
                unset($_SESSION["cart"][$product_id]);
        } else {
          $subtotal = ($row['price']*$count);
          $total += $subtotal;
    ?>
  <div class="container product-item">
    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 cart-description">
            <br>
            <br>
            <br>
            <br>
            <br>
            <p>Item: <a href="description.php?id=<?=$product_id;?>"><?=$row['name']?></a></p>
            <p>Price:  <?=$row['price'];?>  <span class="glyphicon glyphicon-eur"></span> </p>
        <p>Quantity: <?=$count;?></p>
            <form method="post" action="cart.php">
        <input type="hidden" name="id" value="<?=$product_id;?>"/>
        <button type="submit" name="quantity" value="1"> + </button>
        <button type="submit" name="quantity" value="-1"> - </button>
        <button type="submit" name="quantity" value="0">Delete All</button>
      </form>
      <br>
    </div>
    
    
      <div class="thumbnail">
        <img src="assets/img/<?=$row['image']?>" class="img-responsive" alt="products">
      </div>
    
  
  </div>
  <hr />
    <?php
       }
     }
   }
       ?>
    </div>
    <div class="container" id="total-cart-price">     
      <form method="post" action="pages/order.php" id="order-form">
        Total: <?= number_format($total,2);?>
        <span class="glyphicon glyphicon-eur" id="desc-eur">  </span>
        <button type="submit" class="btn btn-link""><span class="glyphicon glyphicon-send"></span> &nbsp; Order</button>
      </form>
    </div>
    </div>
    <?php include "layout/footer.php" ?>
  </body>
</html>
