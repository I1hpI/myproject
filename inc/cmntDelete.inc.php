<?php 
	include 'db.inc.php';
	session_start();

	if (!isset($_SESSION['id'])) {
		header('Location: ../Login.php?login=loginRequired');
	} else {
        if($_SESSION['id'] != 1){
            header('Location: ../home.php?page=home');

        }
        if(!isset($_GET['uid'])){
            header('Location: ../home.php?page=home');
        } else {
            $uid = $_GET['uid'];
			$sql = "DELETE FROM cmnt WHERE id = '$uid' ;";
			$result = mysqli_query($conn, $sql);

				header('Location: ../adminpanel.php?Action=Sucess');
			}
		}
	

 ?>