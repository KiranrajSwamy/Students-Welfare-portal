
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
<a href="l11.html">GO BACK</a></B>
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
//echo("database created<br>");
$mn=$_REQUEST["mname"];
$acc=$_REQUEST["acc_no"];
$bank=$_REQUEST["nbank"];
$lye=$_REQUEST["lye"];
$per=$_REQUEST["per"];
$cat=$_REQUEST["ca"];
$un=$_SESSION["nme"];
$of=$_REQUEST["of"];
$place=$_REQUEST["place"];
$s1=$_REQUEST["s1"];
$s2=$_REQUEST["s2"];
$fy=$_REQUEST["fy"];
$sy=$_REQUEST["sy"];
$ty=$_REQUEST["ty"];

$c=0;
$n=0;
if($cat=='UG')
 $d=1;
if($cat=='PG')
 $d=2;
if($acc==""||$lye==""||$per==""||$cat==""||$s1==""||$s2=="")
{
 echo "<script>alert('Fill all the details')</script>";
 $c=1;
}
$r="([0-9].[0-9])*";
if((!eregi($r,$per)))
{
 echo "<script>alert('Write Valid Percentage.')</script>";
 $c=1;
}

if((!eregi("[A-Z][a-z]",$mn)))
{
 echo "<script>alert('Write Valid Mother's Name.')</script>";
 $c=1;
}

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

if(date('y-m-d')>'16-12-31')
{ 
  echo"<script>alert('Due date to apply has expired')</script>";
  $c=1;
}
if($c==0)
{
 $date=date('y-m-d');
 $r=mysql_query("select max(Reg_id) from Student_",$con);
 while($row=mysql_fetch_array($r))
 {
  $i=$row['max(Reg_id)'];
  $i=$i+1;
 }
 
 if($lye=='12th')
 {
 // $r=mysql_query("update Student_ set 10th_per='$s1',Date_of_sub='$date',Reg_id=$i,12th_per='$per',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);

    $r=mysql_query("uprdate Student_ set 10th_per='$s1,12th_per='$per',Mname='$mn',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);
 if($r)
  echo"Inserted";
 if(!$r)
  echo"Not";
  $a=1;

 } 


 if($lye=='F.Y.BA' || $lye=='F.Y.BCom' || $lye=='F.Y.BSc')
 {echo $lye;echo $s1;
  $r=mysql_query("update Student_ set 10th_per='$s1',12th_per='$s2',Date_of_sub='$date',Reg_id=$i,FY_per='$per',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);
 $a=1;
 }

 if($lye=='S.Y.BA' || $lye=='S.Y.BCom' || $lye=='S.Y.BSc')
 {echo $un;
  $r=mysql_query("update Student_ set 10th_per='$s1',12th_per='$s2',FY_per='$fy',Date_of_sub='$date',Reg_id='$i',SY_per='$per',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);
  //echo"ABC";
 if($r)
  //echo"Inserted";
 if(!$r)
  //echo"Not";
  $a=1;
 }

 if($lye=='T.Y.BA' || $lye=='T.Y.BCom' || $lye=='T.Y.BSc')
 {
  $r=mysql_query("update Student_ set 10th_per='$s1',12th_per='$s2',FY_per='$fy',SY_per='$sy',Date_of_sub='$date',Reg_id=$i,TY_per='$per',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);
  $a=1;
 //echo"ABC";
  }
 if($lye=='Master in BA-1st' || $lye=='Master in BCom-1st' || $lye=='Master in BSc-1st')
 {echo $lye;
  $r=mysql_query("update Student_ set 10th_per='$s1',12th_per='$s2',FY_per='$fy',SY_per='$sy',TY_per='$ty',Date_of_sub='$date',Reg_id=$i,PG1_per='$per',Last_edu='$lye',Mname='$mn',Acc_no='$acc',Bank_name='$bank',Last_edu_per='$per',Category='$d',Occ_of_father='$of',Place='$place' where S_uid='$un'",$con);
 $a=1;
 //echo "$s1";
 }
 
if($a==1)
{
 echo "<br><br><b><p align=center>Your Registration Number is ";echo $i; echo"<br><p align=center>Remember this number for further communication.";
 echo "<script>alert('Form Submission Successfully.')</script>";
	
//echo "<p align=center>Form Submission Successfull.";
 echo"<br><br>Edit Application Form: <a href=22.php><input type=button name=edit value=Edit></a>";
 echo"<br><br>Application Form Print preview: <a href=print.php><input type=button name=pp value=Print_preview></a>";
}
}

if($c==1)
{
 echo "<script>alert('Form Submission Unsuccessfull.')</script>";
 echo "<br><br><p align= center>To fill the form once again<a href=22.php>Click here</a>";
}
?>
</body>
</html>


