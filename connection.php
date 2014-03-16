<?php
$connect = mysql_connect("localhost", "root", "") or die("Could not connect to server");
$database = mysql_select_db("sai",$connect) or die("Could not locate database");

$insertproduct = "INSERT INTO inventory SET Pname = '$pname',Nocase = '$nocase',Volume = '$volume',stocks = '$stocks',Price = '$price'";

$insertuser = "INSERT INTO accounts SET Fname = '$fname', Lname = '$lname', Password = '$password', username = '$username'";

$insertsales = "INSERT INTO sales SET PID = '$pid' , UID = '$uid', Qty = '$qty', Amount = '$amount', Total = '$total', _Date = '$date'";

?>

