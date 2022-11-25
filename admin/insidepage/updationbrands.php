<?php
     include('../connection.php');
     
        session_start();
         $result=(int)$_SESSION['result'];
         $name=$_POST['nname'];
$sqli="UPDATE brands SET name='$name' WHERE bid=$result ";
$res1=mysqli_query($conn, $sqli);

if(! $res1 ){
    die(mysqli_error($conn));}
else{
    // $result1=mysqli_fetch_assoc($res1);
    echo"<script>window.location.href='brands.php';</script>";
    }
?>