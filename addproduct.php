<!DOCTYPE html>
<html>
  <?php include "layout/head.php"; ?>  
  <body>
    <div class="page-wrap">
      <?php include "layout/nav.php"; ?>
      <div class="container">
    <div class="add-product">
      <div class="container">
      <?php
      if (array_key_exists("admin", $_SESSION)) { ?>    
        <form class="product-add" method="post" id="product-form" enctype="multipart/form-data" action="pages/add.php">
          <h2 class="form-signin-heading">Add new Product</h2><hr />
          <div id="error">
          </div>
          <div class="form-group">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" id="image" required/>
              </div>
          <div class="form-group">
        <label for="author">Name</label>
        <input type="text" class="form-control" name="name" id="name" required/>
              </div>
          <div class="form-group">
        <label for="price">Price</label>
        <input type="number" step="1" class="form-control" name="price" id="price" required/>
              </div>
          <div class="form-group">
        <label for="description">Description</label>
        <textarea rows="4" class="form-control" name="description" id="description" required></textarea>
              </div>
          <hr />
              <div class="form-group">
                <button type="reset" class="btn btn-default" name="btn-reset" id="btn-reset" aria-label="Reset form">
                <span class="glyphicon glyphicon-remove"></span> &nbsp; Reset
                </button> 
        <button type="submit" class="btn btn-default" name="btn-submit" id="btn-submit" aria-label="Submit form">
          <span class="glyphicon glyphicon-send" aria-hidden="true"></span> &nbsp; Submit
        </button> 
              </div>
        </form>
            <?php } else {
          header("Location: products.php");
         }?>
          </div>
    </div>
      </div>
    </div>
    <?php include "layout/footer.php" ?>
  </body>
</html>