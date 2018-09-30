<?php
// Start the session
session_start();
$uname=$_SESSION['user'];

//if(isset($_GET['logout'])){
   //SESSION_destroy();
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
                    <a class="page-scroll" href="compare.php">About</a>
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
    
    
    <!----start of search button---->
     <div class= "container ">
			      <div class="topnav">
                                       <div class="search-container">
                                          <form action="action_page.php" method="POST">
                                             <input type="text" placeholder="Search.." name="search">
                                                 <button type="submit"><i class="fa fa-search"></i></button>
                                           </form>
                                       </div>
                                   </div>

                                   <div style="padding-left:16px">
								</div>
			 </div> <!---end of container--->
    
    
    
    <!----end of search button---->
    
    
    <!-----display product---->
   

       <table>
 <tr>
  <th>FeatureName</th> 
  <th>Details</th> 
 </tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "product1");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $data = $_GET["data"];
  $_SESSION["productone"] = $data;
  
  
   if($data=='1'){
  echo '<h4 style="text-align:center;">One plus 6</h4>'; 
  echo '<p style="text-align:center;"><img border="0" alt="one_plus" src="mobile/one-plus.jpg" width="200" height="250" ></p>';
  $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
   }
   
    else if($data=='2'){
  echo '<h4 style="text-align:center;">i-phone</h4>'; 	  
  echo '<p style="text-align:center;"><img border="0" alt="i-phone" src="mobile/i-phone.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
  
   else if($data=='3'){
	   echo '<h4 style="text-align:center;">Huawei P20 Pro</h4>'; 
	 echo '<p style="text-align:center;"><img border="0" alt="one_plus" src="mobile/Huawei.jpg" width="200" height="250" ></p>';
  $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
  
  else if($data=='4'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='5'){
	   echo '<h4 style="text-align:center;">Elitebook</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Elitebook" src="laptop/elitebook.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='6'){
	   echo '<h4 style="text-align:center;">Lenova</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="lenova" src="laptop/lenova.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='7'){
	   echo '<h4 style="text-align:center;">Asus</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Asus" src="laptop/asus-lap.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
    else if($data=='8'){
	   echo '<h4 style="text-align:center;">Asus</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Asus" src="latest/NOTE102.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='9'){
	   echo '<h4 style="text-align:center;">Lumix</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Lumix" src="camera/lumix.jpg" width="200" height="250" ></p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='10'){
	   echo '<h4 style="text-align:center;">Nikon</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Nikon" src="camera/nikon.jpg" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
           
   else if($data=='11'){
	   echo '<h4 style="text-align:center;">Sony-c</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Sony-c" src="f-prduct/sony-c.jpg" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
  
   else if($data=='12'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='13'){
	   echo '<h4 style="text-align:center;">Sony-CMT</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="soundbox/Sony-CMT.jpg" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='14'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="soundbox/p-sound.jpg" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='15'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='16'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='17'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
           
   else if($data=='18'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='19'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='20'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='21'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='22'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='23'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='24'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='25'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='26'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='27'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='28'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='29'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='30'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='31'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='32'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='33'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='34'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='35'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }    
           
   else if($data=='36'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  } 
           
   else if($data=='37'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }      
           
   else if($data=='38'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   else if($data=='39'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='40'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }
           
   else if($data=='41'){
	   echo '<h4 style="text-align:center;">Samsung</h4>'; 
	echo '<p style="text-align:center;"><img border="0" alt="Samsung" src="latest/s9-resize.png" width="200" height="250" ></p>';
  echo '<p style="text-align:center;" href= "compare.php" class= "btn btn-lg  btn-warning">Compare</p>';
   $sql1 = "SELECT * FROM product_info where id=".$_GET["data"];
  $result = $conn->query($sql1);
  }         
           
   
   if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   
   
    echo '<tr><td>ID:</td><td>' . $row["id"]. '</td>"</tr>';
   
  
    echo '<tr><td>name:</td><td>' . $row["P_name"]. '</td>"</tr>';
	
	 
	
	 
    echo '<tr><td>Technology:</td><td>' . $row["technology"]. '</td>"</tr>';
	
	
    echo '<tr><td>Dimensions:</td><td>' . $row["dimensions"]. '</td>"</tr>';
	
	
    echo '<tr><td>Weight:</td><td>' . $row["weight"]. '</td>"</tr>';
	
	 
    echo '<tr><td>SIM:</td><td>' . $row["sim"]. '</td>"</tr>';
	
	
    echo '<tr><td>Dis_Type:</td><td>' . $row["disp_type"]. '</td>"</tr>';
	
	
	 
    echo '<tr><td>Dis_multitouch:</td><td>' . $row["disp_multitouch"]. '</td>"</tr>';
	
	 
    echo '<tr><td>OS:</td><td>' . $row["os"]. '</td>"</tr>';
	
	
    echo '<tr><td>Chipset:</td><td>' . $row["chipset"]. '</td>"</tr>';
	
	
    echo '<tr><td>GPU:</td><td>' . $row["gpu"]. '</td>"</tr>';
	
	
    echo '<tr><td>Card_slot:</td><td>' . $row["card_slot"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Internal_Memory:</td><td>' . $row["memory"]. '</td>"</tr>';
	
	
    echo '<tr><td>Wlan:</td><td>' . $row["wlan"]. '</td>"</tr>';
	
	
    echo '<tr><td>Bluetooth:</td><td>' . $row["bluetooth"]. '</td>"</tr>';
	
	
    echo '<tr><td>USB:</td><td>' . $row["usb"]. '</td>"</tr>';
	
	
    echo '<tr><td>Battery:</td><td>' . $row["battery"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Color:</td><td>' . $row["colors"]. '</td>"</tr>';
       
	echo '<tr><td>Processor:</td><td>' . $row["Processor"]. '</td>"</tr>';
       
   echo '<tr><td>Graphics:</td><td>' . $row["Graphics"]. '</td>"</tr>';
       
       
   echo '<tr><td>Storage:</td><td>' . $row["Storage"]. '</td>"</tr>';    
       
    echo '<tr><td>Price:</td><td>' . $row["price"]. '</td>"</tr>';
       
       
    echo '<tr><td>starting discTime:</td><td>' . $row["SDiscount"]. '</td>"</tr>';
       
    echo '<tr><td>Ending discTime:</td><td>' . $row["FDiscount"]. '</td>"</tr>';        
	
	
	
echo "</table>";
} else { echo "0 results"; }
$conn->close();


?>
</table>

   
    
    <!----end of display product--->
    
    
    
    
    
    
    
    

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
