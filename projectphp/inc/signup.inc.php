<?php 
	session_start();
	include 'db.inc.php';


	if (!isset($_POST['submit'])) {
		echo "cant view this page";
	} else {
		$unm = $_POST['unm'];
		$eml = $_POST['eml'];
		$pwd = $_POST['pwd'];
		$typ = $_POST['typ'];
		$phn = $_POST['phn'];

		if (empty($unm) || empty($eml) || empty($pwd) || empty($typ)||empty($phn)) {
			header('Location: ../Signup.php?signup=notFilledProperly');
			exit();
		} else {
			if (!is_numeric($phn)) {
				header('Location: ../signup.php');
				die();
			} else if(strlen($phn) != 10) {
				header('Location: ../signup.php');
				die();
			}
			$phn = abs($phn);
			$s = "SELECT * FROM users WHERE unm = '$unm' ;";
			$rst = mysqli_query($conn, $s) or die("connection error");

			if(mysqli_num_rows($rst) > 0) {
				die("this username is already taken");
			} else {
				$sql = "INSERT INTO users (unm , eml , type , pwd, phn) VALUE ('$unm' , '$eml' , '$typ' , '$pwd','$phn' ) ;";
				$result = mysqli_query($conn, $sql) or die("connection error");

				header('Location: ../home.php?signup=Sucess');	
			}
			
		}
	}
 ?>