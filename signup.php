<?php
include('conn.php');
$f=0;
if($_POST["p"]==$_POST["cp"])
{
$fname=mysqli_real_escape_string($conn,$_POST["fname"]);
$lname=mysqli_real_escape_string($conn,$_POST["lname"]);
$rn=mysqli_real_escape_string($conn,$_POST["roll_no"]);
$mn=$_POST["mobile_no"];
$h=mysqli_real_escape_string($conn,$_POST["hostel"]);
$ro=mysqli_real_escape_string($conn,$_POST["room_no"]);
$p=mysqli_real_escape_string($conn,$_POST["p"]);
$cp=mysqli_real_escape_string($conn,$_POST["cp"]);
$insert = "INSERT INTO customer (firstname,lastname,rollnumber,mobilenumber,hostelname,roomnumber,password) VALUES
('$fname','$lname','$rn',345,'$h','$ro','$p')";

$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
header("Location: loginhtml.php?error=Registered Succesfully!!");
}
else{
    echo "<script> alert('enter same password') ;
        
        window.location.href='sign.html';
    </script>";
    // $f=1;
    // echo "Data inserted successfully!";
}
// if($f==1)
// {
// }
// ?>