<?php
$connect = mysql_connect("localhost", "root", "") or die("Could not connect to server");
$database = mysql_select_db("sai",$connect) or die("Could not locate database");
?>