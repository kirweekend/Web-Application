<!DOCTYPE html>
<html>
<head>
  <title>Flower Boutique</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <meta name="viewport" content="width=device-width, initial-scal=1, user-scalable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Top Nav Bar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Flower Boutique</a>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Flowers<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Roses</a></li>
            <li><a href="#">Tulips</a></li>
            <li><a href="#">Strawberry</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Header -->
  <div id="headerWrapper">
    <div id="back-flower"></div>
    <div id="logotext"></div>
  </div>

<script>
  jQuery(window).scroll(function(){
    var vscroll = jQuery(this.)scrollTop();
    jQuery('#logotext').css({
      "transform" : "translate(0px, "+vscroll/2+"px)"
    });

    var vscroll = jQuery(this.)scrollTop();
    jQuery('#back-flower').css({
      "transform" : "translate(0px, "+vscroll/12+"px)"
    });
  });
</script>
</body>
</html>
