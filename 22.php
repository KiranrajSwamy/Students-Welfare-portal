<html>

<head>

<title>Ksquare Trust</title></head>

<body bgcolor="#FFEED1">

<table  align=center bgcolor=#FFEED1 width=90% height=5%>

<th>

<td><img border="0" src="new-logo.jpg">

</td>

<td align=center><font size=12 color=black face="Tahoma">Ksquare Trust</font> 

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
<a href="a11.php">GO BACK</a></B>
</td>

</tr>

</table>


<?php
session_start();

$con=mysql_connect("localhost","root","");
//echo"connected succesfully</br>";
mysql_select_db("samreen",$con);

$un=$_SESSION["nme"];

$r=mysql_query("select Sname,Adress,DOB,Mob_no,Email_id,Gender from Student_ where S_uid='$un'",$con);
while($q=mysql_fetch_array($r))
{
 $name=$q['Sname'];
 $addr=$q['Adress'];
 $dob=$q['DOB'];
 $mob=$q['Mob_no'];
 $email=$q['Email_id'];
 $g=$q['Gender'];
}
?>
<html>

<body bgcolor="#FFEED1">

<form action="form1.php" method="get">

<p align=center><br>APPLICATION FORM</P>
<p align=center>(All <sup><small><font color=red>*</small></sup></font> fields are mandatory)</P></i>

<p align=center>
Category<sup><small><font color=red>*</font></small></sup>:<input type="radio" name="ca">General
<input type="radio" name="ca">Handicaped  

<p align=center>
<br>Application for<sup><small><font color=red>*</font></small></sup> :<input type="radio" name="course">Undergraduate

<input type="radio" name="course">Postgraduate 
<br>
(please tick in appropriate block)  
<br><br>
<table align=center>

<tr><td>
Name Of Applicant:<td><?php echo $name;?></td></td></tr>  

<tr><td>
Applicant's Date Of Birth:<td><?php echo $dob;?></td></td></tr>  

<tr><td>
Applicant's Mother Name:<td><input type="text" name="mname">  </td></td></tr>

<tr><td>
Last Education Pursued <sup><small><font color=red>*</font></small></sup> :<td>
<select name="lye">
        <option value="F.Y.BA">F.Y.BA</option><option value="F.Y.BCom">F.Y.BCom</option><option value="F.Y.BSc">F.Y.BSc</option>
        <option value="S.Y.BA">S.Y.BA</option><option value="S.Y.BCom">S.Y.BCom</option><option value="S.Y.BSc">S.Y.BSc</option>
        <option value="T.Y.BA">T.Y.BA</option><option value="T.Y.BCom">T.Y.BCom</option><option value="T.Y.BSc">T.Y.BSc</option>
        <option value="Master in BA-1st">Masters in BA-1st</option><option value="Master in BCom-1st">Master in BCom-1st</option><option value="Master in BSc-1st">Master in BSc-1st</option>
</select>
</td></td></tr>


 
<tr><td>
Percentage Obtained <sup><small><font color=red>*</font></small></sup> :<td><input type="text" name="per"></td></td></tr>

<tr><td>
Account No. <sup><small><font color=red>*</font></small></sup> :<td><input type="text" name="acc_no"></td></td></tr>  

<tr><td>
Name Of Bank:<td><input type="text" name="nbank"></td></td></tr>

<tr><td>
Occupation of father:<td><input type="text" name="of"></td></td></tr>


<tr><td>
Applicant's Correspondence Address:<td><?php echo $addr;?></td></td></tr>


<tr><td>
Email:<td><?php echo $email;?></td></td></tr>

<tr><td>
Mobile No.:<td><?php echo $mob;?></td></td></tr>

<tr><td>
Place:<td><input type="text" name="place"></td></td></tr>
</b>
</font>
</table>

<font size=3><B>ENTER THE FOLLOWING DETAILS</B>

<table align=center>
<tr><td>
10th marks <sup><small><font color=red>*</font></small></sup> :<td><input type="text" name="s1">
</td></td></tr>
<tr><td>
12th marks <sup><small><font color=red>*</font></small></sup> :<td><input type="text" name="s2">
</td></td></tr>
<tr><td>
FY  marks  :<td><input type="text" name="fy"></td></td></tr>
<tr><td>SY marks:<td><input type="text" name="sy"></td></td></tr>
<tr><td>TY marks:<td><input type="text" name="ty"></td></td></tr>
</table>

<p align=center>
<b><i><u>Upload Following Documents:</u></i></b>  


<table align=center>
<tr><td>
1.Marksheet of 10th standard's onwards.<td><input type="file"></td></td></tr> 

<tr><td>2.Proof of domicile.<td><input type="file"></td></td></tr>

<tr><td>3.Age Proof.<td><input type="file"></td></td></tr>

<tr><td>4.Last educational institution character certificate.<td><input type="file"></td></td></tr> 

<tr><td>5.Testimony of present education institution where pursuing education.<td><input type="file"></td></td></tr> 

<tr><td>6.If disabled,then disability certificate.<td><input type="file"></td></td></tr> 

<tr><td>7.Passport size photograph<td><input type="file"></td></td></tr> 
</table>

<p align=center>
<input type="submit" value="Submit">
 

</body>

</html>



