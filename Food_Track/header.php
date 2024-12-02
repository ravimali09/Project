<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>


<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-train" aria-hidden="true"> </i> FoodTrack</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars" style="color:white;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="index" class="nav-item nav-link <?php active("index")?>" class="">Home</a>
                <!-- <a href="restaurant.php" class="nav-item nav-link">Restaurant</a> -->
                <a href="order" class="nav-item nav-link <?php active("order")?>">order</a>
                <!-- <a href="menu.php" class="nav-item nav-link">Menu</a> -->
                
                <a href="about" class="nav-item nav-link <?php active("about")?>">About</a>
                <a href="contact" class="nav-item nav-link <?php active("contact")?>">Contact</a>
                <?php
                    if(isset($_SESSION['user']))
                    {
                    ?>
                         <a href="user_profile" class="nav-item nav-link <?php active("user_profile")?>">Account</a>
                    <?php
                    }
                    ?>
            </div>
           
           
            <?php
		  if(isset($_SESSION['user']))
		  {
		  ?>
		    <a href="userlogout" class="btn btn-primary py-2 px-4 ">Logout</a>
           
		   
		  <?php
		  }
		  else
		  {  
		  ?>
			 <a href="login" class="btn btn-primary py-2 px-4 ">Login</a>
		  <?php
		  }
		  ?>
        </div>
    </nav>


</body>

</html>
<?php

function active($currect_page)
    {
	  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
	  $url = end($url_array);  
	  if($currect_page == $url)
      {
		  echo 'active'; //class name in css 
	  } 
	}