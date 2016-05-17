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


//retrieve the product ID, store it in the variable
$valuePID = $_POST['PID'];

// If the type area is not empty, then update the tables.
if (!empty($_POST['Type'])) {

    // retrieve the product type and store it in a variable
    $valueType = $_POST['Type'];
    
    // make a query. specify the $variables that we just made above.
    if (!mysql_query("UPDATE products SET Type = '$valueType' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}

if (!empty($_POST['Prod_Desc'])) {
    $valueDesc = $_POST['Prod_Desc'];
    
    if (!mysql_query("UPDATE products SET Prod_Desc = '$valueDesc' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}

if (!empty($_POST['Prod_Design'])) {
    $valueDes = $_POST['Prod_Design'];
    
    if (!mysql_query("UPDATE products SET Prod_Design = '$valueDes' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}

if (!empty($_POST['Design_Price'])) {
    $valueDesign = $_POST['Design_Price'];
    
    if (!mysql_query("UPDATE products SET Design_Price = '$valueDesign' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}

if (!empty($_POST['Pickup_Date'])) {
    $valueDate = $_POST['Pickup_Date'];
    
    if (!mysql_query("UPDATE products SET Pickup_Date = '$valueDate' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}


if (!empty($_POST['Quantity'])) {
    $valueQuantity = $_POST['Quantity'];
    
    if (!mysql_query("UPDATE products SET Quantity = '$valueQuantity' WHERE Prod_ID = '$valuePID' ")) {
        die('Error: ' . mysql_error());
    }
}


// make a query to update the price, just in case
$sql2 = "UPDATE products SET Total_Price = Design_Price * Quantity";

// execute the query
if (!mysql_query($sql2)) {
    die('Error: ' . mysql_error());
}

// close the connection, very important yo
mysql_close();
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Update</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>

 
	<header>
		<h1>JNJ Prints | Update Order</h1>
        <a href="view.php">View Orders</a>
        <a href="main.php">Home</a>
    </header>



    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <!-- <form class="form-basic" method="post" action="order_info.php"> -->
        <form class="form-basic" method="post" >
            <div class="form-title-row">
                <h1>Confirmation</h1>
            </div>

            <div class="success">
                Order successfully updated.
            </div>


            <!-- <div class="form-row">
                <button type="submit" formaction="login.php">Finish</button>
            </div>

            <div class="form-row">
                <button type="submit" formaction="main.php">Continue</button>
            </div> -->

            <ul class="actions">
                    <li><a href="main.php" class="button special">Finish</a></li>

                    <li><a href="customer.php" class="button special">Add</a></li>
                    <li><a href="update.php" class="button special">Update</a></li>
            </ul>

        </form>

    </div>

</body>

</html>