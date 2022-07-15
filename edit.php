<?php
// disable error reporting
error_reporting(E_ERROR|E_PARSE);
// including the database connection file
include_once("db/config.php");
require('index.php');

if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET firstName='$firstName',lastName='$lastName',email='$email',password='$password',url='$url',phone='$phone',address='$address',city='$city',state='$state',country='$country',about='$about' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$firstName = $res['firstName'];
	$lastName = $res['lastName'];
	$email = $res['email'];
	$password = $res['password'];
	$url = $res['url'];
	$phone = $res['phone'];
	$address = $res['address'];
	$city = $res['city'];
	$state = $res['state'];
	$country = $res['country'];
	$about = $res['about'];
	$profilePicture = $res['profilePicture'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstName" value="<?php echo $firstName;?>"></td>
			</tr>
			<tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastName" value="<?php echo $lastName;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $password;?>"></td>
			</tr>
			<tr> 
				<td>URL</td>
				<td><input type="text" name="url" value="<?php echo $url;?>"></td>
			</tr>
			<tr> 
				<td>Phone</td>
				<td><input type="text" name="phone" value="<?php echo $phone;?>"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr> 
				<td>City</td>
				<td><input type="text" name="city" value="<?php echo $city;?>"></td>
			</tr>
			<tr> 
				<td>State</td>
				<td><input type="text" name="state" value="<?php echo $state;?>"></td>
			</tr>
			<tr> 
				<td>Country</td>
				<td><input type="text" name="country" value="<?php echo $country;?>"></td>
			</tr>
			<tr> 
				<td>About Me</td>
				<td><input type="text" name="about" value="<?php echo $about;?>"></td>
			</tr>
			<tr> 
				<td>Profile Picture</td>
				<td><input type="file" name="profilePicture" value="<?php echo $profilePicture;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update">
                <input type="button" value="Go Back" onClick="document.location.href='index.php'"/></td>
            </tr>
		</table>
	</form>
</body>
</html>
