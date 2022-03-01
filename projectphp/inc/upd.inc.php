<html>
    <head><title>UPDATER</title>
        <style>
            body{
                padding-top:10%;
                color:white;
                background: url('books.jpg');
                background-size:cover;
            }
            input , textarea {
                font-size: 13pt;
                margin-top:10px;
                border-radius:5px;
                outline:none;
                padding:5px;
            } input {
                width:270px;
                height:30px;
            } input:focus , textarea:focus, input:hover , textarea:hover {
                border-color:red;
                opacity:0.8;
            } button {
                cursor:pointer;
                background-color:red;
                color:white;
                padding:10px;
                border-radius:5px;
                border:none;
                outline:none;
                margin-top:10px;
                font-size: 13pt;
            } button:hover {
                background-color:#dd0000;
            }
        </style>
    </head>
    <body align="center">
        <h1>UPDATE FORM</h1>
    
<?php
    include 'db.inc.php';
    if(!isset($_GET['version'])){
        header('Location: ../gallery.php?page=items');

    } else {
        $vrs = $_GET['version'];

        $sql = "SELECT * FROM items WHERE i_vName = '$vrs' ;";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) < 1){
            echo "<h1>error 404</h1>";
        } else {
            while($rst = mysqli_fetch_assoc($result)){
                echo "
                    <form action='update.inc.php' method='POST'>
                        <input type='text' name='nam' value='".$rst["i_name"]."'><br>
                        <input type='text' name='price' value='".$rst["i_price"]."'><br>
                        <textarea rows = '5' cols = '70' name='dis'>
                            ".$rst["i_discription"]."</textarea><br>
                        <input type='text' name='ver' value='".$rst["i_vName"]."'><br>
                        <button name='submit'>UPDATE</button>
                    </form>
                ";
            }
        }
    }
?>

</body>
</html>