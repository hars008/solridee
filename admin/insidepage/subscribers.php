<?php 
    session_start();
       if(!isset($_SESSION['userid'])){
        header('adminlogin.html');
       }
  ?><!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/stylesol.css"> -->
  <link rel="stylesheet" href="css/stylesol.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/45b5e06856.js" crossorigin="anonymous"></script>
  <!-- bootstrap scripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../../css/listingStyle.css">
  <title></title>
</head>

<body>
    <section id="title">
        
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
  <img src="../../images/logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
  SolRidee</a>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0"  style="margin-right:10%;">
    
   
    <li class="nav-item active">
      <a class="nav-link" href="../dash.php"> Dashboard <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
          <a class="nav-link" href="regusers.php">Reg Users  <span class="sr-only">(current)</span></a>
    </li>
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Brands</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="brands.php">View Brands</a>
              <a class="dropdown-item" href="createbrands.php">Create Brands</a></div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Cycles</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="cycles.php">View Cycles</a>
              <a class="dropdown-item" href="createvehicles.php">Post cycle</a>
            </div>
          </li>
          <!-- <li class="nav-item active">
          <a class="nav-link" href="contact.html"><i class="fa fa-phone" aria-hidden="true"></i>   Contact us <span class="sr-only">(current)</span></a>
          </li> -->
    </ul>
  
  <?php 
    if(isset($_SESSION['userid'])){
       
      
  ?>
        <ul type="none">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><?php echo $_SESSION['userid'] ; ?></a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          </ul>
  <?php } ?>
</nav>
<div class="top">
    <img class="topimg" src="../../images/topimg.jpg" alt="">
    <div class="inside-top">
        <h4>Bike Listing</h4>
        <h6>Dashboard>Subscribers</h6>
    </div>
</div>
</section>
<?php
// include('../conn.php');
include('../connection.php');
$sql="SELECT * FROM subscribers" ;
$res=mysqli_query($conn, $sql);
echo'<h1 class="pagehead" style="text-align:center; margin-top:5%; font-size:1.95rem; font-weight:bold; font-family:cursive;">Subscribers:</h1>';
echo '<table border="1" class="Details" cellspacing="4" cellpadding="3" style="text-align:center; margin:auto;margin-bottom:5%;" ><tr class="firstrow"><th>Email-id</th><th>Subscription-Date</th><th>Delete</th></tr>';
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['emailid'] . '</td><td>'.
$result['subbscriptiondate'] . '</td><td><a
href="deletesubscriber.php?uid=' . $result['emailid'] . ' ">Delete</a></td></tr>';
}
echo '</table>';
?>
    <!-- Title -->




<!-- last -->
<section>
  <div class="address" style="background-color:black; padding:20px; text-align: center; color:#EAEAEA;" >
    <p><center><b>Address :</b> Dwarika Prasad Mishra Indian Institute of Information Technology Design and Manufacturing Jabalpur, Near dumna National park, Airport Road ,Jabalpur, Madhya pradesh-482005</center></p>
  <div class="si">
  <i class="social-icon fa-brands fa-facebook mx-2"></i>
  <i class="social-icon fa-brands fa-instagram mx-2"></i>
  <i class="social-icon fa-brands fa-twitter mx-2"></i>
  <p>© Copyright Soleridee</p></div>
  </div>
  </div>
</section>
</body>

</html>
