<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<head>

		<title>page3</title>
		<link rel="stylesheet" type="text/css" href="start2.css">

	</head>
	<body>
		<div id="main">
			<div id="mySidepanel" class="sidepanel">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><</a>
			  <a href="Home.php">Home</a>
			  <a href="staff1.php">Staff Login</a>
			  
			  <a href="contact.php">About</a>
			  <a href="start1.php">SignUp</a>
			</div>

			<button class="openbtn" onclick="openNav()">=</button> 

			<div class="heading">
				
				<a class ="heading_link" href="home.php">SSFSP</a>

			</div>


			
			<div class="whole_top_right" id="myTopnav">
				<a class="top_rigt"></a><a class="top_right" href="home.php">HOME</a><a class="top_right" href="staff1.php">STAFFLOGIN</a><a class="top_right" href="contact.php">ABOUT</a><a class="top_right" href="start1.php">SIGNUP</a>  
					
					
	 				 </a>
			</div>

			<div class="writings">
				Sathyabama School of Computing Faculty Selection Process <br>
				Successful Registration of Student with Their Details<br>
				creates them a Login useful for Logging in to Website
			</div>

				<div class="forms">
				<form method="post" action="start2.php">
					<?php include('errors.php');?>
					<label class="label">REGNO</label><br>
						<input type="text" name="regno" class="input_box" placeholder="Register Number"><br>
					<label>DATE OF BIRTH</label><br>
						<input type="text" name="dateofbirth" class="input_box" placeholder="dd-mm-yyyy"><br>
					<button type="submit" name="login_user">LOGIN</button>

					<p>
						New User?  <a class="signup"  href="start1.php">SIGNUP</a>
					</p>

				</form>
			</div>
		</div>
		<script>
			function openNav() {
			  document.getElementById("mySidepanel").style.width = "350px";
			  document.getElementById("main").style.marginLeft = "0px";
			}

			function closeNav() {
			  document.getElementById("mySidepanel").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			}
		</script>

	</body>


</html>