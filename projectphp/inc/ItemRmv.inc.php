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
            $unm = $_GET['unm'];
			$sql = "DELETE FROM items WHERE id = '$uid' ;";
			$cSql = "DELETE FROM cmnt WHERE version = '$unm' ;";
			$result = mysqli_query($conn, $sql);
			$rsl = mysqli_query($conn, $cSql);
				unlink('../item/'.$unm.'.jpg');
				header('Location: ../adminpanel.php?Action=Sucess');
			}
		}
	

 ?>