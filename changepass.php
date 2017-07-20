<html>
<body>
<?php
$con=mysql_connect("localhost","root","");
echo"connected succesfully</br>";
mysql_select_db("samreen",$con);
echo("database created<br>");

$id=$_REQUEST["uname"];
$oldpass=$_REQUEST["oldp"];
$newpass=$_REQUEST["newp"];
$cpass=$_REQUEST["confp"];

if(($id==""&& $oldpass="")&&($newpass="" && $cpass=""))
{
  echo"<script>alert("fill all the fields")</script>";
}
 else
{
$q=mysql_query("select *from Student_" );
$n=0;
while($row=mysql_fetch_array($q))
{
 if($row['name']==$id && $row["password"]==$oldpass)
{

$n=1;
}
}
if($cpass==$newpass)
{
 if($n==1)
{
mysql_query("update Student_ set S_password='$cpass' where S_uid='$id'");
mysql_query("update Student_ set conformpassword='$cpass' where S_uid='$id'");
echo"<h3>Hello</h3><h2> "._SESSION['nme']."</h2><h4>PASSWORD CHANGE SUCCESFULLY....</h4>";
echo"your new password is:<br>";

echo"<a href=l11.html>YOU CAN <B>LOGIN</b>NOW...</a>";
}
}

?>
</body>
</html>
