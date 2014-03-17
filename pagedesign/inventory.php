<html>

&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>


<center>
<h1> Inventory</h1><br>
<form action = "" method="post">

<table>
<tr>
<td>Product Name: <td><input type = "text" name ="pname"><br>
</tr>

<tr>
<td>No of Case per bottle: <td><input type = "text" name = "nocase"><br>
</tr>

<tr>
<td>Volume: <td><input type = "text" name = "volume">
<select name = "volabel">
<option value = 'l'>l</option>
<option value = 'ml'>ml</option>
</select><br>
</tr>

<tr>
<td>Stocks: <td><input type = "text" name = "stocks"><br>
</tr>

<tr>
<td>Price: <td><input type = "text" name = "price"><br>
</tr>

</table>
</center>
<center>
<input type = "submit" name = "submit" value = "Save" class = "btn_loginform" style = "left: -2;">&nbsp;&nbsp;&nbsp;&nbsp;
<input type = "submit" name = "edit" value = "Edit" class = "btn_loginform" style = "left: 2;">
</center>
</form>

</html>

<?php
if(isset($_POST["submit"]))
{

$pname = $_POST["pname"];
$nocase = $_POST["nocase"];
$volume = $_POST["volume"];
$stocks = $_POST["stocks"];
$price = $_POST["price"];
$volabel = $_POST["volabel"];
$volu = $volume . " " . $volabel;

	if ($pname == "" || $nocase == "" || $volume == "" || $stocks == "" || $price == "")
	{
		print "<br><center><font color = red>Please Check your input</font></center>";
		
	}
	else
	{
		include("sqlCommands/insertproduct.php");
		$query = mysql_query($insertproduct);

		if ($query)
		{
			print "<br><center><font color = green>Successfully Saved!</font></center>";
		}
		else
		{
			print "<br><center><font color = red>Error Saving!</font></center>";
		}
	}

}

if(isset($_POST["edit"]))
{
print "<br><center><font color = red>Still Working on Edit!</font></center>";
}
?>
