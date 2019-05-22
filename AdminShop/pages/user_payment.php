<?php
    session_start();
    include('../config/dbconn.php');

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:user_login_page.php');
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>ECommerce Web </title>
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

    <style type="text/css">
      tr td{
        padding-top:-10px!important;
        border: 1px solid #000;
      }
      @media print {
          .btn-print {
            display:none !important;
          }
      }
    </style>


</head>
<body class="index-page sidebar-collapse">
    <div class="wrapper"><br>
        <div class="main">
             <div class="section section-basic " style="background-color:beige">  
                <div class="container">
                      <h5>       <?php
                                 include('../config/dbconn.php');
                                 $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
                                 $row=mysqli_fetch_array($query);
                                 $cid=$row['user_id'];
                                 echo $row['firstname'];
                                ?>'s Checking Out!
                      </h5>
                      <hr color="orange"> 
                
                <div class="col-md-12">
               
            
                <div class="panel panel-success panel-size-custom">
                        <div class="panel-body">  



    <center>
	
    <?php
    $user_id = $_SESSION['id'];

	include('../config/dbconn.php');
    $query=mysqli_query($dbconn,"SELECT * FROM `users` WHERE user_id='".$_SESSION['id']."'");
    $row=mysqli_fetch_array($query);
    $firstname=$row['firstname'];
    $middlename=$row['middlename'];
    $lastname=$row['lastname'];
    $email=$row['email'];
    $contact=$row['contact'];


                        
$query = mysqli_query($dbconn,"SELECT * FROM order_details WHERE user_id='$user_id' ") or die (mysqli_error());
$row = mysqli_fetch_array($query);
$count = mysqli_num_rows($query);
$prod_id=$row['prod_id'];
$qty= $row['prod_qty'];

$query=mysqli_query($dbconn,"SELECT * FROM products WHERE prod_id='$prod_id'") or die (mysqli_error());
$row2=mysqli_fetch_array($query);
$prod_qty=$row2['prod_qty'];


 mysqli_query($dbconn,"UPDATE products SET prod_qty = prod_qty - $qty WHERE prod_id ='$prod_id' AND prod_qty='$prod_qty'");
       

$cart_table = mysqli_query($dbconn,"SELECT sum(total) FROM order_details WHERE user_id='$user_id' ") or die(mysqli_error());
       $cart_count = mysqli_num_rows($cart_table);
       
        while ($cart_row = mysqli_fetch_array($cart_table)) {

           $total = $cart_row['sum(total)'];
           date_default_timezone_set('Asia/Colombo');
           $date = date("Y-m-d  H:i:s");
           $tax=$total * 0.05;
           $track_num= $user_id.$user_id+1000;
           $shipaddress=$_POST['shipaddress'];
           $city=$_POST['city'];
           $ship_add=$shipaddress .' '. $city;   
           echo '<h3> Billing Information </h3>';
           echo '<table border=3 cellpadding=1 class= table-success table-hover>';
           echo'<tr align =center>';
           echo '<td><h4> <b>Name : </h4></td> <td><h4>'.$firstname.' '. $middlename.' '. $lastname .'</h4></td>';
           echo'</tr>';
           
            echo'<tr align =center>';
           echo '<td><h4> <b>Date : </h4></td> <td><h4>'.$date.' </h4></td>';
           echo'</tr>';
           
           echo '<tr align =center>'; 
           echo '<td><h4><b> Your tracking number:</h4></td> <td><h4></b>'.$track_num.'  <br></h4></td>';  
           echo  '</tr><tr align =center>';
           echo '<td><h4><b>Total: </b></h4></td><td><h4>Rs: '.$total.' </h4></td> <br>';
           echo '</tr><tr align =center>';
           echo '<td><h4><b>Tax:(with Shipping) </h4></td><td><h4>Rs: </b>'.$tax.'  <br></h4></td>'; 
           echo '</tr><tr align =center>';
           echo '<td><h4><b>Shipping Address: </h4></td></b><td><h4>'.$ship_add.' </h4></td>';
           echo '</table>';

$query = "INSERT INTO ordering (user_id, track_num, firstname, middlename, lastname, email, contact, shipping_add, order_date, status, totalprice, tax) 
        VALUES ('$user_id','$track_num','$firstname','$middlename','$lastname','$email','$contact','$ship_add','$date','Pending','$total','$tax')";  
        $result = mysqli_query($dbconn,$query);
        
        

 mysqli_query($dbconn,"UPDATE order_details SET order_id=order_id+1 WHERE user_id='$user_id' AND order_id=''")or die(mysqli_error());
mysqli_query ($dbconn,"UPDATE order_details SET total_qty =$prod_qty - $qty WHERE prod_id ='$prod_id' AND total_qty='' ");           


}

?>
        
        <hr color="orange"> 
        
        <h6>Payment type will be a <b>Cash On Delivery</b></h6>
        <h6>Delivery process time, minimum of three(3) days and maximum of five(5) working days.</h6>
        <h5>Budget Sales.lk.</h5>
        
     <button type="button" class="btn btn-warning btn-round" onclick = "window.print()"><span class="now-ui-icons ui-1_check"></span> Print</button> 
     <a href="user_index.php"><button type="button" class="btn btn-success btn-round"><span class="now-ui-icons ui-1_check"></span> Back to Homepage</button></a>
    
    </center>

</div>



                        </div>
                    </div> 
                </div>
            </div>
        </div>
<br><br><br><br>
<footer class="footer" data-background-color="black">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="" target="_blank">
                                BudgetSales.lk
                            </a>
                        </li>
                        <li>
                            Ecommece Site
                        </li>
                    </ul>
                </nav>
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