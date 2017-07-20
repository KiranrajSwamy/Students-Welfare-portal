<html>
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

<td><table align=right bgcolor=white><tr><td>
<a href="Search1.html">Back</a>
<a href="l11.html"><b>Logout</a></td></tr></table>

<td>

</tr>

</table>

<?php
$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);
 $no=$_REQUEST["no"];
 $b=mysql_query("select Stud_id,Sname,Course from Student_ where Reg_id='$no'",$con);
 //echo "<table align=center><tr>";
 //echo "<th>Student ID</th><th>Student Name</th><th>Course</th></tr>";
 $r=0;
 echo "<table align=center border=1>";
echo "<table align=center><tr>";
 echo "<th>Student ID</th><th>Student Name</th><th>Course</th></tr>";
 while($row=mysql_fetch_array($b))
 {
  echo "<tr><td>";
  echo $row['Stud_id'];
  echo "</td>";
  echo "<td>";
  echo $row['Sname'];
  echo "</td>";
  echo "<td>";
  echo $row['Course'];
  echo "</td></tr>";
  $r=1;
 }
 echo "</table>";
 if($r==0)
 {
  echo "<table align=center><tr><td>Student with Registration Number ";echo $no;echo" is not found.</td></tr></table>";
 }
?>
 <br><table align=right><tr><td></td></tr></table>
</body>
</html>
