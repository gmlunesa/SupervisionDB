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

/*echo 'Connected Successfully';*/

$valueFName = $_POST['Cust_FName'];
$valueLName = $_POST['Cust_LName'];
$valueNum = $_POST['Cust_Num'];
$valueEmail = $_POST['Cust_Email'];


$sql = "INSERT INTO customer (Cust_FName, Cust_LName, Cust_Num, Cust_Email) VALUES ('$valueFName', '$valueLName', '$valueNum', '$valueEmail')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

$ids = mysql_insert_id($link);
/*echo "I'd like {$ids} waffles";*/

$_SESSION['lastCustID'] = $ids;

mysql_close();
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basic Form</title>

    <link rel="stylesheet" href="assets/demo.css">
    <link rel="stylesheet" href="assets/form-basic.css">

    <script>
        function redirect(src) {
            window.location = src
        }
    </script>

</head>


    <header>
        <h1>JNJ Prints | Add Order</h1>
        <a href="view.php">View Orders</a>
        <a href="main.php">Home</a>
    </header>



    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="#">

            <div class="form-title-row">
                <h1>Add Order :: Product Selection</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Products: </span>
                    <select name="dropdown" onchange = "redirect(this.value)">

                        <option value = "">Products</option>
                        <option value = "order_bagtag.php">Bag Tag</option>
                        <option value = "order_bagtag.php">Key Chain</option>
                        <option value = "">Tarpaulin</option>
                        <option value = "">Shirts</option>
                        <option value = "">Tumbler</option>
                    </select>
                </label>
            </div>



        </form>

    </div>

</body>

</html>
