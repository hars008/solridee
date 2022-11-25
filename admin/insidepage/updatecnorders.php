<?php
     include('../connection.php');
     if(isset($_GET['uid']))
     {  
     $res=$_GET['uid'];
$sqli="UPDATE orders SET status='Cancelled' WHERE oid=$res ";
$res1=mysqli_query($conn, $sqli);

if(! $res1 ){
    die(mysqli_error($conn));}
else{
    ?><script>alert("Order Cancelled");</script>;<?php
    echo"<script>window.location.href='orders.php';</script>";
    }
}
?>