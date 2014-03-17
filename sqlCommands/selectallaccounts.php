<?php

$selectallusers = "SELECT * FROM accounts";

?>

<html>
<center>
<br><br>
<table border = 1>
<tr>
<td>User ID
<td>Username
<td>Password
<td>Firs Name
<td>Last Name
</tr>

<?php

$query = mysql_query($selectallusers);

while($row = mysql_fetch_array($query))
{

$UID = "$row[UID]";
$Username = "$row[Username]";
$Password = "$row[Password]";
$Fname = "$row[Fname]";
$Lname = "$row[Lname]";

print "<tr>";
print "<td>".ucwords($UID);
print "<td>".ucwords($Username);
print "<td>".ucwords($Password);
print "<td>".ucwords($Fname);
print "<td>".ucwords($Lname);
print "</tr>";
}
?>

</table>
</html>