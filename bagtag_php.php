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

// Basically we retrieve the Cust_ID of the current customer
    // DO NOT CHANGE
$custID = $_SESSION['lastCustID'];


// We retrieve the input values from the previous page, and store it to temporary variables.
// What you put inside $_POST[''] is the variable name corresponding with the <input name = ""> in the previous page.
    //TO BE CHANGED
        // Please change this accordingly, for the following represents the unique variables for each product.
$valueType = $_POST['Type'];

// Default properties for each product
$valueDesc = $_POST['Prod_Desc'];
$valueDesign = $_POST['Prod_Design'];
$valuePrice = $_POST['Design_Price'];
$valueDate = $_POST['Pickup_Date'];
$valueQuantity = $_POST['Quantity'];

// Specify the name of the product
    // TO BE CHANGED
$valueName = "Bag Tag";

// Make a query. Specify the table column firsts, and then the php $variables that we just made, above
    // TO BE CHANGED
        // Please update the unique variables.
$sql = "INSERT INTO products (Prod_Name, Type, Prod_Desc, Prod_Design, Design_Price, Pickup_Date, Quantity, Cust_ID) VALUES ('$valueName','$valueType', '$valueDesc', '$valueDesign', '$valuePrice', '$valueDate', '$valueQuantity', '$custID')";


// Execute the query. This if statement is not necessary, but it acts like a try/catch function.
if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

// Make a query updating the total price.
$sql2 = "UPDATE products SET Total_Price = Design_Price * Quantity";

// Execute the second query.
if (!mysql_query($sql2)) {
    die('Error: ' . mysql_error());


}

/*echo "I'd like {$numbersss} waffles";*/


// Close the mysql connection. This is really important.
mysql_close();
?>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Basic Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>

 
	<header>
		<h1>JNJ Prints | Add Order</h1>
        <a href="view.php">View Orders</a>
        <a href="main.php">Home</a>
    </header>



    <div class="main-content">

        <form class="form-basic" method="post" >
            <div class="form-title-row">
                <h1>Confirmation</h1>
            </div>

            <div class="success">
                Order successfully added.
            </div>


            <!-- <div class="form-row">
                <button type="submit" formaction="login.php">Finish</button>
            </div>

            <div class="form-row">
                <button type="submit" formaction="main.php">Continue</button>
            </div> -->

            <ul class="actions">
                    <li><a href="rec.php" class="button special">Finish</a></li>
                    <li><a href="order_info.php" class="button special">Add</a></li>
            </ul>

        </form>

    </div>

</body>

</html>