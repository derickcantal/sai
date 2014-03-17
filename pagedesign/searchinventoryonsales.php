<html>
&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>

<form action = "" method = "post">
<center>
<h1>Sales</h1><br>

<table>
<tr>
<td>Product ID: <td><input type = "text" name ="pid"><br>
<input type = "submit" name = "spid" value = "Search">
</tr>
</form>
</table>

</html>
<?php

if(isset($_POST["spid"]))
{
	
	$pid = $_POST["pid"];

	include("sqlCommands/searchproduct.php");
	if (!$pid == "")
	{
		$test = mysql_query($searchproduct);
		$row = mysql_fetch_array($test);

		$Prod = "$row[PID]";
		$Pname = "$row[Pname]";
		$Nocase = "$row[Nocase]";
		$Volume = "$row[Volume]";
		$Stocks = "$row[Stocks]";
		$Price = "$row[Price]";

		if($row)
		{
			if($Prod == "")
			{
				print "<br><center><font color = red>No Data Found!</font></center>";
			}
			else
			{
				print "<br><center><font color = green>Data Found!</font></center>";
			}
		}
		else
		{
			print "<br><center><font color = red>No Data Found!</font></center>";
		}
	}
	else
	{
		print "<br><center><font color = red>Please input Product ID!</font></center>";
	}
	
}


?>