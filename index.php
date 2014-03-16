
<?php

include("database/connection.php");

?>

<html>
<head>
<link rel="icon" type="image/ico" href="img/sanmig.ico"></link>
<link rel="stylesheet" type="text/css" href="css/main.css"/>
<title>Sales And Inventory System - Vossler Enterprise</title>
</head>
<body>
<header>
	<img src="img/logo.png" id="head_logo"/>
</header>
<div id="line"></div>

<div class="login">
	<form action="" method="post">
		<p id="p_login"><label>Username:<br></label>
		<input type="text" name = "username1" class="text_login" autofocus/><br><br>
		<label>Password:<br></label>
		<input type="password" name = "password1" class="text_login"/><br></p>
		<input type="submit" value="Login" id="btn_login" class="btn_loginform" />
		<input type="reset" value="Cancel" id="btn_cancel" class="btn_loginform"/></p><br>
	</form>
</div>
<div id="line1"></div>

<footer>Sales and Inventory System</footer>
</body>
</html>

<?php

if(isset($_POST["submit"]))
{
	
	$username = $_POST["username1"];
	$password = $_POST["password1"];

	if($username == "" || $password == "")
	{
		print "Invalid Input";
	}
	else
	{
		header("location:home.php");
		print("Successful Login");
	}



}

?>