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
    <title>Checkout</title>
    <!--BOOTSTRAP CORE CSS-->
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

    <!-- LINK FOR MIDDEL SECTION COROUSAL -->
    <link href="middlesection.css" rel="stylesheet" type="text/css">
<body>
<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <?php include('./includes/header.php'); ?>
    <div class="page-wrapper" id="backg">
        <!-- top Links -->

        <!-- end:Top links -->
        <div class="container m-t-30">
            <div class="widget clearfix ckt1">
                <!-- /widget heading -->
                <div class="widget-heading ckt1">
                    <h3 class="widget-title text-dark">
                        Cart summary
                    </h3>
                    <div class="clearfix"></div>
                </div>
                <div class="widget-body ckt1">
                    <form method="post" action="./index.php#success" id="myform">
                        <div class="row">
                            <div class="col-sm-6 margin-b-30 pak">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name*</label>
                                            <input type="text" class="form-control" name="username" placeholder="" required> </div>
                                        <!--/form-group-->
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label> Address*</label>
                                            <input type="text" class="form-control" name="hostel" placeholder="" required>
                                        </div>
                                        <!--/form-group-->
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Landmark*</label>
                                            <input type="text" class="form-control" name="college"  placeholder="" required >
                                        </div>
                                        <!--/form-group-->
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email Address*</label>
                                            <input type="email" class="form-control" name="email" placeholder="foodhaunt18@gmail.com" required> </div>
                                        <!--/form-group-->
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>phone*</label>
                                            <input type="tel" minlength="10" maxlength="10" class="form-control" name="mobile" placeholder="7477010551" required> </div>
                                        <!--/form-group-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="cart-totals margin-b-20 clr1">
                                    <div class="cart-totals-title">
                                        <h4 class="pak">Cart Summary</h4> </div>
                                    <div class="cart-totals-fields">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>Cart Subtotal</td>
                                                <td class="cart_total">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td class="shipping_charge">00</td>
                                            </tr>
                                            <tr>
                                                <td>Discount</td>
                                                <td class="discount">00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-color"><strong>Total</strong></td>
                                                <td class="text-color"><strong class="cart_net"></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--cart summary-->
                                <div class="success_msg">
                                    <p class="text-xs-center"> <button type="submit" class="btn btn-outline-success btn-block place_order" >Order now</button> </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include('./includes/footer.php'); ?>
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
<script src="js/menu.js"></script>



</body>

</html>