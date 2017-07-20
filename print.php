<html>
<body>
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
<td><table align=right bgcolor=white><tr><td><B>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="l11.html">Logout</a>
</td>
</tr>
</table>
<body background="file:///root/Desktop/Download/colorful_background-wide.jpg ">
<form action=# method="post">
<?php
session_start();

$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);

$un=$_SESSION["nme"];

$r=mysql_query("select Sname,Mname,Last_edu,Last_edu_per,Adress,Category,Course,Acc_no,DOB,Mob_no,Bank_name,Email_id,Gender,occ_of_father from Student_ where S_uid='$un'",$con);
while($q=mysql_fetch_array($r))
{
$cat=$q['Category'];
$cou=$q['Course'];
 $name=$q['Sname'];
 $ledu=$q['Last_edu'];
 $lep=$q['Last_edu_per'];
$bn=$q['Bank_name'];
 $Mname=$q['Mname'];
 $addr=$q['Adress'];
 $dob=$q['DOB'];
 $accno=$q['Acc_no'];
 $mob=$q['Mob_no'];
 $email=$q['Email_id'];
 $g=$q['Gender'];
 $occ=$q['occ_of_father'];
}
?>
<!--<b><u><i><font color="blue" size=5><p align=center>Ksquare Trust<BR>Scholarship Scheme For Meritorious Students--><p align=center><br>APPLICATION FORM</P></font></i></u></b><br><br>



<p align=center>

<font size=5>
<table align="center">

Category: <?php echo $cat;?>     <br><br>

Application for:   <?php echo $cou;?>  <br>

<br><br>

<tr>
<td>
Name Of Applicant: <td><?php echo $name;?>     <br><br></td></td></tr>
<tr>
<td>
Applicant's Date Of Birth: <td><?php echo $dob;?>     <br><br></td></tr>

<tr>
<td>
Applicant's Mother Name:  <td><?php echo $Mname;?>    <br><br></td></td></tr>
<tr>
<td>
Last Education Pursued:   <td> <?php echo $ledu;?>  <br><br></td></td></tr>
<tr><td>
Percentage Obtained: <td>   <?php echo $lep;?>  <br><br></td></td></tr>
<tr><td>
Account No. : <td><?php echo $accno;?>    <br><br></td></td></tr>
<tr><td>
Name Of Bank:    <td><?php echo $bn;?>  <br><br></td></td></tr>
<tr><td>
Applicant's Correspondence Address:<td><?php echo $addr;?><br><br></td></td></tr>
<tr><td>
STD-code Phone No.:    <td>  <br><br></td></tr>
<tr><td>
Applicant's Permanent Address:<td><?php echo $addr;?><br><br><br></td></td></tr>
<tr><td>
Email:<td> <?php echo $email;?>     <br><br></td></td></tr>
<tr><td>
Mobile No.:<td><?php echo $mob;?>      <br><br></td></td></tr>
<tr><td>
Occupation of father:   <td> <?php echo $occ;?>  <br><br></td></td></tr>

</td>
</td>
</font>
</table>
</p>
<table align="center">

<tr><td>
<input type="submit" value="print"></td></td>
</td></tr>
</body>
</form>
</html>
