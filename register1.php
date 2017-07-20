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

<tr>

<td>

<td>

</tr>

</table>


<?php
$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);
//echo("database created<br>");
$n1=$_REQUEST["fname"];
$n2=$_REQUEST["mname"];
$n3=$_REQUEST["lname"];
$addr=$_REQUEST["address"];
$mob=$_REQUEST["mob"];
$g=$_REQUEST["gender"];
$e=$_REQUEST["email"];
$p=$_REQUEST["uname"];
$cp=$_REQUEST["pwd"];
$field=$_REQUEST["ap"];
$ch1=$_REQUEST["ch1"];
$ch2=$_REQUEST["ch2"];
$ch3=$_REQUEST["ch3"];

if($field=='UG')
  $s=1;
if($field=='PG')
 $s=2;

$check=0;
if($n1==""||$addr==""||$mob==""||$g==""||$e==""||$p==""||$cp==""||$field==""||$ch1==""||$ch2==""||$ch3==""||$n2==""||$n3=="")
{$check=1;
echo"<script>alert('Fill all the details')</script>";
}
if((!eregi("[A-Z][a-z]",$n1))||(!eregi("[A-Z][a-z]",$n1))||(!eregi("[A-Z][a-z]",$n1)))
{$check=1;
 echo "<script>alert('Write Valid Name.')</script>";
 //echo "<a href=register.html>REGISTER ONCE AGAIN</a>";
}
$pattern="^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-0-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$";
if(!ereg("$pattern",$e))
{$check=1;
echo"<script>alert('Wrong Email id');</script>";
//echo"<a href=register.html>REGISTER ONCE AGAIN</a>";  
}
$ch=$ch3."-".$ch2."-".$ch1;

$p1="^[7-9][0-9]{10}";

   if((!ereg($p1,$mob)) && ($row['Mob_no']==$mob))
{$check=1;
 echo "<script>alert('Enter Valid Mobile Number.');</script>";
 //echo "<a href=register.html>REGISTER ONCE AGAIN</a>";
}

$n=$n1." ".$n2." ".$n3;
//echo $n;
$c=0;
$q=mysql_query("select S_uid from Student_" );
while($row=mysql_fetch_array($q))
{
 if($row['S_uid']==$p)
 {
  echo"<script>alert('ID ALREADY EXIST.Please enter another Username.')</script>";
  //echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
  $c=1;
 }
}

$q=mysql_query("select A_uid from Administrator");
while($row=mysql_fetch_array($q))
{
 if($row['A_uid']==$p)
 {
  echo"<script>alert('ID ALREADY EXIST.Please enter another Username.')</script>";
  //echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
  $c=1;
 }
}

$q=mysql_query("select Mob_no from Student_");
while($row=mysql_fetch_array($q))
{
 if($row['Mob_no']==$mob)
 {
  echo"<script>alert('MOBILE NUMBER ALREADY EXIST.Please enter another Mobile Number.')</script>";
  //echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
  $c=1;
 }
}

/*if($c==0)
{
$q=mysql_query("select A_id from Administrator" );
while($row=mysql_fetch_array($q))
{
 if($row['A_id']==$p)
 {
  echo"<script>alert('ID ALREADY EXIST')</script>";
  echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
 $c=1;break;
 }
}
}
*/
if($check==1)
{
   echo"<table align=center><tr><td><a href=r11.html>REGISTER ONCE AGAIN</a></td></tr></table>";
}
if($c!=1 && $check!=1)
{
$id=mysql_query("select max(Stud_id) from Student_");
while($row=mysql_fetch_array($id))
{
 $s_id=$row['max(Stud_id)'];
}

$stu=$s_id+1;//generate studnt id
$a=$stu%4;
mysql_query("insert into Student_ (Stud_id,Sch_id,A_id,Sname,S_uid,S_password,Email_id,DOB,Course,Adress,Mob_no,Gender) values('$stu','$s','$a','$n','$p','$cp','$e','$ch','$field','$addr','$mob','$g')",$con);
mysql_query("update Student_ set Sch_id='$s',A_id='$a' where Stud_id='$stu'",$con);
 echo"<h3><p align= center> REGISTRATION CONFIRMED</h3> <BR>";
 echo"<p align= center><a href=l11.html>YOU CAN <B>LOGIN</b>NOW...</a>";
}


?>

</body>
</html>

