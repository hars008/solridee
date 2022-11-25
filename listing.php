<?php

session_start();

// if(!isset($_SESSION['username'])){
//   header('location:login.php');
// }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
   <!-- google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/listingStyle.css">
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

  <title>Booking</title>
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
                <a class="nav-link" href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>   Contact us <span class="sr-only">(current)</span></a>
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

    <!-- Navbar -->
    


    <!-- Title -->
    <div class="top">
      <img class="topimg" src="images/topimg.jpg" alt="">
      <div class="inside-top">
        <h4>Bike Listing</h4>
        <h6>Home>BikeListing</h6>
      </div>
    </div>

  </section>

  <section>
    <!-- LIST -->



    <div class="container my-4">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="pricingTable">
            <div class="pricingTable-header">
              <h3 class="title">Find Cycle</h3>

            </div>
            <ul class="pricing-content">
              <input class="form-control me-2 my-2" type="search" placeholder="Select Brand" aria-label="Search">
              <input class="form-control me-2" type="search" placeholder="Select type" aria-label="Search">
            </ul>
            <div class="pricingTable-signup">
              <a href="#">Search</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <?php
              include('conn.php');
              $sql="SELECT * FROM cycles";
              $res=mysqli_query($conn,$sql);
              while($result=mysqli_fetch_assoc($res))
              {
            ?>


          <div class="row my-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img class="list-img" src="images/<?php echo $result['image']; ?>" alt="">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 view-details">
              <h6><?php echo $result['brand'].",".$result['model'];?></h6>
               Rs.<?php echo $result['security_amt']." "?> per Day
              <div class="row my-2">
                <div class="col">
                <i class="fa-solid fa-palette"></i><?php echo " ".$result['color'];?>
                </div>
                <div class="col">
                <i class="fa fa-superpowers" aria-hidden="true"></i><?php echo $result['type'];?>
                </div>
                <div class="col">
                  <i class="fa-solid fa-location-dot"></i> map
                </div>
              </div>
              <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
            </div>
          </div>
          <?php } ?>
          <!-- <div class="row my-2">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <img class="list-img" src="images/2.png" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 view-details">
              <h6>Altas,EK540</h6>
              Rs.200 per Day
              <div class="row my-2">
                <div class="col">
                  <i class="fa-solid fa-user"></i> 2 seats
                </div>
                <div class="col">
                  <i class="fa-solid fa-calendar-days"></i> model
                </div>
                <div class="col">
                  <i class="fa-solid fa-location-dot"></i> map
                </div>
              </div>
              <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
            </div>
          </div>
        <div class="row my-2">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <img class="list-img" src="images/3.png" alt="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 view-details">
            <h6>Avon,KK840</h6>
            Rs.100 per Day
            <div class="row my-2">
              <div class="col">
                <i class="fa-solid fa-user"></i> 2 seats
              </div>
              <div class="col">
                <i class="fa-solid fa-calendar-days"></i> model
              </div>
              <div class="col">
                <i class="fa-solid fa-location-dot"></i> map
              </div>
            </div>
            <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
          </div>
        </div>

      <div class="row my-2">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class="list-img" src="images/4.png" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 view-details">
          <h6>Bianchi,RE940</h6>
          Rs.300 per Day
          <div class="row my-2">
            <div class="col">
              <i class="fa-solid fa-user"></i> 2 seats
            </div>
            <div class="col">
              <i class="fa-solid fa-calendar-days"></i> model
            </div>
            <div class="col">
              <i class="fa-solid fa-location-dot"></i> map
            </div>
          </div>
          <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class="list-img" src="images/5.png" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 view-details">
          <h6>BSA,WE540</h6>
          Rs.200 per Day
          <div class="row my-2">
            <div class="col">
              <i class="fa-solid fa-user"></i> 2 seats
            </div>
            <div class="col">
              <i class="fa-solid fa-calendar-days"></i> model
            </div>
            <div class="col">
              <i class="fa-solid fa-location-dot"></i> map
            </div>
          </div>
          <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div>
      <div class="row my-2">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img class="list-img" src="images/6.png" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 view-details">
          <h6>Btwin,PO540</h6>
          Rs.150 per Day
          <div class="row my-2">
            <div class="col">
              <i class="fa-solid fa-user"></i> 2 seats
            </div>
            <div class="col">
              <i class="fa-solid fa-calendar-days"></i> model
            </div>
            <div class="col">
              <i class="fa-solid fa-location-dot"></i> map
            </div>
          </div>
          <button type="button" class="btn btn-warning">View details <i class="fa-solid fa-circle-chevron-right"></i></button>
        </div>
      </div> -->
    </div>
    </div>

  </section>



<!-- Bottom -->
  <section>
    <div class="bottom">
      <div class="row my-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
        <h6>ABOUT US</h6>
        <div class="information">
          <ul title="Information" >
            <li>Our Stores</li>
            <li>Contact Us</li>
            <li>Terms & Conditions</li>

          </ul>
        </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
        <h6>Subcsribe SolRidee</h6>
        <div class="row">
          <div class="col">

          </div>
          <div class="col">
            <form class="d-flex my-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Enter Email Address" aria-label="Search">
            </form>
            <button type="button" class="btn btn1 btn-warning">Subscribe <i class="fa-solid fa-circle-chevron-right"></i></button>
            <br>
            <div class="deals">
              We send great deals and latest auto news to our subscribed user every week.
            </div>

          </div>
          <div class="col">

          </div>

        </div>

      </div>

      </div>

    </div>
  </section>


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
