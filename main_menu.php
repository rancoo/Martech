<div class="wrapper-wide">
  <div id="header">

    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>+377 44 835 883</li>
                <li class="email"><a href="mailto:info@martech.com"><i class="fa fa-envelope"></i>info@martech.com</a></li>
              </ul>
            </div>
          </div>
          <div id="top-links" class="nav pull-right flip">
            <ul>
            <?php 

              if(isset($_SESSION['sess'])) {
           echo "<li><a href='index.php' style='color:#c68d1e; pointer-events:none;'>". $_SESSION['sess']."</a></li>";
           echo "<li><a href='logout.php'>Logout</a></li>";
                  }
              else
              {
                echo "<li><a href='login.php'>Login</a></li>
              <li><a href='register.php'>Register</a></li>";
              }
             ?>
           </ul>
          </div>
        </div>
      </div>
    </nav>

    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="index.php"><img class="img-responsive"  width="40%" src="image/logo.png" title="Martech" alt="Martech" /></a></div>
          </div>
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">

              <?php 
              if(isset($_SESSION['sess']))
              {
                echo "<div class='simpleCart_total' style='float: left; margin-top: 8px; margin-right: 8px; color:#c68d1e'></div>";
                echo " <span class='cart-icon pull-left flip'></span>
                        <span id='cart-total'></span></button>";
              }
              else
              {
                 echo " <span class='cart-icon pull-left flip'></span>
                        <span id='cart-total'>Shporta</span></button>"; 
              }

               ?>
              
               <!--  You have <span class="simpleCart_quantity"></span> items in your Cart.
Cart total: <div class="simpleCart_total"></div>

 <a href="javascript:;" class="simpleCart_checkout">Checkout</a>
<a href="javascript:;" class="simpleCart_empty">Empty</a> -->
            <!--   <span class="cart-icon pull-left flip"></span>
              <span id="cart-total">Shporta</span></button> -->
            </div>
          </div>
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>
      </div>
    </header>
    
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
        <div class="container">
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="Home" href="index.php">Home</a></li>
             <li class="category_link"><a href="catalog.php">Katalogu i produkteve</a>
            <li class="dropdown"> <a href="category.php">Kompjuter</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li> <a href="category.php">PC</a>
                      </li>
                      <li> <a href="category.php">Shtëpizë</a>
                      </li>
                      <li> <a href="category.php">Monitor</a>
                      </li>
                      <li><a href="category.php">Servera</a>
                      </li>
                    </ul>
                  </div>
                </li>
            <li class="dropdown"><a href="category.php">Laptop</a>
              <div class="dropdown-menu">
              <ul>
                      <li><a href="category.php">Acer</a>
                        
                      </li>
                      <li><a href="category.php" >Apple</a> </li>
                      <li><a href="category.php">Asus</a>
                      </li>
                      <li><a href="category.php">Dell</a></li>
                      <li><a href="category.php">HP</a></li>
                    </ul>
              </div>
            </li>
                <li class="dropdown"><a href="category.php">Telefon</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li><a href="category.php">Samsung</a> </li>
                      <li><a href="category.php">Apple</a>
                      </li>
                      <li><a href="category.php">LG</a> </li>
                      <li><a href="category.php">Sony</a> </li>
                      <li><a href="category.php">HTC</a> </li>
                      <li><a href="category.php">Microsoft</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="custom-link"> <a href="category.php">Tablet</a>
                </li>
                <li class="dropdown"><a href="category.php">AKSESORË</a>
                  <div class="dropdown-menu">
                    <ul>
                      <li> <a href="category.php">Cases</a></li>
                      <li> <a href="category.php">Power Bank</a></li>
                      <li> <a href="category.php">Screen Protectors</a></li>
                      <li> <a href="category.php">Bateries</a></li>
                      <li> <a href="category.php">Cables</a></li>
                      <li> <a href="category.php">Storage</a></li>
                    </ul>
                  </div>
                </li>
            <li class="rreth_nesh"><a href="#">Rreth Nesh</a>
            </li>
            <li class="kontakti"><a>Kontakti</a>
            </li>
           </ul>
        </div>
        </div>
      </nav>
    
  </div>