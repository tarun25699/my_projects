<?php include('server.php');

	$userprofile = $_SESSION['regno'];
	
	if($userprofile==true)
	{

	}

	else{
		header('location:home.php');
	}

?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
<head>
	<link rel="stylesheet" href="new2.css" type="text/css">
	<title>contact</title>
</head>
<body>
		<div id="main">

				<div id="mySidepanel" class="sidepanel">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><</a>
				  <a href="new.php">Home</a>
				  
		
				  <a href="contact2.php">About</a>
				  <a href="index.php?logout='1'">Logout</a>
				</div>
				
					<button class="openbtn" onclick="openNav()">=</button> 
			

					


				
					<div class="whole_top_right" id="myTopnav">
						<a class="top_rigt"></a><a class="top_right" href="new.php">HOME</a><a class="top_right" href="contact2.php">ABOUT</a><a class="top_right" href="index.php?logout='1'">LOGOUT</a>  
							
							
			 				 </a>
					</div>

	 				<div class="heading">
					
						<a href="new.php" style="color:rgb(255,0,140); text-decoration: none;"><h2>SSFSP</h2></a>

					</div>
			</div>
		 		
			<div class="logo" style=" margin: 50px 10px -80px 120px;"><h2 style=" color: rgb(255,0,140); text-shadow: 1px 1px pink;">GUIDED BY :</h2></div>
		 
			<div class="image">
							<img src="pictures/5201.jpg" height="170" width = "150" >
						</div>

						<div class="content">
							Name : Dr.T.Sasikala<br>
							Designation : Dean of School of computing<br>
							Sathyabama Institute of Science and Technology<br><br>
							
						</div>

			<div class="logo" style=" margin: 50px 10px -80px 120px;"><h2 style=" color: rgb(255,0,140); text-shadow: 1px 1px pink;">TEAM DEVELOPED :</h2></div>

			<div class="image">
							<img src="sandeep.jpg" height="170" width = "150" >
						</div>
						<div class="content">
							Name : B.Sandeep<br>
							RollNo : 16scs1092<br>
							Department : CSE<br>
							Batch : 2016-2020<br>
						</div>



			<div class="image">
							<img src="tarun1.jpg" height="170" width = "150" >
						</div>
						<div class="content">
							Name : B.Tarun sai kumar<br>
							RollNo : 16scs1094<br>
							Department : CSE<br>
							Batch : 2016-2020<br>
						</div>

			<div class="image">
							<img src="saiteja.jpg" height="170" width = "150" >
						</div>

						<div class="content">
							Name : B.Sai Teja<br>
							RollNo : 16scs1103<br>
							Department : CSE<br>
							Batch : 2016-2020<br>
						</div>
		<div class="content">


	


<script>

  			function openNav() {
			  document.getElementById("mySidepanel").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "0px";
			}

			function closeNav() {
			  document.getElementById("mySidepanel").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			}
</script>
</body>
</html>