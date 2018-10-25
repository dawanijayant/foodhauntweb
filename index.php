<?php
include './db/connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Food delivery </title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat:400,700" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- LINK FOR HEADER AND NAVBAR-->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header.css">

<!-- LINK AND SCRIPT FOR COROUSAL IN MIDDEL SECTION -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
</head>
  <style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}

@media (max-width:600px) {
  img#hiding {
    display: none;
  }
}
@media (max-width:200px) {
  img#hide-this {
    display: none;
  }
}




.fastestdelivery{
  color:#000000;
}







@media screen and (max-width:700px) {

.hide-this{

display:none;

}

}










  </style>
<script>sessionStorage.setItem("city_real", "");

</script>

<body >


    <?php include('./includes/header.php'); ?>
    <div class="alert alert-success" role="alert">
        Your Order Has Been Placed Successfully!
    </div>
   <!-- Navbar
    <div class="w3-top">
      <div class="w3-bar w3-white w3-card w3-left-align w3-large">
        <a class="nav1 w3-bar-item w3-button w3-hide-medium w3-hide-large  w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#" class="nav2 w3-bar-item w3-button w3-padding-small w3-white"><img  class="logo" src="finalicon.png"><b>food haunt</b></a>
        <a href="#" class=" nav1 w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-blue"><b>About Us</b></a>
        <a href="#" class="nav1 w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><b>Contact Us</b></a>
        <a href="#" class=" nav1 w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><b>Get The App</b></a>
      </div>

       Navbar on small screens
      <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" class="w3-bar-item w3-button w3-padding-large">About Us</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Get The App</a>

      </div>
    </div>-->

    <!-- Header -->
    <header class="w3-container w3-hd w3-center">



      <!-- First Photo Grid-->
      <div class="w3-row-padding w3-padding-lar w3-center" id="food">

        <div class="zoom w3-quarter">
            <a href="restaurants.php"> <img   src="firstimage.jpg"  alt="Steak" style="width:80%"></a>

        </div>
        <div class="zoom w3-quarter">
            <a href="restaurants.php"><img id="hiding" src="12.webp" href="restaurant.php" alt="Cherries" style="width:80%"></a>

        </div>
        <div class="zoom w3-quarter">
            <a href="restaurants.php"><img id="hiding" src="13.webp" href="restaurant.php"  alt="Pasta and Wine" style="width:80%"></a>

        </div>
          <div class="zoom w3-quarter">
              <a href="restaurants.php"><img id="hiding" src="15.webp" href="restaurant.php" alt="Pasta and Wine" style="width:80%"></a>

        </div>


      </div>



    </header>






<div class="home">
<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">


<form class=" w3-center form-inline" id="myform" method="POST" action="restaurants.php">

    <!--
                        <select id="city_select" class="form-control form-control-lg" name="city">
                            <option class="disabled">--Select Location--</option>
                            <?php

                            $city_sql = "SELECT * FROM cities";
                            $city_list = mysqli_query($conn, $city_sql);
                            if (mysqli_num_rows($city_list) > 0) {
                                while ($row = mysqli_fetch_assoc($city_list)) {
                                    echo "
                                        <option  value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                }
                                $disabled = "";

                            }


                            ?></select>-->

                        <!--      <select class="clg_select form-control form-control-lg" name="college">
                                              <option class="disabled" value="none">--Select College--</option>

                                                      <option value='Dhanbad'>Dhanbad</option>
                                          </select>-->
                                          <br>

                       <h4 class="fastestdelivery  w3-center"><strong >get the fastest delivery to your doorstep</strong></h4>     <br>          
                        <a href="restaurants.php">
                            <button type="submit" class="btn theme-btn btn-lg" href="restaurant.php" id="get_food"
                                    $disabled>Show Restaurants
                            </button>
                        </a>
                        <br><br>
                    </form>

            </div>
            <!-- end:Steps -->
        </div>
</div>
</div>
<!--end:Hero inner -->
</section>
<!-- banner part ends -->
    <div id="myPage " data-spy="scroll" data-target=".navbar" data-offset="50">

    <div id="myCarousel " class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="SS1.png" alt="New York" width="1200" height="700">

        </div>

        <div class="item">
          <img src="SS2.png" alt="Chicago" width="1200" height="700">

        </div>

        <div class="item">
          <img src="SS3.png" alt="Los Angeles" width="1200" height="700">

        </div>
      </div>



      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="arrow glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- Container (The Band Section) -->
    <!-- Container (TOUR Section) -->
    <div id="tour" class="bg-1">
      </div>



    <!-- Container (Contact Section) -->
    <div id="contact " class="container hide-this">
      <h3 class="text-center">Contact</h3>
      

      <div class="row">
        <div class="col-md-4">
          <p>Want to collaborate? Drop a note.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span>Civil Lines, Jabalpur</p>
          <p><span class="glyphicon glyphicon-phone"></span>Phone: +917477010551</p>
          <p><span class="glyphicon glyphicon-envelope"></span>Email: foodhaunt18@mail.com</p>
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
          <br>
          <div class="row">
            <div class="col-md-12 form-group">
              <button class="btn pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
      <br>

    </div>


    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->



<?php include('./includes/footer.php'); ?>
</div>
<!--/end:Site wrapper -->
<!-- Bootstrap core JavaScript
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/headroom.js"></script>
<script src="js/foodpicky.min.js"></script>
<script src="j/index.js"></script>
</body>
<script>
              // Used to toggle the menu on small screens when clicking on the menu button
      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }






     $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {

            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })

</script>

</html>