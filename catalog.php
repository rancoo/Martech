<!DOCTYPE html>
<html>
<head>
<?php session_start();
  include 'dbconn.php';
 ?>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Katalogu i produkteve</title>


<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />


</head>
<body>
<script type="text/javascript">
  $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>

<?php include 'main_menu.php'; ?>
    
    
          
          <div class="container">
          <h3 style="padding-bottom: 15px;">Katalogu i produkteve</h3>
        <div class="well well-sm" align="right">
            <strong>Katalogu i produkteve</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                    class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
        <div id="products" class="row list-group">
       
        <?php

        $sql=mysql_query("SELECT * from produktet");

        while ($row=mysql_fetch_array($sql)) 
        {
            echo "
            <div class='item  col-xs-4 col-lg-4'>
            <div class='thumbnail' >
                <img class='group list-group-image' src=".$row['foto']." alt='' />
                <div class='caption'>
                    <h4 class='group inner list-group-item-heading'>
                        ".$row['emri']."</h4>
                    <p class='group inner list-group-item-text'>
                        ".utf8_encode ($row['description'])."</p>
                    <div class='row'>
                        <div class='col-xs-12 col-md-6'>
                            <p class='lead'>
                                <b>".$row['cmimi']." €</b></p>
                        </div>
                        <div class='col-xs-12 col-md-6'>
                            <a class='btn btn-primary' href='product.php?id=".$row['Id']."' style='float:right;'>Shiko më shumë</a>
                        </div>
                    </div></div>
                </div>
            </div>";
        }
        ?>
        </div>
</div>
<center>
<div class="seshpejti" style="background-color:#aaa; width: 190px;">
            <b><p style="font-size: 35px; color:#fff" >...</p></b>
            <p style="color:#fff; font-size: 13px;">Së shpejti produkte të reja</p>
          </div>
          </center>
         
        
        
  <?php include 'footer.php'; ?>

</body>
</html>