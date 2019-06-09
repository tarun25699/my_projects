<?php include('server.php');?>
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<head>

		<title>page1</title>
		<link rel="stylesheet" type="text/css" href="start1.css">

	</head>
	<body>
		<div id="main">
			<div id="mySidepanel" class="sidepanel">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><</a>
			  <a href="home.php">Home</a>
			  <a href="staff1.php">Staff Login</a>
			  
			   <a href="contact.php">About</a>
			  <a href="start2.php">Login</a>
			</div>

			<button class="openbtn" onclick="openNav()">=</button> 

			<div class="heading">
				
				<a class ="heading_link" href="home.php">SSFSP</a>

			</div>


			
			<div class="whole_top_right" id="myTopnav">
				<a class="top_rigt"></a><a class="top_right" href="home.php">HOME</a><a class="top_right" href="staff1.php">STAFFLOGIN</a><a class="top_right" href="contact.php">ABOUT</a><a class="top_right" href="start2.php">LOGIN</a>  
					
					
	 				 </a>
			</div>

			<div class="writings">
				Sathyabama School of Computing Faculty Selection Process <br>
				Registration of Student for SSFSP Website<br>
				Credentilas required of student are Name,Dob,Reg No,Email
			</div>

				<div class="forms">
				<form method="post" action="start1.php">
					<?php include('errors.php')?>
					<label >NAME</label><br>
						<input type="text" name="name" class="input_box" placeholder="name"><br>
					<label>EMAIL</label><br>
						<input type="email" name="email" class="input_box" placeholder="abc@gmail.com"><br>
					
				
					<label>REGNO</label><br>
						<input type="text" name="regno" class="input_box" placeholder="Register Number"><br>
					
					<label>DATE OF BIRTH</label><br>
						<input type="text" name="dateofbirth" class="input_box" placeholder="dd-mm-yyyy"><br>
					<button type="submit" name="registered_user">SIGNUP</button>

					<p>
						Already a member?  <a class="login" href="start2.php">LOGIN</a>
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