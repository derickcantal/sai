<?php

$selectallsales = "SELECT SID,inventory.PID, inventory.Pname, inventory.Nocase, inventory.Volume, inventory.Stocks, inventory.Price, Amount,Qty,Total,_Date,UID 
FROM sales INNER JOIN inventory on inventory.PID = sales.PID";
?>
<html>
<br><br>
<table border = 1>
<tr>
<td>Sales No</td>
<td>Product Name</td>
<td>No of Bottle per case</td>
<td>Volume</td>
<td>Price</td>
<td>Qty</td>
<td>Total</td>
<td>Date</td>
<td>UserID</td>
</tr>

<?php

$query = mysql_query($selectallsales);

while($row = mysql_fetch_array($query))
{
$SID = "$row[SID]";
$PID = "$row[PID]";
$Pname = "$row[Pname]";
$Nocase = "$row[Nocase]";
$Volume = "$row[Volume]";
$Stocks = "$row[Stocks]";
$Price = "$row[Price]";
$Qty = "$row[Qty]";
$Total = "$row[Total]";
$_Date = "$row[_Date]";
$UID = "$row[UID]";

print "<tr>";
print "<td>". ucwords($SID);
print "<td>". ucwords($Pname);
print "<td>". ucwords($Nocase);
print "<td>". ucwords($Volume);
print "<td>". ucwords($Price);
print "<td>". ucwords($Qty);
print "<td>". ucwords($Total);
print "<td>". ucwords($_Date);
print "<td>". ucwords($UID);
print "</tr>";
}
?>
</table>
</html>