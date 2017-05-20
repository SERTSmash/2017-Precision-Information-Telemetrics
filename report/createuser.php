<?php
include('session.php');
	
if($_SERVER["REQUEST_METHOD"] == "POST") {
	//Variables
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']); 
	//$username = 'test';
	//$password = 'test';
	echo $password;
	echo "<br>";
	//Hash password before storing
	$password_hash = password_hash($password, PASSWORD_DEFAULT);
	echo $password_hash;
	echo "<br>";
	$password_hash = mysqli_real_escape_string($db, $password_hash);
	echo $password_hash;
	
	$sql = "INSERT INTO users (
		username,
		password_hash
		) Values (
		'$username',
		'$password_hash'
	)";
	if (mysqli_query($db, $sql)) {
    	echo "New record created successfully";
	} else {
		echo "Error: " . $sql . mysqli_error($db);
	}

}
?>