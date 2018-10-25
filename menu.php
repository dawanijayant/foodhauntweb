<?php
include './db/connect.php';
?>
<script>
    sessionStorage.setItem("total", 0);
    window.cart_items = [];
    var simple = '<?php echo $_POST['restaurant_discount']; ?>';
    var min_order = '<?php echo $_POST['minfee']; ?>';
    sessionStorage.setItem("restaurant_discount", simple);
    sessionStorage.setItem("minfee", min_order);
</script>
<!DOCTYPE html>
<html lang="en">

<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <?php echo '<title>'.urldecode($_POST['restaurant_name']).'</title>'; ?>
    <!--BOOTSTRAP CORE CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- LINK FOR HEADER AND NAVBAR-->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="header.css">


<body>
    <style type="text/css">
        @media screen and (max-width:700px) {

.hide-this{

display:none;

}

}

    </style>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    
        <?php include('./includes/header.php'); ?>
        <div class="page-wrapper" id="backg">
            <!-- top Links -->
            <!-- end:Top links -->
            <BR>
              		<div class="container">
    			<H1><?php echo '<h1 class="display-4 text-center" id="ctr">'.urldecode($_POST['restaurant_name']).'</h1>' ?></H1>
    
		 </div>
	 
            <!-- end:Inner page hero -->
            
            <div class="container m-t-30">
                <div class="row">
                <!-- shopping cart -->
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 float-md-right shopping-cart">
                        <div class="sidebar clearfix m-b-20">
                            <div class="main-block">
                                <div class="sidebar-title white-txt bgclr">
                                    <h6>Your Cart</h6> <i class="fa fa-shopping-cart pull-right"></i> </div>
                            </div>
                            <div class="clearfix"></div>
                            
                            <div class = 'cart'>
                            </div>
                            <div class="clearfix"></div>
                            <div class="widget-body">
                                    <div class="price-wrap text-xs-center clr1">
                                        <p><strong>TOTAL</strong></p>
                                        <h3 class="value clr1"><strong class="price_total"></strong></h3>
                                        
                                        <button type="button" class="btn theme-btn btn-lg hvr checkout" >Checkout</button>
                                    </div>
                                </div>
                                

                        </div>
                        <div id="min_order"><?php echo '<p class="w3-text-blacK">*Minimum order (including discount)  should be more than Rs. '.$_POST['minfee']. '</p>' ?></div>
                    </div> 
                    <!-- shopping cart end -->

                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="sidebar clearfix m-b-20">
                            <div class="main-block">
                                <div class="sidebar-title bgclr">
                                    <h6>Choose Cusine</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                

    <?php                        
    $dbtable = $_POST['restaurant']."_category";
    $sql = "SELECT * FROM ".$dbtable.";";
    $category_list = mysqli_query($conn, $sql);
    $i = 1;
                            
    if(mysqli_num_rows($category_list) > 0){
    while($row = mysqli_fetch_assoc($category_list)){
        if($i == 1){
        $category = $row['category'];
        $i++;}

        echo '
        <input type="hidden" name="cuisine" value="'.urlencode($row['category']).'"/>
        <input type="hidden" name="restaurant_name" value="'.$_POST['restaurant'].'"/>
        <input type="submit" class="btn btn-block btn-light sort" value="'.$row['category'].'">';
    }}?>
                                
                                <div class="clearfix"></div>
                            </div>
                            <!-- end:Sidebar nav -->
                            
                        </div>
                        <!-- end:Left Sidebar -->
                        
                    </div>
					
					<!-- <div class="result-show" style="float:right">
                <form class="form-inline">
                    <label class="sr-only" for="exampleInputAmount">Search Food</label>
                    <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputAmount" placeholder="Search Food"> </div>
                    <button onclick="location.href='restaurants.html'" type="button" class="btn theme-btn btn-lg">Search</button>
                </form>
            </div> -->
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6 menu_lo">	
		<div class="menu-widget m-b-30">
                            <div class="widget-heading bdr-btm">
                                <?php echo '<h3 class="widget-title w3-text-blacK" id="cuisine-head">'.$category.'</h3>'; ?>                                                  
                                <div class="clearfix"></div>
                            </div>
                            <div class="collapse in cuisine-data" id="1">
                            <div class="se-pre-con"></div>
                    
                            
<?php                        
    $dbtable = $_POST['restaurant']."_menu";

    $sql = "SELECT * FROM ".$dbtable." WHERE category = '".$category."';";
    $menu_list = mysqli_query($conn, $sql);
    function clean($string) {
   	$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.
   	return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

   
                            
    if(mysqli_num_rows($menu_list) > 0){
    while($row = mysqli_fetch_assoc($menu_list))
                          {
                          
                          echo '
                                <div class="food-item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
                                            
                                            <div class="rest-descr">
                                                <h6 class="food-clr">'.$row['product_name'].'</h6>
                                                <p><input type="number" value="1" class="quantity" id="'.clean($row['product_name']).'"></p>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left"> Rs. '.$row['price'].'</span> 
                                        <input type="hidden" name="food_code" value="'.$row['product_name'].'" />
                                        <input type="hidden" name="food_item" value="'.$row['product_name'].'" />
                                        <input type="hidden" name="food_price" value="'.$row['price'].'" />
                                        <button type="button" class="btn btn-small btn btn-secondary pull-right add-to-cart">&#43;</a></div>
                                    </div>
                                    <!-- end:row -->
                                </div>
                                <!-- end:Food item -->';}}
                                ?>
                                
                            </div>
                            <!-- end:Collapse -->
                        
                    </div>
                    
                    <!-- end:Bar -->
                                    </div>
                                    
                <!-- end:row -->
            </div>
            <!-- end:Container -->
            </div>
            <div id="fixedbutton">
            	<!-- Button trigger modal -->
            	<a href="#" class="btn btn-small btn btn-primary view-cart" data-toggle="modal" data-target="#order-modal">View Cart</a>
		</div>
        <div class="hide-this">
            <?php include('./includes/footer.php'); ?>
            </div>
        </div>
    </div>
    <!--/end:Site wrapper --> 
    <!-- Modal -->
<div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body cart">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn theme-btn checkout hvr" >Checkout</button>
            </div>
        </div>
    </div>
</div>       
           
    <script>sessionStorage.setItem("restaurant", "<?php echo urldecode($_POST['restaurant_name']); ?>");</script>
    
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