<?php

session_start();
$uname=$_SESSION['user'];

//if(isset($_GET['logout'])){
   ///SESSION_destroy();
   //unset($_SESSION['user']);
   //header("location : login.php");


?>

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
                <a class="navbar-brand page-scroll sticky-logo" href="index.php">
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
                  
                  <li class="active">
                    <a class="page-scroll" href="product.php">product</a>
                  </li>
                
                  <li>
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
    
    <!----start all product---->
    
        <!-----------------------------all product------------->
		   
		   <!-----------------smart phone product-------->
		   
		    <div class= "container  ">
               <div class="row">
			       <div class="col-sm-8">
				     <h3>Smart Phone</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=1">
                                    <img border="0" alt="W3Schools" src="mobile/one-plus.jpg" width="150" height="150">
									<p>One-plus</p>
	                                 <a href= "compare.php?data=1" class= "btn btn-lg  btn-warning">Compare</a>
									 </a>
									
									
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=2">
                                   <img border="0" alt="W3Schools" src="mobile/i-phone.jpg" width="150" height="150">
				                   <p>i-phone</p>
								   <a href= "compare.php?data=2 " class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=3">
                                  <img border="0" alt="W3Schools" src="mobile/Huawei.jpg" width="150" height="150">
				                 <p>Huawei</p>
								 <a href= "compare.php?data=3 " class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
								
							<!----------end of mobile product---------->
                        <br>
						<!------------Laptop------------>
						
						<h3>Laptop</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=5">
                                    <img border="0" alt="W3Schools" src="laptop/elitebook.jpg" width="150" height="150">
				                    <p>elitebook</p>
									<a href="compare.php?data=5" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=6">
                                   <img border="0" alt="W3Schools" src="laptop/lenova.jpg" width="150" height="150">
				                   <p>Lenova</p>
								   <a href="compare.php?data=6" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=7">
                                  <img border="0" alt="W3Schools" src="laptop/asus-lap.jpg" width="150" height="150">
				                 <p>Asus</p>
								 <a href="compare.php?data=7" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
                          	
						   <!------------end of laptop--------->
						   
						   <br>
						   
						   <!-----------------camera------------------>
						   
						   <h3>Camera</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=9">
                                    <img border="0" alt="W3Schools" src="camera/lumix.jpg" width="150" height="150">
				                    <p>Lumix</p>
									<a href="compare.php?data=9" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=10">
                                   <img border="0" alt="W3Schools" src="camera/nikon.jpg" width="150" height="150">
				                   <p>Nikon</p>
								   <a href="compare.php?data=10" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=11">
                                  <img border="0" alt="W3Schools" src="f-prduct/sony-c.jpg" width="150" height="150">
				                 <p>Sony-c</p>
								 <a href="compare.php?data=11" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						   
						   
                          <!--------------end of camera--------->
						  
						  <br>
						  
						  <!--------------sound Box---------->
						  
						  <h3>Sound-Box</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=13">
                                    <img border="0" alt="W3Schools" src="soundbox/Sony-CMT.jpg" width="150" height="150">
				                    <p>Sony</p>
									<a href="compare.php?data=13" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=14">
                                   <img border="0" alt="W3Schools" src="soundbox/p-sound.jpg" width="150" height="150">
				                   <p>Panasonic</p>
								   <a href="compare.php?data=14" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=15">
                                  <img border="0" alt="W3Schools" src="soundbox/samsung.jpg" width="150" height="150">
				                 <p>Samsung</p>
								 <a href="compare.php?data=15" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  
						  <!----------end of sound Box------->
						  
						  <br>
						  
						  <!---------Ear-phone-------->
						  
						  <h3>Ear-phone</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=19">
                                    <img border="0" alt="W3Schools" src="headphone/JBL.jpg" width="150" height="150">
				                    <p>JBL</p>
									<a href="compare.php?data=19" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=20">
                                   <img border="0" alt="W3Schools" src="headphone/Moki.jpg" width="150" height="150">
				                   <p>Moki-ACC</p>
								   <a href="compare.php?data=20" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=21">
                                  <img border="0" alt="W3Schools" src="headphone/sony.jpg" width="150" height="150">
				                 <p>Sony</p>
								 <a href="compare.php?data=21" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
							 
							 <!---------------end of Ear-phone----------->
							 
							 <br>
							 
							 <!----------------Router------------>
							 <h3>Router</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=23">
                                    <img border="0" alt="W3Schools" src="router/Google.jpg" width="150" height="150">
				                    <p>Google</p>
									<a href="compare.php?data=23" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=24">
                                   <img border="0" alt="W3Schools" src="router/Orbi.jpg" width="150" height="150">
				                   <p>Orbi</p>
								   <a href="compare.php?data=24" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=25">
                                  <img border="0" alt="W3Schools" src="router/Link.jpg" width="150" height="150">
				                 <p>LINKSYS</p>
								 <a href="compare.php?data=25" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  
						  <!----------end of Router----->
						  
						  <br>
						  
						  <!---------------Fridge------->
						  <h3>Fridge</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=27">
                                    <img border="0" alt="W3Schools" src="fridge/Samsung.jpg" width="150" height="150">
				                    <p>Samsung</p>
									<a href="compare.php?data=27" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=28">
                                   <img border="0" alt="W3Schools" src="fridge/LG-frdg.jpg" width="150" height="150">
				                   <p>LG</p>
								   <a href="compare.php?data=28" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=29">
                                  <img border="0" alt="W3Schools" src="fridge/Haier.jpg" width="150" height="150">
				                 <p>Haier</p>
								 <a href="compare.php?data=29" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  <!------end of Fridge------->
						  
						  <br>
						  <!------------Micro-oven--------->
						  <h3>Micro-oven</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=31">
                                    <img border="0" alt="W3Schools" src="micro oven/Samsung.jpg" width="150" height="150">
				                    <p>Samsung</p>
									<a href="compare.php?data=31" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=32">
                                   <img border="0" alt="W3Schools" src="micro oven/Panasonic.jpg" width="150" height="150">
				                   <p>Panasonic</p>
								   <a href="compare.php?data=32" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=33">
                                  <img border="0" alt="W3Schools" src="micro oven/Sharp.jpg" width="150" height="150">
				                 <p>Sharp</p>
								 <a href="compare.php?data=33" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  <!---------end of Micro-oven----------->
						  
						  <br>
						  
						  <!-------------air conditioner---->
						  <h3>Air-conditioner</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=35">
                                    <img border="0" alt="W3Schools" src="air condition/LG-air.jpg" width="150" height="150">
				                    <p>LG</p>
									<a href="compare.php?data=35" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=36">
                                   <img border="0" alt="W3Schools" src="air condition/fujitsu.jpg" width="150" height="150">
				                   <p>Fujitsu</p>
								   <a href="compare.php?data=36" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=37">
                                  <img border="0" alt="W3Schools" src="air condition/Mitsubishi.jpg" width="150" height="150">
				                 <p>Mitsubishi</p>
								 <a href="compare.php?data=37" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  <!------end of air conditioner----->
						  
						  <br>
						  
						  <!----------television-------->
						  <h3>Television</h3>
					    <div class="row">	
                                 <div class="col-lg-4">			  
                 
                                    <a href="Displayy1.php?data=39">
                                    <img border="0" alt="W3Schools" src="tv/Sony.jpg" width="150" height="150">
				                    <p>Sony</p>
									<a href="compare.php?data=39" class= "btn btn-lg  btn-warning">Compare</a>
                                    </a>
				                  </div> 
				 
				 
				  
				                 <div class="col-lg-4">	  
				  
				                   <a href="Displayy1.php?data=40">
                                   <img border="0" alt="W3Schools" src="tv/sharp-tv.jpg" width="150" height="150">
				                   <p>Sharp</p>
								   <a href="compare.php?data=40" class= "btn btn-lg  btn-warning">Compare</a>
                                  </a>
				                 </div>
								  
								  
                               <div class="col-lg-4">					
				  
				                  <a href="Displayy1.php?data=41">
                                  <img border="0" alt="W3Schools" src="tv/Samsung.jpg" width="150" height="150">
				                 <p>Samsung</p>
								 <a href="compare.php?data=41" class= "btn btn-lg  btn-warning">Compare</a>
                                 </a>
				                </div> 	
							 </div>	
						  <!------end of television-------->
						  
                  </div><!---------end of colummm------>
                    
                </div><!---end of row----->
               						
			
		  </div><!--end of container-->
    
    
    <!-----end of all product---->
    
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
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
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