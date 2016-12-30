<!DOCTYPE html>
<html>
<head>
<?php session_start();
  include 'dbconn.php';
 ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="image/favicon.png" rel="icon" />
<title>Martech</title>

<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/stylesheet-skin2.css" />

</head>
<body>
<?php include 'main_menu.php'; ?>
  <div id="container">
    
    <div class="container">
      <div class="row">
        
        <div id="content" class="col-xs-12">
         
          <div class="slideshow single-slider owl-carousel">
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-3.png" alt="banner 3" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.png" alt="banner 2" /></a> </div>
            <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.png" alt="banner 1" /></a> </div>
          </div>
         
          <div id="product-tab" class="product-tab">
  <ul id="tabs" class="tabs">
    <li><a href="#tab-featured">Rekomandimet</a></li>
    <li><a href="#tab-ofertat">Ofertat</a></li>
  </ul>
  <div id="tab-featured" class="tab_content">
      <div class="owl-carousel product_carousel_tab">
            <div class="product-thumb clearfix">
            
              <div class="image"><a href="#"><img src="image/product/a/product1.jpg" alt="HP All in One 22-a150qe" title="HP All in One 22-a150qe" class="img-responsive" /></a></div>
              <div class="simpleCart_shelfItem">
                <h4><a href="#">HP All in One 22-a150qe</a></h4>
                <p class="price"><span class="item_price">€639.00</span> <span class="price-old">€699.00</span><span class="saving">-10%</span></p>
                <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/a/product2.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">HP Officejet Pro X476dw</a></h4>
                <p class="price"> <span class="item_price">€230.00</span> <span class="price-old">€241.99</span> <span class="saving">-5%</span> </p>
              </div>
              <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/a/product5.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Lenovo Tab 2 A7-20</a></h4>
                <p class="price"> <span class="item_price">€90.10</span></p>
              </div>
             <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/a/product3.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">iPhone7 32GB</a></h4>
                <p class="price"> €890.00 </p>
              </div>
             <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/a/prodcut4.jpg" alt="Asus" title="Asus" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">Asus NB X751LB-TY231D</a></h4>
                <p class="price"> €715.00 </p>
              </div>
             <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="#"><img src="image/product/a/product3.jpg" alt="iPhone5" title="iPhone5" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="#">iPhone7 32GB</a></h4>
                <p class="price"> €890.00 </p>
              </div>
            <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
            </div>
          </div>
  </div>
  

  <div id="tab-ofertat" class="tab_content">
    <div class="owl-carousel product_carousel_tab">
                  <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/a/product6.jpg" alt="Acer Monitor" title="Acer Monitor" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">Acer Monitor 21.5"</a></h4>
                      <p class="price"> <span class="item_price">€137.70</span> <span class="price-old">€162.00</span> <span class="saving">-15%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
                  </div>
                  <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/a/prodcut7.jpg" alt="Acer Laptop" title="Acer Laptop" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">ACER NB Aspire ES1-531</a></h4>
                      <p class="price"> <span class="item_price">€221.35</span> <span class="price-old">€233.00</span> <span class="saving">-5%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
                  </div>
                   <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/a/product8.jpg" alt="HP Backpack 16"" title="HP Backpack 16"" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">HP Backpack 16"</a></h4>
                      <p class="price"> <span class="item_price">€36.00</span> <span class="price-old">€40.00</span> <span class="saving">-10%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
                  </div>
                   <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/a/product9.jpg" alt="Asus Tablet ME302C" title="Asus Tablet ME302C" class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">Asus Tablet ME302C</a></h4>
                      <p class="price"> <span class="item_price">€247.97</span> <span class="price-old">€270.29</span> <span class="saving">-15%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
                  </div>
                   <div class="product-thumb">
                    <div class="image"><a href="#"><img src="image/product/a/product10.jpg" alt="HDMI - MINI HDMI " title="HDMI - MINI HDMI " class="img-responsive" /></a></div>
                    <div class="caption">
                      <h4><a href="#">HDMI - MINI HDMI kabell</a></h4>
                      <p class="price"> <span class="item_price">€3.54</span> <span class="price-old">€5.46</span> <span class="saving">-20%</span> </p>
                    </div>
                    <div class="button-group">
                      <button class="btn-primary" type="button" onClick=""><span>Shto në shportë</span></button>
         
                    </div>
                  </div>
                </div>
  </div>
</div>  
          <div class="marketshop-banner">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-4-600x250.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-5-600x250.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>
            </div>
          </div>
          
           <h3 class="subtitle">Partnerët</a></h3>
          <div id="carousel" class="owl-carousel nxt">

            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri1.png" alt="smsng" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri2.png" alt="apple" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri3.png" alt="Canon" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img  style="width: 70%;" src="image/partneret/partneri4.jpg" alt="Apple" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri5.png"alt="HTC" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri6.png" alt="Hewlett-Packard" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;" src="image/partneret/partneri7.png" alt="brand" class="img-responsive" /></a> </div>
            <div class="item text-center"> <a href="#"><img style="width: 70%;"src="image/partneret/partneri8.jpg" alt="brand1" class="img-responsive" /></a> </div>
          </div>
          
        </div>
 
      </div>
    </div>
  </div>

    <div class="container">
      <div class="custom-feature-box row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_1">
            <div class="title">Transport Falas</div>
            <p>Transport falas për blerjet mbi 150€ </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_2">
            <div class="title">Pagesa të sigurta</div>
            <p>Pagesa me kartelë apo me para në dorë</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_3">
            <div class="title">Produkte të reja</div>
            <p>Produkte të reja me garancion </p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="feature-box fbox_4">
            <div class="title">Fitoni Pikë</div>
            <p>Fito dhe shpenzo pikë bonus</p>
          </div>
        </div>
      </div>
    </div>

 <?php include 'footer.php'; ?>

</body>
</html>
