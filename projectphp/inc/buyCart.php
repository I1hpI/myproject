<?php
     session_start();
     $cc = mysqli_connect("localhost","root","","theproj");
     $u = $_SESSION['unm'];
     $stat = "1";
     $sq = "UPDATE cart SET status = '$stat' WHERE unm = '$u';";
     $rs = mysqli_query($cc, $sq) or die("fail");

     header('Location: ../cart.php?buy=sucess&page=cart');

?>