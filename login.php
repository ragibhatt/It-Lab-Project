<?php
session_start();
include('connect.php');
$username=$_POST['name'];
$pass=$_POST['password'];
$query="select * from login where id=\"$username\"";
$result=mysqli_query($dbh,$query) or die("error querying");
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
if($row['password']==$pass && $row['user_type']==0)
{
$_SESSION['sec']=$row['sec'];
header('Location:ajax1.html');
}
else if($row['password']==$pass && $row['user_type']==1)
header('Location:admin.html');
else
header('Location:login.html');
}
?>
