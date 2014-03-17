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

	if (!$pid == "")
	{

		include("sqlCommands/searchproduct.php");

		$query = mysql_query($searchproduct);

		
		
		if($query)
		{
			header("Location:saleson.php");


		}
		else
		{

		}
		
	
	}
	else
	{
		print "<br><center><font color = red>Please Input Product ID!</font></center>";
	}
	

}


?>