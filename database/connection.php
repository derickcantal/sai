<?php
$connect = mysql_connect("localhost", "root", "") or die($myQuery."<br/><br/>".mysql_error());
$database = mysql_select_db("sai",$connect) or die($myQuery."<br/><br/>".mysql_error());

?>

