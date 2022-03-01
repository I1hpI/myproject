<?php
	session_start();
	include 'db.inc.php';


	if (!isset($_POST['submit'])) {
		header('Location: ../gallery.php?upload=fileRequired');
	} else {
		$usr = $_SESSION['unm'];
		$nam = $_POST['name'];
		$ver = $_POST['version'];
		$floc = $_FILES['itm']['tmp_name'];
		$dis = $_POST['discription'];
		$pri = $_POST['price'];
		$fname = $ver.'.jpg';
		if (empty($nam) || empty($ver) || empty($floc)) {
			header('Location: ../gallery.php?upload=notFilled');
		} else {
			move_uploaded_file($floc, '../item/'.$fname);

			$sql = "INSERT INTO items (i_name , i_vName , i_discription , i_price, i_seller) VALUE ('$nam' , '$ver' , '$dis' , '$pri' , '$usr') ;";
			$result = mysqli_query($conn , $sql) or die("CONNECTION ERROR...");

			header('Location: ../gallery.php?upload=sucess');
		}
	}

?>