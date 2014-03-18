<html>

&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>
	
<center>
<h1>Users</h1><br>
<form action = "" method= "POST">

<table align = "center">
<tr>
<td><p id="p_login">Username: </p><input type = "text" name ="username" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">Password: </p><input type = "password" name = "password" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">First Name: </p><input type = "text" name = "fname" class="text_login" autofocus><br>
</tr>

<tr>
<td><p id="p_login">Last Name: </p><input type = "text" name = "lname" class="text_login" autofocus><br>
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