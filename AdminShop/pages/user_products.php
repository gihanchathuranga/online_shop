    <?php
    session_start();

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
    <title>Ecommerce web</title>
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

</head>
<body class="index-page sidebar-collapse">
    <div class="wrapper"><br>
        <div class="main">
             <div class="section section-basic " style="background-color:beige">  
                <div class="container">
                     
                      <a class="btn btn-primary btn-round" href="user_index.php"><i class="now-ui-icons arrows-1_minimal-left"></i> &nbsp Back to index</a>
                      <hr color="orange"> 
                
                <div class="col-md-12">
                <br>
            
                <div class="panel panel-success panel-size-custom">
                        <div class="panel-body">

                            <?php
                                      include('../config/dbconn.php');

                                      $action = isset($_GET['action']) ? $_GET['action'] : "";
                                      if($action=='deleted'){
                                          echo "<div class='alert alert-success'>Record was deleted.</div>";
                                      }
                                      $query = "SELECT * FROM products ORDER BY prod_name ASC";
                                      $result = mysqli_query($dbconn,$query);
                                      ?>  
                                 
                              
                               
                                <div class="title"><h1>Request URL</h1></div>
            <form action="Requestaction.php" method="post" enctype="multipart/form-data">
                   <label for="sel1">Select Product Category (select one)</label>
                <select class="form-control" id="sel1" name="catagory">
                    <option value="electronics">Electronics</option>
                    <option value="Wears "> Wears</option>
                    <option value="mens wears">Accesories</option>
                    <option>Kids Wears</option>
                    <option>Furnitures</option>
                    <option>Home Appliances</option>
                    <option>Electronics Gadgets</option>



                </select>
                   <br>
                <div class="form-group">
                    <label for="name"> Customer Name</label>
                    <input type="name" class="form-control" id="name" name="name">




                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">




                </div>

                <div class="form-group">
                    <label for="mobile">Contact Number</label>
                    <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="bhjghg">




                </div>
                <div class="form-group">
                    <label for="mobile">Item Description </label>
                    <textarea name="desc" class="form-control"placeholder="Item Description">
                        
                    </textarea>




                </div>
                <div class="form-group">
                    <label for="mobile">Enter Path </label>
                    <input type="mobile" class="form-control" id="imgpath" name="imgpath">




                </div>
                <div class="form-group" style=" width: " >


                    <input type="file" class='btn btn-warning btn-round' name="fileToUpload" id="fileToUpload">






                </div>




                <input type="submit"  class='btn btn-warning btn-round'  name="submit" value="OK">

            </form>
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
                           Ecommerce web
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