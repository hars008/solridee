<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dash.css">
    
</head>
<body>
    <div class="row main-content" style=" padding-left:0px; ">
         <div class="col-lg-2 col-sm-12" style=" background-color:#2c3136" >
            <nav style=" padding:0px;"class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:0px;padding-top:0px; display:inline-block;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background-color:#2c3136">
                  <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                      <a  href="#">Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Brands
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="insidepage/createbrands.html">Create Brand</a>
                          <a class="dropdown-item" href="insidepage/brands.php">Manage Brands</a>
                      </li>
                    <li class="nav-item dropdown active">
                      <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Vehicles
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="insidepage/createvehicles.php">Post Vehicles</a>
                        <a class="dropdown-item" href="insidepage/cycles.php">Manage Vehicles</a>
                    </li>
                    <li class="nav-item active">
                      <a href="insidepage/testimonials.php">Manage Testimonials</a>
                    </li>
                    <li class="nav-item active">
                        <a href="insidepage/orders.php">Manage Bookings</a>
                      </li>
                      <li class="nav-item active">
                        <a href="insidepage/regusers.php">Reg Users</a>
                      </li>
                  </ul>
                 
                </div>
              </nav>
         </div>
         <div class="col-lg-10">
            <h1>Dashboard</h1>
               <div class="row dashboard-content" style=" text-align:center;margin-top:50px;">
                  <div class="col-lg-3 col-sm-12 card-content">
                     <div class="upper" style="background-color:#325d88;">
                       <h1> 
                        <?php
                        include('connection.php');
                        $sql = "SELECT * from customer";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?>
 </h1>
                       <p> Reg Users</p>
                     </div>
                     <a href="insidepage/regusers.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                  </div>
                  <div class="col-lg-3 col-sm-12 card-content" >
                    <div class="upper" style="background-color:#93c54b;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from cycles";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Listed Vehicles</p>
                    </div>
                    <a href="insidepage/cycles.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
                 <div class="col-lg-3 col-sm-12 card-content">
                    <div class="upper" style="background-color:#29abe0;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from orders";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Total Bookings</p>
                    </div>
                    <a href="insidepage/orders.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
                 <div class="col-lg-3 col-sm-12 card-content">
                    <div class="upper" style="background-color:#f47c3c;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from brands";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Listed Brands</p>
                    </div>
                    <a href="insidepage/brands.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
                 <div class="col-lg-3 col-sm-12 card-content">
                    <div class="upper" style="background-color:#325d88;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from subscribers";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Subscribers</p>
                    </div>
                    <a href="insidepage/subscribers.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
                 <div class="col-lg-3 col-sm-12 card-content">
                    <div class="upper" style="background-color:#93c54b;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from queries";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Queries</p>
                    </div>
                    <a href="insidepage/queries.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
                 <div class="col-lg-3 col-sm-12 card-content">
                    <div class="upper" style="background-color:#29abe0;">
                      <h1> <?php
                        include('connection.php');
                        $sql = "SELECT * from testimonials";

                     if ($result = mysqli_query($conn, $sql)) {

    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
    
    // Display result
    printf($rowcount);}?></h1>
                      <p> Testimonials</p>
                    </div>
                    <a href="insidepage/testimonials.php" class="details-button">
                     <div class="lower">Full Details->
                       <hr>
                     </div></a>
                 </div>
               </div>
         </div>
    </div>
</body>
</html>