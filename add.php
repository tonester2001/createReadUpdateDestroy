<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$firstName = mysqli_real_escape_string($mysqli, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($mysqli, $_POST['lastName']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$url = mysqli_real_escape_string($mysqli, $_POST['url']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$address = mysqli_real_escape_string($mysqli, $_POST['address']);
	$city = mysqli_real_escape_string($mysqli, $_POST['city']);
	$state = mysqli_real_escape_string($mysqli, $_POST['state']);
	$country = mysqli_real_escape_string($mysqli, $_POST['country']);
	$about = mysqli_real_escape_string($mysqli, $_POST['about']);
	$profilePicture = mysqli_real_escape_string($mysqli, $_POST['profilePicture']);
		
	// checking empty fields
	if(empty($firstName) || empty($lastName) || empty($email)) {
				
		if(empty($firstName)) {
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if(empty($lastName)) {
			echo "<font color='red'>Last Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO users(firstName,lastName,email,password,url,phone,address,city,state,country,about) VALUES('$firstName','$lastName','$email','$password','$url','$phone','$address','$city','$state','$country','$about')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
