<?php
session_start();
?>
<html>
<body>
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
<a href="l11.html">Logout</a>
</td>

</tr>

</table>





<?php
$con=mysql_connect("localhost","root","");
$database="samreen";
$status=mysql_select_db($database,$con);
$id=$_REQUEST["loginname"];
$_SESSION["nme"]=$_REQUEST["loginname"];
$pass=$_REQUEST["password"];
$q=mysql_query("select S_uid,S_password from Student_",$con);
$n=0;
while($row=mysql_fetch_array($q))
{
 if($row["S_uid"]==$id && $row["S_password"]==$pass)
 {
  $n=1;break;
 }
}
$q=mysql_query("select A_uid,A_password from Administrator",$con);
while($row=mysql_fetch_array($q))
{
 if($row["A_uid"]==$id && $row["A_password"]==$pass)
 {
  $n=2;
 }
}
if($n!=0)
{
if($n==1)
{
 echo"<br><br><table align=center><tr><td><h3>WelCome... </h3><td><h2>".$_SESSION["nme"]."</h2></td></td></tr>";
 echo"<tr><td>To Apply<td><a href=a1.html>Click Here.</td></td></tr></table></a>";
}

if($n==2)
{
 echo"<br><br><table align=center><tr><td><h3>WelCome... </h3><td><h2>".$_SESSION["nme"]."</h2></td></td></tr></table>";
 echo"<p align=center><a href=view1.html>View Options</a>";
}
}
else
{
 echo "<script>alert('Username or Password Invalid')</script>";
 echo "<center>";
 echo "<a href=l11.html>Re-Enter username and password</a>";
 echo "</center>";
}
?>

</body>
</html>
