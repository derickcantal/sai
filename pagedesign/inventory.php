<html>

&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>


<center>
<h1> Inventory</h1><br>
<form action = "" method="post">

<table>
<tr>
<td><p id="p_login">Product Name: </p><input type = "text" name ="pname" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">No of Case per bottle: </p><input type = "text" name = "nocase" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">Volume: </p><input type = "text" name = "volume" class="text_login" autofocus>
<select name = "volabel" class="text_login" autofocus style = "width:50">
<option value = 'l'>l</option>
<option value = 'ml'>ml</option>
</select><br>
</tr>

<tr>
<td><p id="p_login">Stocks: </p><input type = "text" name = "stocks" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">Price: </p><input type = "text" name = "price" class="text_login" autofocus><br>
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
