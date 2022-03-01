<?php 
session_start();
        if (!isset($_SESSION['unm'])) {
           header('Location: ../login.php?login=first');
        } else {

          $co = mysqli_connect("localhost","root","","theproj");
          
          $u = $_SESSION['unm'];
          $v = $_GET['version'];
          $p = $_GET['price'];
          $stat = "0";

          $ss = "SELECT * FROM cart WHERE itemV = '$v' and unm ='$u';";
          $ress = mysqli_query($co, $ss) or die("connection error");
          if(mysqli_num_rows($ress) < 1){
              $s = "INSERT INTO cart (unm , itemV, price, status) VALUE ('$u','$v', '$p', '$stat');";
              $res = mysqli_query($co, $s);
          }

          
        
            header('Location: ../cart.php?add=sucess&page=cart');
        }
      ?>