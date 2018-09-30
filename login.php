<?php

session_start();
if(isset($_POST['login_button']))
{
    include_once('connection.php');
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    $sql = "SELECT * from customer where uname='$uname' AND upass='$upass'";

    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0)
    {
        while($row = mysqli_fetch_array($query))
        {
            $getuname = $row['uname'];
            $getp= $row['upass'];
            $_SESSION['user']=$row['uname'];
            $ad="admin";
            $ad_pass="admin";
            echo $_SESSION['user'];

            if($uname==$getuname && $upass==$getp){
                if($uname=="0" && $upass=="admin") {

                    header("Location: Admin.php");
                }
                else{
                    header("Location: index.php");
                }
            }

        }
    }
	
}
else if(isset($_POST['sign-up'])){
		 header("Location: Signup.php");
	}


?>





<html>

	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>MEGA DEALS </title>
			<style>
			body
			{

                overflow: auto;
                background-image:url(photo.png) ;

			}

			#name
			{
				font-size:70px;
			   color:rgba(255, 255, 255, 0.719);
			   background-image:url(glr.jpg);
			   background-repeat:repeat-x;
			   -webkit-background-clip:text;
			   animation:animate 15s linear infinite;


			}

				@keyframes animate{
					0%{
						background-position: left 0px top 10px;
					}
					40%{
						background-position: left 1000px top 10px;
					}
					100%{
						background-position: left 1500px top 10px;
					}
				}

			#login_box
			{

				width: 500px;
                height: 480px;
                background-color: blue;
				margin-top: 8px;

                border-radius: 10px;
				border-style: dotted dashed solid double;
				border-image:linear-gradient(#2193b0,#6dd5ed); 
				border-image-slice:0.5;
				background : linear-gradient(#6dd5ed,#2193b0); /*pure lust*/
                color: black;


			}
			#header
			{


               font-size:35px;
			   color:rgba(255,255,255,.1);
			   background-image:linear-gradient(#141E30,#243B55);
			   background-repeat:repeat-x;
			   -webkit-background-clip:text;



			}




			.uname-label{
				 text-align:left; 
			 margin-left:28px;
			 margin-right: 10px;
			 height:30px;

			}	

			.ps-label{
				text-align:left; 
			 margin-left:28px;
			 margin-right: 10px;
			 height:30px;
			}		


			#ni-in{
				/* text-align:center; */
			font-size:20px;
			border-image:linear-gradient(0deg,#000000,#434343); 
			border-image-slice:0.5;
			margin-top:-5px;
			}
			 #ps-in
			{
				font-size:20px;
			border-image:linear-gradient(0deg,#000000,#434343); 
			border-image-slice:0.5;
			margin-top:-5px;
			}

			#login_button
            {
               font-size: 20px;
			border: solid;
			border-color:black;
			  color: black;
			  padding: 12px 48px;
			  text-align: center;
			  font-size: 16px;
			  margin: 40px 2px;
			  transition: 1s;
			cursor: pointer;
            }
            #login_button:hover
            {
               background: linear-gradient(#141E30,#243B55);
			color: white;
			border-color:rgb(245, 245, 245);
            }



			</style>

		</head>
		<body>
		<div align="center" class="img">
			<form action="" method="">
				<h1 id="name" >MEGA DEALS</h1>
			</form>
		</div>

		<div align="center" class="img">
			
		</div>

		<div align="center" class="container">

			<div align="center" id="login_box">

				<form action="login.php" method="post">

					<h1 id="header" >Login </h1>

					<div class="uname" style="display: table-row">
						<div class="uname-label" style="display: table-cell">
							<h4 > USERNAME </h4>
						</div>
						<div class="input" style="display: table-cell">
							<input ID="ni-in" name="uname" type="text"/>
						</div>	
					</div>

					<div class="ps" style="display: table-row">
						<div class="ps-label"  style="display: table-cell">
							<h4> PASSWORD </h4>
						</div>
						<div class="ps-input"  style="display: table-cell">
							<input ID="ps-in" name="upass" type="password"/>
						</div>


						
						
					</div>
					<div>
						<button type="submit" name="login_button" id="login_button">Log In</button>
					</div>
					<div>
						 <button  href = "Signup.php" name="sign-up" id="login_button">Sign Up</button>
					</div>
				</form>
				
				
			</div>

		</div>
	</body>


</html>