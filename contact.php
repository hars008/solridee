<?php
session_start();
include('conn.php');
?>
<?php
include('conn.php');
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['mobile'];
    $message=$_POST['message'];
    $sql="INSERT INTO `queries`(`name`, `email`, `contactno`, `message`) VALUES ('$name','$email','$subject','$message')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        echo "<script>alert('Message Sent Successfully');
        window.location.href='contact.php';
        </script>";
        
    }
    else
    {
        echo "<script>alert('Message Not Sent');
        window.location.href='contact.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/contact.css">
  <!-- <link rel="stylesheet" href="css/stylesol.css"> -->
  <script src="https://kit.fontawesome.com/0a131cdcf3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="K:\Ready\web\bootstrap-5.2.0\dist\css\bootstrap.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dropdowns/">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- css stylesheets -->
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
      <img src="images/logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
      
      SolRidee</a>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0"  style="margin-right:10%;">
        <li class="nav-item active">
              <a class="nav-link" href="home.php"><i class="fa fa-home" aria-hidden="true"></i>   Home<span class="sr-only">(current)</span></a>
              </li>
          <?php 
          if(isset($_SESSION['username'])){
          ?>
           
        <li class="nav-item active">
          <a class="nav-link" href="loginhtml.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
              <a class="nav-link" href="listing.html"><i class="fa-solid fa-heart"></i>Wish List  <span class="sr-only">(current)</span></a>
        </li>
          <?php }?>
    
          <?php 
            if(!isset($_SESSION['username'])){
          ?>
    
            <li class="nav-item active">
            <a class="nav-link" href="sign.html"><i class="fa fa-sign-in" aria-hidden="true"></i>   Register <span class="sr-only"></span></a>
            </li>
           
            <li class="nav-item active">
            <a class="nav-link" href="loginhtml.php"><i class="fa-solid fa-user"></i>   login  <span class="sr-only">(current)</span></a>
            </li>
            
            <?php }?>
    
            
         
              <!-- <li class="nav-item">
                  <a class="nav-link active" href="#cta">Book now</a>
              </li> -->
              <li class="nav-item active">
              <a class="nav-link" href="listing.php"><i class="fa-solid fa-bookmark"></i>   Book Now <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
              <a class="nav-link" href="contact.html"><i class="fa fa-phone" aria-hidden="true"></i>   Contact us <span class="sr-only">(current)</span></a>
              </li>
              
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
       
      </div>
      <?php 
        if(isset($_SESSION['username'])){
           
          
      ?>
            <ul type="none">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;"><?php echo $_SESSION['username'] ; ?></a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#"><?php echo $_SESSION['rollnumber'] ; ?></a>
                  <a class="dropdown-item" href="#">User Details</a>
                  <a class="dropdown-item" href="#">Orders</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
              </ul>
      <?php } ?>
    </nav>

    <!-- Top -->

  </section>
  <div class="top">
    <img class="topimg" src="images/topimg.jpg" alt="">
    <div class="inside-top">
      <h4>SolRidee</h4>
      <h6>Home>Contact</h6>
    </div>
  </div>


  <section class="ftco-section">
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-6 text-center mb-5">
  </div>
  </div>
  <div class="row justify-content-center">
  <div class="col-lg-10 col-md-12">
  <div class="wrapper">
  <div class="row no-gutters">
  <div class="col-md-7 d-flex align-items-stretch">
  <div class="contact-wrap w-100 p-md-5 p-4">
  <h3 class="mb-4">Get in touch</h3>
  <form method="POST" action="contact.php" enctype="multitype/form-data" id="contactForm" name="contactForm" novalidate="novalidate">
  <div class="row">
  <div class="col-md-6 my-2">
  <div class="form-group">
  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
  </div>
  </div>
  <div class="col-md-6 my-2">
  <div class="form-group">
  <input type="email" class="form-control" name="email" id="email" placeholder="Email">
  </div>
  </div>
  <div class="col-md-12 my-2">
  <div class="form-group">
  <input type="text" class="form-control" name="mobile" id="subject" placeholder="Phone No.">
  </div>
  </div>
  <div class="col-md-12 my-2">
  <div class="form-group">
  <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
  <button type="submit" name="submit"  class="btn btn-warning">Submit</button>
  </div>
  </div>
  </div>
  </form>
  </div>
  </div>
  <div class="col-md-5 d-flex align-items-stretch">
  <div class="info-wrap w-100 p-lg-5 p-4 contact">
  <h3 class="mb-4 mt-md-4">Contact us</h3>
  <div class="dbox w-100 d-flex align-items-start">
  <div class="text pl-3">
    <i class="fa-solid fa-location-dot"></i>
  <p><span> Address: </span> Dwarika Prasad Mishra Indian Institute of Information Technology Design and Manufacturing Jabalpur, Near dumna National park, Airport Road ,Jabalpur, Madhya pradesh-482005</p>
  </div>
  </div>
  <div class="dbox w-100 d-flex align-items-center">

  <div class="text pl-3">
    <i class="fa-solid fa-phone"></i>
  <p><span> Phone: </span>+91 8626841891</p>
  </div>
  </div>
  <div class="dbox w-100 d-flex align-items-center">

  <div class="text pl-3">
    <i class="fa-solid fa-envelope"></i>
  <p><span> Email: </span> solridee2021@gmail.com</p>
  </div>
  </div>

  </div>

  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </section>


  <!-- Bottom -->
  <section>
    <div class="foot">
      
    </div>
  </section>
</body>

</html>
