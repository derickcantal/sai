<?php

$selectallproducts = "SELECT * FROM inventory";

?>

<html>
<br><br>
<center>
<table border = 1>
<tr>
<td>Product ID
<td>Product Name
<td>No of Case per bottle
<td>Volume
<td>Stocks
<td>Price
</tr>

<?php

$query = mysql_query($selectallproducts);

while($row = mysql_fetch_array($query))
{
$PID = "$row[PID]";
$Pname = "$row[Pname]";
$Nocase = "$row[Nocase]";
$Volume = "$row[Volume]";
$Stocks = "$row[Stocks]";
$Price = "$row[Price]";


print "<tr>";
print "<td>".ucwords($PID);
print "<td>".ucwords($Pname);
print "<td>".ucwords($Nocase);
print "<td>".ucwords($Volume);
print "<td>".ucwords($Stocks);
print "<td>".ucwords($Price);

}
?>

</tr>
</table>
</html>
