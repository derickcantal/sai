<html>

&nbsp;&nbsp;&nbsp;&nbsp;<a href = "home.php">back</a><br><br>

<center>
<h1>Show Reports</h1><br>
<form method = "post" action = "">
From:
<select>
<option value = "">MONTH</option>
<option value = "01">January</option>
<option value = "02">February</option>
<option value = "03">March</option>
<option value = "04">April</option>
<option value = "05">May</option>
<option value = "06">June</option>
<option value = "07">July</option>
<option value = "08">August</option>
<option value = "09">September</option>
<option value = "10">October</option>
<option value = "11">November</option>
<option value = "12">December</option>
</select>

<select>
<option value = "">DAY</option>
<option value = "1">1</option>
<option value = "2">2</option>
<option value = "3">3</option>
<option value = "4">4</option>
<option value = "5">5</option>
<option value = "6">6</option>
<option value = "7">7</option>
<option value = "8">8</option>
<option value = "9">9</option>
<option value = "10">10</option>
<option value = "11">11</option>
<option value = "12">12</option>
<option value = "13">13</option>
<option value = "14">14</option>
<option value = "15">15</option>
<option value = "16">16</option>
<option value = "17">17</option>
<option value = "18">18</option>
<option value = "19">19</option>
<option value = "20">20</option>
<option value = "21">21</option>
<option value = "22">22</option>
<option value = "23">23</option>
<option value = "24">24</option>
<option value = "25">25</option>
<option value = "26">26</option>
<option value = "27">27</option>
<option value = "28">28</option>
<option value = "29">29</option>
<option value = "30">30</option>
<option value = "31">31</option>
</select>


<select>
<option value = "">YEAR</option>
<option value = "1990">1990</option>
<option value = "1991">1991</option>
<option value = "1992">1992</option>
<option value = "1993">1993</option>
<option value = "1994">1994</option>
<option value = "1995">1995</option>
<option value = "1996">1996</option>
<option value = "1997">1997</option>
<option value = "1998">1998</option>
<option value = "1999">1999</option>
<option value = "2000">2000</option>
<option value = "2001">2001</option>
<option value = "2002">2002</option>
<option value = "2003">2003</option>
<option value = "2004">2004</option>
<option value = "2005">2005</option>
<option value = "2006">2006</option>
<option value = "2007">2007</option>
<option value = "2008">2008</option>
<option value = "2009">2009</option>
<option value = "2010">2010</option>
<option value = "2011">2011</option>
<option value = "2012">2012</option>
<option value = "2013">2013</option>
</select>

To:
<select>
<option value = "">MONTH</option>
<option value = "01">January</option>
<option value = "02">February</option>
<option value = "03">March</option>
<option value = "04">April</option>
<option value = "05">May</option>
<option value = "06">June</option>
<option value = "07">July</option>
<option value = "08">August</option>
<option value = "09">September</option>
<option value = "10">October</option>
<option value = "11">November</option>
<option value = "12">December</option>
</select>

<select>
<option value = "">DAY</option>
<option value = "1">1</option>
<option value = "2">2</option>
<option value = "3">3</option>
<option value = "4">4</option>
<option value = "5">5</option>
<option value = "6">6</option>
<option value = "7">7</option>
<option value = "8">8</option>
<option value = "9">9</option>
<option value = "10">10</option>
<option value = "11">11</option>
<option value = "12">12</option>
<option value = "13">13</option>
<option value = "14">14</option>
<option value = "15">15</option>
<option value = "16">16</option>
<option value = "17">17</option>
<option value = "18">18</option>
<option value = "19">19</option>
<option value = "20">20</option>
<option value = "21">21</option>
<option value = "22">22</option>
<option value = "23">23</option>
<option value = "24">24</option>
<option value = "25">25</option>
<option value = "26">26</option>
<option value = "27">27</option>
<option value = "28">28</option>
<option value = "29">29</option>
<option value = "30">30</option>
<option value = "31">31</option>
</select>


<select>
<option value = "">YEAR</option>
<option value = "1990">1990</option>
<option value = "1991">1991</option>
<option value = "1992">1992</option>
<option value = "1993">1993</option>
<option value = "1994">1994</option>
<option value = "1995">1995</option>
<option value = "1996">1996</option>
<option value = "1997">1997</option>
<option value = "1998">1998</option>
<option value = "1999">1999</option>
<option value = "2000">2000</option>
<option value = "2001">2001</option>
<option value = "2002">2002</option>
<option value = "2003">2003</option>
<option value = "2004">2004</option>
<option value = "2005">2005</option>
<option value = "2006">2006</option>
<option value = "2007">2007</option>
<option value = "2008">2008</option>
<option value = "2009">2009</option>
<option value = "2010">2010</option>
<option value = "2011">2011</option>
<option value = "2012">2012</option>
<option value = "2013">2013</option>
</select>



<input type = "submit" name = "search" value = "Search" class = "btn_loginform" style ="left: 27;">

</form>


</html>

<?php

if(isset($_POST["search"]))
{
	print "<br><center><font color = red>Still Working on Search!</font></center>";
}

?>