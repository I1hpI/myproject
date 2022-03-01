<!DOCTYPE html>
<html>
<head>
	<title>Imagegallery</title>
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
    }
	</style>
</head>
<body>

<?php 
  include 'head.php';

	echo '<div class="bigbox" align="center">';

	include 'inc/db.inc.php';

	if (!isset($_GET['submit'])) {
		echo "Not Submitted yet";
	} else {
		$srch = $_GET['search'];
		if (empty($srch)) {
			header('Location: gallery.php?search=null');
		} else {
			$sql = "SELECT * FROM items WHERE i_name LIKE '%$srch%' OR i_vName LIKE '%$srch%' OR i_discription LIKE '%$srch%' OR i_price = '$srch';";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1) {
				echo "THERE is no such item";
			} else {
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
		}
	}
	echo "</div>";
 ?>
</body>
</html>
