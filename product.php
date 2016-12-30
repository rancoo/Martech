<!DOCTYPE html>
<head>
<?php session_start();
  include 'dbconn.php';
  $id=$_GET['id'];
  ?>
<meta charset="UTF-8" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title><?php $row['titulli'] ?></title>

<!-- CSS Part Start-->
<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="js/swipebox/src/css/swipebox.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />
<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Droid+Sans' type='text/css'>
</head>
<body>
<?php 
  include 'main_menu.php';
 ?>
  <div id="container">
  <div class="container">

      <div class="row">
        <!--Middle Part Start-->
        <?php

        $sql=mysql_query("SELECT * from produktet WHERE Id=$id");
        while ($row =mysql_fetch_array($sql)) 
        {
          $vlera = $row['disponueshmeria'];
          echo "<div id='content' class='col-sm-12'>
          <div itemscope itemtype='http://schema.org/Product'>
            <h1 class='title' itemprop='name'>".$row['emri']."</h1>
            <div class='row product-info'>
              <div class='col-sm-8'>
                <div class='image'><img class='img-responsive' itemprop='image' id='zoom_01' src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' data-zoom-image=".$row['foto']." width='80%' /> </div>";

                 if($row['disponueshmeria']==0)
                 {
                  echo "<div class='image-additional' id='gallery_01'> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'> <img src=".$row['foto']." title='".$row['emri']."' alt = '".$row['emri']."'/></a><img style='max-width:100%;position:absolute;top:-30px;left:-80px;opacity:.8;' src='image/eshitur.png'></img> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' /></a> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' /></a> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' />

                  </a> </div>
              </div>";
                 }
                 else
                 {
                  echo "<div class='image-additional' id='gallery_01'> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'> <img src=".$row['foto']." title='".$row['emri']."' alt = '".$row['emri']."'/></a> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' /></a> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' /></a> <a class='thumbnail' href='#' data-zoom-image=".$row['foto']." data-image=".$row['foto']." title='".$row['emri']."'><img src=".$row['foto']." title='".$row['emri']."' alt='".$row['emri']."' /></a> </div>
              </div>";
                 }
                
              echo"<div class='col-sm-4'>
                <ul class='list-unstyled description'>
                  <li><b>Prodhuesi:</b> <a href='#'><span itemprop='brand'>".$row['prodhuesi']."</span></a></li>";

                  if($row['disponueshmeria']>1)
                  {
                    echo "<li><b>Disponueshmëria:</b> <span class='instock'>Ne stok</span></li>";
                  }
                  else if ($row['disponueshmeria']==1)
                  {
                    echo "<li><b>Disponueshmëria:</b> <span style='background-color:purple' class='instock'>E Fundit</span></li>";
                  }
                  else
                  {
                     echo "<li><b>Disponueshmëria:</b> <span style='background-color:red;' class='instock'>E shitur</span></li>";
                  }
                  
              echo "</ul>
                <ul class='price-box'>
                  <li class='price' itemprop='offers' itemscope itemtype='http://schema.org/Offer'><!-- <span class='price-old'>€1,202.00</span> --> <span itemprop='price'>".$row['cmimi']." €<span itemprop='availability' content='In Stock'></span></span></li>
                  <li></li>
                
                </ul>
                <div id='product'>

                <div class='karakteristikat'>
                <ul>
                <li>
                <p>Ekran 5.3’’</p>
                </li>
                <li>
                <p>Rezolucion 2560 x 1440 Quad HD</p>
                </li>
                <li>
                <p>Procesor Qualcomm Snapdragon 820 64-bit</p>
                </li>
                <li>
                <p>RAM 4 GB</p>
                </li>
                <li>
                <p>Kamerë e pasme 16MP</p>
                </li>
                </div>
                
                  <div class='form-group required'>
                    <label class='control-label'>Ngjyra</label>
                    <select class='form-control' id='input-option200' name='option[200]'>
                      <option value=''> --- Please Select --- </option>
                      <option value='4'>Black </option>
                      <option value='3'>Silver </option>
                      <option value='1'>Green </option>
                      <option value='2'>Blue </option>
                    </select>
                  </div>
                  <div class='cart'>
                    <div>
                     
                      <button type='button' id='button-cart' class='btn btn-primary btn-lg'>Shto në shportë</button>
                    </div>
                  </div>
                  <center>
                  <div class='reklama' style='box-shadow: 1px 1px 4px  #888888;'>
                  <img src=image/reklama.gif>
                  </div></center>
                </div>
               
                <hr>
               </div>
            </div>
            <ul class='nav nav-tabs'>
              <li class='active'><a href='#tab-description' data-toggle='tab'>Description</a></li>
            </ul>
            <div class='tab-content'>
              <div itemprop='description' id='tab-description' class='tab-pane active'>
                <div>
                ".utf8_encode($row['descriptionfull'])."
                </div>
              </div>
          
               
                  
                </form>
              </div></div>
            </div></div></div>";       
        }      ?>

        
            <script>
// Elevate Zoom for Product Page image
$("#zoom_01").elevateZoom({
	gallery:'gallery_01',
	cursor: 'pointer',
	galleryActiveClass: 'active',
	imageCrossfade: true,
	zoomWindowFadeIn: 500,
	zoomWindowFadeOut: 500,
	lensFadeIn: 500,
	lensFadeOut: 500,
	loadingIcon: 'image/progress.gif'
	}); 
//////pass the images to swipebox
$("#zoom_01").bind("click", function(e) {
  var ez =   $('#zoom_01').data('elevateZoom');
	$.swipebox(ez.getGalleryList());
  return false;
});
</script>

<<?php include 'footer.php'; ?>
<!-- JS Part End-->
</body>
</html>