<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->






<html>
<head>
<link rel="stylesheet" href="sign.css" type="text/css"/>
     <meta charset="UTF-8">
     <title>ordering Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Confirmation-order</header><hr></hr>
	<!---Form starting----> 
	<form action="order.php" method="get">

    <div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="name">product Name :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="P_name" id="P_name" placeholder="Enter your product Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
        
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="mail"  id="mail"placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
	 
        
     <!-----------For  gender-------->
         
		    
		     <div class="col-sm-12">
		         <div class="btn btn-warning" >
						<button type="submit" name="confirm_button" id="confirm_button">Confirm</button>
                       
				 </div>
		   </div>
		 
    
     <input type='hidden' name='status' value='connect'>
     <input type='hidden' name='type' value='insert'>
    
	 </div>
   <a href="login.php" class="btn btn-success navbar-btn navbar-right" id="logout">Log-Out</a>      
        
</form>
    
 </div>   
    
    <?php
        
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(isset($_GET['status'])){
                $status=$_GET['status'];
                if($status=='connect'){
                    $serveraddr = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "product1";
                    
                        $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $flag=false;
                        ///when insert parameter is passed
                        if(isset($_GET['type'])&& $_GET['type']=='insert'){
                            $flag=true;
                            try {
                                $pdostmt = $conn->prepare("select max(OrderID) as total from orders");
                                $pdostmt->execute();
                                $res = $pdostmt->fetchAll(PDO::FETCH_NUM);
                                $len = $res[0][0];  ///here $len contains the max assigned id to users, so that we can assign the next value(i.e. +1) to the new user

                                if (isset($_GET['P_name']) && isset($_GET['mail'])){
                                    $stmt = "INSERT INTO orders (OrderID, mail, P_name) VALUES (" . ($len + 1) . ",'" . $_GET['mail'] . "','" . $_GET['P_name'] . "');";
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "cant insertion";
                            }
                        }
                        
                        
                    $conn=null;
                
                
            }
         }
    }
    
		 
?>

</body>		
</html>
	 
	 