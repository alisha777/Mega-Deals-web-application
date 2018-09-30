<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>

<?php
	if(isset($_POST['login_button']))
{
    include_once('connection.php');
	$name = $_POST['fname'];
	$uname = $_POST['lname'];
    $pass = $_POST['password'];
	$mail = $_POST['email'];

    $sql = "INSERT INTO customer(uname,upass,mail,name) VALUES ('$uname','$pass','$mail','$name');";

    $query = mysqli_query($conn,$sql);
	
	header("Location: login.php");
	
	


    
}

?>
<html>
<head>
<link rel="stylesheet" href="sign.css" type="text/css"/>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Registration-Form</header><hr></hr>
	<!---Form starting----> 
	<form action="Signup.php" method="post">

						<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname"> Name :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="fname" id="fname" placeholder="Enter your First Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="lastname">User Name :</label></div>
				<div class ="col-xs-8">	 
		             <input type="text" name="lname" id="lname" placeholder="Enter your Last Name" class="form-control last">
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
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password :</label></div>
				  <div class="col-xs-8">
			             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
				 </div>
          </div>
		  </div>
		  
     <!-----------For  gender-------->
         <div class="col-sm-12">
		     <div class ="row">
                 <div class="col-xs-4 ">
			       <label class="gender">Gender:</label>
				 </div>
			 
			     <div class="col-xs-4 male">	 
				     <input type="radio" name="gender"  id="mgender" value="boy">Male</input>
				 </div>
				 
				 <div class="col-xs-4 female">
				     <input type="radio"  name="gender" id="fgender" value="girl" >Female</input>
			     </div>
			
		  	 </div>
		     <div class="col-sm-12">
		         <div class="btn btn-warning" >
						<button type="submit" name="login_button" id="login_button">Submit</button>
				 </div>
		   </div>
		 </div>
    
    
    
    
    
    
	 </div>
					</form>
		 
</div>

</body>		
</html>
	 
	 