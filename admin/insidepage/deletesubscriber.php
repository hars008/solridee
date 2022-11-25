<?php
     include('../connection.php');
    if(isset($_GET['uid']))
    {  
    $result = $_GET['uid'];
$sqli=" Delete 
FROM subscribers
 WHERE emailid='$result'";
$res1=mysqli_query($conn, $sqli);

if(! $res1 ){
    die(mysqli_error($conn));}
else{
    $result1=mysqli_fetch_assoc($res1);
    ?><script>alert("Subscriber deleted");</script>;<?php
    echo"<script>window.location.href='subscribers.php';</script>";
    }
    }
?>