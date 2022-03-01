<?php

include 'db.inc.php';
$name = $_POST['name'];
$email = $_POST['email'];
$cmnt = $_POST['cmnt'];
		$sql = "INSERT INTO feedback (name, comment, email) VALUE ('$name','$cmnt','$email');";
		$r = mysqli_query($conn, $sql);

		header('Location: ../home.php');
?>