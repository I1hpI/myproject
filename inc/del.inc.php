<?php
    session_start();
    include 'db.inc.php';
    if(!isset($_SESSION['unm'])) {
        header('Location: ../home.php');
    } else {
        if(!isset($_GET['version'])){
            header('../gallery.php');
        } else {
            $ver = $_GET['version'];
            $sql =  "DELETE FROM items WHERE i_vName = '$ver' ;";
            $s2 = "DELETE FROM cmnt WHERE version = '$ver' ;";
            $result = mysqli_query($conn, $sql) OR die('error.....');
            $r2 = mysqli_query($conn, $s2) OR die('ERROR....');

            header('Location: ../gallery.php?delete=sucess');
        }
    }
?>