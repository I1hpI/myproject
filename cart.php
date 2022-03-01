<html>    
    <head>
    <title>cart</title>
   
	<link rel="stylesheet"  href="style.css">
    <style>
    .sus {
        background-color: red;
        border-radius: 5px;
        border: none;
        padding: 10px;
        float: right;
        margin-top: 1em;
    }
        #container {
            padding: 20px 85px;
        } .itemCont {
            margin-bottom:10px;
            border: 1px solid rgba(0,0,0,0.2);
            text-align:left;
            padding:15px;
        } #popUpContainer {
            display:none;
            background-color:black;
            opacity:0.8;
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            z-index:99999;
        } #popUpBody {
            opacity:0.9;
            display:none;
            z-index:999999;
            background-color: white;
            color:black;
            position:fixed;
            top:25%;
            left:30%;
            width:40%;
            height:20em;
        } .popUpHeader {
            color:white;
            padding: 7px 0 10px 2px;
            position:relative;
            width:100%;
            background-color:red;
        } #cancel{
            cursor:pointer;
            position:absolute;
            right:5px;
            height:10px;
            width:10px;
            font-size:7.5pt;
            top:5px;
            background-color: rgb(155,0,0);
            padding:7.5px;
            border-radius:50%;
        } #cancel:hover {
            background-color: rgba(155,0,0,0.5);
        }
        
         .popUpFooter {
            position:absolute;
            bottom:0;
            left:0;
            width:100%;
            padding-bottom: 10px;
        } .popUpFooter button {
            background-color:red;
            outline:none;
            border:0;
            padding:10px;
            border-radius:15px;
            color:#ddd;
            cursor:pointer;
        }
    </style>
    </head>
    <body>
        <?php
            include 'head.php';
        ?>

       

        <?php
            if(!isset($_SESSION['unm'])){
                echo"<div align='center' style='font-size:20pt;padding:150px;'>
                    You're not logged in. <br>
                    <a href='login.php'>Click here to log in</a>
                </div>";
                die();
            }
            $u = $_SESSION['unm'];
            $stat = "0";
            $s = "SELECT * FROM cart WHERE unm = '$u' AND status = '$stat';";
            $res = mysqli_query($conn, $s) or die("connection error");
            $count = 0;
            $total = 0;
            echo"<div id='container' align='center'>";
            if(mysqli_num_rows($res) < 1){
                echo "<h1> CART EMPTY </h1>";
            } else {
              

                while ($r = mysqli_fetch_assoc($res)) {
                
                    $count = $count + 1;
                 echo "<div class = 'itemCont'>";   
                    echo $r['itemV']." : <span style='color:red;margin-left:10px;'><b> "."$".$r['price']."</b></span>";
                    echo "<button style='float:right; background-color:red; border:none; border-radius:15px; padding:5px 10px;  cursor:pointer;' ><a href='inc/delCart.php?version=".$r['itemV']."' style='text-decoration:none;color:white;'>DELETE</a></button>";
                echo "</div>";
                
                    $total = $total + doubleval($r['price']);

                }


                echo "<button id='by' style='float:right; background-color:gray; border:none; border-radius:15px; padding:10px; color:white; cursor:pointer;'>BUY</button>";
            }
            
            echo"</div>";

            // <a href='inc/buyCart.php' style='text-decoration:none; color:white;'>


           

        ?>


        <div id="popUpContainer">
        </div>
        <div id="popUpBody">
                <div class="popUpHeader">
                    conform buy
                    <div id="cancel" align="center">
                        <span>x</span>
                    </div>
                </div>
                <div style="padding:15px;">
                    You've bought <?php echo $count ?> item
                    <div style="display:block; padding-top:35px;font-size:25pt;color:red;" align="center">
                        Total Sum <br>
                        <?php echo "$".$total ?>
                    </div>
                </div>
                <div class="popUpFooter" align="right">
                    <div style="padding:10px;">
                         
                         <?php echo '
                 <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="'.$total.'" name="tAmt" type="hidden">
    <input value="'.$total.'" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="'.$_SESSION['unm'].rand(0,1000).'" name="pid" type="hidden">
    <input value="http://localhost//SoftwareEngProj/inc/buyCart.php?q=su" type="hidden" name="su">
    <input value="http://localhost//SoftwareEngProj/fail.php?q=fu" type="hidden" name="fu">
    <input value="Confirm" type="submit" class="sus">
    </form>
            ';
                     ?>
                     
                    </div>
                </div>
        </div>

            <script>
                by.addEventListener('click',function(){
                    popUpContainer.style.display = "block";
                    popUpBody.style.display = "block";
                });

                cancel.addEventListener('click',function(){
                    popUpContainer.style.display = "none";
                    popUpBody.style.display = "none";
                })
                conf.addEventListener('click',function(){
                    alert('Your item(s) are on the way.');
                });
            </script>
    </body>
</html>