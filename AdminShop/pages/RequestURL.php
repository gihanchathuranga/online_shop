<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Budget Sales.Lk</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <!-- Bootstrap-CSS -->	   <link rel="stylesheet" href="bootstrap.css"					type="text/css" media="all">
        <!-- Index-Page-CSS -->	   <link rel="stylesheet" href="css/sty.css"						type="text/css" media="all">
        <!-- Header-Slider-CSS --> <link rel="stylesheet" href="fluid_dg.css" id="fluid_dg-css" type="text/css" media="all">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />        
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
        <link href="css/JiSlider.css" rel="stylesheet">
        <link rel="stylesheet" href="css/shop.css" type="text/css" />
        <link href="css/style.css" rel='stylesheet' type='text/css' media="all">

        <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <style></style>

    </head>
    <body>
        <div class="wait overlay">
            <div class="loader"></div>
        </div>
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">	
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
                        <span class="sr-only">navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Budget Sales.Lk</a>
                </div>
                <div class="collapse navbar-collapse" id="collapse">
                    <!--<div id="bs-megadropdown-tabs" class="navbar-collapse collapse">-->
                    <ul class="nav navbar-nav">
                        <li><a href="product.php"><span class="glyphicon glyphicon-modal-window"></span>Shop Now</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="customer_registration.php?register=1" ><span class="glyphicon glyphicon-user"></span>Register</a></li>
                        <li><a href="login_form.php"><span class="glyphicon glyphicon-user"></span>SignIn</a></li>
                    </ul>

                </div>
            </div>
        </div>	
        <div class="slider text-center">
            <div class="callbacks_container">
                <ul class="rslides" id="slider4"></ul>
            </div></div>
        <br><br><br><br><br>
        <div class="container well">

            <form action="Requestaction.php" method="post" enctype="multipart/form-data">


             
                <br>


            </form>
            <form action="Requestaction.php" method="post" enctype="multipart/form-data">
                   <label for="sel1">Select Product Category (select one)</label>
                <select class="form-control" id="sel1" name="catagory">
                    <option value="electronics">Electronics</option>
                    <option value="ladies wears ">Ladies Wears</option>
                    <option value="mens wears">Mens Wears</option>
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
                    <textarea name="desc" class="form-control"placeholder="hghghghg">
                        
                    </textarea>




                </div>
                <div class="form-group">
                    <label for="mobile">Enter Path </label>
                    <input type="mobile" class="form-control" id="imgpath" name="imgpath">




                </div>
                <div class="form-group" style=" width: " >


                    <input type="file" name="fileToUpload" id="fileToUpload">






                </div>




                <input type="submit" name="submit" value="OK">

            </form>



        </div>




    </body>
</html>
