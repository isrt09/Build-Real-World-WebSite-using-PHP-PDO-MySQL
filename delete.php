<?php 
	require_once('./db.php');

	//template
	$sql = "DELETE FROM users WHERE user_id = ? ";

	// creating prepare statement
	$stmt = mysqli_stmt_init($conn);
	//preparation
	if(!mysqli_stmt_prepare($stmt,$sql))
	{
		echo "FAILED";
	}
	else
	{
		//bind parameters
		$user_id = 1;
		mysqli_stmt_bind_param($stmt,'i',$user_id);
		mysqli_stmt_execute($stmt);
	}
 ?>