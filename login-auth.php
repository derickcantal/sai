
<?php
	include("database/connection.php");

	$username = $_POST["username1"];
	$password = $_POST["password1"];
	$username1 = $_POST["username1"];

	

	if($username == "" || $password == "")
	{
		include("pagedesign/header.php");
		print "<font color = red><center>Invalid Login </center></font>";
		include("pagedesign/login.php");
		include("pagedesign/footer.php");
	}
	else
	{
		/*print "<form method = 'post' action = ''>";
		print "<input type = 'hidden' name = 'user' value = '$username'>";
		print "</form>";*/

		$cmd = "SELECT * FROM accounts WHERE Username = '$username'";

		$query = mysql_query($cmd);

		$row = mysql_fetch_array($query)or die($row."<br/><br/>".mysql_error());
		
		$usn = "$row[Username]";
		$pass = "$row[Password]";
		
		/*print $usn;
		print "<br>";
		print $pass;
		print "<br>";*/
		
		if($username !== $usn && $password !== $pass)
		{
			include("pagedesign/header.php");
			print "<font color = red><center>Invalid Login! </center></font>";
			include("pagedesign/login.php");
			include("pagedesign/footer.php");
		}
		elseif ($usn == "" && $pass == "")
		{
			include("pagedesign/header.php");
			print "<font color = red><center>Invalid Login </center></font>";
			include("pagedesign/login.php");
			include("pagedesign/footer.php");
		}
		elseif ($usn == $username && $pass == $password)
		{
			include("home.php");
		}
		else
		{
			include("pagedesign/header.php");
			print "<font color = red><center>Invalid Login! </center></font>";
			include("pagedesign/login.php");
			include("pagedesign/footer.php");
		}
	}
?>
