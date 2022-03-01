<!DOCTYPE html>
<html>
<head>
	<title>ITEMS</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
	<title>Imagegallery</title>
	<link rel="stylesheet"  href="style.css">
	<style type="text/css">
		.headCover {
		    background:url("img/books.jpg");
		    background-size: 100%;
		    background-position:  120px;
		 	height: 170px;
 		} #upd {
      display: block;
      margin-top: 20px;
    } #upd input {
        width: 100px;
        color: red;
    } #ubtn {
      margin-top: 5px;
      color:white;
      background-color: red;
      border-radius: 5px;
      border:none;
      padding: 5px;
      padding-right: 10px;
      padding-left: 10px;
    }#upd input[type = 'text'] , #upd textarea{
      margin-bottom: 5.5px;
      width: 200px;
      background-color: black;
      outline: none;
      border:none;
      padding: 5px;
      border-radius: 5px;
      color:white;
    } #upd textarea {
      width:300px;
      height: 100px;
      color:white;
    } #upd textarea:focus , #upd input:focus{
      border:solid 1px;
      border-color: blue;
    } #itemCont {
    	font-size: 15pt;
    	border:1px solid black;
    	border-radius: 10px;
    	float: right;
    	width: 400px;
    	padding-left: 50px;
    	padding-right: 50px;
    	text-align: center;
    	margin-bottom: 50px;
    	margin-right: 500px;
    	margin-top: 50px;
    	padding-top: 15px;
    	padding-bottom: 90px;
    } #itemD {
    	float: left;
    	font-size: 13pt;
    } #itemD , #itemCont {
    	display: inline-block;
    } #itemD img {
    	margin-top: 15px;
    	margin-left: 40px;
    	width: 300px;
    	height: 400px;
    } #container {
    	position: relative;
    	width: 100%;
    	height: 35em;
    	padding-top: 30px;
    	padding-left: 200px;
    } #buy {
    	position: absolute;
    	right: 500px;
    	top: 10px;
    	color: white;
    	
    	font-size: 15pt;
    } #buy button{
      color:white;
    	background-color: red;
      border:none;
    	padding: 5px 10px;
    	outline: none;
    	cursor: pointer; 
    	border-radius: 10px;
    } #buy a{
      text-decoration:none;
      color:white;
      
    } .cmtSec {
    	color: white;
    	display: block;
    	width: 100%;
    	background-color: #222;
    	padding-left: 200px;
    	padding-top: 15px;
    	padding-bottom: 20px;
    } .cmtSec textarea {
    	width: 74%;
    	height: 100px;
    	outline: none;
    	border:none;
    	border-radius: 15px;
    	color: black;
    	padding: 15px;
    	font-size: 13pt;
    } .cmtSec button {
    	padding: 10px 15px;
    	outline: none;
    	border:none;
    	border-radius: 15px;
    	background-color: red;
    	color: white;
    	font-size: 13pt;
    } .cmtBox {

    	letter-spacing: 2pt;
    	margin-bottom: 15px;
    	border:1px solid black;
    	width: 74%;
    	padding: 15px;
    	border-radius: 15px;
    	background-color: #333;
    } .cmtHead {
    	cursor: pointer;
    	padding-bottom: 5px;
    	color: blue;
    	border-bottom: 1px solid black;
    }  .cmtBdy {
    	color: white;
    	padding-top: 6px;
    	display: block;
    } .labl {
      color: red;
    }


    @media (max-width: 1450px){
    	#container{
    		padding:0;
    	}
    	#itemD {
    		display: none;
    	} .cmtSec {
    		padding-left: 5%;
    	} #itemCont {
    		float:none;
    		margin-left: 15%;
    	} #buy {
    		position: relative;
    		top:-360px;
    		right: 0;
    	} 
    } @media (max-width: 1050px) {
      #buy {
    		position: relative;
    		top:-260px;
    		right: 0;
    	} 
    }  @media (max-width: 715px) {
      #buy {
    		position: relative;
    		top:-160px;
    		right: 0;
    	} 
    }
	</style>
