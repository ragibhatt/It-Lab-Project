<?php
$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="fin_vote";
$dbh=mysqli_connect($db_host, $db_user, $db_password, $db_name) or die("Error connecting to the database");
echo "connection successful";
echo "<br />"; 
?>
