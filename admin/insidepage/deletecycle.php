<?php
     include('../connection.php');
    if(isset($_GET['uid']))
    {  
    $result = $_GET['uid'];
$sqli=" Delete 
FROM cycles
 WHERE cycleid='$result'";
$res1=mysqli_query($conn, $sqli);

if(! $res1 ){
    die(mysqli_error($conn));}
else{
    // $result1=mysqli_fetch_assoc($res1);
    echo"<script>window.location.href='cycles.php';</script>";
    }
    }
?>