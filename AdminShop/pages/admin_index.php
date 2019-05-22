<?php
    session_start();

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:admin_login_page.php');
        exit();
    }
?>

<?php
// Initialize emoty variables
$nickname = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nickname"])) {
        $nickname = "Admin_" . date('His');
    } else {
        $nickname = test_input($_POST["nickname"]);
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($message && $nickname) {

    $file = fopen("messages.html","a+");
    $date = date('Y-m-d H:i:s');
    $data = "<p>[" . $date . "] <b>" . $nickname . ":</b> " . $_POST['message'] . "</p>";

    fwrite($file, $data);
  
    fclose($file);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
    
<script src="scripts.js"></script>  

    <meta charset="utf-8" />
     <style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.navbarr {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbarr a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdownn {
    float: left;
    overflow: hidden;
}

.dropdownn .dropbtnn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbarr a:hover, .dropdownn:hover .dropbtnn {
    background-color: red;
}

.dropdownn-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdownn-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdownn:hover .dropdownn-content {
    display: block;
}

/* Create three equal columns that floats next to each other */
.columnn {
    float: left;
    width: 33.33%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.columnn a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.columnn a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */
.roww:after {
    content: "";
    display: table;
    clear: both;
}
</style>
    
    
    
    
    
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>E-Commerce</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

    <!--     inserted     -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link href="../assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet"/>
    
    <link href="../assets/style.css" rel="stylesheet"/>
    <!--     inserted     -->

</head>

<body class="index-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="admin_index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by UWU IIT" data-placement="bottom" target="">
                    <p style="color:aqua"><b>E-Commerce Website</b></p> 
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                    <span class="navbar-toggler-bar bar4"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="admin_panel.php" onclick="scrollToDownload()">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>
                                <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `admin` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 echo  '<p style=color:aqua><b>Admin '.$row['firstname'].' Dashboard </b></p>';
                                ?>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_products.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p style="color:aqua"><b>Electronic Products</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p style="color:aqua"><b>Orders</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chatADM.php">
                            <i class="now-ui-icons shopping_cart-simple"></i>
                            <p style="color:aqua"><b>Chat App</b></p>
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" href="" onclick="scrollToDownload()">
                            <i class="now-ui-icons ui-1_lock-circle-open"></i>
                             <p style="color:aqua"><b>LOGOUT</b></p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">
        <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/ironman.jpg');">
            
                          <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/fashionable_format.jpg" alt="Fashionable Format" title="Fashionable Format" id="wows1_0"/></li>
		<li><img src="data1/images/new_mobile_technology.jpg" alt="New Mobile Technology" title="New Mobile Technology" id="wows1_1"/></li>
		<li><img src="data1/images/home_appliances.jpg" alt="Home Appliances" title="Home Appliances" id="wows1_2"/></li>
		<li><img src="data1/images/new_mobile_.jpg" alt="New Mobile " title="New Mobile " id="wows1_3"/></li>
		<li><img src="data1/images/reserve_your_electronics.jpg" alt="Reserve Your Electronics" title="Reserve Your Electronics" id="wows1_4"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/fashionable_items.jpg" alt="slideshow javascript" title="Fashionable Items" id="wows1_5"/></a></li>
		<li><img src="data1/images/upcomming_new_technologies.jpg" alt="UpComming New Technologies" title="UpComming New Technologies" id="wows1_6"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Fashionable Format"><span><img src="data1/tooltips/fashionable_format.jpg" alt="Fashionable Format"/>1</span></a>
		<a href="#" title="New Mobile Technology"><span><img src="data1/tooltips/new_mobile_technology.jpg" alt="New Mobile Technology"/>2</span></a>
		<a href="#" title="Home Appliances"><span><img src="data1/tooltips/home_appliances.jpg" alt="Home Appliances"/>3</span></a>
		<a href="#" title="New Mobile "><span><img src="data1/tooltips/new_mobile_.jpg" alt="New Mobile "/>4</span></a>
		<a href="#" title="Reserve Your Electronics"><span><img src="data1/tooltips/reserve_your_electronics.jpg" alt="Reserve Your Electronics"/>5</span></a>
		<a href="#" title="Fashionable Items"><span><img src="data1/tooltips/fashionable_items.jpg" alt="Fashionable Items"/>6</span></a>
		<a href="#" title="UpComming New Technologies"><span><img src="data1/tooltips/upcomming_new_technologies.jpg" alt="UpComming New Technologies"/>7</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery image carousel</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
           
        </div>    
                
                
                
                
                
                
                
                
                
                
                <div class="container" >
                    <div class="content-center brand">
                        <img src="../assets/img/elogo.png" alt="Circle Image" class="rounded-circle">
                        <br><br>
                        <h3>All kind of electronic and Other Items And Fancy Items</h3>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="main" >
            <div class="section section-basic" style="background-color:beige">
                <div class="container" style="background-color:beige">   >
                    <br>
                    <div class="col-md-12">
                        <h2 class="title">All products</h2>
                        <div class="typography-line">
                            <p>
                            “The reason it seems that price is all your customers care about is that you haven’t given them anything else to care about.”-Seth Godin, American author, entrepreneur, marketer, and public speaker.
                            </p>
                        </div>
                        <br>

                        
                        <center>
                        <label><b>Search Product: &nbsp</b></label>     
                        <div class="navbarr">
  <a href="#home">Home</a>
  <a href="#news">News</a>
  <div class="dropdownn">
    <button class="dropbtnn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdownn-content">
      <div class="header">
        <h2>Mega Menu</h2>
      </div> 
      <div class="roww">
        <div class="columnn">
          <h3>Kitchen Item</h3>
         
  
        
          
          <a href="#">Blender</a>
          <a href="#">Rice Cooker</a>
          <a href="#">Gas Cooker</a>
        </div>
        <div class="columnn">
          <h3>Cloths</h3>
          <a href="#">Men</a>
          <a href="#">Women</a>
          <a href="#">Kids</a>
        </div>
        <div class="columnn">
          <h3>Computer</h3>
          <a href="#">PC</a>
          <a href="#">Laptops</a>
          <a href="#">Accessories</a>
        </div>
           <div class="columnn">
          <h3>Electrics</h3>
          <a href="#">Table Fan </a>
          <a href="#">Iron</a>
          <a href="#">Television</a>
        </div>
           <div class="columnn">
          <h3>Fancy </h3>
          <a href="#">Neckless</a>
          <a href="#">Rings</a>
          <a href="#">Bracelets</a>
        </div>
           <div class="columnn">
          <h3>Mobile</h3>
          <a href="#">Huawie</a>
          <a href="#">Apple</a>
          <a href="#">Samsung</a>
        </div>
      </div>
    </div>
  </div> 
  <nav class="navbar navbar-dark "<span class="float-right">  > 
                            <!--------------------------------------------------------->
                             
                            
                            
                            <form class="form-inline" method="POST" action="admin_index_search.php"  >
                                   
                                   <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search" >
                                     <input type="image" title="Search" src="../assets/img/search_1.png" width="30px" height="30px" alt="Search" />
                                   <!-- <input type="text" name="search" class="search-query" placeholder="Enter product name">-->
                                </form>
                        </nav>
</div>  
                        
                        
                        
                              
                        </center>
                    </div>
                    <br><hr color="orange">

                      < <div class="tab-pane" id="">
                       
                          <div class="row">
                        <?php
                        $query = "SELECT * FROM products ORDER BY RAND ( ) ";
                        $result = mysqli_query($dbconn,$query);
                        
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                       // echo "hi";
                   ?>
                        
                               
                              <div class="col-sm-4">
                                   <div class="thumbnail" style="color:red;background-color:beige">
                                  <?php if($res['prod_pic1'] != ""): ?> 
                              <div>  <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px"></div>
                                <?php else: ?>
                                <img src="../uploads/default.png" width="300px" height="200px">
                                <?php endif; ?>
                            <div class="caption">
                                <h7><b><?php echo $res['prod_name'];?></b><br></h7>
                              <h7><a class="btn btn-success btn-round" title="Click for more details!" href="admin_product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View More</a><medium class="pull-left">Rs <?php echo $res['prod_price']; ?></medium></h7>
                            </div>
                           </div>
 <hr color="orange">
                        
                              </div>
                        
                                   <?php }?> 
                             
                      

                         
                          
                          </div>
                      </div>




        </div>
    </div>     
</div>
        <footer class="footer" data-background-color="black" >
            <div class="container" >
                
               <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by UWU IIT
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }
</script>



   <!---  inserted  -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/google-code-prettify/prettify.js"></script>
    <script src="../assets/js/application.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/bootstrap-affix.js"></script>
    <script src="../assets/js/jquery.lightbox-0.5.js"></script>
    <script src="../assets/js/bootsshoptgl.js"></script>
     <script type="text/javascript">
    $(function() {
        $('#gallery a').lightBox();
    });
    </script>

    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../plugins/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../plugins/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable({
        });
      });
    </script>
     <!--  inserted  -->

</html>