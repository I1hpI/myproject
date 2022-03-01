<html>    
    <head>
    <title>Adminpannel</title>
   
	<link rel="stylesheet"  href="style.css">
    <style>
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
        } .popUpFooter button {
            background-color:red;
            outline:none;
            border:0;
            padding:10px;
            border-radius:15px;
            color:#ddd;
            cursor:pointer;
        } .adminTable {
            width:100%;
        } .adminTable tr td, th {
            padding:10px;
        } .adminTable button a {
            text-decoration:none;
            color:white;
        } .adminTable button {
            background-color:red;
            padding:10px;
            border:none;
            border-radius:5px;
        } table tr td, table tr th {
            align-items: center;
        }
    </style>
    </head>
    <body>
        <?php
            include 'head.php';
            include 'inc/db.inc.php';

            if(!isset($_SESSION['unm'])){
                echo '<h1 align="center" style="color:red;padding-top:5em;">You do not have access to this page</h1>';
                die();
            } else if ($_SESSION['id'] != 1 ) {
                echo '<h1 align="center" style="color:red;padding-top:5em;">You do not have access to this page</h1>';
                die();
            }

            $sql = "SELECT * FROM users ;";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1) {
				echo "<h1 align='center' style='color:red;padding-top:5em;'>There are no users</h1>";
			} else {
                echo '
                <div style="padding-left:10em; padding-right:10em; padding-bottom:2em;">
                <h1 align="center">Users</h1>
                <table border=1 class="adminTable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Type</th>
                    <th>Action</th>
                    <th>Phone</th>
                </tr>
                ';
				while($r = mysqli_fetch_assoc($result)){
                    if($r['id'] != 1){
                    echo '
                    <tr>
                        <td>'.$r['id'].'</td>
                        <td>'.$r['unm'].'</td>
                        <td>'.$r['eml'].'</td>
                        <td>'.$r['type'].'</td>
                        <td align="center"><button><a href="inc/remove.inc.php?uid='.$r['id'].'&unm='.$r['unm'].'">Remove</a></button></td>

                        <td>'.$r['phn'].'</td>
                    </tr>

                    ';
                }
				}
				
			}



            echo '
            </table>
            ';
//For Items...................................................................................................

            $sql = "SELECT * FROM items ;";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1) {
				echo "<h1 align='center' style='color:red;padding-top:5em;'>There are no items</h1>";
			} else {
                echo '
                <h1 align="center">Items</h1>
                <table border=1 class="adminTable">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Version</th>
                    <th>Discription</th>
                    <th>Price</th>
                    <th>Seller</th>
                    <th>Action</th>

                </tr>
                ';
				while($r = mysqli_fetch_assoc($result)){
                    
                    echo '
                    <tr>
                        <td>'.$r['id'].'</td>
                        <td>'.$r['i_name'].'</td>
                        <td>'.$r['i_vName'].'</td>
                        <td>'.$r['i_discription'].'</td>
                        <td>'.$r['i_price'].'</td>
                        <td>'.$r['i_seller'].'</td>

                        <td align="center"><button><a href="inc/ItemRmv.inc.php?uid='.$r['id'].'&unm='.$r['i_vName'].'">Remove</a></button> <button><a href="item.php?version='.$r['i_vName'].'&seller='.$r['i_seller'].'">View</a></button></td>

                    </tr>
                 ';
                }
				
				
			}



            echo '
            </table>
            ';


//For Comments...................................................................................................

            $sql = "SELECT * FROM cmnt ;";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) < 1) {
				echo "<h1 align='center' style='color:red;padding-top:5em;'>There are no comments</h1>";
			} else {
                echo '
                <h1 align="center">Comments</h1>
                <table border=1 class="adminTable">
                <tr>
                    <th>Username</th>
                    <th>Comment</th>
                    <th>Item</th>

                </tr>
                ';
				while($r = mysqli_fetch_assoc($result)){
                    
                    echo '
                    <tr>
                        <td>'.$r['unm'].'</td>
                        <td>'.$r['cmt'].'</td>
                        <td>'.$r['version'].'</td>

                        <td align="center"><button><a href="inc/cmntDelete.inc.php?uid='.$r['id'].'">Remove</a></button></td>

                    </tr>
                 ';
                }
				
				
			}



            echo '
            </table>
            </div>
            ';

//For cart....

                        $sql = "SELECT * FROM cart ;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) < 1) {
                echo "<h1 align='center' style='color:red;padding-top:5em;'>There are no comments</h1>";
            } else {
                echo '
                <h1 align="center">Cart</h1>
                <div style="padding: 0 5em 2em 5em;">
                <table border=1 class="adminTable">
                <tr>
                    <th>Username</th>
                    <th>Price</th>
                    <th>Version</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
                ';
                while($r = mysqli_fetch_assoc($result)){
                    
                    echo '
                    <tr>
                        <td align="center">'.$r['unm'].'</td>
                        <td align="center" >'.$r['price'].'</td>
                        <td align="center">'.$r['itemV'].'</td>
                        <td align="center">'.$r['status'].'</td>

                        <td align="center"><button><a href="inc/cmntDelete.inc.php?uid='.$r['id'].'">Remove</a></button></td>

                    </tr>
                 ';
                }
                
                
            }



            echo '
            </table>
            </div>
            ';

            //For Reviews....

                        $sql = "SELECT * FROM feedback ;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) < 1) {
                echo "<h1 align='center' style='color:red;padding-top:5em;'>There are no Feedbacks</h1>";
            } else {
                echo '
                <h1 align="center">Feedback</h1>
                <div style="padding: 0 5em 2em 5em;">
                <table border=1 class="adminTable">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                    <th>Action</th>

                </tr>
                ';
                while($r = mysqli_fetch_assoc($result)){
                    
                    echo '
                    <tr>
                        <td align="center">'.$r['name'].'</td>
                        <td align="center" >'.$r['email'].'</td>
                        <td align="center">'.$r['comment'].'</td>

                        <td align="center"><button><a href="inc/freviewDelete.inc.php?uid='.$r['id'].'">Remove</a></button></td>

                    </tr>
                 ';
                }
                
                
            }



            echo '
            </table>
            </div>
            ';



        ?>

      

        
    </body>
</html>