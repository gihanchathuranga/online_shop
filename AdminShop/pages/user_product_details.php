<?php
session_start();

if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
    header('location:user_login_page.php');
    exit();
}
?>




<?php
include('../config/dbconn.php');
$prod_id = $_GET['prod_id'];
$query = "SELECT * FROM products WHERE prod_id='$prod_id'";
$result = mysqli_query($dbconn, $query);
while ($res = mysqli_fetch_array($result)) {

    $prod_id = $res['prod_id'];
    $prod_price = $res['prod_price'];
    $user_id = $_SESSION['id'];


    if (isset($_POST['submit'])) {

        $prod_id = $prod_id;
        $prod_price = $prod_price;
        $prod_qty = $_POST['prod_qty'];
        $total = $prod_price * $_POST['prod_qty'];
        $user_id = $user_id;

        $date = date("Y-m-d");


        if (empty($prod_qty)) {

            if (empty($prod_qty)) {
                echo "<br><center><h4><font color='red'><b>Error!</b> That is OUt Of Stock We Will Upload Quickly.</font></h4></center>";
            }
        } else {

           $a= mysqli_query($dbconn, "INSERT INTO order_details (prod_id,prod_qty,total,user_id) 
                                                VALUES ('$prod_id','$prod_qty','$total','$user_id')") or die('error'.mysql_error());
          
            ?>

            <script type="text/javascript">
                alert("Product Added To Cart!");
                window.location = "user_cart.php";
            </script>

            <?php
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Electricks</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your projects -->
        <link href="../assets/css/demo.css" rel="stylesheet" />
    </head>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>


    <body class="index-page sidebar-collapse">
        <!-- End Navbar -->
        <div class="wrapper">
            <br>
            <div class="main"  style="background-color:beige">  
                <div class="section section-basic " style="background-color:beige">  

                    <div class="section" id="carousel"  style="background-color:beige">  
                        <div class="container"   style="background-color:beige">  
                            <h2>Product Details</h2>
                            <a class="btn btn-primary btn-round" href="user_index.php"><i class="now-ui-icons arrows-1_minimal-left"></i> &nbsp Back to index</a>
                            <hr color="orange">
                            <div class="col-md-12">
                                <div class="row justify-content-left">
                                    <div class="col-5">


                                        <?php
                                        include('../config/dbconn.php');
                                        $prod_id = $_GET['prod_id'];
                                        $query = "SELECT * FROM products WHERE prod_id='$prod_id'";
                                        $result = mysqli_query($dbconn, $query);
                                        while ($res = mysqli_fetch_array($result)) {
                                            //getting product id
                                            ?>   

                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <?php if ($res['prod_pic1'] != ""): ?>
                                                            <img class="d-block" src="../uploads/<?php echo $res['prod_pic1']; ?>" alt="First slide">
                                                        <?php else: ?>
                                                            <img src="../uploads/default.png">
                                                        <?php endif; ?>
                                                        <div class="carousel-caption d-none d-md-block"style="color:royalblue">
                                                            <h5><?php echo $res['prod_name']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                         <?php if ($res['prod_pic2'] != ""): ?>
                                                            <img class="d-block" src="../uploads/<?php echo $res['prod_pic2']; ?>" alt="Second slide" >
                                                        <?php else: ?>
                                                            <img src="../uploads/default.png">
                                                        <?php endif; ?>
                                                        <div class="carousel-caption d-none d-md-block" style="color:royalblue" >
                                                            <h5 ><?php echo $res['prod_name']; ?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                         <?php if ($res['prod_pic3'] != ""): ?>
                                                            <img class="d-block" src="../uploads/<?php echo $res['prod_pic3']; ?>" alt="Third slide">
                                                        <?php else: ?>
                                                            <img src="../uploads/default.png">
                                                        <?php endif; ?>
                                                        <div class="carousel-caption d-none d-md-block"style="color:royalblue">
                                                            <h5><?php echo $res['prod_name']; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <h5><br>
                                            <br>
                                            <ul><b>Serial number: 
                                                    <span style="color:green;"><?php echo $res['prod_serial']; ?></span></b> 
                                                <br><br>
                                                <b>Product name: </b> 
                                                <?php echo $res['prod_name']; ?>
                                                <br><br>
                                                <b>Description: </b>
                                                <?php echo $res['prod_desc']; ?>

                                                <br><br><b>Type: </b>
                                                <?php echo $res['category']; ?>
                                                <br><br>
                                                <b>Price: </b>
                                                <?php echo 'Rs' . $res['prod_price'] . ''; ?>
                                                <br><br>

                                                <?php $prod_qty = $res['prod_qty']; ?> 
    <?php
    if ($prod_qty <= 0) {
        ?>
                                                    <span style="color:red;">Product Sold Out!</span>   
                                                    <?php
                                                } else {
                                                    ?>
                                                    <b>Items in stock: </b><?php echo $res['prod_qty']; ?>
                                                </ul>
                                                    <?php
                                                }
                                                ?>
                                        </h5>
                                    </div>
                                </div>
                                </h1>          



<?php } ?> 
    

                            <!-- Button trigger modal -->
                            <button class="btn btn-success btn-round pull-right" data-toggle="modal" data-target="#myModal">
                                <i class="now-ui-icons shopping_cart-simple"></i>Add To Cart</button>
                                
                                
                              
                                 <div class="center_title_bar">Similar products</div>   
                                  <br><hr color="orange">

                      <div class="tab-pane" id="">
                       
                          <div class="row">
                        <?php
                        $query = "SELECT * FROM products ORDER BY  RAND ( )   limit 6";
                        $result = mysqli_query($dbconn,$query);
                        
                        while($res = mysqli_fetch_array($result)) {  
                            $prod_id=$res['prod_id'];
                       // echo "hi";
                   ?>
                        
                               
                              <div class="col-sm-4">
                                  <div class="thumbnail" style="color:red;">
                                  <?php if($res['prod_pic1'] != ""): ?> 
                              <div>  <img src="../uploads/<?php echo $res['prod_pic1']; ?>" width="300px" height="200px"></div>
                                <?php else: ?>
                                <img src="../uploads/default.png" width="300px" height="200px">
                                <?php endif; ?>
                            <div class="caption">
                                <h7><b><?php echo $res['prod_name'];?></b><br></h7>
                              <h7><a class="btn btn-success btn-round" title="Click for more details!" href="user_product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View More</a><medium class="pull-left">Rs <?php echo $res['prod_price']; ?></medium></h7>
                            </div>
                           </div>
                     <hr color="orange">
                        
                              </div>
                        
                                   <?php }?> 
                             
                      

                         
                          
                          </div>
                      </div>
                            

                            <!-- Modal Core -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="" method="post" enctype="multipart/form-data">
                                            <div class="form group">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    <h4 class="modal-title" id="myModalLabel">Enter Quantity:</h4>
                                                </div>
                                                <div class="modal-body">
                                                          


                                                    <div class="input-append">
<?php
echo "<select class='btn btn-warning btn-round dropdown-toggle' size='1' name='prod_qty' id='prod_qty'>";
$i = 1;
$prod_qty = $prod_qty;
while ($i <= $prod_qty) {
    echo "<option value=" . $i . ">" . $i . "</option>";
    $i++;
}
echo "</select>";
?>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary btn-round" data-dismiss="modal">Close</button>
                                                    <a><button type="submit" name="submit" class="btn btn-success btn-round" id="prod_id">Order</button></a>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    
                         
                                </div>
                            </div>


                        </div>
                    </div>



                    <br>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer" data-background-color="black">
        <div class="container" >
            <nav>
                <ul>
                    <li>
                        <a href="" target="_blank">
                        Budget Sales.lk
                        </a>
                    </li>
                    <li>
                        Online Shopping
                    </li>
                </ul>
            </nav>
            <div class="copyright" style="align:left">
                &copy;
                <script>
    document.write(new Date().getFullYear())
                </script>, Designed And Coded By Ruwan Darshana
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
    $(document).ready(function () {
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

</html>