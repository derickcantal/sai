<?php

$pid = $_POST['prod1'];
$pname = $_POST['pname1'];
$nocase = $_POST['nocase1'];
$volume = $_POST['volume1'];
$stocks = $_POST['stocks1'];
$price = $_POST['price1'];


?>

<html>
<head>
<script src="js/jquery-1.11.0.min.js"></script>
<script language = "JavaScript">

function calculate()
{
	document.getElementById("amount").value = 
		parseFloat(document.getElementById("qty").value) +
		parseFloat(document.getElementById("price").value);
}

function calculate1(){ 
if(isNaN(document.orderfrm.qty.value) || document.orderfrm.qty.value==""){ 
var text1 = 0; 
}else{ 
var text1 = parseInt(document.orderfrm.qty.value); 
} 
if(isNaN(document.orderfrm.price.value) || document.price.value==""){ 
var text2 = 0; 
}else{ 
var text2 = parseFloat(document.orderfrm.price.value); 
} 
document.orderfrm.amount.value = (text1)*(text2); 
} 

function changeOutput(){
    var input1 = document.getElementById("price").value;
    var input2 = document.getElementById("qty").value;
    document.getElementById("amount").value = val1 * val2;
}

</script>


</head>
</html>



&nbsp;&nbsp;&nbsp;&nbsp;<a href = "sales.php">back</a><br><br>
<center>
<form name = "orderfrm" action = "" method="post">

<table align = "center">

<tr>
<td><p id="p_login">Product ID:</p><input type = "text" name ="pid" value = "<?php print $pid; ?> " class="text_login" autofocus readonly><br>
</tr>

<tr>
<td><p id="p_login">Product Name:</p><input type = "text" name ="pname" value = "<?php  print $pname; ?>" class="text_login" autofocus readonly><br>
</tr>

<tr>
<td><p id="p_login">No of Case per bottle:</p><input type = "text" name = "nocase" value = "<?php print $nocase; ?> " class="text_login" autofocus readonly><br>
</tr>

<tr>
<td><p id="p_login">Volume: </p><input type = "text" name = "volume" value = "<?php print $volume; ?> " class="text_login" autofocus readonly>
</tr>

<tr>
<td><p id="p_login">Stocks: </p><input type = "text" name = "stocks" value = "<?php print $stocks; ?> " class="text_login" autofocus readonly><br>
</tr>

<tr>
<td><p id="p_login">Price: </p><input type = "text" name = "price" value = "<?php print $price; ?> " class="text_login" autofocus readonly><br>
</tr>

<tr>
<td>&nbsp;
<td>
</tr>

<tr>
<td><p id="p_login">Qty to Purchase:</p><input type = "text" value = "" name = "qty" onkeyup="calculate1()" class="text_login" autofocus >
</tr>

<tr>
<td><p id="p_login">Amount:</p><input type = "text" value = "" name = "amount" class="text_login" autofocus readonly>
</tr>

<tr>
<td><p id="p_login">Cash:</p><input type = "text" name = "cash" class="text_login" autofocus>
</tr>

<tr>
<td><p id="p_login">Change:</p><input type = "text" name = "change" class="text_login" autofocus readonly>
</tr>

</table>
</center>
<center>
<input type = "submit" name = "submit" value = "Save" class = "btn_loginform" style = "left: 10;">&nbsp;&nbsp;&nbsp;&nbsp;

</center>
</form>



<?php

if(isset($_POST["submit"]))
{

	$pid = $_POST["pid"];
	$pname = $_POST["pname"];
	$nocase = $_POST["nocase"];
	$volume = $_POST["volume"];

	print "<br><center><font color = red>Still Working on Save!</font></center>";
}



?>

