<?php
session_start();
$errors = array();


$student="";


$db = mysqli_connect('localhost','root','','projects');

if(isset($_POST['accept'])) {

	
	$student1= mysqli_real_escape_string($db, $_POST['acceptedemail1']);
	$student2= mysqli_real_escape_string($db, $_POST['acceptedemail2']);
	$name1= mysqli_real_escape_string($db, $_POST['name1']);

	$name2= mysqli_real_escape_string($db, $_POST['name2']);

	$title2= mysqli_real_escape_string($db, $_POST['title2']);


	if(empty($student1)) { echo '<script type="text/javascript"> alert("rollno 1 is required") </script>'; array_push($errors,".");}
	if(empty($student2)) { echo '<script type="text/javascript"> alert("rollno 2 is required") </script>'; array_push($errors,".");}
		if(empty($name1)) { echo '<script type="text/javascript"> alert("name 1 is required") </script>'; array_push($errors,".");}
			if(empty($name2)) { echo '<script type="text/javascript"> alert("name 2 is required") </script>'; array_push($errors,".");}


	if(empty($title2)) { echo '<script type="text/javascript"> alert("title is required") </script>'; array_push($errors,".");}
	if($student1 == $student2) { echo '<script type="text/javascript"> alert("different num is required") </script>'; array_push($errors,".");}

	$user_check_query1 = "SELECT * FROM registered WHERE student1='$student1' LIMIT 1 ";
	$result1= mysqli_query($db,$user_check_query1);
	$user1 = mysqli_fetch_assoc($result1);

	$user_check_query2 = "SELECT * FROM registered WHERE student1='$student2' LIMIT 1 ";
	$result2= mysqli_query($db,$user_check_query2);
	$user2 = mysqli_fetch_assoc($result2);

	if($user1) {

		if($user1['student1'] === $student1) {
			 echo '<script type="text/javascript"> alert("Register Number 1 already Exists") </script>';
			 array_push($errors,"."); 
		}
	}


	elseif($user2) {

		if($user2['student1'] === $student2) {
			 echo '<script type="text/javascript"> alert("Register Number 2 already Exists") </script>'; 
			 array_push($errors,"."); 
		}
	}
	

	elseif(count($errors) == 0) {
						
						$duplicate= mysqli_real_escape_string($db, $_POST['duplicate']);

						$d=$duplicate;
					$res=mysqli_query($db,"select * from totalstaff where dept='$d'");
					while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
				{


					if($row['student1']==NULL){
						$query = "UPDATE totalstaff SET student1 = '$student1',student1a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query1 = "UPDATE totalstaff SET title1 = '$title2' where dept='$duplicate'";
					   mysqli_query($db, $query1);
						$query2 = "UPDATE totalstaff SET name1 = '$name1' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query3 = "UPDATE totalstaff SET name1a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query3);

					   	$que = "INSERT INTO registered (student1, teachers) VALUES ('$student1' , '$duplicate')";
						mysqli_query($db, $que);
					   	$que1 = "INSERT INTO registered (student1, teachers) VALUES ('$student2' , '$duplicate')";
						mysqli_query($db, $que1);

					   break;


					}
					elseif($row['student2']==NULL)
					{
						$query = "UPDATE totalstaff SET student2 = '$student1',student2a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query1 = "UPDATE totalstaff SET title2 = '$title2' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					   $query2 = "UPDATE totalstaff SET name2 = '$name1' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query3 = "UPDATE totalstaff SET name2a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query3);

					      	$que = "INSERT INTO registered (student1,  teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					   	$que1 = "INSERT INTO registered (student1, teachers) VALUES ('$student2' , '$duplicate')";
						mysqli_query($db, $que1);
					   break;

					}
					elseif($row['student3']==NULL)
					{
						$query = "UPDATE totalstaff SET student3 = '$student1',student3a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query1 = "UPDATE totalstaff SET title3 = '$title2' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					   $query2 = "UPDATE totalstaff SET name3 = '$name1' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query3 = "UPDATE totalstaff SET name3a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query3);

					      	$que = "INSERT INTO registered (student1,  teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					  	$que1 = "INSERT INTO registered (student1, teachers) VALUES ('$student2' , '$duplicate')";
						mysqli_query($db, $que1);
					   break;

					}
					elseif($row['student4']==NULL)
					{
						$query = "UPDATE totalstaff SET student4 = '$student1',student4a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query1 = "UPDATE totalstaff SET title4 = '$title2' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					   $query2 = "UPDATE totalstaff SET name4 = '$name1' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query3 = "UPDATE totalstaff SET name4a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query3);

					      	$que = "INSERT INTO registered (student1,  teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					   	$que1 = "INSERT INTO registered (student1, teachers) VALUES ('$student2' , '$duplicate')";
						mysqli_query($db, $que1);
					   break;


					}
					elseif($row['student5']==NULL)
					{
						$query = "UPDATE totalstaff SET student5 = '$student1',student5a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query1 = "UPDATE totalstaff SET title5 = '$title2' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					   $query2 = "UPDATE totalstaff SET name5 = '$name1' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query3 = "UPDATE totalstaff SET name5a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query3);

					      	$que = "INSERT INTO registered (student1,  teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					   	$que1 = "INSERT INTO registered (student1, teachers) VALUES ('$student2' , '$duplicate')";
						mysqli_query($db, $que1);
					   break;


					}
					else
					{
						echo '<script type="text/javascript"> alert("staff filled") </script>';

					}


				}



		}
}




