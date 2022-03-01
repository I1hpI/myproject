<?php 
	include 'db.inc.php';
	session_start();


		$ver = $_GET['version'];
	if (!isset($_SESSION['unm'])) {
		header('Location: ../item.php?cmt=notLoggedIn&version='.$ver);
	} else {
		$cmt = $_POST['cmt'];
		$unm = $_SESSION['unm'];
		if (empty($cmt)) {
			header('Location: ../item.php?cmt=empty&version='.$ver);
			exit();
		}  else {
			$sql = "INSERT INTO cmnt (unm , cmt , version) VALUE ('$unm' , '$cmt' , '$ver') ;";
			$result = mysqli_query($conn , $sql) or die("Connection Error...");

			header('Location: ../item.php?version='.$ver);
		}
	}
 ?>