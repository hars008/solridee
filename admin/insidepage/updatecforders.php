<?php
     include('../connection.php');
     if(isset($_GET['uid']))
     {  
     $res=$_GET['uid'];
$sqli="UPDATE orders SET status='Confirmed' WHERE oid=$res ";
$res1=mysqli_query($conn, $sqli);

if(! $res1 ){
    die(mysqli_error($conn));}
else{
    ?><script>alert("Order Confirmed");</script>;<?php
    echo"<script>window.location.href='orders.php';</script>";
    }
}
?>