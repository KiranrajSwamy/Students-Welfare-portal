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
<a href= "view1.html"><b>Back</a>
<a href="l11.html"><b>Logout</a></td></tr></table>

<td>

</tr>

</table>





<?php
$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);
$q=$_REQUEST["n"];
echo $n;
if($q==NULL)
{
	echo "<script>alert('Select an option.')</script>";
	echo "<p align=center><a href=view1.html>select an option</a>";		
}
if($q==1)
{
 $b=mysql_query("select Stud_id,Sname,Last_edu_per,Reg_id from Student_",$con);
 echo "<br><br><br><table align=center border=1><tr>";

 echo "<th>Student ID</th><th>Student Name</th><th>Last Education Percentage</th><th>Registration ID</th></tr>";
 while($row=mysql_fetch_array($b))
 {
  echo "<tr><td>";
  echo $row['Stud_id'];
  echo "</td>";
  echo "<td>";
  echo $row['Sname'];
  echo "</td>";
  echo "<td>";
  echo $row['Last_edu_per'];
  echo "</td>";
  echo "<td>";
  echo $row['Reg_id'];
  echo "</td>";
 }
 echo "</table><table align=right><tr><td>";
 echo "<a href='view1.html'>Back</a></td></tr></table>";
}
/*if($q==2)
{
 $b=mysql_query("select Stud_id,Course,Last_edu_per from Student_",$con);
 {
  while($r=mysql_fetch_array($b))
  {
   $max=mysql_query("select count(*) from Student_ where Status='Selected'",$con);
   $b1=$r['Course'];
   $b2=$r['Last_edu_per'];
   $b3=$r['Stud_id'];echo $max;
   $c=mysql_query("select Sch_type,Description from Scholarship where Sch_type='$b1'",$con); 
   echo $c['Sch_type'];
   if($c['Sch_type']=='$b1' && $c['Description']<='$b2' && $max<300)
   {echo $c['Sch_type'];
    mysql_query("update Student_ set Status='Selected' where Stud_id='$b3'",$con);
   }
  }
 }echo "All Students are Verified.";
}*/
if($q==2)
{
 $b=mysql_query("select Stud_id,Course,Last_edu_per,Category from Student_",$con);
 {
  while($r=mysql_fetch_array($b))
  {
   $max=mysql_query("select count(Stud_id) from Student_ where Status='Selected'",$con);
   $b1=$r['Course'];
   $b2=$r['Last_edu_per'];
   $b3=$r['Stud_id'];
   $b4=$r['Category'];
	echo $max['count(Stud_id)'];
   if(($b1=='UG' && $b2>=80 && $b4='General' && $max<300)||($b1=='PG' && $b2>=70 && $b4='General' && $max<300)||($b1=='UG' && $b2>=75 && $b4='Handicapped' && $max<300)||($b1=='PG' && $b2>=65 && $b4='Handicapped' && $max<300))
   {
    mysql_query("update Student_ set Status='Selected' where Stud_id='$b3'",$con);
   }
  }
 }echo "<br><br><br><table align =center><tr><td>All Students are Verified.</td></tr>";
  echo "<tr align=right><td><a href='view1.html'>Back</a></td></tr></table>";
}

if($q==3)
{
 echo "<br><br><table align=center><tr><td>To Search according to Registration Number of Student.<td><a href=Search1.html>Click here</a></td></td></tr><br>";

 echo "<tr><td>To Search according to Student ID.<td><a href=Search1.html>Click here</a></td></td></tr><br>";
  echo "<tr align=right><tr><tr><td><td><a href='view1.html'>Back</a></td></td></tr></tr></tr></table>";
}
if($q==4)
{
 $b=mysql_query("select Stud_id,Sname,Mname,Last_edu,Last_edu_per,Reg_id from Student_ where Status='Selected'",$con);
 echo "<table align=center border=1><tr>";
 echo "<th>Student ID</th><th>Student Name</th><th>Mother's Name</th><th>Qualification</th><th>Percentage</th><th>Registration ID</th></tr>";
 while($row=mysql_fetch_array($b))
 {
  echo "<tr><td>";
  echo $row['Stud_id'];
  echo "</td>";
  echo "<td>";
  echo $row['Sname'];
  echo "</td>";
  echo "<td>";
  echo $row['Mname'];
  echo "</td>";
  echo "<td>";
  echo $row['Last_edu'];
  echo "</td>";
  echo "<td>";
  echo $row['Last_edu_per'];
  echo "</td>";
  echo "<td>";
  echo $row['Reg_id'];
  echo "</td></tr>";
 } echo "<table align=right><td><a href='view1.html'>Back</a></td></table>";
}

if($q==5)
{
 $r1=mysql_query("select * from Student_;",$con);
 $r1_=mysql_num_rows($r1);
 echo"<font size=5 color='red'><p align=center>REPORT LAYOUT</font>";
 echo"<table border=1 align=center color=pink>";
 echo"<tr>";
 echo"<td>"; 
 echo"Number of Student's Applied:";
 echo "</td>";
 echo"<td>";
 echo $r1_;
 echo"</td>";
 echo"</tr>";
 
 $r2=mysql_query("select * from Student_ where Status='Selected'",$con);
 $r2_=mysql_num_rows($r2);
 echo"<tr>";
 echo"<td>";
 echo"Number of Student's Selected:<br>";
 echo"</td>";
 echo"<td>";
 echo $r2_;
 echo"</td>";
 echo"</tr>";
 $r3=mysql_query("select * from Student_ where Course='UG' and Status='Selected'",$con);
 $r3_=mysql_num_rows($r3);
  echo"<tr>";
 echo"<td>";
 echo"Number of UnderGraduate Student's Selected:";echo"</td>";
 echo"<td>";
 echo $r3_;
 echo"</td>";
 echo"</tr>";
 $r4=mysql_query("select * from Student_ where Course='PG' and Status='Selected'",$con);
 $r4_=mysql_num_rows($r4);
   echo"<tr>";
 echo"<td>";
 echo"Number of PostGraduate Student's Selected:";echo"</td>";
 echo"<td>";
 echo $r4_;
 echo"</td>";
 echo"</tr>";
 $r5=mysql_query("select * from Student_ where Category='Handicapped' and Status='Selected'",$con);
 $r5_=mysql_num_rows($r5);
  echo"<tr>";
 echo"<td>";
 echo"Number of Handicapped Student's Selected:";echo "</td>";
 echo"<td>";
 echo $r5_;
 echo"</td>";
 echo"</tr>";
 echo"</table>";
 echo "<a href='view1.html'>Back</a>";
}
?>
</body>
</html>

