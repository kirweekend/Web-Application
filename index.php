<!DOCTYPE html>
<html>
<?php include "layout/head.php"; ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
          <h2>Our Mobile Production</h2>
        </div>
      </div>
    </div>
  </div>
    <!-- PORTFOLIO SECTION -->
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
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- DG -->
  <?php include "layout/footer.php" ?>
</body>
</html>
