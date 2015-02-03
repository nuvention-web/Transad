<?php
define('DB_NAME', 'table_input');
define('DB_USER', 'root');
define('DB_PASSWORD', 'Aakash');
define('DB_HOST', 'localhost');

$link = mysql_connect("localhost",DB_USER,DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email1 = $_POST['email'];


$sql = mysql_query("INSERT INTO user_input (first_name, last_name, email) VALUES ('$first', '$last', '$email1' )");

if (!$sql) {
	die('Error:'. mysql_error());
}

?>


