<?php

$connection = mysqli_connect("localhost", "root", "");

if (!$connection) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, "sai");
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}

?>

