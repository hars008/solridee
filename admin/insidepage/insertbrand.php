<?php
// include('conn.php');
include('../connection.php');
$name=mysqli_real_escape_string($conn,$_POST["brandname"]);
$id=$_POST["bid"];
$insert = "INSERT INTO brands (name,bid) VALUES
('$name','$id')";

$results = mysqli_query($conn,$insert) or die(mysqli_error($conn));
echo"<script>window.location.href='brands.php'</script>";
// echo "Data inserted successfully!";}
?>