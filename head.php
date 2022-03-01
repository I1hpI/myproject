	<?php 
      session_start();
      include 'inc/db.inc.php';
   ?>

  <div class="topBar" id="top">
    <div class="soMi">
      
      
      <div class="slog" align="center">
        <a href="https://www.twitter.com"><img src="img/twitter.png" width="15px" height="15px"></a>
      </div>
      <div class="slog" align="center">
        <img src="img/pinterest.png" width="15px" height="15px">
      </div>
    
      <div class="slog" align="center">
        <img src="img/rss.png" width="15px" height="15px">
      </div>
      
    </div>
    <div class="usrMnu">
      <ul>
        <?php 
          if (!isset($_SESSION['unm'])) {
            echo '
              <li><a href="Signup.php">Sign Up</a></li>
              <li><a href="Login.php">Login</a></li>
            ';
          } else {
            echo '
              <li><a href=# style = "color:yellow ;">'.$_SESSION['unm'].'</a></li>
              <li><a href="inc/logout.inc.php">Logout</a></li>
            ';
          }
         ?>
      </ul>     
    </div>

    
  </div>

  <div class="headCover">
    <div class="logo"><font style="font-size: 26pt;"><font style="font-size: 45pt">Book</font>Bazar</font><div style="font-size: 12pt; display: inline-block; padding-left: 15px; border-left:1.5px #999 solid; margin-left: 15px; opacity: 0.5;">
      <br> E-Market
    </div></div>

    <div class="headForm">
      <form action="search.php" method="GET">
        <input type="text" name="search" placeholder="Search Our website"><button type="submit" name="submit">Search</button>       
      </form>
    </div>
    <div class="navigation">
          <?php
              if(!isset($_GET['page'])){
                
                echo '
                    <ul style="float:left;">
                    <li><a href="home.php?page=home">Home</a></li>
                    <li><a href="gallery.php?page=items">ITEMS</a></li>
                    </ul>
                    
                ';

                if (isset($_SESSION['id'])) {
                  if($_SESSION['id'] == 1){
                    echo '
                    <ul style="float:right; display:inline-block;margin-right:5px;">
                      <li><a href="adminpanel.php">Adminpanel</a></li>
                    </ul>
                    ';
                  } else {
                    echo '
                      <ul style="float:right; display:inline-block;margin-right:5px;">
                        <li><a href="cart.php?page=cart">Cart</a></li>
                      </ul>
                    ';
                  }
                } else {
                  echo '
                      <ul style="float:right; display:inline-block;margin-right:5px;">
                        <li><a href="cart.php?page=cart">Cart</a></li>
                      </ul>
                    ';
                }
              } else {
                 if($_GET['page'] == 'items'){
                    echo '
                    <ul style="float:left;">
                    <li><a href="home.php?page=home">Home</a></li>
                    <li  style="border-bottom: 2.5px #2AA2D4 solid;"><a href="gallery.php?page=items" style="color: white;">ITEMS</a></li>
                    </ul>
                    ';

                    if (isset($_SESSION['id'])) {
                      if($_SESSION['id'] == 1){
                        echo '
                        <ul style="float:right; display:inline-block;margin-right:5px;">
                          <li><a href="adminpanel.php">Adminpanel</a></li>
                        </ul>
                        ';
                      } else {
                        echo '
                          <ul style="float:right; display:inline-block;margin-right:5px;">
                            <li><a href="cart.php?page=cart">Cart</a></li>
                          </ul>
                        ';
                      }
                    } else {
                      echo '
                          <ul style="float:right; display:inline-block;margin-right:5px;">
                            <li><a href="cart.php?page=cart">Cart</a></li>
                          </ul>
                        ';
                    }
                    
                 } else if ($_GET['page'] == 'cart'){
                   echo'
                   <ul style="float:left;">
                   <li><a href="home.php?page=home">Home</a></li>
                   <li><a href="gallery.php?page=items">ITEMS</a></li>
                   </ul>
                   
                   ';
                   if (isset($_SESSION['id'])) {
                    if($_SESSION['id'] == 1){
                      echo '
                      <ul style="float:right; display:inline-block;margin-right:5px;">
                        <li><a href="adminpanel.php">Adminpanel</a></li>
                      </ul>
                      ';
                    } else {
                      echo '
                      <ul style="float:right; display:inline-block;margin-right:5px;">
                      <li style="border-bottom: 2.5px #2AA2D4 solid;"><a href="cart.php?page=cart"  style="color: white;">Cart</a></li>
                    </ul>
                      ';
                    }
                  } else {
                    echo '
                    <ul style="float:right; display:inline-block;margin-right:5px;">
                    <li style="border-bottom: 2.5px #2AA2D4 solid;"><a href="cart.php?page=cart"  style="color: white;">Cart</a></li>
                  </ul>
                      ';
                  }

                 }
              }
          ?>
        
      <div class="invv" id="sideDis">
        <img src="img/opt.png">
      </div>
    </div>
  </div>

  <nav id="sideBr">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="#">STYLE DEMO</a></li>
      <li><a href="#">FULL WIDTH</a></li>
      <li><a href="#">DROPDOWN</a></li>
      <li><a href="#">PORTFOLIO</a></li>
      <li><a href="gallery.php">ITEMS</a></li>
      <li><a href="#">LONG TEXT LINK</a></li>
    </ul>
  </nav>