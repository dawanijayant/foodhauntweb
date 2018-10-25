<?php
include './db/connect.php';
date_default_timezone_set("Asia/Kolkata");
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
    <title>Restaurants</title>
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
</head>


<body>
    <style type="text/css">
        



@media screen and (max-width:700px) {

.hide-this{

display:none;

}







    </style>

<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <?php include('./includes/header.php'); ?>


    <div class="restaurantpage">
        <div class="page-wrapper" id="backg">
            <!-- top Links -->

            <!-- end:Top links -->
            <!-- start: Inner page hero -->


            <div class="container1">
                <img src="pizza.jpg" alt="Snow" style="width:100% ; height: 290px;  opacity: 0.3;">

                <div class="centered display-4 rest"><h1 >Order from 20 restaurants near you</h1></div>
            </div>


            <!-- //results show -->
            <br>
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">


                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-9" id="list">
                            <?php

                            $cityname = "jabalpur";
                            $dbtable = "restaurant_" . $cityname;


                            $dbtable2 = "restaurant_reviews_" . $cityname;
                            $sql = "SELECT * FROM restaurant_jabalpur ";
                            $restaurant_list = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($restaurant_list) > 0) {
                                while ($row1 = mysqli_fetch_assoc($restaurant_list)) {
                                    $start_time = date('H:i', strtotime($row1['opentime']));
                                    $close_time = date('H:i', strtotime($row1['closetime']));
                                    $status = $row1['status'];
                                    if (strtotime($start_time) > strtotime($close_time)) {

                                        if ($status == 1) {
                                            if (time() <= strtotime($start_time) && time() >= strtotime($close_time)) {
                                                $open = 'open';
                                            } else {
                                                $open = 'open';
                                            }
                                        } else {
                                            $open = 'closed';
                                        }
                                    } else {
                                        if ($status == 1) {
                                            if (time() >= strtotime($start_time) || time() <= strtotime($close_time)) {
                                                $open = 'open';
                                            } else {
                                                $open = 'closed';
                                            }
                                        } else {
                                            $open = 'closed';
                                        }
                                    }
                                    if ($open == 'open')
                                        $disabled = '';
                                    else $disabled = 'disabled';
                                    $star_filled = round($row1['rating']);
                                    $name_rest = urlencode($row1['name']);
                                    $url = str_replace(" ", "", $row1['name']);
                                    $url_real = strtolower($url);
                                    $code = $row1['code'];
                                    $review_sql = "SELECT * FROM " . $dbtable2 . " WHERE restaurant_code = '" . $row1['code'] . "';";
                                    $review_sql_con = mysqli_query($conn, $review_sql);
                                    $count = mysqli_num_rows($review_sql_con);

                                    echo "<form method = 'POST' action = 'menu.php'> 
                           <div class='bg-gray restaurant-entry'>
                                <div class='restaurantrow'>
                                    <div class='col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left india '>
                                        <div class='entry-logo'>
                                            <a class='img-fluid' href='#'><img src=\"img/{$row1['image']}\" alt='Food logo'></a>
                                        </div>
                                        <!-- end:Logo -->
                                        <div class='entry-dscr  '>
                                            <h5><form method = 'POST' action = 'menu.php'>
                                                <input type='hidden' name='minfee' value=\"{$row1['minfee']}\" />
                                                <input type='hidden' name='restaurant_discount' value=\"{$row1['party_discount']}\" />
                                                <input class='mobdesign' type='hidden' name='restaurant_name' value='{$name_rest}' />    
                                                <input type='hidden' name='restaurant' value='{$url_real}' />
                                                <input type='submit' class = 'btn btn-light btn-block rest_name' value='" . $row1['name'] . "' " . $disabled . " />
                                                </form></h5>
                                        </div>
                                            <div class='" . $open . "'>" . $open . "</div> <br class='status'> 
                                        <div  class='entry-dscr'>
                                            <span>Speciality: " . $row1['speciality'] . "</span><br>
                                            
                                    
                                          <span>Discount: " . $row1['party_discount'] . "%</span>
                                               
                                            
                                            <ul class='list-inline'>
                                                <li class='list-inline-item'>&#9202 " . $row1['timing'] . "</li>
                                                <li class='list-inline-item'><b>&#8377 </b> Min. Order of INR " . $row1['minfee'] . "</li>
                                            </ul>
                                        </div>
                                        <br class='w3-black'>
                                        <!-- end:Entry description -->
                                    </div>
                                    <div class='  col-sm-12 col-md-12 col-lg-4 text-xs-center'>
                                        <div class=' right-content'>
                                            <div class=' hide-this  right-review'>
                                                <div class='rating-block'>";
                                    for ($i = 0; $i < $star_filled; $i++) {
                                        echo "<i class='fa fa-star'></i>";
                                    }
                                    for ($j = 0; $j < 5 - $star_filled; $j++) {
                                        echo "<i class='fa fa-star-o'></i>";
                                    }
                                    echo
                                        "</div> 
                                                <p> " . $count . " Reviews</p>
                                                <input type='hidden' name='minfee' value=\"{$row1['minfee']}\" />
                                                <input type='hidden' name='restaurant_discount' value=\"{$row1['party_discount']}\" />
                                                <input type='hidden' name='restaurant_name' value='{$name_rest}' />    
                                                <input type='hidden' name='restaurant' value='{$url_real}' />
                                                <input type ='submit' value = 'View Menu' class='btn theme-btn-dash restaurant_name' " . $disabled . ">
                                                
                                             </div>
                                        </div>
                                        <!-- end:right info -->
                                    </div>
                                </div>
                                <!--end:row -->
                            </div>
                            <!-- end:Restaurant entry -->
                            </form>";
                                }
                            }
                            ?>
                            <script>sessionStorage.setItem("city", "<?php echo $dbtable; ?>");</script>
                        </div>

                    </div>
                </div>
            </section>
            </section>
            <!-- How it works block ends -->

           <div  class="hide-this"> <?php include('./includes/footer.php'); ?></div>
        </div>
    </div>
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
<script>$(document).ready(function () {
        $('.rest_name').on('click', function () {
            var restaurant = decodeURIComponent($(this).prev().prev().val());
            sessionStorage.setItem("restaurant", restaurant);
        });
        $('img').on("error", function () {
            this.src = "img/restaurant-logo.jpg";
        });
    })
</script>
</body>

</html>