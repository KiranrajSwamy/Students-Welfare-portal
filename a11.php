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

<table align=center bgcolor="#FFFFFF" width=90% height=5%>


<tr align=right>

<td>
<a href="a1.html">GO BACK</a></B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="l11.html">Logout</a>
</td>

</tr>

</table>



<?php
$a=$_REQUEST['a'];
if($a==NULL)
{
	echo"<script>alert('please select an option')</script>";
	echo"<p align=center><br><br><a href=a1.html>Select an Option(y/n)</a>";
}
else
if($a=='YES')
{
 echo "<br><br><table align=center><tr><td><b>To Fill the Form.<a href='ap11.html'>Click Here</a></td></tr></table>";
}
else
{
 echo "<br><br><table align=center><tr><td><b>To Fill the Form.<a href='22.php'>Click Here</a></td></tr></table>";
}
?></body>
</html>
