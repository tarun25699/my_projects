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

		<title>interface</title>
		<link rel="stylesheet" type="text/css" href="interface.css">

	</head>
	<body>
		<div id="main">
			<div id="mySidepanel" class="sidepanel">
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><</a>
			  <a href="interface.php">Home</a>
			  <a href="s0.php">Staff Checkin</a>
			
			  <a href="index.php?logout='1'">LOGOUT</a> 
			</div>

			<button class="openbtn" onclick="openNav()">=</button> 

			<div class="heading">
				
				<a class ="heading_link" href="home.php">SSFSP</a>

			</div>


			
			<div class="whole_top_right" id="myTopnav">
				<a class="top_rigt"></a><a class="top_right" href="interface.php">HOME</a><a class="top_right" href="s0.php">STAFFCHECKIN</a><a class="top_right" href="index.php?logout='1'">LOGOUT</a>   
					
					
	 				 </a>
			</div>

			<div class="writings">
				Sathyabama School of Computing Faculty Selection Process<br>
				Faculty Registration For SSFSP with Profile and Domain<br>
				Profile Data given here by Faculty will display at Student Login			</div>

				<div class="forms">
				<form method="post" action="interface.php">
					<?php include('errors.php')?>
					<label >NAME</label><br>
						<input type="text" name="name" class="input_box" placeholder="name"><br>
					<label >IMAGE</label><br>
						<input type="text" name="image" class="input_box" placeholder="pictures/idno.jpg"><br>
						<label >DESIGNATION</label><br>
						<input type="text" name="designation" class="input_box" placeholder="Asst Prof"><br>
						<label >DEPARTMENT</label><br>
						<input type="text" name="department" class="input_box" placeholder="Department"><br>
					<label >EMAIL</label><br>
						<input type="text" name="email" class="input_box" placeholder="Email ID"><br>
						<label >QUALIFICATION</label><br>
						<input type="text" name="qualification" class="input_box" placeholder="Qualification"><br>
						<label >EXPERIENCE</label><br>
						<input type="text" name="experience" class="input_box" placeholder="n years"><br>
					<label >SPECIALIZATION</label><br>
						<input type="text" name="specialization" class="input_box" placeholder="Specialization"><br>
						<label >THEORY SUBJECTS</label><br>
						<input type="text" name="subjects" class="input_box" placeholder="Subjects Handled"><br>
					<label >IDNO</label><br>
						<input type="text" name="dno" class="input_box" placeholder="idno"><br>
					
					<button type="submit" name="registered">REGISTER</button>

					

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