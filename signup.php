<?php
// Create connection
$conn = new mysqli("localhost","root",'',"panacea");// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "connected";
}
if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['phone_num']) &&isset($_POST['password'])){
	
    $name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phones = $_POST['phone_num'];
	$allergy = $_POST['allergy'];
	$blood_group = $_POST['blood_group'];
	$date = $_POST['dob'];
	$city = $_POST['city'];
	$latitude = $_POST['lat'];
	$longitude = $_POST['lon'];
	$sql = "INSERT INTO user_info (Name, Username, Password, Phone, Allergy, BloodGroup,DOB,City,Lattitude,Longitude)
	VALUES ('$name', '$username', '$password','$phones','$allergy','$blood_group','$date','$city','$latitude','$longitude')";
}
if ($name!="" && $username !="" && $password!= "" && $conn->query($sql) === TRUE) {
    echo "New record created successfully"."<br><br>";
	echo '<a href = "index.html"><input type = "button" value = "Login"></a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>