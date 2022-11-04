<?php
include('conn.php');
$userid=$_POST['username'];
$pass=$_POST["password"];

$sql="select * from master_login where userid='$userid' and pass='$pass' ";
$res=mysqli_query($conn,$sql);
if($result=mysqli_fetch_assoc($res))
{
$_SESSION['userid']=$result['userid'];
header('location:dash.html');
}
else
{
echo "<script>alert('Enter correct username and password');</script>"
}
?>