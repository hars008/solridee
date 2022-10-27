<?php
include('conn.php');
$userid=$_POST['username'];
$pass=$_POST["password"];

$sql="select * from master_login where username='$userid' and password='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['username']=$result['userid'];
echo "Login successful";
}
else
{
header('location:home.html');
}
?>