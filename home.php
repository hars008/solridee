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
              <a class="dropdown-item" href="#">Orders</a>
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
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
      <div class="carousel-inner">
        <div class="carousel-item active" >
           <h2>I no longer have to walk  for so long under that full fledge sun daily inside campus solride helped me a lot...</h2>
        <img src="data:image/jpeg;base64,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" class="testimonial-image" alt="men-profile">
        </br><em>GAURANG,AMSTERDAM</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">solride has just changed my way of living Now i am both physically as well as mentally fit...</h2>
    <img class="testimonial-image" src="https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=600" alt="lady-profile">
        </br><em>HARSH,MORADABAD</em>
        </div>
        <div class="carousel-item" >
          <h2 class="testimonial-text">Earlier i used to avoid going to cities but now i try to find different different reasons to go somewhere so that i can enjoy the wonderful cycle ride</h2>
    <img class="testimonial-image" src="data:image/jpeg;base64,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" alt="lady-profile">

        </br> <em>GAGAN, VARANASI</em>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
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