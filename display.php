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

$fileName = 'newTarpDesign.jpg';

if (isset($_GET['photoID'])) {
	$fileName = $_GET['photoID'];
}


?>

<!DOCTYPE html>
<html>
<body>

<img src="img/<?php echo $fileName?>" alt="Something" style="width:500px; height:400px;">

</body>
</html>