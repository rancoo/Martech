<!DOCTYPE html>
<html>
<head>
<?php session_start(); ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Login</title>
<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
<!-- CSS Part End-->
</head>
<body>
<?php 
  include 'main_menu.php';
 ?>

  <div id="container">
    <div class="container">
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">Kyçu</h1>
          <div class="row">
            <div class="col-sm-6">
              <h2 class="subtitle">Nuk keni llogari ?</h2>
              <p><strong>Regjistrohu</strong></p>
              <p>Me krijimin e llogarisë ju do të përfitoni lajmërime për çdo ofertë të re !</p>
              <a href="register.html" class="btn btn-primary">Regjistrohu</a> </div>
            <div class="col-sm-6">
              <h2 class="subtitle">Kyçu</h2>
                <div class="form-group">
                <form method="POST" action="loginform.php">
                  <label class="control-label" for="input-email">E-Mail Address</label>
                  <input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control" />
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-password">Password</label>
                  <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control" />
                  <br />
                  <div class="infobox"><p></p></div>
                  <a href="#">Forgotten Password</a></div>
                <input type="submit" value="Kyçu" class="btn btn-primary"  />
                </form>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        
      </div>
    </div>
  </div>
  <?php 
    include 'footer.php';
  ?>
</body>
</html>