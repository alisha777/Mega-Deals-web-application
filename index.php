
<?php

session_start();

if(!isset($_SESSION['user'])){
    $_SESSION[msg]="you need to login first";
    header("location : login.php");
}

$uname=$_SESSION['user'];


if(isset($_GET['logout'])){
   SESSION_destroy();
   unset($_SESSION['user']);
   header("location : login.php");
}



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
                  <li class="active">
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About</a>
                  </li>
                  
                  <li>
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
    
    <!----start view product---->
    
          <!-----------------------------latest device------------>
	 
		  <div class= "container  ">
               <div class="row">
                   
                    <div class="col-sm-4" style="background-color:aliceblue">
                        <br>
                        <h4>Latest Device</h4>
                        <br>
                    <div class="row" >
                            
                        
                            <div class="col-sm-3" style="margin: 15px">
                             
                                <a href="Displayy1.php?data=4">
                                    <img border="0" alt="Samsung" src="latest/s9-resize.png" width="100" height="100">
				                    <p>Samsung galaxy s9</p>
                                </a>
				  
                            </div>
				            
                            <div class="col-sm-3" style="margin: 15px">
				             <a href="Displayy1.php?data=16">
                                <img border="0" alt="W3Schools" src="latest/loa-microlab-m100.jpg" width="100" height="100">
				                <p>Mircrolab m100 Sound Box</p>
                                </a>
              
				  
                            </div>
                            
                            <div class="col-sm-3" style="margin: 15px">
				            <a href="Displayy1.php?data=8">
                                <img border="0" alt="W3Schools" src="latest/NOTE102.jpg" width="100" height="100">
				                <p>Asus vivobook Laptop</p>
                            </a>
				            
                            </div>
                            
                            </div>
                        <br>
                        <div class="row">
                            
                        
                            <div class="col-sm-3" style="margin: 15px">
                            <a href="Displayy1.php?data=26">
                            <img border="0" alt="W3Schools" src="latest/router tplink.jpg" width="100" height="100">
				            <p>TP link Ti Router</p>
                            </a>
				  
                            </div>
				            
                            <div class="col-sm-3" style="margin: 15px">
				            <a href="Displayy1.php?data=22">
                                <img border="0" alt="W3Schools" src="latest/RED_V2.png" width="100" height="100">
				                <p>Beats v2 Headphone</p>
                            </a>
				  
                            </div>
                            
                            <div class="col-sm-3" style="margin: 15px">
				             <a href="Displayy1.php?data=12">
                                <img border="0" alt="Nikon" src="latest/nikon.png" width="100" height="100">
				                <p>Nikon 6307D Camera</p>
                            </a>
				            
                            </div>
                            
                            </div>
                        <br>
                        <div class="row">
                            
                         <div class="col-sm-3" style="margin: 15px">
                              <a href="Displayy1.php?data=30">
                                <img border="0" alt="W3Schools" src="latest/slide02-fridge.png" width="100" height="100">
                                  <p>Samsung hife9 Fridge</p>
                            </a>
				  
				  
                            </div>
				            
                            <div class="col-sm-3" style="margin: 15px">
				            <a href="Displayy1.php?data=38">
                                    <img border="0" alt="W3Schools" src="latest/Portable_Air_Conditioner.jpg" width="100" height="100">
				                <p>LG Portable Air conditioner</p>
                            </a>
				  
                            </div>
                            
                            <div class="col-sm-3" style="margin: 15px">
				            <a href="Displayy1.php?data=34">
                                <img border="0" alt="W3Schools" src="latest/ultracomb-horno-electrico.jpg" width="100" height="100">
				                <p>Ultracorn horno oven</p>
                            </a>
				            
                            </div>
                            
                            </div>
				  
				  <!-----------------Latest Devices & Top Products ------------>
				  
				 
				</div><!---end of colum--->  	
				
				 <div class="col-sm-8">
                     <br>
				     <h3>Most viewed</h3>
					 
					   <style>
                            h3{
                                color: dimgrey
                            }
                            
                        </style>
                        <br>
					   
					    <div class="row">	
                          <div class="col-lg-3" style="margin: 15px">			  
                 
                               <a href="Displayy1.php?data=7">
                               <img border="0" alt="Asus" src="mst-view/asus-lap.jpg" width="250" height="250">
				               <p>Laptop</p>
                               </a>
				               </div> 
				 
				 
				  
				          <div class="col-lg-3" style="margin: 15px">	  
				  
				          <a href="Displayy1.php">
                         <img border="0" alt="i-phone" src="mst-view/i-phone.jpg" width="250" height="250">
				         <p>Mobile</p>
                          </a>
				  
				         </div>
                         <div class="col-lg-3" style="margin: 15px">					
				  
				        <a href="Displayy1.php?data=10">
                        <img border="0" alt="W3Schools" src="mst-view/s-camera.jpg" width="250" height="250">
				       <p>camera</p>
                       </a>
				       </div> 	

                      </div>		

                                       <!-------Featured Products------------>
                      <br>	
<hr>
                    <h3>Featured product</h3>
                       <div class="row">	
                          <div class="col-lg-3" style="margin: 15px">			  
                 
                           <a href="Displayy1.php">
                           <img border="0" alt="Huawei" src="f-prduct/Huawei.jpg" width="250" height="250">
				           <p>Mobile</p>
                           </a>
				           </div> 	

                      <div class="col-lg-3" style="margin: 15px">	  
				  
				     <a href="Displayy1.php?data=18">
                     <img border="0" alt="W3Schools" src="f-prduct/LG-sndbx.jpg" width="250" height="250">
				     <p>Sound-box</p>
                     </a>
				   
				     </div>
                     <div class="col-lg-3" style="margin: 15px">					
				  
				     <a href="Displayy1.php?data=11">
                    <img border="0" alt="Sony_C" src="f-prduct/sony-c.jpg" width="250" height="250">
				    <p>Sony-c</p>
                     </a>
				    </div> 		

                     </div>
                        <!-----------------Most viwer & Featured products ------------>

                  </div>
                    
                </div><!---end of row----->
               						
			
		  </div><!--end of container-->
    
    
    <!-----end of view product---->
    
    
    <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About MegaDeals</h2>
          </div>
        </div>
      </div>
        
              <a>
              <p>
               Our website is a transaction of  selling online of essential electronics product.We provided that , how can a customer can easily see view details for a product , products comparison, and also creat easy buying system.

              </p>
              </a>       
    </div>
  </div>
  <!-- End About area -->
    
    
    
    
    
    
    
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
             
                
              Designed by <a href=" ">Alisha toma</a>
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
