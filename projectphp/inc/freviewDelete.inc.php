<?php
		include 'db.inc.php';

		$sql = "DELETE FROM feedback WHERE id = ".$_GET['uid'];
		$r = mysqli_query($conn, $sql);

		header('Location: ../adminpanel.php');
?>