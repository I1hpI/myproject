<?php
    session_start();
    if(!isset($_SESSION['unm'])){
        header('Location: ../login.php');
    }
    if(!isset($_GET['version'])){
        header('Location: ../cart.php');
    } else {
        include 'db.inc.php';
        $v = $_GET['version'];
        $u = $_SESSION['unm'];

        $sqq = "DELETE FROM cart WHERE unm = '$u' AND itemV = '$v' ;";
        $rst = mysqli_query($conn, $sqq);

        header('Location: ../cart.php?sucess=1&page=cart');

    }
?>