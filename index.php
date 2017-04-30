<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
    $('dropdown-toggle').dropdown()
});
</script> 
<body>
  <?php include "layout/nav.php"; ?>
  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Apple is awesome!</h1>
          <h2>New MacBook Pro already in!</h2>
        </div>
      </div>
    </div>
  </div>
  <?php include "layout/footer.php" ?>
</body>
</html>
