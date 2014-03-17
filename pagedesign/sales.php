
&nbsp;&nbsp;&nbsp;&nbsp;<a href = "sales.php">back</a><br><br>
<center>
<form action = "" method="post">

<table align = "center">

<tr>
<td>Product ID: <td><input type = "text" name ="pid" readonly><br>
</tr>

<tr>
<td>Product Name: <td><input type = "text" name ="pname" readonly><br>
</tr>

<tr>
<td>No of Case per bottle: <td><input type = "text" name = "nocase" readonly><br>
</tr>

<tr>
<td>Volume: <td><input type = "text" name = "volume" readonly>
</tr>

<tr>
<td>Stocks: <td><input type = "text" name = "stocks" readonly><br>
</tr>

<tr>
<td>Price: <td><input type = "text" name = "price" readonly><br>
</tr>

<tr>
<td>&nbsp;
<td>
</tr>

<tr>
<td>Qty to Purchase:
<td><input type = "text" name = "qty">
</tr>

<tr>
<td>Amount:
<td><input type = "text" name = "amount" readonly>
</tr>

<tr>
<td>Cash:
<td><input type = "text" name = "cash">
</tr>

<tr>
<td>Change:
<td><input type = "text" name = "change" readonly>
</tr>

</table>
</center>
<center>
<input type = "submit" name = "submit" value = "Save" class = "btn_loginform" style = "left: 10;">&nbsp;&nbsp;&nbsp;&nbsp;

</center>
</form>



<?php

if(isset($_POST["submit"]))
{

	$pid = $_POST["pid"];
	$pname = $_POST["pname"];
	$nocase = $_POST["nocase"];
	$volume = $_POST["volume"];

	print "<br><center><font color = red>Still Working on Save!</font></center>";
}



?>

