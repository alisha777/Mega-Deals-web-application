<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>

<?php
	if(isset($_POST['confirm_button']))
{
    include_once('connection.php');
	$name = $_POST['Pname'];
	
	$mail = $_POST['email'];
        
    $id=1;
    $sql = "INSERT INTO orders(OrderID,mail,P_name) VALUES ('$id','$mail','$name');";

    $query = mysqli_query($conn,$sql);
	
	header("Location: index.php");
	
	


    
}

?>
<html>
<head>
<link rel="stylesheet" href="sign.css" type="text/css"/>
     <meta charset="UTF-8">
     <title>confirmation Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> confirmation-Form</header><hr></hr>
	<!---Form starting----> 
	<form action="index.php" method="post">

						<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="pname">product Name :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="Pname" id="Pname" placeholder="Enter your product Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
        
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
	
		  
     <!-----------For  confirmation-------->
        
		    
                            
		     <div class="col-sm-12">
		         <div class="btn btn-warning" >
						<button type="submit" name="confirm_button" id="confirm_button">confirm</button>
				 </div>
		   </div>
		
    
    
    
    
    
    
	 </div>
					</form>
		 
</div>

</body>		
</html>
	 
	 