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
	<link rel="stylesheet" href="new2a.css" type="text/css">
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
		 		

		 



	<?php

	$db=mysqli_connect('localhost','root','','projects');
	$res=mysqli_query($db,'select * from totalstaff where dept='.$_GET["id"]);
		while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		?>
		<div class="image">
							<img src="<?php echo $row["image"]; ?>" height="170" width = "150" >
						</div>
		<div class="content">
			<?php
		echo "Name:" . $row['name']."<br>";


		echo "Department:" .  $row['department']."<br>";

		echo "Designation:" . $row['designation'] . "<br>";
		
		echo "Email:" . $row['email'] . "<br>";

		echo "Experience:" .  $row['experience'] . "<br>";

		echo "Specialization:" . $row['specialization'] . "<br>";

		echo "Theory Subjects:" . $row['theorysubjects'] . "<br>";

		echo "Qualification:" . $row['qualification'] . "<br>";

		

		
		$id=$row['dept'];

	?>
	
	<form method="post">
		<label>Name:</label><br>
		<input type="text" name="name1" class="mailbox" placeholder=" Enter Your name"><br>
		<label>Rollno:</label><br>
		<input type="text" name="acceptedemail1" class="mailbox" placeholder=" Enter Your Roll Number">

		<input type="text" name="name2" style="height:0px;width:0px;opacity: 0.9;background-color: floralwhite" value="---">		
		<input type="text" name="acceptedemail2" style="height:0px;width:0px;opacity: 0.9;" value="---">


		<input type="text" name="duplicate" style="opacity: 0.9s; width:0px; height:0px;" value="<?php echo $id; ?>"><br>
		<label>Tentative Title:</label><br>
		<input type="text" name="title2a" class="mailbox" placeholder=" Enter Your title of project"><br>
		<a><button class="contact" name="accept1" >accept</button></a>


	</form>
 </div>
	<?php
	}
	?>
</div>


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