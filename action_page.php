<?php

session_start();
$uname=$_SESSION['user'];

//if(isset($_GET['logout'])){
   ///SESSION_destroy();
   //unset($_SESSION['user']);
   //header("location : login.php");

?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mega Deals</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  
    
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1><span>Mega</span>Deals</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li >
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  
                  <li>
                    <a class="page-scroll" href="product.php">product</a>
                  </li>
                 
                  <li class="active">
                    <a class="page-scroll" href="compare.php">compare</a>
                  </li>
                 
                  <li>
		            <a href=" " class="btn btn-primary navbar-btn navbar-right"><?php  echo $uname?></a>
                  </li>
                  <li>
                    <a href="login.php" class="btn btn-success navbar-btn navbar-right" id="logout">Log-Out</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
    
    
     
    
    
    <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/al.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/pnasnic.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/asus.jpg" alt="" title="#slider-direction-3" />
      </div>

      </div>
  </div>
  <!-- End Slider Area -->
    
    
  <!----start comparison product---->
    

			
		   <table>
 <tr>
  
  
 
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "product1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $data = $_POST["search"];
 
	   $sql = 'SELECT * from product_info where p_name="'.$_POST["search"].'"';
	   
		$result = $conn->query($sql);
		
		$sql1 = 'SELECT * from product_info where id="'.$_SESSION["productone"].'"';
		$result1 = $conn->query($sql1);
		
		if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$row1 = $result1->fetch_assoc();
		
		
		
		echo '<th>'.$row["P_name"].'</th>';
		echo '<th>'.$row1["P_name"].'</th>';
		
		
		
		
		echo "<tr><td>" . $row["id"]. "</td><td>" . $row1["id"] . "</td></tr>";
		echo "<tr><td>" . $row["technology"]. "</td><td>" . $row1["technology"] . "</td></tr>";
		echo "<tr><td>" . $row["weight"]. "</td><td>" . $row1["weight"] . "</td></tr>";
		echo "<tr><td>" . $row["sim"]. "</td><td>" . $row1["sim"] . "</td></tr>";
		echo "<tr><td>" . $row["disp_type"]. "</td><td>" . $row1["disp_type"] . "</td></tr>";
		echo "<tr><td>" . $row["disp_multitouch"]. "</td><td>" . $row1["disp_multitouch"] . "</td></tr>";
		echo "<tr><td>" . $row["os"]. "</td><td>" . $row1["os"] . "</td></tr>";
		echo "<tr><td>" . $row["chipset"]. "</td><td>" . $row1["chipset"] . "</td></tr>";
		echo "<tr><td>" . $row["gpu"]. "</td><td>" . $row1["gpu"] . "</td></tr>";
		echo "<tr><td>" . $row["card_slot"]. "</td><td>" . $row1["card_slot"] . "</td></tr>";
		echo "<tr><td>" . $row["memory"]. "</td><td>" . $row1["memory"] . "</td></tr>";
		echo "<tr><td>" . $row["wlan"]. "</td><td>" . $row1["wlan"] . "</td></tr>";
		echo "<tr><td>" . $row["bluetooth"]. "</td><td>" . $row1["bluetooth"] . "</td></tr>";
		echo "<tr><td>" . $row["usb"]. "</td><td>" . $row1["usb"] . "</td></tr>";
		echo "<tr><td>" . $row["battery"]. "</td><td>" . $row1["battery"] . "</td></tr>";
		echo "<tr><td>" . $row["colors"]. "</td><td>" . $row1["colors"] . "</td></tr>";
        echo "<tr><td>" . $row["Processor"]. "</td><td>" . $row1["Processor"] . "</td></tr>";
        echo "<tr><td>" . $row["Graphics"]. "</td><td>" . $row1["Graphics"] . "</td></tr>";
        echo "<tr><td>" . $row["Storage"]. "</td><td>" . $row1["Storage"] . "</td></tr>";    
		echo "<tr><td>" . $row["price"]. "</td><td>" . $row1["price"] . "</td></tr>";
            
       echo "<tr><td>" . $row["SDiscount"]. "</td><td>" . $row1["SDiscount"] . "</td></tr>";
       
       echo "<tr><td>" . $row["FDiscount"]. "</td><td>" . $row1["FDiscount"] . "</td></tr>";
            
            
		
        
		} else { echo "0 results"; }
$conn->close();

?>
</table>
		

    
    
    
   <!-----end of comparison product--->
    
    
    
    
    
      <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Mega Deals</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
             
              Designed by <a href=" ">Alisha Toma</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    
    
    
    
    
    
    
    
    

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
 
    

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
