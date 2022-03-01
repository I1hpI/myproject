<!DOCTYPE html>
<html>
<head>
	<title>ITEMS</title>
	<link rel="stylesheet"  href="style.css">
	<style type="text/css">
		.headCover {
	background:url("img/books.jpg");
  z-index: 10;
  position: relative;
  width: 100%;
  padding-top: 40px;
  padding-bottom: 90px;
  margin: 0;
  background-size: 100%;
    background-position:  0em;
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
    } button:hover {
      cursor:pointer;
    } 
	</style>
</head>
<body>

<?php 
  include 'head.php';
 ?>





	<div class="bigbox" align="center">
		
		  <?php 
          $sql = "SELECT * FROM items";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) < 1) {
            echo "<h1> NO ITEMS FOR SELL</h1>";
          }  else {
            while($r = mysqli_fetch_assoc($result)){
             echo '
                <div class="box">
                <a href="item.php?version='.$r['i_vName'].'&seller='.$r['i_seller'].'">
                  <div class="immg">
                    <img src="item/'.$r['i_vName'].'.jpg">
                    <div class="smt">
                      <div class="caption">
                        '.$r['i_vName'].'<br>
                        '.$r['i_price'].'
                      </div>
                    </div>
                  </div>
                  </a>
                </div>
             ';
            }
          }

          if (isset($_SESSION['unm'])) {
            if ($_SESSION['typ'] == 'Seller') {
              echo '
                <br>
                <br>
                <h2>UPLOAD YOUR ITEM</h2>
                <form action="inc/upload.inc.php" method="POST" enctype="multipart/form-data" id="upd">
                    <input type="text" name="name" placeholder="ITEM NAME"><br>
                    <input type="text" name="version" placeholder="VERSION NAME"><br>
                    <input type="text" name="price" placeholder="PRICE in $"><br>
                    <textarea name="discription">DISCRIPTION</textarea><br>
                    <input type="file" name="itm"><br>
                    <button type="submit" name = "submit" id="ubtn">Post</button>
                </form>
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
                      This is not a official company but someone who like writing code.<br><br>
                      BookBazar<br>
                      Nayabazar<br>
                      Kathmandu<br><br>
                      Tel: 014412412<br>
                      Fax: 69940030<br>
                      email:bookbazar@gmail.com
                    </div>
            </div>

            <div id="d2">
              Latest Brand Available<br>
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
        BookBazar
      </div>
    </div>
</div>

<?php 
    include 'popup.php';
 ?>
<script type="text/javascript" src="script.js"></script>

</body>
</html>