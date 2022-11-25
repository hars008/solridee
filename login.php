<?php
session_start(); 
include('conn.php');


if (isset($_POST['username']) && isset($_POST["password"])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname=$_POST['username'];
    $pass=$_POST["password"];

    if (empty($uname)) {

        header("Location: loginhtml.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginhtml.php?error=Password is required");

        exit();

    }

    else{

        $sql = "SELECT * FROM customer where rollnumber='$uname' and password='$pass' ";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['rollnumber'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['rollnumber'] = $row['rollnumber'];

                $_SESSION['username'] = $row['firstname'] .' '.$row['lastname']  ;

                $_SESSION['mobilenumber'] = $row['mobilenumber'];
                
                $_SESSION['hostelname'] = $row['hostelname'];
                
                $_SESSION['roomnumber'] = $row['roomnumber'];

                header("Location: home.php?");

                exit();

            }else{

                header("Location: loginhtml.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: loginhtml.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: home.php");

    exit();

}








// $sql="select * from master_login where username='$uname' and password='$pass' ";
// $res=mysqli_query($conn,$sql);
// if($result=mysqli_fetch_assoc($res))
// {
// $_SESSION['username']=$result['uname'];
// echo "Login successful";
// }
// else
// {
// header('location:home.html');
// }
?>