</head>
<body>
<?php 
  include 'head.php';
  echo "<div id = 'container'>";

  if (!isset($_GET['version'])) {
  	header('Location: gallery.php?item=notSet?page=items');
  } else {
  	$verN = $_GET['version'];
  	$sql = "SELECT * FROM items WHERE i_vName = '$verN' ;";
  	$result = mysqli_query($conn, $sql) or die("CONNECTION ERROR...");

  	while ($r = mysqli_fetch_assoc($result)) {
  		echo "<div id='itemD'>";
  		echo "<b>";
  		echo "<img src='item/".$r['i_vName'].".jpg'><br>";
  		echo "<span class='labl'>PRODUCT NAME: </span>". $r['i_name']."<br>";
  		echo "<span class='labl'>PRODUCT VERSION:</span> ".$r['i_vName']."<br>";
  		echo "<span class='labl'>PRICE: </span>$".$r['i_price'];
      $p = $r['i_price'];
  		echo "</b>";
  		echo "</div>";
  		echo "<div id='itemCont'><h2>DESCRIPTION</h2>".$r['i_discription']."
  		<div align='left'>
  			<br><br>For more info view <a href='http://www.".$r['i_name'].".com'>http://www.".$r['i_name'].".com
  		</a></div>
  		</div>";
  	}
  }
 ?>
<div id="buy" style="margin-top: 30%; margin-bottom: 20px;">
  <?php 
  if (isset($_SESSION['unm'])) {
    if(isset($_GET['seller'])){
      if($_GET['seller'] == $_SESSION['unm']){
        echo '
          
            <button id="dltBtn"><a href = "inc/del.inc.php?version='.$_GET['version'].'">DELETE</a></button>
            <button id="updBtn"><a href = "inc/upd.inc.php?version='.$_GET['version'].'">UPDATE</a></button>
        
            ';
      } else {
        $v = $_GET['version'];
        echo '
        <form action="https://uat.esewa.com.np/epay/main" method="POST">
          <input value="'.$total.'" name="tAmt" type="hidden">
          <input value="'.$total.'" name="amt" type="hidden">
          <input value="0" name="txAmt" type="hidden">
          <input value="0" name="psc" type="hidden">
          <input value="0" name="pdc" type="hidden">
          <input value="EPAYTEST" name="scd" type="hidden">
          <input value="'.$_SESSION['unm'].rand(0,1000).'" name="pid" type="hidden">
          <input value="http://localhost//SoftwareEngProj/inc/buyCart.php?q=su" type="hidden" name="su">
          <input value="http://localhost//SoftwareEngProj/fail.php?q=fu" type="hidden" name="fu">
          <input value="Buy" type="submit" class="sus">
          </form>  
        <button id="addToCart"><a href="inc/addCart.php?version='.$v.'&price='.$p.'" style="text-decoration:none; color:white;">+ Cart</a></button>
        ';
      }
    }
  }else {
    $v = $_GET['version'];
    echo '
    <form action="https://uat.esewa.com.np/epay/main" method="POST">
<input value="'.$total.'" name="tAmt" type="hidden">
<input value="'.$total.'" name="amt" type="hidden">
<input value="0" name="txAmt" type="hidden">
<input value="0" name="psc" type="hidden">
<input value="0" name="pdc" type="hidden">
<input value="EPAYTEST" name="scd" type="hidden">
<input value="'.$_SESSION['unm'].rand(0,1000).'" name="pid" type="hidden">
<input value="http://localhost//SoftwareEngProj/inc/buyCart.php?q=su" type="hidden" name="su">
<input value="http://localhost//SoftwareEngProj/fail.php?q=fu" type="hidden" name="fu">
<input value="Confirm" type="submit" class="sus">
</form>
';
        
  }
    
  ?>
 </div>
</div>

<div class="cmtSec">
 		<h2>COMMENTS...</h2>
 		<form action = <?php echo "inc/comment.inc.php?version=".$verN ?> method="POST">
 			<textarea name="cmt"></textarea>
			<button type="submit" style="cursor:pointer;">submit</button>
 		</form>
 		<?php
 			$verN = $_GET['version'];
 			$sql = "SELECT * FROM cmnt WHERE version = '$verN' ;";
 			$result = mysqli_query($conn , $sql);

 			if (mysqli_num_rows($result) < 1) {
 				echo '
 					<div class="cmnts">
 			<div class="cmtBox">
 				<div class="cmtBdy">
 					Be the first to comment.
 				</div>
 			</div>
 		</div>
 				';
 			} else {
 				while ($r = mysqli_fetch_assoc($result)) {
 					echo '
 						<div class="cmnts">
 			<div class="cmtBox">
 				<div class="cmtHead">
 				'.$r['unm'].'
 				</div>
 				<div class="cmtBdy">
 					'.$r['cmt'].'
 				</div>
 			</div>
 		</div>
 					';
 				}
 			}
 		?>

 </div>



