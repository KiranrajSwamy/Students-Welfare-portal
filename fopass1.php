<html>
<head>
<title>Ksquare Trust</title></head>
<body bgcolor="#FFEED1">
<table  align=center bgcolor=#FFEED1 width=90% height=5%>
<th>
<td><img border="0" src="new-logo.jpg">
</td>
<td align=center><font size=12 color=black face="Tahoma">Ksquare Trust</font><br>
<font size=9 color=red>M</font><font size=9>ERIT</font>&nbsp;&nbsp;&nbsp;
<font size=9 color=red>C</font><font size=9>UM NEED</font>&nbsp;&nbsp;&nbsp;
<font size=9 color=red>B</font><font size=9>ASED</font>&nbsp;&nbsp;&nbsp;
<font size=9 color=red>S</font><font size=9>CHOLARSHIP</font>
</td>
</th>
</table>
<table  align=center bgcolor="#FFDB9F" width=90% height=5%>
<tr>
<td><p align=center>
<img src="poster.jpg">
</td>
</tr>
</table>
<table align=center bgcolor="#FEC965" width=90% height=5%>
<tr>
<td>
<p align=center>
<font color=red size=3>1<sup>st</sup> YEAR OF SCHOLARSHIP FOR STUDENTS BY KSQAURE TRUST</font>
<td>
</tr>
</table>
<table align=center bgcolor="#FFFFFF" width=90% height=1%>
<tr>
<td>
<td>
</tr>
</table>
<table bgcolor="SKYBLUE" align=center width=90%>
<tr>
<td align="center">
<font size=5 color=black>Password Recovery </font>
</td></tr>
</table>
<table align="right">
<tr><td align="right">
<a align="right" href="l.html"><font color=black>Go_back</font></a></td></tr></table>

<form action="fpass1.html" method=post>
<table align="center">
<br><br><br>
<tr>
<td>

Enter your Email_id:<td><input type=text name=emid>*</td></td></tr>
<tr><td>
Enter your DOB:<td>
	<select name='ch1' value='e'>
	<option value='01'>1</option><option value='02'>2</option><option value='03'>3</option>
	<option value='04'>4</option><option value='05'>5</option><option value='06'>6</option>
	<option value='07'>7</option><option value='08'>8</option><option value='09'>9</option>
	<option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>
	<option value='13'>13</option><option value='14'>14</option><option value='15'>15</option>
	<option value='16'>16</option><option value='17'>17</option><option value='18'>18</option>
	<option value='19'>19</option><option value='20'>20</option><option value='21'>21</option>
	<option value='22'>22</option><option value='23'>23</option><option value='24'>24</option>
	<option value='25'>25</option><option value='26'>26</option><option value='27'>27</option>
	<option value='28'>28<option value='29'>29</option><option value='30'>30</option><option value=31'>31</option>
</select>
<select name="ch2" value='f'>
	<option value='01'>01</option><option value='02'>02</option><option value='03'>03</option>
	<option value='04'>04</option><option value='05'>05</option><option value='06'>06</option>
	<option value='07'>07</option><option value='08'>08</option><option value='09'>09</option>
	<option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>
</select>
<select name="ch3" value='g'>
	<option value='1990'>1990</option><option value='1991'>1991</option>
        <option value='1992'>1992</option><option value='1993'>1993</option>
        <option value='1994'>1994</option><option value='1995'>1995</option>
        <option value='1996'>1996</option><option value='1997'>1997</option>
        <option value='1998'>1998</option><option value='1999'>1999</option>
        <option value='2000'>2000</option></select></td></td></tr>
<br><br>
<tr>
<td>
<br><br>
<input type="submit" name=sub value="Submit"></td>
<td><br><br>
<input type="reset" value="Reset" name=reset></td></tr>

</form>
</html>

<?php
$pattern="^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-0-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$";
if(!ereg("$pattern","emid"))
{
	$check=1;
	//echo"<script>alert('Wrong Email id');</script>";	
	//echo"<a href=#></a>";  
}
?>