//individual


if(isset($_POST['accept1'])) {

	
	$student1= mysqli_real_escape_string($db, $_POST['acceptedemail1']);
	$student2= mysqli_real_escape_string($db, $_POST['acceptedemail2']);

	$name1= mysqli_real_escape_string($db, $_POST['name1']);
	$name2= mysqli_real_escape_string($db, $_POST['name2']);
	$title2a= mysqli_real_escape_string($db, $_POST['title2a']);

	if(empty($student1)) { echo '<script type="text/javascript"> alert("number 1 is required") </script>'; array_push($errors,".");}
	if(empty($student2)) { echo '<script type="text/javascript"> alert("Name 2 is required") </script>'; array_push($errors,".");}
	if(empty($name1)) { echo '<script type="text/javascript"> alert("Name 1 is required") </script>'; array_push($errors,".");}
	if($student1 == $student2) { echo '<script type="text/javascript"> alert("different num is required") </script>'; array_push($errors,".");}

	$user_check_query1 = "SELECT * FROM registered WHERE student1='$student1' LIMIT 1 ";
	$result1= mysqli_query($db,$user_check_query1);
	$user1 = mysqli_fetch_assoc($result1);

	$user_check_query2 = "SELECT * FROM registered WHERE student1='$student2' LIMIT 1 ";
	$result2= mysqli_query($db,$user_check_query2);
	$user2 = mysqli_fetch_assoc($result2);

	if($user1) {

		if($user1['student1'] === $student1) {
			 echo '<script type="text/javascript"> alert("rollno Number 1 already Exists") </script>';
			 array_push($errors,"."); 
		}
	}


	/*elseif($user2) {

		if($user2['student1'] === $student2) {
			 echo '<script type="text/javascript"> alert("Register Number 2 already Exists") </script>'; 
			 array_push($errors,"."); 
		}
	}*/
	

	elseif(count($errors) == 0) {
						
						$duplicate= mysqli_real_escape_string($db, $_POST['duplicate']);

						$d=$duplicate;
					$res=mysqli_query($db,"select * from totalstaff where dept='$d'");
					while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
				{


					if($row['student1']==NULL){
						$query = "UPDATE totalstaff SET student1 = '$student1',student1a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					   $query2 = "UPDATE totalstaff SET name1 = '$name1',name1a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query1 = "UPDATE totalstaff SET title1 = '$title2a' where dept='$duplicate'";
					   mysqli_query($db, $query1);


					   	$que = "INSERT INTO registered (student1, teachers) VALUES ('$student1' , '$duplicate')";
						mysqli_query($db, $que);
					   	
					   break;


					}
					elseif($row['student2']==NULL)
					{
						$query = "UPDATE totalstaff SET student2 = '$student1',student2a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					    $query2 = "UPDATE totalstaff SET name2 = '$name1',name2a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query1 = "UPDATE totalstaff SET title2 = '$title2a' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					      	$que = "INSERT INTO registered (student1, teachers) VALUES ('$student1' , '$duplicate')";
						mysqli_query($db, $que);
					   
					   break;

					}
					elseif($row['student3']==NULL)
					{
						$query = "UPDATE totalstaff SET student3 = '$student1',student3a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					    $query2 = "UPDATE totalstaff SET name3 = '$name1',name3a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query1 = "UPDATE totalstaff SET title3 = '$title2a' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					      	$que = "INSERT INTO registered (student1,  teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					  
					   break;

					}
					elseif($row['student4']==NULL)
					{
						$query = "UPDATE totalstaff SET student4 = '$student1',student4a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					    $query2 = "UPDATE totalstaff SET name4 = '$name1',name4a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query1 = "UPDATE totalstaff SET title4 = '$title2a' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					      	$que = "INSERT INTO registered (student1, teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					   
					   break;


					}
					elseif($row['student5']==NULL)
					{
						$query = "UPDATE totalstaff SET student5 = '$student1',student5a = '$student2' where dept='$duplicate'";
					   mysqli_query($db, $query);
					    $query2 = "UPDATE totalstaff SET name5 = '$name1',name5a = '$name2' where dept='$duplicate'";
					   mysqli_query($db, $query2);
					   $query1 = "UPDATE totalstaff SET title5 = '$title2a' where dept='$duplicate'";
					   mysqli_query($db, $query1);
					      	$que = "INSERT INTO registered (student1, teachers) VALUES ('$student1'  , '$duplicate')";
						mysqli_query($db, $que);
					   
					   break;


					}
					else
					{
						echo '<script type="text/javascript"> alert("staff filled") </script>';

					}


				}



		}
}






$username="";
$email="";
$errors = array();

$db = mysqli_connect('localhost','root','','projects');

if(isset($_POST['registered_user'])) {

	$username= mysqli_real_escape_string($db, $_POST['name']);
	$email= mysqli_real_escape_string($db, $_POST['email']);
	$password1= mysqli_real_escape_string($db,$_POST['regno']);
	$password2= mysqli_real_escape_string($db,$_POST['dateofbirth']);


	if(empty($username)) { echo '<script type="text/javascript"> alert("Name is required") </script>'; array_push($errors,".");}
	if(empty($email)) {echo '<script type="text/javascript"> alert("Email ID is Required") </script>';  array_push($errors,".");}
	if(empty($password1)) {echo '<script type="text/javascript"> alert("Register Number is reqired") </script>';  array_push($errors,".");}
	if(empty($password2)) {echo '<script type="text/javascript"> alert("Date of Birth is reqired") </script>';  array_push($errors,".");}
	
	$user_check_query = "SELECT * FROM users WHERE regno='$password1' AND email='$email' LIMIT 1 ";
	$result= mysqli_query($db,$user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user) {

		if($user['regno'] === $password1) {
			 echo '<script type="text/javascript"> alert("Register Number already Exists") </script>';  
			 array_push($errors,".");
		}

		if($user['email'] === $email) {
			echo '<script type="text/javascript"> alert("Register Number is reqired") </script>';  
			array_push($errors,".");

		}

	}

	if(count($errors) == 0) {
		

		$query = "INSERT INTO users (name, email, regno, dateofbirth) VALUES ('$username' , '$email' , '$password1' , '$password2')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "yeah u r  conn";
		header('location: start2.php');

	}

}


//login



if (isset($_POST['login_user'])) {
  $username = $_POST['regno'];
  $password = $_POST['dateofbirth'];

  if (empty($username)) {
  	 echo '<script type="text/javascript"> alert("Register Number Required") </script>';
  	array_push($errors, ".");
  }
  if (empty($password)) {
  	array_push($errors, ".");
  	 echo '<script type="text/javascript"> alert("Date of Birth Required") </script>';
  }

  if (count($errors) == 0) {
  	
  	
  	$query = "SELECT * FROM users WHERE regno='$username' AND dateofbirth='$password'";
  	$results = mysqli_query($db, $query);
  	$numi = mysqli_num_rows($results);
  	if ($numi != 0) {
  	  $_SESSION['regno'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: new.php');
  	}else {
  		 echo '<script type="text/javascript"> alert("Incorrect Details") </script>';
  		array_push($errors, ".");

  	}
  }

}




//staff
if(isset($_POST['registered'])) {

	$name= mysqli_real_escape_string($db, $_POST['name']);
	$image= mysqli_real_escape_string($db, $_POST['image']);
	$designation= mysqli_real_escape_string($db, $_POST['designation']);
	$department= mysqli_real_escape_string($db, $_POST['department']);
		$email= mysqli_real_escape_string($db, $_POST['email']);
	$qualification= mysqli_real_escape_string($db, $_POST['qualification']);
	$experience= mysqli_real_escape_string($db, $_POST['experience']);
	$specialization= mysqli_real_escape_string($db, $_POST['specialization']);
	
		
	$subjects= mysqli_real_escape_string($db, $_POST['subjects']);
		$dno= $_POST['dno'];
	

	if(empty($name)) { echo '<script type="text/javascript"> alert("Name is required") </script>'; array_push($errors,".");}
	if(empty($image)) {echo '<script type="text/javascript"> alert("Image Field is Required") </script>';  array_push($errors,".");}
	if(empty($designation)) {echo '<script type="text/javascript"> alert("Enter Designation") </script>';  array_push($errors,".");}
	if(empty($department)) {echo '<script type="text/javascript"> alert("Enter Department") </script>';  array_push($errors,".");}
		if(empty($email)) { echo '<script type="text/javascript"> alert("Email ID is required") </script>'; array_push($errors,".");}
	if(empty($qualification)) {echo '<script type="text/javascript"> alert("Enter Your Qualification") </script>';  array_push($errors,".");}
	if(empty($experience)) {echo '<script type="text/javascript"> alert("Enter Your Experience ") </script>';  array_push($errors,".");}
	if(empty($specialization)) {echo '<script type="text/javascript"> alert("Enter specialization") </script>';  array_push($errors,".");}
		
	if(empty($subjects)) {echo '<script type="text/javascript"> alert("Enter Subjects Handled") </script>';  array_push($errors,".");}
	
	if(empty($dno)) {echo '<script type="text/javascript"> alert("ID Number is reqired") </script>';  array_push($errors,".");}
	
	$user_check_query = "SELECT * FROM totalstaff WHERE dept='$dno' AND email='$email' LIMIT 1 ";
	$result= mysqli_query($db,$user_check_query);
	$user = mysqli_fetch_assoc($result);

	if($user) {

		if($user['dept'] === $dno) {
			 echo '<script type="text/javascript"> alert(" Number already Exists") </script>';  
			 array_push($errors,".");
		}

		if($user['email'] === $email) {
			echo '<script type="text/javascript"> alert("mail exists") </script>';  
			array_push($errors,".");

		}

	}

	if(count($errors) == 0) {
		

		$query = "INSERT INTO totalstaff (name, email, designation,department,image,qualification,experience,specialization,theorysubjects,dept) VALUES ('$name' , '$email' , '$designation' , '$department' , '$image','$qualification' , '$experience' , '$specialization','$subjects'  ,'$dno')";
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "yeah u r  conn";
		header('location: interface.php');

	}

}


//find

if(isset($_POST['find'])){
	$idno=$_POST['idno'];
	$_SESSION['id']=$idno;

	  if (empty($idno)) {
  	array_push($errors, ".");
  	 echo '<script type="text/javascript"> alert(" Idno is Required") </script>';
  }

if(count($errors)==0){

	$w=mysqli_query($db,"select * from totalstaff where dept='$idno' ");
	$w1=mysqli_num_rows($w);
	if($w1!=0){
		header('location:s1.php');

	}
	else{
		echo '<script>alert("no such idno")</script>';
	}
}

}

if(isset($_POST['login1'])){
	$regno=$_POST['regno'];
	$pass=$_POST['dateofbirth'];
	
 if (empty($regno)) {
  	array_push($errors, ".");
  	 echo '<script type="text/javascript"> alert(" username is Required") </script>';
  }

 if (empty($pass)) {
  	array_push($errors, ".");
  	 echo '<script type="text/javascript"> alert(" password is Required") </script>';
  }
	
	if(count($errors)==0){
		if(($regno=='sathyabama')&&($pass=='university')){
			$_SESSION['staff'] = $regno;
			header('location:interface.php');
			
			}
		else{
			echo '<script type="text/javascript"> alert(" password is Required") </script>';
			header('location:staff1.php');
		}
	}
}

?>