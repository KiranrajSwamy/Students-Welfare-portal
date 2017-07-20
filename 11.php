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
<a href="Login1.php">GO BACK</a></B>&nbsp;&nbsp;&nbsp;&nbsp;<a href="l11.html">Logout</a>
</td>

</tr>

</table>



<?php
session_start();
?>
<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);
$course=$_REQUEST['course'];
$reg=$_REQUEST['reg'];
$lye=$_REQUEST['lye'];
$per=$_REQUEST['per'];
$addr=$_REQUEST['addr'];
$mob=$_REQUEST['mob'];
$acc_no=$_REQUEST['acc_no'];
$email=$_REQUEST['email'];
$un=$_SESSION["nme"];
$n=0;
$c=0;

if($course=="UG")
 $d=1;
if($course=="PG")
 $d=2;
if($reg==""||$lye==""||$per=="")
{
 echo "<script>alert('Fill all the details')</script>";
 $c=1;
}
$r1="([0-9].[0-9])*";
$r2="[0-9]";
if((!ereg($r1,$per)))
{
 $c=1;
echo"<script>alert('Write valid Percentage.');</script>";
}
if($email!=null)
{
$pattern="^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[A-Za-z0-0-]+(\.[A-Za-z0-9-]+)*(\.[A-Za-z]{2,3})$";
if(!ereg("$pattern",$e))
{$c=1;
echo"<script>alert('Wrong Email id');</script>";
//echo"<a href=register.html>REGISTER ONCE AGAIN</a>";  
}
}

if($mob!=null)
{
$p1="^[7-9][0-9]{10}";

   if((!ereg($p1,$mob)) && ($row['Mob_no']==$mob))
{$c=1;
 echo "<script>alert('Enter Valid Mobile Number.');</script>";
 //echo "<a href=register.html>REGISTER ONCE AGAIN</a>";
}
}
if($acc_no!=null)
{
if((!eregi("[0-9]{14}",$acc)))
{
 echo "<script>alert('Write Valid Account Number.')</script>";
 $c=1;
 $q=mysql_query("select Acc_no from Student_");
 while($row=mysql_fetch_array($q))
 {
 if($row['Acc_no']==$acc)
 {
  echo"<script>alert('ACCOUNT NUMBER ALREADY EXIST.Please enter another Account Number.')</script>";
  //echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
  $c=1;
 }
 }
}
}
if($c!=1)
{
 $r=mysql_query("select Reg_id from Student_ where S_uid='$un'",$con);
 while($row=mysql_fetch_array($r))
 {
  if($row['Reg_id']==$reg)
  {
  $n=1;
  break;
  }
 }
 if($n!=1)
 {
  echo "<script>alert('Registration Number is Invalid.')</script>";
  $c=1;
 }
 if($n==1)
 {
 if($lye=='F.Y.BA' || $lye=='F.Y.BCom' || $lye=='F.Y.BSc')
 {
  $r=mysql_query("select FY_per from Student_ where Reg_id=$reg and FY_per>80",$con);
   while($row=mysql_fetch_array($r))
  {
   if($row['FY_per']!=null)
   { echo"ABC";
     $c=1;echo $c;
   echo "<script>alert('Cannot get Scholarship for same education as earlier.')<script>";
  }
 

  else if($row['FY_per']==null)
  {
   
   mysql_query("update Student_ set FY_per='$per' where Reg_id=$reg",$con);
   mysql_query("update Student_ set Last_edu='$lye' where Reg_id=$reg",$con);
  }
}
}
 /* else if($r['FY_per']!=null)
   { echo"ABC";
     $c=1;echo $c;
   echo "<script>alert('Cannot get Scholarship for same education as earlier.')<script>";
  }
 }*/
 if($lye=='S.Y.BA' || $lye=='S.Y.BCom' || $lye=='S.Y.BSc')
 {
  $r=mysql_query("select SY_per from Student_ where Reg_id=$reg",$con);
  while($row=mysql_fetch_array($r))
 {
  if($row['SY_per']==null)
  {
   mysql_query("update Student_ set SY_per='$per' where Reg_id='$reg'",$con);
   mysql_query("update Student_ set Last_edu='$lye',Last_edu_per='$per' where Reg_id='$reg'",$con);
  }
  else
  {$c=1;
   echo "<script>alert('Cannot get Scholarship for same education as earlier.')</script>";
  }
 }
}
 if($lye=='T.Y.BA' || $lye=='T.Y.BCom' || $lye=='T.Y.BSc')
 {
  $r=mysql_query("select TY_per from Student_ where Reg_id=$reg",$con);
  while($row=mysql_fetch_array($r))
{
  if($r['TY_per']==null)
  {
   mysql_query("update Student_ set TY_per=$per where Reg_id=$reg",$con);
   mysql_query("update Student_ set Last_edu='$lye',Last_edu_per=$per where Reg_id=$reg",$con);
  }
  else
  {$c=1;
   echo "<script>alert('Cannot get Scholarship for same education as earlier.')</script>";
  }
 }
}
 if($lye=='Master in BA-1st' || $lye=='Master in BCom-1st' || $lye=='Master in BSc-1st')
 {
  $r=mysql_query("select PG1_per from Student_ where Reg_id=$reg",$con);
  while($row=mysql_fetch_array($r))
 {
  if($r['PG1_per']==null)
  {
   mysql_query("update Student_ set PG1_per=$per,Last_edu='$lye',Last_edu_per=$per where Reg_id=$reg",$con);
  }
  else
  {$c=1;
   echo "<script>alert('Cannot get Scholarship for same education as earlier.')</script>";
  }
 }
}
 $r=mysql_query("select Course from Student_ where Reg_id=$reg",$con);
 while($q=mysql_fetch_array($r))
 {
  if($q['Course']==$course)
  {
   mysql_query("update Student_ set Course=$course where Reg_id=$reg",$con);
  }
 }
 if($addr!=null)
 {
 mysql_query("update Student_ set Adress=$addr where Reg_id=$reg",$con);
 }
 if($acc_no!=null)
 {
 
 if(!ereg((0-9),$acc_no))
 {$c=1;
  echo "<script>alert('Invalid Account Number.')</script>";
 }
 else
  mysql_query("update Student_ set Mob_no=$mob where Reg_id=$reg;",$con);
 }
if($mob!=null)
{
 $p="^[7-9][0-9]{9}";
 if(!ereg($p,$mob))
 {
    $c=1;
    echo "<script>alert('Invalid Mobile Number.')</script>";
 }
 else
  mysql_query("update Student_ set Mob_no='$mob' where Reg_id='$reg'",$con);
}
if($email!=null)
{
 $pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-0-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
 if(!ereg("$pattern",$e))
 {
  echo"<script>alert('Wrong Email id');</script>";
  //echo"<a href=register.html>REGISTER ONCE AGAIN</a>";
 }
}
}
}
if($c==1)
{
  
 echo "<p align=center><a href=ap11.html>Apply Once Again.</a>";
}
else if($c==0)
{
 echo "<p align=center>Form Submission Successfull.";
 echo"<br><br>Edit Application Form: <a href=ap11.html><input type=button name=edit value=Edit></a>";
 echo"<br><br>Application Form Print preview: <a href=print.php><input type=button name=pp value=Print_preview></a>";
}
?>
</body>
</html>
