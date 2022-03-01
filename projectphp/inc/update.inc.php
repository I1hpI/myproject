<?php
    session_start();
	include 'db.inc.php';


	if (!isset($_POST['submit'])) {
		header('Location: ../gallery.php?upload=fileRequired');
	} else {
        $unm = $_SESSION['unm'];
		$nam = $_POST['nam'];
		$ver = $_POST['ver'];
		$dis = $_POST['dis'];
		$pri = $_POST['price'];
		if (empty($nam) || empty($ver) || empty($pri) || empty($dis)) {
			header('Location: ../gallery.php?upload=notFilled');
		} else {

			$sql = "UPDATE items SET i_name = '$nam' , i_vName = '$ver' , i_discription = '$dis' , i_price = '$pri' WHERE i_vName = '$ver';";
			$result = mysqli_query($conn , $sql) or die("CONNECTION ERROR...");

			header('Location: ../item.php?update=sucess&version='.$ver.'&seller='.$unm);
		}
	}
 ?>