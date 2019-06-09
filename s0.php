<?php include('server.php');

	$userprofile = $_SESSION['staff'];
	if($userprofile==true)
	{

	}

	else{
		header('location:home.php');
	}

?>
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
			  <a href="interface.php">Home</a>
			  <a href="interface.php">Staff Login</a>
			
			  <a href="index.php?logout='1'">Logout</a>
			</div>

			<button class="openbtn" onclick="openNav()">=</button> 

			<div class="heading">
				
				<a class ="heading_link" href="interface.php">SSFSP</a>

			</div>


			
			<div class="whole_top_right" id="myTopnav">
				<a class="top_rigt"></a><a class="top_right" href="interface.php">HOME</a><a class="top_right" href="interface.php">STAFFLOGIN</a><a class="top_right" href="index.php?logout='1'">LOGOUT</a>  
					
					
	 				 </a>
			</div>

		<div class="writings">
				Sathyabama School of Computing Faculty Selection Process<br>
				Display of complete Faculty and selected students details<br>
				Faculty can view those details by using their idno<br>
				Student Registers under Faculty in Student Login reflects here
			</div>


				<div class="forms">
				<form method="post" action="s0.php">
					<?php include('errors.php');?>
					<label class="label">IDNO</label><br>
						<input type="text" name="idno" class="input_box" placeholder="eg: 1234"><br>
					
					<button type="submit" name="find">FIND</button>

					

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