<?php
    session_start();
    include('../config/dbconn.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



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
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a href="../index.php" class="navbar-brand" rel="tooltip" title="Designed and Coded by UWU IIT" data-placement="bottom">
                   BudgetSales.lk
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

<?php
// including the database connection file
include("../config/dbconn.php");
if(isset($_POST['submit']))
{   
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role="admin";
     move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);         
    $image=$_FILES["image"]["name"];
   

    $pass1=md5($password);
    $salt="a1Bz20ydqelm8m1wql";
    $pass1=$salt.$pass1;

    // checking empty fields
    if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){    
            
        if(empty($firstname)) {
            echo "<font color='red'>Firstname field is empty!</font><br/>";
        }
        
        if(empty($lastname)) {
            echo "<font color='red'>Lastname field is empty!</font><br/>";
        }

        if(empty($email)) {
            echo "<font color='red'>Email field is empty!</font><br/>";
        }
        
        if(empty($username)) {
            echo "<font color='red'>Username field is empty!</font><br/>";
        }    

        if(empty($password)) {
            echo "<font color='red'>Password field is empty!</font><br/>";
        }  
       
        
        
    } else {    
        //updating the table
        $query = "INSERT INTO admin (firstname, lastname, email, username, password,image,role) 
                VALUES ('$firstname','$lastname','$email','$username','$pass1','$image',' $role')";
 
        $result = mysqli_query($dbconn,$query);
        
      
        if($result){
            //redirecting to the display page. In our case, it is Admin panel.php
        header("Location: admin_panel.php");
        }
        
    }
}
?>



    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/ironman.jpg)">
            
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
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="post" action="" enctype="multipart/form-data"   >
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                **LOGO**
                                <!--insert logo here-->
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="firstname" class="form-control" placeholder="First name" required>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input type="text" name="lastname" class="form-control" placeholder="Last name" required>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_single-02"></i>
                                </span>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input type="password" id="password" name="password" placeholder="Password" class="form-control"  required>
                            </div>
                            
                            <div class="input-group form-group-no-border input-lg">
                            <input type="file" class="form-control" id="images" name="image">  
                        </div>
                            
                            
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="bbtn btn-primary btn-round btn-lg btn-block" id="submit" name="submit">
                                 Create account
                            <span class="glyphicon glyphicon-floppy-save"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed and Coded by UWU IIT.
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

</html>