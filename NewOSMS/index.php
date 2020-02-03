<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css"> 
    
    <title>Home Services</title>
</head>
<body>

<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 p-2 sticky-top">

            <div class="container text-uppercase  " >
            
        
               <a class="navbar-brand font-weight-bold- text-white" href="#">OSMS</a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav ml-auto text-uppercase custom-nav">
                       <li class="nav-item active">
                          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="#Services">Services</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="#Registration">Registration</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="#">Login</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link" href="#Contact">Contact</a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- end Navigation -->

<!-- start header jumboron-->

<header class="jumbotron back-image" style="background-image: url(images/cover.jpeg);">

    <div class="myclass mainHeading">
        <h1 class="text-uppercase text-danger font-weight-bold">Weclome to OSMS</h1>
        <P class="font-italic"> Coustomer's Happiness is our Aim</P>
        <a href="#" class="btn btn-success mr-4">Login</a>
        <a href="#" class="btn btn-danger mr-4">Sign Up</a>
        
    </div>
    
</header>

<!-- end header jumboron-->

<!--start introduction section container -->

<div class="container" id="Services">
    <div class="jumbotron">
        <h3 class="text-center"><br>OSMS Services</h3>
        <p><br>
            
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        
    </div>
    
</div>

<!--end introduction section container-->

<!-- start services section container -->

<div class="container text-center border-bottom" >
    <h2>Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
            <h4 class="mt-4">Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
            <h4 class="mt-4">Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
            <h4 class="mt-4">Fault Repair</h4>
        </div>
    </div>
    
</div>

<!-- end services section container -->

<!-- start registration from -->

<?php 

      include('UserRegistration.php');

?>


<!-- end registration from -->

<!-- start Happy Coustomer -->


<div class="jumbotron bg-danger">
    <div class="container">
        <h2 class="text-center text-white">Happy Coustomers</h2>
        <div class="row mt-5">

            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                        <h4 class="card-title">Deep Fuletra</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                        
                    </div>
                    
                </div>
                
            </div>

              <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                        <h4 class="card-title">Deep Fuletra</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                        
                    </div>
                    
                </div>
                
            </div>
          
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                        <h4 class="card-title">Deep Fuletra</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                        
                    </div>
                    
                </div>
                
            </div>
          
            <div class="col-lg-3 col-sm-6">
                <div class="card shadow-lg mb-2">
                    <div class="card-body text-center">
                        <img src="images/avtar1.jpg" class="img-fluid" style="border-radius: 100px;" alt="avt1">
                        <h4 class="card-title">Deep Fuletra</h4>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                        
                    </div>
                    
                </div>
                
            </div>
          
            
        </div>
    </div>
    
</div>


<!-- end Happy Coustomer -->

<!-- start contact us -->

<div class="container" id="Contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
            
             <!-- start 1st column -->

            <?php include('contactform.php');

            ?>

             <!-- end 1st column -->
        
        <div class="col-md-4 text-center"> <!-- start 2st column -->
            <strong>Headquarter:</strong>
            OSMS pvt Ltd,<br>
             Shree Ram Park,Balaji Hall<br>
             Rajkot-360004<br>
             Phone: +919714936125<br>
             <a href="#" target="_blank">www.osms.com</a><br>
             <br> <br>

             <strong>Branch:</strong>
            OSMS pvt Ltd,<br>
             Shree Ram Park,Balaji Hall<br>
             Rajkot-360004<br>
             Phone: +919714936125<br>
             <a href="#" target="_blank">www.osms.com</a><br>
             

        </div><!-- end 2st column -->

    </div>
    
</div>


<!-- end contact us -->

<!-- start footer -->

<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6"> <!-- start 1st column -->
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color" style="color: red;"><i class="fab fa-facebook-f "></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color" style="color: red;"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color" style="color: red;"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color" style="color: red;"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color" style="color: red;"><i class="fas fa-rss"></i></a>
            </div> <!-- end 1st column -->

            <div class="col-md-6 text-right"> <!-- start 2nd column -->
                <small>Designed by Himanshupatel &copy; 2020</small>
                <small class="ml-2"><a href="#" style="color: red;">Admin Login</a></small>                
            </div>
            
        </div>
        
    </div>
    
</footer>



<!-- end footer -->

<!-- JavaScript -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>



</body>
</html>