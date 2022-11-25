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
  <link rel="stylesheet" href="../../css/listingStyle.css">
  <title></title>
</head>

<body>
    <section id="title">
        
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg  navbar-dark bg-black">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">SolRidee</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left:10%; padding-right: 10%;">
                    <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../dash.php">>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link active">Bike Listing</a>
            </li>
            
            <li class="nav-item ">
                <a class="nav-link active">FAQs</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link active">Contact Us</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
            <button id="search-button" class="btn btn-light" type="button" name="button">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>
</div>
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
