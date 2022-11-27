<?php
// include('conn.php');
include('conn.php');
$name=mysqli_real_escape_string($conn,$_POST["email"]);
$insert = "INSERT INTO subscribers(emailid,subbscriptiondate) VALUES
('$name','2022-11-26')";

$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
echo"<script>window.location.href='home.php'</script>";
// echo "Data inserted successfully!";}
?>