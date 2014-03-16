
<?php

	$username = $_POST["username1"];
	$password = $_POST["password1"];

	if($username == "" || $password == "")
	{
		include("pagedesign/header.php");
		print "<font color = red><center>Invalid Login </center></font>";
		include("pagedesign/login.php");
		include("pagedesign/footer.php");

	}
	else
	{
		include("home.php");
	}

?>
