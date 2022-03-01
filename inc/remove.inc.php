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

			$selSql = "SELECT * FROM items WHERE i_seller = '$unm' ;";
			$selResult = mysqli_query($conn, $selSql);

			if (mysqli_num_rows($selResult) >= 1) {
				while($r = mysqli_fetch_assoc($selResult)){
					unlink('../item/'.$r['i_vName'].'.jpg');
				}
			}

			$sql = "DELETE FROM users WHERE id = '$uid' ;";
			$cSql = "DELETE FROM cmnt WHERE unm = '$unm' ;";
			$iSql = "DELETE FROM items WHERE i_seller = '$unm' ;";
			$cartSql = "DELETE FROM cart WHERE unm = '$unm' ;";
			$result = mysqli_query($conn, $sql);
			$rst = mysqli_query($conn, $cSql);
			$rs = mysqli_query($conn, $iSql);
			$crs = mysqli_query($conn, $cartSql);

				header('Location: ../adminpanel.php?Action=Sucess');
			}
		}
	

 ?>