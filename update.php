<?php 
	require_once('./db.php');

	//template
	$sql = "UPDATE users SET user_name = ?, user_email = ?, user_password = ? WHERE user_id = ?";

	// prepare statement
	$stmt = mysqli_stmt_init($conn);

	// preparation
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		echo "FAILED";
	}
	else
	{
		$user_name     ='Maria Bose';
		$user_email    ='mizan@gmail.com';
		$user_password ='admin1234';
		$user_id       =3;
		// bind parameters
		mysqli_stmt_bind_param($stmt,'sssi',$user_name,$user_email,$user_password,$user_id);
		mysqli_stmt_execute($stmt);
	}
 ?>