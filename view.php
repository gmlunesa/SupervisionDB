<?php
session_start();

define ('DB_NAME', 'supervisionv1');
define ('DB_USER', 'root');
define ('DB_PASSWORD', '');
define ('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
    die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$idquery = "SELECT Cust_ID FROM customer";
$custquery = "SELECT * FROM customer";

$idArray = mysql_query($idquery);
$custArray = mysql_query($custquery);

$custArray2 = mysql_query($custquery);

/*while ($cRow =  mysql_fetch_array($custArray2)) {
    echo $cRow[0];
    echo " ";
    echo $cRow[1];
    echo " ";
    echo $cRow[2];
    echo " ";
    echo $cRow[3];
    echo " ";
    echo $cRow[4];
    echo " ";
    echo " ";
}*/

?>




<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>View</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-tables.css">
    <link rel="stylesheet" href="assets/style.css">

</head>


	<header>
		<h1>JNJ Prints</h1>
        <!-- <a href="view.php">View Orders</a> -->
        <a href="main.php">Home</a>
        
    </header>

    <!-- <ul>
        <li><a href="index.html">Something</a></li>
        <li><a href="form-register.html">Something</a></li>
        <li><a href="form-login.html" class="active">Something</a></li>
    </ul> -->


    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-basic" method="post" action="customer.php">


            <div class="form-title-row">
                <h1>Orders :: Sorted by Customers</h1>
            </div>

            <ul class="actions">
                <li><a href="viewByDate.php" class="button special">Sort by Date</a></li>

            </ul>
            
            <div class="wrapper">


                <?php 
                while ($cRow =  mysql_fetch_array($custArray)) {

                    /*$orderquery = "SELECT * FROM products WHERE products.Cust_ID = '$cRow[0]' AND products.Pickup_Date >= CURDATE() ORDER BY products.Pickup_Date ASC";*/

                    $orderquery = "SELECT products.*, customer.Cust_FName, customer.Cust_LName FROM products INNER JOIN customer ON products.Cust_ID = customer.Cust_ID WHERE products.Pickup_Date >= CURDATE() AND products.Cust_ID = '$cRow[0]' ORDER BY products.Pickup_Date ASC";

                    $orderArray = mysql_query($orderquery)  or trigger_error(mysql_error());;

                    if (mysql_num_rows($orderArray)== 0) {

                    } else {
                        
                    echo '<h3>'.$cRow[1].' '. $cRow[2].' | '.$cRow[3].' | '.$cRow[4].' | <a href="receipt.php?link='.  $cRow[0] . '">Receipt</a></h3>';
                    /*echo '<h3><a href="receipt.php?link=' . $cRow[0] . '">Link 1</a></h3>';*/
                
                        echo '<div class="table">';

                        echo'<div class="row header">'; 

                        echo'<div class="cell">';
                        echo'ID';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Product';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Description';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Design';
                        echo'</div>';

                        
                        echo'<div class="cell">';
                        echo'Width';
                        echo'</div>';

                        echo '<div class="cell">';
                        echo 'Height';
                        echo '</div>';

                        echo'<div class="cell">';
                        echo'Shape';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Size';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Color';
                        echo'</div>';

                        echo'<div class="cell">';
                        echo'Type';
                        echo'</div>';
                        
                        echo'<div class="cell">';
                        echo'Quantity';
                        echo'</div>';

                        echo '<div class="cell">';
                        echo 'Pick Up Date';
                        echo '</div>';


                        echo '</div>'; // end div row header

                        while($oRow = mysql_fetch_array($orderArray)) {
                            
                            
                            echo'<div class="row">';

                            

                            echo'<div class="cell">';
                            echo $oRow[0];
                            echo'</div>';


                            echo'<div class="cell">';
                            echo $oRow[1];
                            echo'</div>';

                            echo'<div class="cell">';
                            echo  $oRow[2];
                            echo'</div>';

                            echo'<div class="cell">';
                            echo  $oRow[3];
                            echo'</div>';

                            echo '<div class="cell">';
                            echo $oRow[6];
                            echo '</div>';

                            echo '<div class="cell">';
                            echo $oRow[7];
                            echo '</div>';

                            echo'<div class="cell">';
                            echo $oRow[8];
                            echo'</div>';

                            echo'<div class="cell">';
                            echo  $oRow[9];
                            echo'</div>';

                            echo'<div class="cell">';
                            echo  $oRow[10];
                            echo'</div>';

                            echo'<div class="cell">';
                            echo  $oRow[11];
                            echo'</div>';


                            echo '<div class="cell">';
                            echo $oRow[12];
                            echo '</div>';

                            echo '<div class="cell">';
                            echo $oRow[5];
                            echo '</div>';
                            echo '</div>'; // end div class row


                            
                        }

                        echo '</div>'; // end div table
                        //echo '<hr>';
                    }

                 }

                ?>
            

            </div> <!-- end div wrapper -->

            <ul class="actions">
                <li><a href="customer.php" class="button special">Add</a></li>
                <li><a href="update.php" class="button special">Update</a></li>
                <li><a href="delete.php" class="button special">Delete</a></li>

            </ul>

        </form>

    </div>

</body>

</html>
