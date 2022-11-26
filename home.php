<?php

session_start();

// if(!isset($_SESSION['username'])){
//   header('location:login.php');
// }

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>SolRidee</title>
  <!-- google fonts -->
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

  <section id="title">

<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
  <img src="images/logo.jpg" width="40" height="40" class="d-inline-block align-top" alt="">
  
  SolRidee</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0"  style="margin-right:10%;">
    
      <?php 
      if(isset($_SESSION['username'])){
      ?>
       
    <li class="nav-item active">
      <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Orders <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active">
          <a class="nav-link" href="listing.php"><i class="fa-solid fa-heart"></i>Wish List  <span class="sr-only">(current)</span></a>
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
          <a class="nav-link" href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>   Contact us <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fa fa-question-circle" aria-hidden="true"></i>   Faqs <span class="sr-only">(current)</span></a>
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
              <a class="dropdown-item" href="order.php">Orders</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          </ul>
  <?php } ?>
</nav>


  <div class="fluid-container">
    <div class="row">
      <div class="col-lg-12">
        <h1 style="margin-bottom: 100px;">Get Cycle anytime anywhere by just one click.</h1>
        <button type="button" class="btn btn-warning btn-lg download-button" onclick=" location.href='listing.php';"><i class="fab fa-cycle"></i>Book a Ride <i class="fa-solid fa-bicycle"></i></button>
        <!-- <button type="button" class="btn btn-outline-light btn-lg download-button"><i class="fab fa-google-play"></i>Book a ride</button> -->
      </div>
        <!-- <div class="col-lg-6">
          <img class="title-image" src="images/iphone6.png" alt="iphone-mockup">
        </div> --></div></div>
        
      </section>

      <section id="testi">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://citycycling.in/wp-content/uploads/2016/06/full-img-1.png?id=819" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://images.pexels.com/photos/207779/pexels-photo-207779.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://th.bing.com/th/id/R.5f19a1dafb4f2fbf59032e252fb003ad?rik=EvzOl6wGPrJapQ&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f11%2fCycling-HD-Wallpaper.jpg&ehk=k%2bWvNIWUstgv3S%2bqTg38XaO1FG6zKpccK8I8A%2foLEn8%3d&risl=&pid=ImgRaw&r=0" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="false"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div></section>
  <section id="Featured-products">
    

      <h2 ><b>Find the BEST</b><div class="best" style=" line-height: 1;
        color: #ffffff;
        padding: 0 6px 1px 5px;
        transform: skew(-14deg);
        background: #ff5e3a;
        background: linear-gradient(#ff5e3a 0%, #ff653c 69%, #ff4e3c 100%);
        display: inline-block;
        font-weight: 500;
        letter-spacing: 0;
        position: relative;
"> cycle For You</h2></div>
      <div class="best-1" style="line-height: 1;
        color: #ffffff;
        padding: 0 6px 1px 5px;
        transform: skew(-14deg);
        background: #f1a796;
        background: linear-gradient(#f1a796 0%, #f1a796 69%, #f1a796 100%);
        display: inline-block;
        font-weight: 500;
        letter-spacing: 0;
        position: relative;
">
      <p >You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your </br>
        holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best bikes</br>
         with best deals!!!</p>
    </div>
<div class="row">
  <div class="pricing-column col-lg-4 col-md-6">
<div class="card ">
  <div class="card-header">
 <h3>MTB</h3>
  </div>
  <div class="card-body">
        
        <img src="images/cycle1.jpg">  <h4>MOUNTAIN BIKE</h4> <p>Unlimited App Usage,BEST EVER BIKE,FUEL LESS</p> <button class="  btn btn-lg btn-block btn-warning" type="button">BOOK NOW</button>
        
  </div>
</div>
</div>
<div class="pricing-column col-lg-4 col-md-6">
    <div class="card ">
      <div class="card-header">
     <h3>AVON CYCLE</h3>
      </div>
      <div class="card-body">
            
            <img src="images/cycle2.png"><h4>BEST CYCLE</h4> <p>BEST RIDE,UNLIMITED RIDE,UNLIMITED TIME</p> <button class="  btn btn-lg btn-block btn-warning" type="button">BOOK NOW</button>
            
      </div>
    </div>
  </div>
<div class="pricing-column col-lg-4 col-md-6">
    <div class="card ">
      <div class="card-header">
     <h3>HERO BUZZ</h3>
      </div>
      <div class="card-body">
            
            <img src="images/cycle3.png"><h4>EFFICIENT!</h4> <p>Pirority Listing,Unlimited XPECTATIONS,TOP RATED</p> <button class="  btn btn-lg btn-block btn-warning" type="button"  >BOOK NOW</button>
            
      </div>
    </div></div>
<!-- </div> -->
<!-- <div class="row"> -->
<div class="pricing-column col-lg-4 col-md-6">
    <div class="card ">
      <div class="card-header">
     <h3>MTB</h3>
      </div>
      <div class="card-body">
            
            <img src="images/Montra_Blues11.png">  <h4>MOUNTAIN BIKE</h4> <p>Unlimited App Usage,BEST EVER BIKE,FUEL LESS</p> <button class="  btn btn-lg btn-block btn-warning" type="button">BOOK NOW</button>
            
      </div>
    </div>
  </div>

<div class="pricing-column col-lg-4 col-md-6">
    <div class="card ">
      <div class="card-header">
     <h3>AVON CYCLE</h3>
      </div>
      <div class="card-body">
            
            <img src="images/avon.webp"> <h4>BEST CYCLE</h4> <p>BEST RIDE,UNLIMITED RIDE,UNLIMITED TIME</p> <button class="  btn btn-lg btn-block btn-warning" type="button">BOOK NOW</button>
            
      </div>
    </div></div>
<div class="pricing-column col-lg-4 col-md-6">
    <div class="card ">
      <div class="card-header">
     <h3>HERO BUZZ</h3>
      </div>
      <div class="card-body">
            
            <img src="images/shwinn.jpg"> <h4>EFFICIENT!</h4> <p>Pirority Listing,Unlimited XPECTATIONS,TOP RATED</p> <button class="  btn btn-lg btn-block btn-warning" type="button">BOOK NOW</button>
            
      </div>
    </div></div>
</div>
  </section>
  <div class="faqs" style="text-align:center;color:white;">
    <div class="sub bookOnline" style="text-align:center;">
      <img src="images/cx.png" alt="" class="faqi"><br>
      <h5>Book Online</h5>
    </div>
    <div class="sub pickCycle" style="text-align:center;">
      <img src="images/cc.png" alt="" class="faqi"><br><br>
      <h5>Pick up cycle</h5>
    </div>
    <div class="sub enjoyRide" style="text-align:center;">
      <img src="images/ss.png" alt="" class="faqi"><br><br>
      <h5>Enjoy your Ride</h5>
    </br>
  </div>
  <div class="faqButton" style="grid-row-start: 4; grid-column-start: 1;grid-column-end: 4;">
     <center style="margin-left:auto;margin-right: auto;"> <button class="btn btn-warning btn-lg download-button btk"></i>FAQ’s</button></center>
    </div>
  </div>

  <section id="testimonials">
    <h1 class="review-heading">Our <b>Satisfied</b> Customer's Review</h1>
    
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
      <div class="carousel-inner">
          <?php
                  include('conn.php');
                  $sql="SELECT * FROM testimonials";
                  $res=mysqli_query($conn,$sql);
                  $i=0;

                  while($result=mysqli_fetch_assoc($res))
                  {
           ?> 
         <div class="carousel-item<?php if($i==0) {echo " active";} ?> ">
           <h2><?php echo $result['testimonials'];?></h2>
             <img src="images/<?php echo $result['image']; ?>" class="testimonial-image" alt="men-profile">
               </br><em><?php echo $result['name'];?></em>
          </div>
          <?php $i=$i+1;}?>
         </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
   

    

  </section>

  <footer>
    <div class="foot" style="color:white;">
     <br><br><br>
      <div class="links">
        <div class="categories">
          <h3>Categories</h3><br><br>
          <ul title="Categories" >
            <li>Entire fleet</li>
            <li>Cycles</li>
            <li>Hybrids</li>
            <li>MTBs</li>
          </ul>
        </div>
        <div class="information" >
          <h3>Information</h3><br><br>
          <ul title="Information" >
            <li>Our Stores</li>
            <li>Contact Us</li>
            <li>Terms & Conditions</li>
          
          </ul>
        </div>
        <div class="my_account">
          <h3>My Account</h3><br><br>
          <ul title="My Account" >
            <li>My orders</li>
            <li>My account</li>
            </ul>
        </div>
    </div>
    <br>
  </div>
   <div class="address" style="background-color:black; padding:20px; text-align: center; color:#EAEAEA;" >
    <p><center><b>Address :</b> Dwarika Prasad Mishra Indian Institute of Information Technology Design and Manufacturing Jabalpur, Near dumna National park, Airport Road ,Jabalpur, Madhya pradesh-482005</center></p>
  <div class="si">
  <i class="social-icon fa-brands fa-facebook mx-2"></i>
  <i class="social-icon fa-brands fa-instagram mx-2"></i>
  <i class="social-icon fa-brands fa-twitter mx-2"></i>
  <p>© Copyright Soleridee</p></div>
  </div>
  </div>
  </footer>
  
</body>
</html>