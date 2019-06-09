<!DOCTYPE html>
<?php include('server.php');

		$userprofile = $_SESSION['staff'];
	if($userprofile==true)
	{

	}

	else{
		header('location:home.php');
	}

?>
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
				  <a href="s0.php">Home</a>
				  
				  <a href="interface.php">Staff Login</a>
				  
				  <a href="index.php?logout='1'">Logout</a>
				</div>
				
					<button class="openbtn" onclick="openNav()">=</button> 
			

					


				
					<div class="whole_top_right" id="myTopnav">
						<a class="top_rigt"></a><a class="top_right" href="new.php">HOME</a><a class="top_right" href="interface.php">STAFFLOGIN</a><a class="top_right" href="s0.php">STAFFCHECKIN</a><a class="top_right" href="index.php?logout='1'">LOGOUT</a>  
							
							
			 				 </a>
					</div>

	 				<div class="heading">
					
						<a href="s0.php" style="color:rgb(255,0,140); text-decoration: none;"><h2>SSFSP</h2></a>

					</div>
		 		

		 



	<?php

	$db=mysqli_connect('localhost','root','','projects');
	$idno=$_SESSION['id'];
	$res=mysqli_query($db,"select * from totalstaff where dept='$idno'");
		while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		?>
		<div class="image">
							<img src="<?php echo $row["image"]; ?>" height="170" width = "150" >
						</div>
		<div class="content">
			<?php
		echo "Name: " . $row['name']."<br>";


		echo "Department: " .  $row['department']."<br><br>";

		echo "Batch 1: "."<br>";

		echo "Title of project: " .  $row['title1'] . "<br>";

		echo "Student: " . $row['name1'] . "(" . $row['student1'] . ")" ."<br>";
		
		echo "Partner: " . $row['name1a'] . "(" . $row['student1a'] . ")" ."<br><br>";

		echo "Batch 2: "."<br>";

		echo "Title of project :" .  $row['title2'] . "<br>";

		echo "Student: " .  $row['name2'] . "(" . $row['student2'] . ")" ."<br>";

		echo "Partner: " . $row['name2a'] . "(" . $row['student2a'] . ")" ."<br><br>";

		echo "Batch 3: "."<br>";

		echo "Title of project: " .  $row['title3'] . "<br>";

		echo "Student: " . $row['name3'] . "(" . $row['student3'] . ")" ."<br>";

		echo "Partner: " . $row['name3a'] . "(" . $row['student3a'] . ")" ."<br><br>";

		echo "Batch 4: "."<br>";

		echo "Title of project: " .  $row['title4'] . "<br>";

		echo "Student: " . $row['name4'] ."(" . $row['student4'] . ")" ."<br>";;

		echo "Partner: " . $row['name4a'] . "(" . $row['student4a'] . ")" ."<br><br>";

		echo "Batch 5: "."<br>";

		echo "Title of project: " .  $row['title5'] . "<br>";

		echo "Student: " . $row['name5'] . "(" . $row['student5'] . ")" ."<br>";

		echo "Partner: " . $row['name5a'] ."(" . $row['student5a'] . ")" ."<br>";
		

		
		}

	?>
	

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
</script>
</body>
</html>