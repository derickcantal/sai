<html>

&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>
<center>
<h1>Users</h1><br>
<form action = "" method= "POST">

<table align = "center">
<tr>
<td>Username: <td><input type = "text" name ="username"><br>
</tr>

<tr>
<td>Password: <td><input type = "password" name = "password"><br>
</tr>

<tr>
<td>First Name: <td><input type = "text" name = "fname"><br>
</tr>

<tr>
<td>Last Name: <td><input type = "text" name = "lname"><br>
</tr>

</table>
</center>
<center>
<input type = "submit" name = "submit" value = "Save" class = "btn_loginform" style = "left: -5;">
<input type = "submit" name = "edit" value = "Edit" class = "btn_loginform" style = "left: 10;">
</center>
</form>

</html>

<?php
if(isset($_POST["submit"]))
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];


	if ($username == "" || $password == "" || $fname == "" || $lname == "" )
	{
		print "<br><center><font color = red>Please Check your input</font></center>";
	}
	else{
	include("sqlCommands/insertuser.php");

	$query = mysql_query($insertuser);

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