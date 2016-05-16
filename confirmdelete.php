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
$valuePID = $_SESSION['deleteID'];

//echo "{$valuePID}";

$deletequery = "DELETE FROM products WHERE Prod_ID = '$valuePID'";

if (!mysql_query($deletequery)) {
    die('Error: ' . mysql_error());

}

/*echo "I'd like {$numbersss} waffles";*/


// Close the mysql connection. This is really important.
mysql_close();



?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Delete</title>

    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/form-basic.css">
    <link rel="stylesheet" href="assets/style.css">

</head>


    <header>
        <h1>JNJ Prints</h1>
        <a href="view.php">View Orders</a>
        <a href="main.php">Home</a>
        
    </header>

    <!-- <ul>
        <li><a href="index.html">Something</a></li>
        <li><a href="form-register.html">Something</a></li>
        <li><a href="form-login.html" class="active">Something</a></li>
    </ul> -->


    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-basic" method="post" action="">


            <div class="form-title-row">
                <h1>Deletion Confirmation</h1>
            </div>

            <div class="success">
                Order successfully deleted.
            </div>

            <ul class="actions">
                    <li><a href="main.php" class="button special">Finish</a></li>
                    <li><a href="order_info.php" class="button special">Add</a></li>
                    <li><a href="update.php" class="button special">Update</a></li>
            </ul>

        </form>

    </div>

</body>

</html>
