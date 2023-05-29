<?php

	$conn = mysqli_connect("localhost", "username", "password", "database_name");

	$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);

	if(empty($full_name) || empty($email) || empty($gender)){
		echo "Please fill in all the fields.";
	}else{
		$insert_query = "INSERT INTO students (full_name, email, gender) VALUES ('$full_name', '$email', '$gender')";
		$insert_result = mysqli_query($conn, $insert_query);

		if($insert_result){
			echo "Data inserted successfully!";
		}else{
			echo "Error inserting data: ".mysqli_error($conn);
		}
	}
	mysqli_close($conn);
?>