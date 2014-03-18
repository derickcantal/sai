<html>
&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>

<form action = "" method = "post">
<center>
<h1>Sales</h1><br>

<table>
<tr>
<td><p id="p_login">Product ID:</p><input type = "text" name ="pid" class="text_login" autofocus><br>
</tr>
</table>
<input type = "submit" name = "spid" value = "Search" class = "btn_loginform" style="left:10;">
<br>
<br>
<br>

</form>


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
				print "<table>";
				print "<form action = 'saleson.php' method = 'post'>";
				print "<tr>";
				print "<td><p id='p_login'>Product ID:</p><input type = 'text' name = 'prod1' value = '$Prod' class='text_login' autofocus readonly><br>";
				print "</tr>";
				print "<tr>";
				print "<td><p id='p_login'>Product Name:</p><input type = 'text' name = 'pname1' value = '$Pname' class='text_login' autofocus readonly><br>";
				print "</tr>";
				print "<tr>";
				print "<td><p id='p_login'>No. of bottle per case</p><input type = 'text' name = 'nocase1' value = '$Nocase' class='text_login' autofocus readonly><br>";
				print "<tr>";
				print "<tr>";
				print "<td><p id='p_login'>Volume:</p><input type = 'text' name = 'volume1' value = '$Volume' class='text_login' autofocus readonly><br>";
				print "</tr>";
				print "<tr>";
				print "<td><p id='p_login'>Stocks:</p><input type = 'text' name = 'stocks1' value = '$Stocks' class='text_login' autofocus readonly><br>";
				print "</tr>";
				print "<tr>";
				print "<td><p id='p_login'>Price:</p><input type = 'text' name = 'price1' value = '$Price' class='text_login' autofocus readonly><br>";
				print "</tr>";
				print "</table>";
				print "<input type = 'submit' name = 'forward' value = 'Select' class = 'btn_loginform' style = 'left:10;'>";
				
				print "</form>";

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