<div class="footer">
    <div class="scroll" align="center">
      <a href="#top"><img src="img/Arrow.png" width="110px" height="40px"></a><br>
      <font style="font-size: 12pt;position: absolute; bottom: 7.5px; right: 49%;">Top</font>
    </div>
    <div class="ftdvs">
      <div class="fd">
        Company Details<br><br>
        <div class="dtls">
          This is not a official company but a bunch of people who shares a special bond working together.<br><br>
          PrimeUnited<br>
          Nayabazar<br>
          Kathmandu<br><br>
          Tel: 014412412<br>
          Fax: 69940030<br>
          email:primium@utd.com
        </div>
      </div>
      <div class="fd">
        Latest Blog Post<br>
        <div class="fdDv">
          <img src="img/o1.jpg" width="48px" height="48px">
          Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
          friday,6th april 2000
        </div>
        <div class="fdDv">
          <img src="img/o1.jpg" width="48px" height="48px">
          Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
          friday,6th april 2000
        </div>
        <div class="fdDv">
          <img src="img/o1.jpg" width="48px" height="48px">
          Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
          friday,6th april 2000
        </div>
      </div>
      <div class="fd">
        Quick <br><br>
        <ul type="circle">
          <li><a href="#">ICT MEETUP 8</a></li>
          <li><a href="#">ICT MEETUP 7</a></li>
          <li><a href="#">AI convension</a></li>
          <li><a href="#">Sports week</a></li>
          <li><a href="#">Winter School</a></li>
          <li><a href="#">Cyber Security</a></li>
        </ul>
      </div>
      <div class="fd">
        Contact us<br><br>
        <form >
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="eml" placeholder="Email"><br>
            <textarea rows="6" cols="36" placeholder="Messege" ></textarea> <br>
            <button type="submit" name="submit">SUBMIT</button>
        </form>
      </div>
      <div class="fd" id="smlDis">
        <font style="cursor: pointer;" id="s1">Company Details</font><br>
        <font style="cursor: pointer;" id="s2">Latest Blog Post</font><br>
        <font style="cursor: pointer;" id="s3">Ouick</font><br>
        <font style="cursor: pointer;" id="s4">contact us</font><br>
      </div>
      <div class="fd" id="smlDis2">
        <div>
          <div id="d1">
              Company Details<br><br>
                    <div class="dtls">
                      This is not a official company but someone who likes developing websites.<br><br>
                      BookBazar<br>
                      Nayabazar<br>
                      Kathmandu<br><br>
                      Tel: 014412412<br>
                      Fax: 69940030<br>
                      email:prime@gmail.com
                    </div>
            </div>

            <div id="d2">
              Latest Blog Post<br>
                    <div class="fdDv">
                      <img src="img/o1.jpg" width="48px" height="48px">
                      Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
                      friday,6th april 2000
                    </div>
                    <div class="fdDv">
                      <img src="img/o1.jpg" width="48px" height="48px">
                      Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
                      friday,6th april 2000
                    </div>
                    <div class="fdDv">
                      <img src="img/o1.jpg" width="48px" height="48px">
                      Nulla facilisi. Ut fringilla.Suspendisse potenti.<br>
                      friday,6th april 2000
                    </div>
            </div>

            <div id="d3">
              Quick <br><br>
                    <ul type="circle">
                      <li><a href="#">ICT MEETUP 8</a></li>
                      <li><a href="#">ICT MEETUP 7</a></li>
                      <li><a href="#">AI convension</a></li>
                      <li><a href="#">Sports week</a></li>
                      <li><a href="#">Winter School</a></li>
                      <li><a href="#">Cyber Security</a></li>
                    </ul>
            </div>

            <div id="d4">
              Contact us<br><br>
                    <form>
                        <input type="text" name="name" placeholder="Name"><br>
                        <input type="email" name="eml" placeholder="Email"><br>
                        <textarea rows="6" cols="36" placeholder="Messege" ></textarea> <br>
                        <button type="submit" name="submit">SUBMIT</button>
                    </form>
            </div>  
        </div>
      </div>
    </div>
    <div class="ft">
      <div class="cpy">
          Copyright 
      </div>
      <div class="by">
        Bookbazar
      </div>
    </div>
</div>



 <script type="text/javascript">

 	<?php 
		if (isset($_GET['cmt'])) {
			if ($_GET['cmt'] == 'notLoggedIn') {
				echo 'alert("You are not Logged IN")';
			}
		}
	 ?>
 	
 	buyBtn.addEventListener("click",function(){
     <?php
        if(!isset($_SESSION['unm'])){
          echo'alert("login first");';
        } else {
          /*
          $to = "timrock1@live.com";
          $subject= "testing mail";
          $messege =  "this mail is sent using the php mail function";
          $headers = "From: anujsthapit@gmail.com";

           if (!mail($to,$subject,$messege,$headers)) {
              echo"alert('Connection error...');";
           } else {
             
               echo "alert('Item Bought');";
  
           }
           */
         


        }
      ?>
 	});


 </script>
<script type="text/javascript" src="script.js"></script>


</body>
</html>