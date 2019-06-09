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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<head>

		<title>page3</title>
		<link rel="stylesheet" type="text/css" href="new.css">

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
					
						<a href="new.php"><h2>SSFSP</h2></a>

					</div>
		 		

		 

		 		<div class="whole down">
					<div class="tab">
					<div class="blank">
						<label class="blank"></label>
					</div>
				<?php
					$db=mysqli_connect('localhost','root','','projects');
					$res=mysqli_query($db,'select * from totalstaff');

					while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
					{
						?>
					  <button class="tablinks" onclick="openCity(event, '<?php echo $row['name'];?>')" id="defaultOpen"><?php echo $row['name'] ;?></button>

					<?php 
					}
					 ?>
					 
					 
					</div>
				<div class="stick">

						<?php
					$db=mysqli_connect('localhost','root','','projects');
					$res=mysqli_query($db,'SELECT * FROM totalstaff');

					while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
					{
							
						?>
				
						<div id="<?php echo $row['name'];?>" class="tabcontent">
							<div class="image">
							<img src="<?php echo $row["image"]; ?>" height="120" width = "100" >
						</div>
							
							<div class="name">
							<?php	
						echo "Name :" . $row['name']."<br><br>";
							?>
						</div>
						<div class="dept">
							<?php
							echo "Department :". $row['department'] . "<br><br>";
						
							?>
						</div>
							
							<div class="email">
								<?php
								
						echo "Specialization :  " . $row['specialization'] . "<br><br>";
						?>
					</div>
					<div class="gender">
						<?php
						echo "Designation :  " .  $row['designation'] . "<br><br>";
						?>
					</div>
					<div class="exp">
						<?php
						echo "Experience : " . $row['experience'] . "<br><br>";
						?>
					</div>
					<div class="qualification">
						<?php
						echo "Qualification : " .$row['qualification'] . "<br><br><br><br><br>";

						
					
					
						?>
					</div>
						<?php
						$id=$row['dept'];
						?>
						<div style="display: inline-block;margin: -30px 0px 0px -170px;">
						<button class="contact" ><?php echo "<td><a href=\"new2.php?id=$id\">Team</a></td>";?></button>
						<button class="contact"><?php echo "<td><a href=\"new2a.php?id=$id\">Individual</a></td>";?></button>
						</div>

						</div>
						<?php 
					}
					 ?>
					 

				</div>

						


						
						
				</div>
				

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

			function openCity(evt, cityName) {
			  var i, tabcontent, tablinks;
			  tabcontent = document.getElementsByClassName("tabcontent");
			  for (i = 0; i < tabcontent.length; i++) {
			    tabcontent[i].style.display = "none";
			  }
			  tablinks = document.getElementsByClassName("tablinks");
			  for (i = 0; i < tablinks.length; i++) {
			    tablinks[i].className = tablinks[i].className.replace(" active", "");
			  }
			  document.getElementById(cityName).style.display = "block";
			  evt.currentTarget.className += " active";
			}

			// Get the element with id="defaultOpen" and click on it
			document.getElementById("defaultOpen").click();
		</script>

	</body>


</html>