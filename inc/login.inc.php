<?php 
	include 'db.inc.php';
	session_start();
	
	if (!isset($_POST['submit'])) {
		header('Location: ../Login.php?login=loginRequired');
	} else {
		$unm = $_POST['unm'];
		$pwd = $_POST['pwd'];

		if (empty($unm) || empty($pwd)) {
			header('Location: ../Login.php?login=notFilled');
			exit();
		} else {
			$sql = "SELECT * FROM users WHERE unm = '$unm' and pwd = '$pwd' ;";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1) {
				echo "this user name doesnot exist";
			} else {
				while($r = mysqli_fetch_assoc($result)){
					$_SESSION['typ'] = $r['type'];
					$_SESSION['id'] = $r['id'];
				}
				$_SESSION['unm'] = $unm;

				header('Location: ../home.php?login=sucess');
			}
		}
	}

 ?>